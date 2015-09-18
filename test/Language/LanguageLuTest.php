<?php namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LanguageLu class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LanguageLuTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$language = new LanguageLu;

		$this->assertEquals(new ScriptLatn, $language->defaultScript());
		$this->assertSame('lu', $language->code());
	}
}
