<?php namespace Fisharebest\Localization;

/**
 * Class LocaleNso - Northern Sotho
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleNso extends Locale {
	/** {@inheritdoc} */
	public function decimalMark() {
		return '.';
	}

	/** {@inheritdoc} */
	public function digitsGroupSeparator() {
		return self::NBSP;
	}

	/** {@inheritdoc} */
	public function endonym() {
		return 'Sesotho sa Leboa';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'SESOTHO SA LEBOA';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageNso;
	}
}
