<?php
namespace TheReference\Robo\Task\Lando;

trait ServicesTrait
{
  /**
   * @return $this
   */
  public function services(array $services)
  {
    if (!empty($services)) {
      foreach($services as $service) {
        $this->option("--services", $service);
      }
    }
    return $this;
  }
}
