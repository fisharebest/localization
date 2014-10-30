<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the CLDR
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class CldrTest extends TestCase {
	/**
	 * Test weekData
	 *
	 * @medium
	 *
	 * @return void
	 */
	public function testWeekData() {
		$days = array(
			'sun' => 0,
			'mon' => 1,
			'tue' => 2,
			'wed' => 3,
			'thu' => 4,
			'fri' => 5,
			'sat' => 6,
		);

		$cldr = file_get_contents(__DIR__ . '/data/cldr-26.0.1/supplemental/weekData.json');
		$cldr = json_decode($cldr);

		foreach ($cldr->supplemental->weekData->firstDay as $code => $day) {
			$class = __NAMESPACE__ . '\Territory' . ucfirst(strtolower($code));

			/** @var Territory $territory */
			$territory = new $class;

			$this->assertSame($days[$day], $territory->firstDay());
		}

		foreach ($cldr->supplemental->weekData->weekendStart as $code => $day) {
			$class = __NAMESPACE__ . '\Territory' . ucfirst(strtolower($code));

			/** @var Territory $territory */
			$territory = new $class;

			$this->assertSame($days[$day], $territory->weekendStart());
		}

		foreach ($cldr->supplemental->weekData->weekendEnd as $code => $day) {
			$class = __NAMESPACE__ . '\Territory' . ucfirst(strtolower($code));

			/** @var Territory $territory */
			$territory = new $class;

			$this->assertSame($days[$day], $territory->weekendEnd());
		}
	}

	/**
	 * Test measurementData
	 *
	 * @medium
	 *
	 * @return void
	 */
	public function testMeasurementData() {
		$cldr = file_get_contents(__DIR__ . '/data/cldr-26.0.1/supplemental/measurementData.json');
		$cldr = json_decode($cldr);

		foreach ($cldr->supplemental->measurementData->measurementSystem as $code => $data) {
			$class = __NAMESPACE__ . '\Territory' . ucfirst(strtolower($code));

			/** @var Territory $territory */
			$territory = new $class;

			$this->assertSame($data, $territory->measurementSystem());
		}

		foreach ($cldr->supplemental->measurementData->paperSize as $code => $data) {
			$class = __NAMESPACE__ . '\Territory' . ucfirst(strtolower($code));

			/** @var Territory $territory */
			$territory = new $class;

			$this->assertSame($data, $territory->paperSize());
		}
	}

	/**
	 * Test layout
	 *
	 * @medium
	 *
	 * @return void
	 */
	public function testCharacterOrder() {
		$direction = array(
			'left-to-right' => 'ltr',
			'right-to-left' => 'rtl',
		);

		foreach (glob(__DIR__ . '/data/cldr-26.0.1/main/*/layout.json') as $cldr) {
			if (strpos($cldr, '/root/layout.json') === false) {
				$locale = $this->cldrLocale($cldr);
				$json   = $this->cldrJson($cldr);
				$dir    = $direction[$json->layout->orientation->characterOrder];

				if ($locale instanceof LocaleShi && !$locale instanceof LocaleShiLatn) {
					// CLDR 26.0.1 says that Tifinagh is LTR, when it is really RTL.
					$dir = 'rtl';
				}

				$this->assertSame($dir, $locale->script()->direction());
			}
		}
	}

	/**
	 * Test numbers
	 *
	 * @medium
	 *
	 * @return void
	 */
	public function testNumbers() {
		foreach (glob(__DIR__ . '/data/cldr-26.0.1/main/*/numbers.json') as $cldr) {
			if (strpos($cldr, '/root/numbers.json') === false) {
				$locale = $this->cldrLocale($cldr);
				$json   = $this->cldrJson($cldr);

				$default_numbering_system = $json->numbers->defaultNumberingSystem;
				$symbols_key              = 'symbols-numberSystem-' . $default_numbering_system;
				$decimal_formats_key      = 'decimalFormats-numberSystem-' . $default_numbering_system;
				$minimum_grouping_digits  = (int)$json->numbers->minimumGroupingDigits;
				$decimal                  = $json->numbers->$symbols_key->decimal;
				$group                    = $json->numbers->$symbols_key->group;
				$standard_format          = $json->numbers->$decimal_formats_key->standard;

				$this->assertSame($minimum_grouping_digits, $locale->minimumGroupingDigits());
				$this->assertSame($decimal, $locale->decimalMark());
				$this->assertSame($group, $locale->digitsGroupSeparator());
			}
		}
	}

	/**
	 * Test languages
	 *
	 * @medium
	 *
	 * @return void
	 */
	public function testLanguages() {
		foreach (glob(__DIR__ . '/data/cldr-26.0.1/main/*/languages.json') as $cldr) {
			if (strpos($cldr, '/root/languages.json') === false) {
				$locale = $this->cldrLocale($cldr);
				$json   = $this->cldrJson($cldr);

				$language_tag = $locale->languageTag();
				if (isset($json->localeDisplayNames->languages->$language_tag)) {
					$endonym = $json->localeDisplayNames->languages->$language_tag;

					if ($locale instanceof LocaleSsy) {
						// CLDR 26.0.1 gives the language code as the language name.
						$endonym = 'Saho';
					}

					$this->assertSame($endonym, $locale->endonym());
				}
			}
		}
	}

	/**
	 * Extract the JSON data from a JSON file
	 *
	 * @return \stdClass
	 */
	private function cldrJson($file) {
		$data = json_decode(file_get_contents($file));

		return reset($data->main);
	}

	/**
	 * Create a locale object corresponding to a CLDR JSON file
	 *
	 * @param string $file
	 *
	 * @return Locale
	 */
	private function cldrLocale($file) {
		$parts = explode('-', basename(dirname($file)));
		array_walk($parts, function(&$x) { $x = ucfirst(strtolower($x)); });
		$class = __NAMESPACE__ . '\Locale' . implode('', $parts);

		return new $class;
	}
}
