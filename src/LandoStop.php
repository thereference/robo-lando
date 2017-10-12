<?php
namespace TheReference\Robo\Task\Lando;

/**
 * Lando Stop
 *
 * ``` php
 * <?php
 * // simple execution
 * $this->taskLandoStop()->application("myapp")->run();
 * ?>
 * ```
 */
class LandoStop extends Base {

  use ApplicationTrait;

  protected $action = "stop";
  protected $yes = false;

  public function getTaskInfo() {
    return 'Stopping a Lando application: {command}';
  }

}
