<?php namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LanguageWa class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LanguageWaTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$language = new LanguageWa;

		$this->assertEquals(new ScriptLatn, $language->defaultScript());
		$this->assertEquals(new PluralRule2, $language->pluralRule());
		$this->assertSame('wa', $language->code());
	}
}