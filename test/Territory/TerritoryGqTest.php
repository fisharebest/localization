<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the TerritoryGq class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class TerritoryGqTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$territory = new TerritoryGq;

		$this->assertSame('GQ', $territory->code());
		$this->assertSame(1, $territory->firstDay());
		$this->assertSame(6, $territory->weekendStart());
		$this->assertSame(0, $territory->weekendEnd());
		$this->assertSame('metric', $territory->measurementSystem());
		$this->assertSame('A4', $territory->paperSize());
	}
}
