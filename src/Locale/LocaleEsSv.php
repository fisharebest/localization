<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEsSv
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEsSv extends LocaleEs {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritorySv;
	}
}
