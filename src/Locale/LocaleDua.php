<?php namespace Fisharebest\Localization;

/**
 * Class LocaleDua - Duala
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleDua extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'duálá';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'DUÁLÁ';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageDua;
	}
}
