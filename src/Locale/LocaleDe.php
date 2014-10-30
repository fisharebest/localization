<?php namespace Fisharebest\Localization;

/**
 * Class LocaleDe - German
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleDe extends Locale {
	/** {@inheritdoc} */
	public function collation() {
		return 'german2_ci';
	}

	/** {@inheritdoc} */
	public function endonym() {
		return 'Deutsch';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'DEUTSCH';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageDe;
	}
}
