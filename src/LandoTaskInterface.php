<?php

namespace TheReference\Robo\Task\Lando;

/**
 * Task that implements this interface can be using the RunCommandTrait in order
 * to decrease the amount of duplicated code.
 *
 * @package TheReference\Robo\Task\Lando
 */
interface LandoTaskInterface {

  /**
   * Get the task information.
   *
   * This method is used for displaying the task info when calling the task in
   * Robo.
   * A placeholder {command} can be used for displaying the actual command.
   *
   * @return string
   */
  public function getTaskInfo();

}
