<?php
namespace TheReference\Robo\Task\Lando;

/**
 * Lando Start
 *
 * ``` php
 * <?php
 * // simple execution
 * $this->taskLandoStart()->application("myapp")->run();
 * ?>
 * ```
 */
class LandoStart extends Base {

  use ApplicationTrait;

  protected $action = "start";
  protected $yes = false;

  public function getTaskInfo() {
    return 'Starting a Lando application: {command}';
  }

}
