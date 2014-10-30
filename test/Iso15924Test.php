<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for ISO-15924
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class Iso15924Test extends TestCase {
	/**
	 * Test the scripts against their definitions in ISO15924
	 *
	 * @medium
	 *
	 * @return void
	 */
	public function testIso15924() {
		$iso15924 = file(__DIR__ . '/data/iso15924-utf8-20131012.txt', FILE_IGNORE_NEW_LINES);
		$iso15924 = preg_grep('/^[A-Z][a-z]{3};/', $iso15924);
		$iso15924 = preg_grep('/Reserved for private use/', $iso15924, PREG_GREP_INVERT);

		foreach ($iso15924 as $data) {
			$fields = explode(';', $data);

			$class = __NAMESPACE__ . '\Script' . $fields[0];
			$this->assertTrue(class_exists($class));

			/** @var Script $script */
			$script = new $class;

			$this->assertSame($fields[0], $script->code());
			$this->assertSame($fields[1], $script->number());
			$this->assertSame($fields[4] ?: null, $script->unicodeName());
		}
	}
}
