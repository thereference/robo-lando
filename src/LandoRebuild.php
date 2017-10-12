<?php
namespace TheReference\Robo\Task\Lando;

/**
 * Lando Rebuild
 *
 * ``` php
 * <?php
 * // simple execution
 * $this->taskLandoRebuild()->services(array("database", "appserver")->run();
 * ?>
 * ```
 */
class LandoRebuild extends Base {

  use ApplicationTrait;
  use ServicesTrait;

  protected $action = "rebuild";

  /**
   * {@inheritdoc}
   */
  public function getTaskInfo() {
    return 'Rebuilding Lando containers and tooling: {command}';
  }

}
