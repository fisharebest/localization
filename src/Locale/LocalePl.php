<?php namespace Fisharebest\Localization;

/**
 * Class LocalePl - Polish
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocalePl extends Locale {
	/** {@inheritdoc} */
	public function collation() {
		return 'polish_ci';
	}

	/** {@inheritdoc} */
	public function endonym() {
		return 'polski';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'POLSKI';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguagePl;
	}
}
