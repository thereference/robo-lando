<?php
namespace TheReference\Robo\Task\Lando;

/**
 * Lando Init
 *
 * ``` php
 * <?php
 * // simple execution
 * $this->taskLandoInit()->recipe("drupal8")->webroot("./")->run();
 * ?>
 * ```
 */
class LandoInit extends Base {

  protected $action = "init";

  protected $github = '';
  protected $pantheon = '';

  /**
   * @return $this
   */
  public function github($github)
  {
    if (!empty($github)) {
      $this->arg($github);
    }
    return $this;
  }

  /**
   * @return $this
   */
  public function pantheon($pantheon)
  {
    if (!empty($pantheon)) {
      $this->arg($pantheon);
    }
    return $this;
  }

  /**
   * @return $this
   */
  public function recipe($recipe)
  {
    if (!empty($recipe)) {
      $this->option('--recipe', $recipe);
    }
    return $this;
  }

  /**
   * @return $this
   */
  public function githubAuth($github_auth)
  {
    if (!empty($github_auth)) {
      $this->option('--github-auth', $github_auth);
    }
    return $this;
  }

  /**
   * @return $this
   */
  public function githubRepo($github_repo)
  {
    if (!empty($github_repo)) {
      $this->option('--github-repo', $github_repo);
    }
    return $this;
  }

  /**
   * @return $this
   */
  public function pantheonAuth($pantheon_auth)
  {
    if (!empty($pantheon_auth)) {
      $this->option('--pantheon-auth', $pantheon_auth);
    }
    return $this;
  }

  /**
   * @return $this
   */
  public function pantheonSite($pantheon_site)
  {
    if (!empty($pantheon_site)) {
      $this->option('--pantheon-site', $pantheon_site);
    }
    return $this;
  }

  /**
   * @return $this
   */
  public function destination($destination)
  {
    if (!empty($destination)) {
      $this->option('--destination', $destination);
    }
    return $this;
  }

  /**
   * @return $this
   */
  public function webroot($webroot)
  {
    if (!empty($webroot)) {
      $this->option('--webroot', $webroot);
    }
    return $this;
  }

  /**
   * @return $this
   */
  public function name($name)
  {
    if (!empty($name)) {
      $this->option('--name', $name);
    }
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getTaskInfo()
  {
    return 'Initializing lando project: {command}';
  }

}
