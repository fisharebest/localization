<?php namespace Fisharebest\Localization;

use Fisharebest\Localization\Locale\LocaleEnAu;
use Fisharebest\Localization\Locale\LocaleEnGb;
use Fisharebest\Localization\Locale\LocaleEnUs;
use Fisharebest\Localization\Locale\LocaleInterface;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the AbstractLocale class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleTest extends TestCase {
	/**
	 * Test the comparator
	 */
	public function testCompare() {
		// American English, Australian English, British English
		$this->assertLessThan(0, Locale::compare(new LocaleEnAU, new LocaleEnGb));
		$this->assertLessThan(0, Locale::compare(new LocaleEnUs, new LocaleEnAu));
		$this->assertLessThan(0, Locale::compare(new LocaleEnUs, new LocaleEnGb));

		$this->assertEquals(0, Locale::compare(new LocaleEnAu, new LocaleEnAu));
		$this->assertEquals(0, Locale::compare(new LocaleEnGb, new LocaleEnGb));
		$this->assertEquals(0, Locale::compare(new LocaleEnUs, new LocaleEnUs));

		$this->assertGreaterThan(0, Locale::compare(new LocaleEnAu, new LocaleEnUs));
		$this->assertGreaterThan(0, Locale::compare(new LocaleEnGb, new LocaleEnUs));
		$this->assertGreaterThan(0, Locale::compare(new LocaleEnGb, new LocaleEnAu));
	}

	/**
	 * Test the comparator
	 *
	 * @medium
	 */
	public function testCompareAll() {
		$array = array_map(function($x) {
			$class = __NAMESPACE__ . '\Locale\\' . basename($x, '.php');
			return new $class;
		}, preg_grep('/Abstract|Interface/', glob(__DIR__ . '/../src/Locale/Locale??*.php'), PREG_GREP_INVERT));

		usort($array, __NAMESPACE__ . '\Locale::compare');
		$this->assertNotEmpty($array);
		$this->assertTrue(is_array($array));
	}

	/**
	 * Test creating valid locales
	 */
	public function testCreateValidLocale() {
		$locale1 = Locale::create('en-GB');
		$locale2 = Locale::create('en_GB');
		$locale3 = Locale::create('En-gB');

		$this->assertinstanceof(get_class(new LocaleEnGb), $locale1);
		$this->assertinstanceof(get_class(new LocaleEnGb), $locale2);
		$this->assertinstanceof(get_class(new LocaleEnGb), $locale3);
	}

	/**
	 * Test creating locales
	 *
	 * @expectedException \DomainException
	 * @return void
	 */
	public function testCreateInvalidLocale() {
		Locale::create('xxx');
	}

	/**
	 * Test language negotiation
	 */
	public function testHttpAcceptLanguage() {
		$available = array(
			Locale::create('de'),
			Locale::create('en'),
			Locale::create('fr'),
			Locale::create('it'),
		);
		$server = array('HTTP_ACCEPT_LANGUAGE' => 'it;q=0.8,de,fr,ar');
		$default = Locale::create('en-US');
		$locale = Locale::httpAcceptLanguage($server, $available, $default);

		$this->assertEquals(Locale::create('de'), $locale);
	}

	/**
	 * Test language negotiation
	 */
	public function testHttpAcceptLanguageNoneMatching() {
		$available = array(
			Locale::create('de'),
			Locale::create('en'),
			Locale::create('fr'),
			Locale::create('it'),
		);
		$server = array('HTTP_ACCEPT_LANGUAGE' => 'he;q=0.8,pl,ru,ar');
		$default = Locale::create('en-US');
		$locale = Locale::httpAcceptLanguage($server, $available, $default);

		$this->assertEquals($default, $locale);
	}

	/**
	 * Test language negotiation
	 */
	public function testHttpAcceptLanguageDowngrade() {
		$available = array(
			Locale::create('de'),
			Locale::create('en'),
			Locale::create('fr'),
			Locale::create('it'),
		);
		$server = array('HTTP_ACCEPT_LANGUAGE' => 'de-DE');
		$default = Locale::create('en-US');
		$locale = Locale::httpAcceptLanguage($server, $available, $default);

		$this->assertEquals(Locale::create('de'), $locale);
	}

	/**
	 * Test language negotiation
	 */
	public function testHttpAcceptLanguageNoneSelected() {
		$available = array();
		$server = array('HTTP_ACCEPT_LANGUAGE' => 'he;q=0.8,pl,ru,ar');
		$default = Locale::create('en-US');
		$locale = Locale::httpAcceptLanguage($server, $available, $default);

		$this->assertEquals($default, $locale);
	}
}
