![Packagist Version](https://img.shields.io/packagist/v/sujan/console-log)
![Packagist](https://img.shields.io/packagist/dt/sujan/console-log?color=green)
![GitHub](https://img.shields.io/github/license/sujancse/console-log?color=yellow)

A tiny PHP library to console log your PHP data to browser console.

## Installation
```$xslt
composer require sujan/console-log --dev
```

## Usage
```$xslt
use Sujan\Logger\Console;
```

```$xslt
$users = User::all()->toArray();
Console::log($users);

$user = User::first();
Console::log($user);
```

![Image](https://i.ibb.co/z8vCfRp/Screenshot-2020-01-20-at-2-10-37-AM.png)

![Image](https://i.ibb.co/pP33Chv/Screenshot-2020-01-20-at-2-10-52-AM.png)
