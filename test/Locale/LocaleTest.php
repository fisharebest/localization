<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the Locale class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleTest extends TestCase {
	/**
	 * All known locales
	 *
	 * @return Locale[]
	 */
	private function allLocales() {
		$locales = glob(__DIR__ . '/../../src/Locale/Locale??*.php');

		array_walk($locales, function (&$x) {
			$class = __NAMESPACE__ . '\\' . basename($x, '.php');
			$x = new $class;
		});

		return $locales;
	}

	/**
	 * Test the comparator
	 *
	 * @return void
	 */
	public function testCompare() {
		// American English, Australian English, British English
		$this->assertLessThan(0, Locale::compare(new LocaleEnUs, new LocaleEnAu));
		$this->assertLessThan(0, Locale::compare(new LocaleEnUs, new LocaleEnGb));
		$this->assertLessThan(0, Locale::compare(new LocaleEnAU, new LocaleEnGb));

		$this->assertEquals(0, Locale::compare(new LocaleEnAu, new LocaleEnAu));
		$this->assertEquals(0, Locale::compare(new LocaleEnGb, new LocaleEnGb));
		$this->assertEquals(0, Locale::compare(new LocaleEnUs, new LocaleEnUs));

		$this->assertGreaterThan(0, Locale::compare(new LocaleEnAu, new LocaleEnUs));
		$this->assertGreaterThan(0, Locale::compare(new LocaleEnGb, new LocaleEnUs));
		$this->assertGreaterThan(0, Locale::compare(new LocaleEnGb, new LocaleEnAu));
	}

	/**
	 * Test the comparator
	 *
	 * @medium
	 *
	 * @return void
	 */
	public function testCompareAll() {
		$array = $this->allLocales();

		usort($array, __NAMESPACE__ . '\Locale::compare');
		$this->assertTrue(is_array($array));
	}
}
