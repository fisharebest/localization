<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEo - Esperanto
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEo extends Locale {
	/** {@inheritdoc} */
	public function collation() {
		return 'esperanto_ci';
	}

	/** {@inheritdoc} */
	public function decimalMark() {
		return ',';
	}

	/** {@inheritdoc} */
	public function digitsGroupSeparator() {
		return self::NBSP;
	}

	/** {@inheritdoc} */
	public function endonym() {
		return 'esperanto';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'ESPERANTO';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageEo;
	}
}
