<?php namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptJava;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LanguageKo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LanguageJvTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$language = new LanguageJv;

		$this->assertEquals(new ScriptJava, $language->defaultScript());
		$this->assertEquals(new PluralRule0, $language->pluralRule());
		$this->assertSame('jv', $language->code());
	}
}
