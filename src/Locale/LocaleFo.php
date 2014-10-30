<?php namespace Fisharebest\Localization;

/**
 * Class LocaleFo - Faroese
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleFo extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'føroyskt';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'FØROYSKT';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageFo;
	}
}
