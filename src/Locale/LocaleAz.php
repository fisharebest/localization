<?php namespace Fisharebest\Localization;

/**
 * Class LocaleAz - Azerbaijani
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleAz extends Locale {
	/** {@inheritdoc} */
	public function decimalMark() {
		return ',';
	}

	/** {@inheritdoc} */
	public function digitsGroupSeparator() {
		return '.';
	}

	/** {@inheritdoc} */
	public function endonym() {
		return 'azərbaycan';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'AZƏRBAYCAN';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageAz;
	}
}
