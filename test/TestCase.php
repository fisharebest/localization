<?php

namespace Fisharebest\Localization;

/**
 * Tests for the Localization package
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */


if (class_exists('PHPUnit_Framework_TestCase')) {
    // Testing against PHP 5.3 and 5.4 requires PHPUnit 4
    class TestCase extends \PHPUnit_Framework_TestCase
    {
    }
} else {
    // Testing against PHP 5.3 and 5.4 requires PHPUnit 4
    class TestCase extends \PHPUnit\Framework\TestCase
    {
    }
}
