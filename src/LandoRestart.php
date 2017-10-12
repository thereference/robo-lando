<?php
namespace TheReference\Robo\Task\Lando;

/**
 * Lando Restart
 *
 * ``` php
 * <?php
 * // simple execution
 * $this->taskLandoRestart()->application("my-app")->run();
 * ?>
 * ```
 */
class LandoRestart extends Base {

  use ApplicationTrait;

  protected $action = "restart";
  protected $yes = false;

  public function getTaskInfo() {
    return 'Stopping and starting Lando application: {command}';
  }

}
