<?php namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptNkoo;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LanguageNqo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LanguageNqoTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$language = new LanguageNqo;

		$this->assertEquals(new ScriptNkoo, $language->defaultScript());
		$this->assertEquals(new PluralRule0, $language->pluralRule());
		$this->assertSame('nqo', $language->code());
	}
}
