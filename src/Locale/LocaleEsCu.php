<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEsCu
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEsCu extends LocaleEs {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryCu;
	}
}
