<?php

/*
 +--------------------------------------------------------------------------+
 | Zephir                                                                   |
 | Copyright (c) 2013-present Zephir (https://zephir-lang.com/)             |
 |                                                                          |
 | This source file is subject the MIT license, that is bundled with this   |
 | package in the file LICENSE, and is available through the world-wide-web |
 | at the following url: http://zephir-lang.com/license.html                |
 +--------------------------------------------------------------------------+
 */

namespace Zephir\Exception;

/**
 * Zephir\Exception\BadMethodCallException
 *
 * @package Zephir\Exception
 */
class BadMethodCallException extends \BadMethodCallException implements ExceptionInterface
{
    use ExceptionExtraAwareTrait;
}