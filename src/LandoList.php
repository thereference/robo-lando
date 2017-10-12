<?php
namespace TheReference\Robo\Task\Lando;

/**
 * Lando List
 *
 * ``` php
 * <?php
 * // simple execution
 * $this->taskLandoList()->run();
 * ?>
 * ```
 */
class LandoList extends Base {

  protected $action = "list";
  protected $yes = false;

  /**
   * {@inheritdoc}
   */
  public function getTaskInfo()
  {
    return 'Showing list of running lando applications: {command}';
  }

}
