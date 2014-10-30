<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the TerritoryPa class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class TerritoryPaTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$territory = new TerritoryPa;

		$this->assertSame('PA', $territory->code());
		$this->assertSame(0, $territory->firstDay());
		$this->assertSame(6, $territory->weekendStart());
		$this->assertSame(0, $territory->weekendEnd());
		$this->assertSame('metric', $territory->measurementSystem());
		$this->assertSame('US-Letter', $territory->paperSize());
	}
}
