<?php namespace Fisharebest\Localization;

/**
 * Class LocaleBg - Bulgarian
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleBg extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'български';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'БЪЛГАРСКИ';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageBg;
	}
}
