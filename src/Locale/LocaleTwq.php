<?php namespace Fisharebest\Localization;

/**
 * Class LocaleTwq - Tasawaq
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleTwq extends Locale {
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
		return 'Tasawaq senni';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'TASAWAQ SENNI';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageTwq;
	}
}
