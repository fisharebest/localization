<?php namespace Fisharebest\Localization;

/**
 * Class LocaleKs - Kashmiri
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleKs extends Locale {
	/** {@inheritdoc} */
	public function decimalMark() {
		return '٫';
	}

	/** {@inheritdoc} */
	public function digitsGroupSeparator() {
		return '٬';
	}

	/** {@inheritdoc} */
	public function endonym() {
		return 'کٲشُر';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageKs;
	}
}
