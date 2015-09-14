<?php namespace Fisharebest\Localization\Language;

use PHPUnit_Framework_TestCase as TestCase;

class foo extends AbstractLanguage {
}

/**
 * Unit tests for the AbstractLanguage class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class AbstractLanguageTest extends TestCase {
	/**
	 * If a programmer forgets to implement a plural rule for a language, an exception will be thrown.
	 *
	 * @expectedException \DomainException
	 */
	public function testMissingPluralRule() {
		$language = new foo;
		$language->pluralRule();
	}
}
