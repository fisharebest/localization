<?php namespace Fisharebest\Localization;

/**
 * Class LocaleHr - Croatian
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleHr extends Locale {
	/** {@inheritdoc} */
	public function collation() {
		return 'croatian_ci';
	}

	/** {@inheritdoc} */
	public function endonym() {
		return 'hrvatski';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'HRVATSKI';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageHr;
	}
}
