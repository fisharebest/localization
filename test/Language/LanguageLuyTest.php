<?php namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LanguageLuy class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LanguageLuyTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$language = new LanguageLuy;

		$this->assertEquals(new ScriptLatn, $language->defaultScript());
		$this->assertSame('luy', $language->code());
	}
}
