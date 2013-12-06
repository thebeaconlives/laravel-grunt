<?php namespace TheBeaconLives\LaravelGrunt;

use \Mockery as m;
use \TheBeaconLives\LaravelGrunt\Grunt\Gruntfile;
use \TheBeaconLives\LaravelGrunt\Grunt\GruntGenerator;

class GruntGeneratorTest extends  \PHPUnit_Framework_TestCase {

	public function setUp()
	{
		// Mock the filesyste, config and gruntfile
		$this->config = m::mock('Illuminate\Config\Repository');
		$this->gruntfile = m::mock('TheBeaconLives\LaravelGrunt\Grunt\Gruntfile');
		$this->filesystem = m::mock('Illuminate\Filesystem\Filesystem');

		// Create a new GruntGenerator
		$this->generator = new GruntGenerator($this->filesystem, $this->gruntfile, $this->config);
	}

	public function tearDown()
	{
		m::close();
	}

	public function testCreatesFolder()
	{
		$this->config->shouldReceive('get')->andReturn('foo');
		$this->filesystem->shouldReceive('exists')->andReturn(false);
		$this->filesystem->shouldReceive('makeDirectory')->with('foo', 0777, true)->once();

		$this->generator->createAssetsFolder('foo');
	}

	public function testNotCreateFolderIfExists()
	{
		$this->config->shouldReceive('get')->andReturn('foo');
		$this->filesystem->shouldReceive('exists')->andReturn(true);
		$this->filesystem->shouldReceive('makeDirectory')->never();

		$this->generator->createAssetsFolder('foo');
	}

	public function testCreateGruntfile()
	{
		$this->gruntfile->shouldReceive('create')->once()->andReturn('foo');
		$this->generator->createGruntfile(array());
	}

	public function testCreatePackagefile()
	{
		$this->filesystem->shouldReceive('put')->once()->andReturn('foo');
		$this->filesystem->shouldReceive('get')->once()->andReturn('foo');
		$this->generator->createPackagefile(array('plugin'));
	}

	public function testFilesExistReturnTrueIfExist()
	{
		$this->filesystem->shouldReceive('exists')->twice()->andReturn(false);
		$this->generator->filesExist();
	}

	public function testFileExistReturnFalseIfNotExist()
	{
		$this->filesystem->shouldReceive('exists')->once()->andReturn(true);
		$this->generator->filesExist();
	}

	public function testAddsNodeModulesToGitignoreFile()
	{
		$this->filesystem->shouldReceive('append')->once()->andReturn('foo');
		$this->generator->addToGitingnore('path', 'folder');
	}



}
