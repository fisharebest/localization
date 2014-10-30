<?php namespace Fisharebest\Localization;

/**
 * Class LocaleDa - Danish
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleDa extends Locale {
	/** {@inheritdoc} */
	public function collation() {
		return 'danish_ci';
	}

	/** {@inheritdoc} */
	public function endonym() {
		return 'dansk';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'DANSK';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageDa;
	}
}
