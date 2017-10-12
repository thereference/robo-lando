# Robo Lando Extension

Extension to execute Lando commands in [Robo](https://github.com/Codegyre/Robo).

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/a9d18a1b-f5b0-4e67-868b-d8bee5ab595b/mini.png)](https://insight.sensiolabs.com/projects/a9d18a1b-f5b0-4e67-868b-d8bee5ab595b) [![Build Status](https://travis-ci.org/thereference/robo-lando.svg?branch=master)](https://travis-ci.org/thereference/robo-lando) [![Latest Stable Version](https://poser.pugx.org/thereference/robo-lando/v/stable)](https://packagist.org/packages/thereference/robo-lando) [![Total Downloads](https://poser.pugx.org/thereference/robo-lando/downloads)](https://packagist.org/packages/thereference/robo-lando) [![Latest Unstable Version](https://poser.pugx.org/thereference/robo-lando/v/unstable)](https://packagist.org/packages/thereference/robo-lando) [![License](https://poser.pugx.org/thereference/robo-lando/license)](https://packagist.org/packages/thereference/robo-lando)

Runs Lando commands in stack. You can define global options for all commands (like Lando init).

The option -y assumed by default but can be overridden on calls to `exec()` by passing `false` as the second parameter.

## Table of contents

- [Versions](#versions)
- [Installation](#installation)
- [Testing](#testing)
- [Usage](#usage)
- [Examples](#examples)

## Installation

### Versions

- `~1.0`: Robo >= 1.0.0-RC1

Add `"thereference/robo-lando": "~1"` to your composer.json:

```json
    {
        "require-dev": {
            "thereference/robo-lando": "~1"
        }
    }
```

Execute `composer update`.

## Testing

`composer test`

## Usage

Use the trait (according to your used version) in your RoboFile:

```php
class RoboFile extends \Robo\Tasks
{
    // ~1 for Robo >=1.0.0-RC1
    use \TheReference\Robo\Task\Lando\loadTasks;

    //...
}
```

## Examples

### Show Configuration

```php
$this->taskLandoConfig()
    ->run();
```

### Destroy the infrastructure of an application

```php
$this->taskLandoDestroy()
  ->application("myapp")
  ->run();
```

### Get information about a Lando application

```php
$this->taskLandoInfo()
  ->application("myapp")
  ->deep()
  ->run();
```

### Initialize a new Lando application

```php
$this->taskLandoInit()
  ->recipe("drupal8")
  ->webroot("./")
  ->run();
```

### List the running Lando applications

```php
$this->taskLandoList()
  ->run();
```

### Print Lando logs of an application

```php
$this->taskLandoLogs()
  ->recipe("drupal8")
  ->webroot("./")
  ->run();
```

### Shut down all running Lando containers

```php
$this->taskLandoPoweroff()
  ->run();
```

### Rebuild Lando containers and tools

```php
$this->taskLandoRebuild()
  ->services(array("database", "appserver")
  ->run();
```

### Stop and restart a Lando application
```php
$this->taskLandoRestart()
  ->application("myapp")
  ->run();
```

### Publicly expose a Lando URL
```php
$this->taskLandoShare()
  ->url("http://localhost:32785")
  ->run();
```

### Ssh into a specific service of a Lando application and execute a command
```php
$this->taskLandoSsh()
  ->user("johndoe")
  ->command("ls -l /")
  ->run();
```

### Start a Lando application
```php
$this->taskLandoStart()
  ->application("myapp")
  ->run();
```

### Stop a Lando application
```php
$this->taskLandoStop()
  ->application("myapp")
  ->run();
```

### Print the version of Lando
```php
$this->taskLandoVersion()
  ->run();
```
