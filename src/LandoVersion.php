<?php
namespace TheReference\Robo\Task\Lando;

/**
 * Lando Version
 *
 * ``` php
 * <?php
 * // simple execution
 * $this->taskLandoVersion()->run();
 * ?>
 * ```
 */
class LandoVersion extends Base {

  protected $action = "version";
  protected $yes = false;

  public function getTaskInfo() {
    return 'Printing out version of Lando: {command}';
  }

}
