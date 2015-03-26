<?php namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptGrek;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LanguageEl class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LanguageElTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$language = new LanguageEl;

		$this->assertEquals(new ScriptGrek, $language->defaultScript());
		$this->assertEquals(new PluralRule1, $language->pluralRule());
		$this->assertSame('el', $language->code());
	}
}
