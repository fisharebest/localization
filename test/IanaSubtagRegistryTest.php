<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the IANA subtag registry
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class IanaSubtagRegistryTest extends TestCase {
	/**
	 * Test the language tags against the IANA subtag registry
	 *
	 * @large
	 *
	 * @return void
	 */
	public function testLanguageTags() {
		$iana = file_get_contents(__DIR__ . '/data/language-subtag-registry');
		$iana = explode("%%\n", $iana);
		$iana = preg_grep('/Type: language/', $iana);
		$iana = preg_grep('/Private use/', $iana, PREG_GREP_INVERT);

		foreach ($iana as $data) {
			preg_match('/Subtag: (.+)/', $data, $match);
			$class  = __NAMESPACE__ . '\Language' . ucfirst(strtolower($match[1]));
			// The registry contains 8000 languages, and we aren't interested in most of them.
			if (class_exists($class)) {
				/** @var Language $language */
				$language = new $class;

				$this->assertSame($match[1], $language->code());
			}
		}
	}

	/**
	 * Test the script tags against the IANA subtag registry
	 *
	 * @large
	 *
	 * @return void
	 */
	public function testScriptTags() {
		$iana = file_get_contents(__DIR__ . '/data/language-subtag-registry');
		$iana = explode("%%\n", $iana);
		$iana = preg_grep('/Type: script/', $iana);
		$iana = preg_grep('/Private use/', $iana, PREG_GREP_INVERT);

		foreach ($iana as $data) {
			preg_match('/Subtag: (.+)/', $data, $match);
			$class  = __NAMESPACE__ . '\Script' . ucfirst(strtolower($match[1]));
			/** @var Script $script */
			$script = new $class;

			$this->assertSame($match[1], $script->code());
		}
	}

	/**
	 * Test the territory (region) tags against the IANA subtag registry
	 *
	 * @large
	 *
	 * @return void
	 */
	public function testTerritoryTags() {
		$iana = file_get_contents(__DIR__ . '/data/language-subtag-registry');
		$iana = explode("%%\n", $iana);
		$iana = preg_grep('/Type: region/', $iana);
		$iana = preg_grep('/Private use/', $iana, PREG_GREP_INVERT);

		foreach ($iana as $data) {
			preg_match('/Subtag: (.+)/', $data, $match);
			$class  = __NAMESPACE__ . '\Territory' . ucfirst(strtolower($match[1]));
			/** @var Territory $territory */
			$territory = new $class;

			$this->assertSame($match[1], $territory->code());
		}
	}
}
