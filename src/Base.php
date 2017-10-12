<?php
namespace TheReference\Robo\Task\Lando;

use Robo\Contract\CommandInterface;
use Robo\Exception\TaskException;
use Robo\Task\BaseTask;

abstract class Base extends BaseTask implements CommandInterface, LandoTaskInterface
{
  use \Robo\Common\ExecOneCommand;
    use RunCommandTrait;

  /**
   * @var string
   */
  protected $command = '';

  /**
   * @var boolean
   */
  protected $built = false;

  /**
   * Action to use
   *
   * @var string
   */
  protected $action = '';

  /**
   * @var boolean
   */
  protected $yes = true;

  /**
   * @param null|string $pathToLando
   *
   * @throws \Robo\Exception\TaskException
   */
  public function __construct($pathToLando = null)
  {
    $this->command = $pathToLando;
    if (!$this->command) {
      $this->command = $this->findExecutable('lando');
    }
    if (!$this->command) {
      throw new TaskException(__CLASS__, "No lando installation could be found.");
    }
  }

  /**
   * @return $this
   */
  public function yes($yes = true)
  {
    $this->yes = $yes;
    return $this;
  }

  /**
   * Copy class fields into command options as directed.
   */
  public function buildCommand()
  {
    if ($this->yes) {
      $this->option('--yes');
    }
  }

  /**
   * {@inheritdoc}
   */
  public function getCommand()
  {
    if (!$this->built) {
      $this->buildCommand();
      $this->built = true;
    }
    return "{$this->command} {$this->action}{$this->arguments}";
  }
}
