<?php namespace Fisharebest\Localization;

/**
 * Class LocaleSk - Slovak
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleSk extends Locale {
	/** {@inheritdoc} */
	public function collation() {
		return 'slovak_ci';
	}

	/** {@inheritdoc} */
	public function endonym() {
		return 'slovenčina';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'SLOVENČINA';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageSk;
	}
}
