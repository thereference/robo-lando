<?php
namespace TheReference\Robo\Task\Lando;

/**
 * Lando Config
 *
 * ``` php
 * <?php
 * // simple execution
 * $this->taskLandoConfig()->run();
 * ?>
 * ```
 */
class LandoConfig extends Base {

  protected $action = "config";
  protected $yes = false;

  /**
   * {@inheritdoc}
   */
  public function getTaskInfo()
  {
    return 'Showing Lando configuration: {command}';
  }

}
