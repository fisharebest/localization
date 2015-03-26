<?php namespace Fisharebest\Localization\Territory;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the TerritoryIl class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class TerritoryIlTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$territory = new TerritoryIl;

		$this->assertSame('IL', $territory->code());
		$this->assertSame(0, $territory->firstDay());
		$this->assertSame(5, $territory->weekendStart());
		$this->assertSame(6, $territory->weekendEnd());
		$this->assertSame('metric', $territory->measurementSystem());
		$this->assertSame('A4', $territory->paperSize());
	}
}
