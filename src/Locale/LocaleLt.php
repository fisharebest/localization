<?php namespace Fisharebest\Localization;

/**
 * Class LocaleLt - Lithuanian
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleLt extends Locale {
	/** {@inheritdoc} */
	public function collation() {
		return 'lithuanian_ci';
	}

	/** {@inheritdoc} */
	public function endonym() {
		return 'lietuvių';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'LIETUVIŲ';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageLt;
	}
}
