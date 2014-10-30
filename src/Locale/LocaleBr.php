<?php namespace Fisharebest\Localization;

/**
 * Class LocaleBr - Breton
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleBr extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'brezhoneg';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'BREZHONEG';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageBr;
	}
}
