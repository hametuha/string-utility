# String Utility

PHP utility traits of string related functions.

[![Travis CI](https://travis-ci.org/hametuha/string-utility.svg?branch=master)](https://travis-ci.org/hametuha/string-utility)

## Installation

```
composer require hametuha/string-utility
```

## How To Use

```
<?php

MyClass {

    use Hametuha\StringUtility\NamingConventions;
}


$my_instance = new MyClass();

echo $my_instance->camel_to_kebab( 'MyClassName' );
// -> 'my-class-name'
```

## Lisence

GPL 3.0 or later.