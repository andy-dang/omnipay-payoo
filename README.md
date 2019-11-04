Omnipay-Payoo
===

Payoo Payment driver for the Omnipay PHP payment processing library

[![Build Status](https://img.shields.io/travis/andy-dang/omnipay-payoo.svg)](https://travis-ci.org/andy-dang/omnipay-payoo)
[![Coverage Status](https://img.shields.io/codecov/c/github/andy-dang/omnipay-payoo.svg)](https://codecov.io/github/andy-dang/omnipay-payoo)
[![Packagist Status](https://img.shields.io/packagist/v/andy-dang/omnipay-payoo.svg)](https://packagist.org/packages/andy-dang/omnipay-payoo)
[![Packagist Downloads](https://img.shields.io/packagist/dt/andy-dang/omnipay-payoo.svg)](https://packagist.org/packages/andy-dang/omnipay-payoo)

Omnipay is a framework agnostic, multi-gateway payment processing library for PHP 5.3+. This package implements Payoo Payment driver support for Omnipay.

## Installation
Omnipay is installed via [Composer](http://getcomposer.org/). To install, add it to your composer.json file:

```json
{
    "require": {
        "omnipay/common": "3.0.1",
        "andy-dang/omnipay-payoo": "dev-master"
    }
}
```

And then run composer to update your dependencies:

```json
$ curl -s http://getcomposer.org/installer | php
$ php composer.phar update
```

## Basic Usage

The following gateways are provided by this package:

* purchase
* completePurchase

For general usage instructions, please see the main [Omnipay](https://github.com/thephpleague/omnipay)
repository.

## Support


If you are having general issues with Omnipay, we suggest posting on
[Stack Overflow](http://stackoverflow.com/). Be sure to add the
[omnipay tag](http://stackoverflow.com/questions/tagged/omnipay) so it can be easily found.

If you believe you have found a bug, please report it using the [GitHub issue tracker](https://github.com/andy-dang/omnipay-Payoo/issues), or better yet, fork the library and submit a pull request.
