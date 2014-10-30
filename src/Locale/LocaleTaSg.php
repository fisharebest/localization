<?php namespace Fisharebest\Localization;

/**
 * Class LocaleTaSg
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleTaSg extends LocaleTa {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritorySg;
	}
}
