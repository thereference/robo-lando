<?php
namespace TheReference\Robo\Task\Lando;

trait ApplicationTrait
{
  /**
   * @return $this
   */
  public function application($application)
  {
    if (!empty($application)) {
      $this->arg($application);
    }
    return $this;
  }
}
