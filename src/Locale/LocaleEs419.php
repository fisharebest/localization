<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEs419 - Latin American Spanish
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEs419 extends LocaleEs {
	/** {@inheritdoc} */
	public function endonym() {
		return 'español de América';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'ESPANOL DE AMERICA';
	}

	/** {@inheritdoc} */
	public function territory() {
		return new Territory419;
	}
}
