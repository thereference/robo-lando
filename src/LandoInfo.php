<?php
namespace TheReference\Robo\Task\Lando;

/**
 * Lando Info
 *
 * ``` php
 * <?php
 * // simple execution
 * $this->taskLandoInfo()->application("my-app")->deep()->run();
 * ?>
 * ```
 */
class LandoInfo extends Base {

  use ApplicationTrait;

  protected $action = "info";
  protected $yes = false;

  protected $deep = false;

  /**
   * @return $this
   */
  public function deep($deep = true)
  {
    if ($deep) {
      $this->option('--deep');
    }
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getTaskInfo()
  {
    return 'Showing information of Lando application: {command}';
  }

}
