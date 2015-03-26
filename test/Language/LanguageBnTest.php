<?php namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptBeng;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LanguageBn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LanguageBnTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$language = new LanguageBn;

		$this->assertEquals(new ScriptBeng, $language->defaultScript());
		$this->assertEquals(new PluralRule2, $language->pluralRule());
		$this->assertSame('bn', $language->code());
	}
}
