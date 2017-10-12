<?php
namespace TheReference\Robo\Task\Lando;

trait RunCommandTrait
{
  /**
   * {@inheritdoc}
   */
  public function run()
  {
    $command = $this->getCommand();
    $this->printTaskInfo($this->getTaskInfo(), ['command' => $command]);
    return $this->executeCommand($command);
  }
}
