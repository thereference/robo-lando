<?php

use League\Container\ContainerAwareInterface;
use League\Container\ContainerAwareTrait;
use Symfony\Component\Console\Output\NullOutput;
use Robo\TaskAccessor;
use Robo\Robo;

class LandoLogsTest extends \PHPUnit_Framework_TestCase implements ContainerAwareInterface
{
  use \TheReference\Robo\Task\Lando\loadTasks;
  use TaskAccessor;
  use ContainerAwareTrait;

  protected $executable;

  /**
   * Set up the Robo container so that we can create tasks in our tests.
   */
  function setup()
  {
    $container = Robo::createDefaultContainer(null, new NullOutput());
    $this->setContainer($container);
    $executable_finder = new \Symfony\Component\Process\ExecutableFinder();
    $this->executable = $executable_finder->find("lando");
  }

  /**
   * Scaffold the collection builder
   */
  public function collectionBuilder()
  {
    $emptyRobofile = new \Robo\Tasks;
    return $this->getContainer()->get('collectionBuilder', [$emptyRobofile]);
  }

  public function testYesIsNotAnOption()
  {
    $command = $this->taskLandoLogs()->getCommand();
    $this->assertEquals($this->executable . ' logs', $command);
  }

  public function testApp()
  {
    $command = $this->taskLandoLogs()->application("my-app")->getCommand();
    $this->assertEquals($this->executable . ' logs my-app', $command);
  }

  public function testTimeStampAndFollow()
  {
    $command = $this->taskLandoLogs()->timestamps()->follow()->getCommand();
    $this->assertEquals($this->executable . ' logs --timestamps --follow', $command);
  }

  public function testShowMultipleServices()
  {
    $command = $this->taskLandoLogs()->services(array("database", "cache"))->getCommand();
    $this->assertEquals($this->executable . ' logs --services database --services cache', $command);
  }

}
