<?php
namespace TheReference\Robo\Task\Lando;

use Robo\Contract\CommandInterface;

/**
 * Lando Logs
 *
 * ``` php
 * <?php
 * // simple execution
 * $this->taskLandoLogs()->follow()->timestamps()->application("my-app")->run();
 * ?>
 * ```
 */
class LandoLogs extends Base {

  use ApplicationTrait;
  use ServicesTrait;

  protected $action = "logs";
  protected $yes = false;

  /**
   * @return $this
   */
  public function follow($follow = true)
  {
    if ($follow) {
      $this->option('--follow');
    }
    return $this;
  }

  /**
   * @return $this
   */
  public function timestamps($timestamps = true)
  {
    if ($timestamps) {
      $this->option('--timestamps');
    }
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getTaskInfo()
  {
    return 'Printing out lando logs: {command}';
  }

}
