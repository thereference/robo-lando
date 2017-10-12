<?php
namespace TheReference\Robo\Task\Lando;


/**
 * Lando Ssh
 *
 * ``` php
 * <?php
 * // simple execution
 * $this->taskLandoSsh()->user("johndoe")->command("rm -rf /")->run();
 * ?>
 * ```
 */
class LandoSsh extends Base {

  use ApplicationTrait;

  protected $action = "ssh";
  protected $yes = false;

  /**
   * @return $this
   */
  public function service($service)
  {
    if (!empty($service)) {
      $this->arg($service);
    }
    return $this;
  }

  /**
   * @return $this
   */
  public function command($command)
  {
    if (!empty($command)) {
      $this->option("--command", $command);
    }
    return $this;
  }

  /**
   * @return $this
   */
  public function user($user)
  {
    if (!empty($user)) {
      $this->option("--user", $user);
    }
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getTaskInfo()
  {
    return 'Ssh into a specific service of a Lando app: {command}';
  }

}
