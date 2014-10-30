<?php namespace Fisharebest\Localization;

/**
 * Class LocaleSes - Koyraboro Senni
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleSes extends Locale {
	/** {@inheritdoc} */
	public function decimalMark() {
		return '.';
	}

	/** {@inheritdoc} */
	public function digitsGroupSeparator() {
		return self::NBSP;
	}


	/** {@inheritdoc} */
	public function endonym() {
		return 'Koyraboro senni';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'KOYRABORO SENNI';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageSes;
	}
}
