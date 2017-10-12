<?php
namespace TheReference\Robo\Task\Lando;

/**
 * Lando Poweroff
 *
 * ``` php
 * <?php
 * // simple execution
 * $this->taskLandoPoweroff()->run();
 * ?>
 * ```
 */
class LandoPoweroff extends Base {

  protected $action = "poweroff";
  protected $yes = false;

  /**
   * {@inheritdoc}
   */
  public function getTaskInfo()
  {
    return 'Shutting down all running lando containers: {command}';
  }

}
