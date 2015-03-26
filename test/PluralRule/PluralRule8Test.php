<?php namespace Fisharebest\Localization\PluralRule;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the PluralRule8 class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class PluralRule8Test extends TestCase {
	/**
	 * @return void
	 */
	public function testNumberOfPluralForms() {
		$plural_rule = new PluralRule8;

		$this->assertSame(3, $plural_rule->plurals());
	}

	/**
	 * @return void
	 */
	public function testPluralRules() {
		$plural_rule = new PluralRule8;

		$this->assertSame(2, $plural_rule->plural(0));
		$this->assertSame(0, $plural_rule->plural(1));
		$this->assertSame(1, $plural_rule->plural(2));
		$this->assertSame(1, $plural_rule->plural(3));
		$this->assertSame(1, $plural_rule->plural(4));
		$this->assertSame(2, $plural_rule->plural(5));
		$this->assertSame(2, $plural_rule->plural(6));
		$this->assertSame(2, $plural_rule->plural(7));
		$this->assertSame(2, $plural_rule->plural(8));
		$this->assertSame(2, $plural_rule->plural(9));
		$this->assertSame(2, $plural_rule->plural(10));
	}
}
