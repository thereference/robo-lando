<?php

use League\Container\ContainerAwareInterface;
use League\Container\ContainerAwareTrait;
use Symfony\Component\Console\Output\NullOutput;
use Robo\TaskAccessor;
use Robo\Robo;

class LandoDestroyTest extends \PHPUnit_Framework_TestCase implements ContainerAwareInterface
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

  public function testYesIsAssumed()
  {
    $command = $this->taskLandoDestroy()
      ->getCommand();
    $this->assertEquals($this->executable . ' destroy --yes', $command);
  }

  public function testAbsenceOfYes()
  {
    $command = $this->taskLandoDestroy()->yes(false)->getCommand();
    $this->assertEquals($this->executable . ' destroy', $command);
  }

  public function testApplication()
  {
    $command = $this->taskLandoDestroy()->application('loremipsum')->getCommand();
    $this->assertEquals($this->executable . ' destroy loremipsum --yes', $command);
  }

}
