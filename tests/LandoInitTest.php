<?php

use League\Container\ContainerAwareInterface;
use League\Container\ContainerAwareTrait;
use Symfony\Component\Console\Output\NullOutput;
use Robo\TaskAccessor;
use Robo\Robo;

class LandoInitTest extends \PHPUnit_Framework_TestCase implements ContainerAwareInterface
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
    $command = $this->taskLandoInit()
      ->getCommand();
    $this->assertEquals($this->executable . ' init --yes', $command);
  }

  public function testAbsenceOfYes()
  {
    $command = $this->taskLandoInit()->yes(false)->getCommand();
    $this->assertEquals($this->executable . ' init', $command);
  }

  public function testRecipe()
  {
    $command = $this->taskLandoInit()->recipe('drupal8')->getCommand();
    $this->assertEquals($this->executable . ' init --recipe drupal8 --yes', $command);
  }

  public function testGithubAuth()
  {
    $this->assertEquals($this->executable . ' init --github-auth loremipsum --yes',
      $this->taskLandoInit()->githubAuth('loremipsum')->getCommand());
  }

  public function testGithubRepo()
  {
    $this->assertEquals($this->executable . ' init --github-repo loremipsum --yes',
      $this->taskLandoInit()->githubRepo('loremipsum')->getCommand());
  }

  public function testPantheonAuth()
  {
    $this->assertEquals($this->executable . ' init --pantheon-auth loremipsum --yes',
      $this->taskLandoInit()->pantheonAuth('loremipsum')->getCommand());
  }

  public function testPantheonSite()
  {
    $this->assertEquals($this->executable . ' init --pantheon-site loremipsum --yes',
      $this->taskLandoInit()->pantheonSite('loremipsum')->getCommand());
  }

  public function testDestination()
  {
    $this->assertEquals($this->executable . ' init --destination loremipsum --yes',
      $this->taskLandoInit()->destination('loremipsum')->getCommand());
  }

  public function testWebroot()
  {
    $this->assertEquals($this->executable . ' init --webroot loremipsum --yes',
      $this->taskLandoInit()->webroot('loremipsum')->getCommand());
  }

  public function testName()
  {
    $this->assertEquals($this->executable . ' init --name loremipsum --yes',
      $this->taskLandoInit()->name('loremipsum')->getCommand());
  }
}
