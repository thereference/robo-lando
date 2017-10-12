<?php
namespace TheReference\Robo\Task\Lando;

/**
 * Lando Share
 *
 * ``` php
 * <?php
 * // simple execution
 * $this->taskLandoShare()->url("http://localhost:32785")->run();
 * ?>
 * ```
 */
class LandoShare extends Base {

  protected $action = "share";
  protected $yes = false;

  /**
   * @return $this
   */
  public function url($url)
  {
    if (!empty($url)) {
      $this->option("--url", $url);
    }
    return $this;
  }

  public function getTaskInfo() {
    return 'Publicly exposing a local Lando url: {command}';
  }

}
