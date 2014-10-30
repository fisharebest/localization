<?php namespace Fisharebest\Localization;

/**
 * Class LocaleKok - Konkani
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleKok extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'कोंकणी';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageKok;
	}
}
