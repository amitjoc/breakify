# Breakify  
Breakify is a lightweight PHP utility for managing and transforming line breaks across platforms and formats.
Whether you're normalizing text input, preparing content for HTML output, or ensuring consistent formatting in 
logs or CLI tools, Breakify offers a clean, expressive API to handle it all.

# Author

**Amit Joshi**  
Backend Developer | PHP & JavaScript Specialist  
GitHub: [@amitjoc](https://github.com/amitjoc)  
LinkedIn: [@amitjoc](https://www.linkedin.com/in/amitjoc/)

![PHP Version](https://img.shields.io/badge/PHP-7.4%2B-blue)
![License](https://img.shields.io/github/license/amitjoc/breakify)
![Build Status](https://img.shields.io/github/actions/workflow/status/amitjoc/breakify/php.yml)
![Code Style](https://img.shields.io/badge/code%20style-PSR12-green)
![Issues](https://img.shields.io/github/issues/amitjoc/breakify)
![Stars](https://img.shields.io/github/stars/amitjoc/breakify?style=social)


# Table of Contents
- [Author](#author)
- [Installation](#installation)
- [Environment](#environment)
- [Feature List](#feature-list)
- [Examples](#example-for-web)
- [CLI Usage](#example-for-cli)
- [Task List](#task-list)
- [Coding Standards](#coding-standard)

# Installation

> Download the Breakify library
```php
 composer require amitjoshi/breakify
```
> Include composer `autoload` file  
```php 
 include_once dirname(__DIR__) . "/vendor/autoload.php"; 
 ```
> Create a Breakify object 
```php
  $web = new Breakify();
```

# Environment
- `WEB`: Use when a script runs only in browser-based environments.
- `CLI`: Use when a script runs only in command-line environments.
- `BOTH`: Use when the environment is dynamic or unknown.


# Feature List

- [Web Example](#example-for-web) and [CLI Example](#example-for-cli) 
- `beap()` (bell sound for CLI)
- Normalize or convert line breaks across different platforms `(Windows \r\n, Unix \n, Mac \r)`
- Handle other `escape character` too for cli (`in progress`)

## Example for WEB

When we already know that our `script` only executed on `WEB` environment

- print `br tag`
```php
  $web = new Breakify()
  $web->pbr();        // OUTPUT: Print's `break tag` directly
  $web->phr();        // OUTPUT: <hr />
  $web->phrDashed();  // OUTPUT: ------- 
  $web->phrDotted();  // OUTPUT: .......
  $web->phrRidge();   // OUTPUT: _______
  $web->phrDouble();  // OUTPUT: =======
```

## Example for CLI
When we already know that our `script` only executed on `cli` environment

```php
$cliBreak = new Breakify();

$cliBreak->getLineBreak()   //  returns `PHP_EOL`
$cliBreak->pNewLine()       //  echoes single line break
$cliBreak->pNewLine(true)   //  echoes double line break
```
- print carriage return also `\r`
- print text withing the box with desired character like —, = (in progress)
- Make a bell sound `beap()` from php (available only in cli mode)

> [!IMPORTANT]  
> 1. `functions` with `p` prefix directly give output like `pbr()`,`phr()`,`pLineBreak()`  

# Task List
 
## Default

- [x] `CLI`: Default `LineBreak` is set to `PHP_EOL` 
- [x] `WEB`: Default `LineBreak` is `<br />`

## Functions
- [x] `isCliEnv()` function will check is execution environment. return `true` for cli else `false`
- [x] `exeEnvType()` Type `WEB | CLI`. it will return the output accordingly 

## Functions for `web`

- [x] print break tag  `pbr()`
- [x] print horizontal tag  `phr()`
- [x] print `dashed line` use function `phrDashed()`  
- [x] print `dotted line` use function `phrDotted()`
- [x] print `ridge line` use function `phrRidge()`
- [x] print `double line` use function `phrDouble()`
- [ ] custom hr line width and height and center also with in build stylesheet

## Coding Standard

- [x] PSR 4 or PSR12




## CHANGES 

- namespace updated to `LineBreak\\`
- made breakify class final
- 