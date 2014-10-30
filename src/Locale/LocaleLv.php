<?php namespace Fisharebest\Localization;

/**
 * Class LocaleLv - Latvian
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleLv extends Locale {
	/** {@inheritdoc} */
	public function collation() {
		return 'latvian_ci';
	}

	/** {@inheritdoc} */
	public function endonym() {
		return 'latviešu';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'LATVIEŠU';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageLv;
	}
}
