<?php
namespace TheReference\Robo\Task\Lando;

trait loadTasks {

  /**
   * @param $pathToLando
   *
   * @return \TheReference\Robo\Task\Lando\LandoInit
   */
  protected function taskLandoInit($pathToLando = NULL) {
    return $this->task(LandoInit::class, $pathToLando);
  }

  /**
   * @param $pathToLando
   *
   * @return \TheReference\Robo\Task\Lando\LandoDestroy
   */
  protected function taskLandoDestroy($pathToLando = NULL) {
    return $this->task(LandoDestroy::class, $pathToLando);
  }

  /**
   * @param $pathToLando
   *
   * @return \TheReference\Robo\Task\Lando\LandoConfig
   */
  protected function taskLandoConfig($pathToLando = NULL) {
    return $this->task(LandoConfig::class, $pathToLando);
  }

  /**
   * @param $pathToLando
   *
   * @return \TheReference\Robo\Task\Lando\LandoInfo
   */
  protected function taskLandoInfo($pathToLando = NULL) {
    return $this->task(LandoInfo::class, $pathToLando);
  }

  /**
   * @param $pathToLando
   *
   * @return \TheReference\Robo\Task\Lando\LandoList
   */
  protected function taskLandoList($pathToLando = NULL) {
    return $this->task(LandoList::class, $pathToLando);
  }

  /**
   * @param $pathToLando
   *
   * @return \TheReference\Robo\Task\Lando\LandoLogs
   */
  protected function taskLandoLogs($pathToLando = NULL) {
    return $this->task(LandoLogs::class, $pathToLando);
  }

  /**
   * @param $pathToLando
   *
   * @return \TheReference\Robo\Task\Lando\LandoPoweroff
   */
  protected function taskLandoPoweroff($pathToLando = NULL) {
    return $this->task(LandoPoweroff::class, $pathToLando);
  }

  /**
   * @param $pathToLando
   *
   * @return \TheReference\Robo\Task\Lando\LandoRebuild
   */
  protected function taskLandoRebuild($pathToLando = NULL) {
    return $this->task(LandoRebuild::class, $pathToLando);
  }

  /**
   * @param $pathToLando
   *
   * @return \TheReference\Robo\Task\Lando\LandoRestart
   */
  protected function taskLandoRestart($pathToLando = NULL) {
    return $this->task(LandoRestart::class, $pathToLando);
  }

  /**
   * @param $pathToLando
   *
   * @return \TheReference\Robo\Task\Lando\LandoShare
   */
  protected function taskLandoShare($pathToLando = NULL) {
    return $this->task(LandoShare::class, $pathToLando);
  }

  /**
   * @param $pathToLando
   *
   * @return \TheReference\Robo\Task\Lando\LandoSsh
   */
  protected function taskLandoSsh($pathToLando = NULL) {
    return $this->task(LandoSsh::class, $pathToLando);
  }
  /**
   * @param $pathToLando
   *
   * @return \TheReference\Robo\Task\Lando\LandoStart
   */
  protected function taskLandoStart($pathToLando = NULL) {
    return $this->task(LandoStart::class, $pathToLando);
  }

  /**
   * @param $pathToLando
   *
   * @return \TheReference\Robo\Task\Lando\LandoStop
   */
  protected function taskLandoStop($pathToLando = NULL) {
    return $this->task(LandoStop::class, $pathToLando);
  }

  /**
   * @param $pathToLando
   *
   * @return \TheReference\Robo\Task\Lando\LandoVersion
   */
  protected function taskLandoVersion($pathToLando = NULL) {
    return $this->task(LandoVersion::class, $pathToLando);
  }

}
