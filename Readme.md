# PHP input class
## This package can process the current HTTP request values.

## Requirement
1. PHP
2. Composer

## Installation
Installing this package is very simple, first ensure you have the right PHP version and composer installed then in your terminal/(command prompt) run:  `composer require lablnet/input`

## Dependencies
This class use `[lablnet/http-client](https://packagist.org/packages/lablnet/http-client)` library. 

## Feature

 1. Supported method get,post,put,patch,delete,files,others.
 2. Clean input method(clean XSS attack/sanitize input).
 3. Determine whether request is ajax or not.
 4. Restore line breaks method.

# Description
It can access the HTTP request values and return them in a more convenient way to the application.
Currently it can check the input values when using the GET, POST, PUT, PATCH, DELETE, FILES etc parameters, filter the parameter values, check whether request is sent by a browser using AJAX, word wrap parameter values, check whether 
the request is a form submission, fix parameter value line breaks.

> This class provide helpers functions for easily use of class.

## Input
You can get input by calling `input` helpers or `Input::input` method
```php 
require_once "../vendor/autoload.php";
$username = input('username');
```
```php
//in OOP style
use Lablnet\Input;
require_once "../vendor/autoload.php";
$username = Input::input('username');
```

## Escape
You can escape input by calling `escape` helpers or `Input::escape` method
```php 
require_once "../vendor/autoload.php";
$username = escape(input('username'));
```
```php
//in OOP style
use Lablnet\Input;
require_once "../vendor/autoload.php";
$username = Input::clean(Input::input('username'));
```

## Determine whether request is ajax/xhr?
You can determine current request  by calling `is_ajax` helpers or `Input::isAjax` method
```php 
require_once "../vendor/autoload.php";
if (is_ajax('name')) {
	//ajax
}
```
```php
//in OOP style
use Lablnet\Input;
require_once "../vendor/autoload.php";
if (Input::isAjax('name')) {
	//ajax
}
```

## Restore line breaks
You can restore line breaks by calling `restore_line_break` helpers or `Input::restoreLineBreaks` method
```php 
require_once "../vendor/autoload.php";
$comment = restore_line_break(escape(input('username')));
```
```php
//in OOP style
use Lablnet\Input;
require_once "../vendor/autoload.php";
$comment = Input::restoreLineBreaks(Input::clean(Input::input('username')));
```

