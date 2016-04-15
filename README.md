# Laravel Method Spoofing

Laravel only handle http method spoofing on posted forms (HTTP POST). This package allows you to spoof method on every kind of request 
(the hidden goal is to allows you to __make POST request from a GET request like JSONP__)

## Installation

Install the package with composer :

    composer require ifnot/method-spoofing

### Require the service provider on Laravel 5.x

In the config/app/php, add to the end of your providers :

    Ifnot\MethodSpoofing\MethodSpoofingServiceProvider::class

### Require the service provider on Lumen 5.x

In the bootstrap/app.php, add to the `Register Service Provider` section :

    $app->register(Ifnot\MethodSpoofing\MethodSpoofingServiceProvider::class);

## Usage

You have nothing to do.

All queries having a "_method" params (GET and POST are checked) will have the HTTP query method changed.

## Example

The following url ill be a POST request :

`http://www.my_website.com?_method=POST`