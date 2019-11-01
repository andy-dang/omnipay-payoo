# omnipay-payoo
Payoo gateway for Omnipay PHP payment processing library

[![Build Status](https://img.shields.io/badge/project-deprecated-red.svg)](https://github.com/andy-dang/omnipay-payoo)
[![Build Status](https://img.shields.io/travis/andy-dang/omnipay-payoo.svg)](https://travis-ci.org/andy-dang/omnipay-payoo)
[![Coverage Status](https://img.shields.io/codecov/c/github/andy-dang/omnipay-payoo.svg)](https://codecov.io/github/andy-dang/omnipay-payoo)
[![Packagist Status](https://img.shields.io/packagist/v/andy-dang/omnipay-payoo.svg)](https://packagist.org/packages/andy-dang/omnipay-payoo)
[![Packagist Downloads](https://img.shields.io/packagist/dt/andy-dang/omnipay-payoo.svg)](https://packagist.org/packages/andy-dang/omnipay-payoo)

Omnipay is a framework agnostic, multi-gateway payment processing library for PHP 5.3+. This package implements Momo Mobile Payment support for Omnipay.

## Installation
Omnipay is installed via Composer. To install, add it to your composer.json file:

```json
{
    "require": {
        "labs7in0/omnipay-wechat": "dev-master"
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

## Support

If you are having general issues with Omnipay, we suggest posting on Stack Overflow. Be sure to add the omnipay tag so it can be easily found.

If you believe you have found a bug, please report it using the GitHub issue tracker, or better yet, fork the library and submit a pull request.
