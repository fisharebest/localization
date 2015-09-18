<?php namespace Fisharebest\Localization\Variant;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the VariantValencia class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class VariantValenciaTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$variant = new VariantValencia;

		$this->assertSame('valencia', $variant->code());
	}
}
