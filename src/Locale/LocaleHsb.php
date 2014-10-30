<?php namespace Fisharebest\Localization;

/**
 * Class LocaleHsb - Upper Sorbian
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleHsb extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'hornjoserbšćina';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'HORNJOSERBŠĆINA';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageHsb;
	}
}
