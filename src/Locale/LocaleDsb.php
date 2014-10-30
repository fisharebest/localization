<?php namespace Fisharebest\Localization;

/**
 * Class LocaleDsb - Lower Sorbian
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleDsb extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'dolnoserbšćina';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'DOLNOSERBŠĆINA';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageDsb;
	}
}
