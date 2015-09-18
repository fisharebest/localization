<?php namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptDeva;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LanguageKok class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LanguageKokTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$language = new LanguageKok;

		$this->assertEquals(new ScriptDeva, $language->defaultScript());
		$this->assertSame('kok', $language->code());
	}
}
