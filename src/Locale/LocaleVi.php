<?php namespace Fisharebest\Localization;

/**
 * Class LocaleVi - Vietnamese
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleVi extends Locale {
	/** {@inheritdoc} */
	public function collation() {
		return 'vietnamese_ci';
	}

	/** {@inheritdoc} */
	public function endonym() {
		return 'Tiếng Việt';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'TIẾNG VIỆT';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageVi;
	}
}
