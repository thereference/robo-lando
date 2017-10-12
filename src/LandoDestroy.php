<?php
namespace TheReference\Robo\Task\Lando;

/**
 * Lando Destroy
 *
 * ``` php
 * <?php
 * // simple execution
 * $this->taskLandoDestroy()->application("my-app")->run();
 * ?>
 * ```
 */
class LandoDestroy extends Base {

  use ApplicationTrait;

  protected $action = "destroy";

  /**
   * {@inheritdoc}
   */
  public function getTaskInfo()
  {
    return 'Destroying lando infrastructure of application: {command}';
  }

}
