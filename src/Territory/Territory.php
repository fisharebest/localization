<?php namespace Fisharebest\Localization;

/**
 * Class Territory - Representation of a geographic area.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
abstract class Territory {
	const NBSP = ' '; // A non-breaking space;

	/**
	 * The ISO639 or M.49 code for this territory.
	 *
	 * @return string
	 */
	abstract public function code();

	/**
	 * When writing floating point numbers, this symbol separates the fraction part.
	 *
	 * @return string
	 */
	public function decimalMark() {
		return '.';
	}

	/**
	 * When writing large numbers place a separator after this number of digits.
	 *
	 * @return integer
	 */
	public function digitsFirstGroup() {
		return 3;
	}

	/**
	 * When writing large numbers place a separator after this number of digits.
	 *
	 * @return integer
	 */
	public function digitsGroup() {
		return 3;
	}

	/**
	 * When writing large numbers place a separator after this number of digits.
	 *
	 * @return string
	 */
	public function digitsGroupSeparator() {
		return ',';
	}

	/**
	 * What is the first day of the week?
	 * 0 = Sunday
	 * 1 = Monday
	 * etc.
	 *
	 * @return integer
	 */
	public function firstDay() {
		return 1;
	}

	/**
	 * Does this territory use 'metric' or 'US' measurements.
	 *
	 * @return string
	 */
	public function measurementSystem() {
		return 'metric';
	}

	/**
	 * When using grouping separators in numbers, keep this number of digits together.
	 *
	 * @return integer
	 */
	public function minimumGroupingDigits() {
		return 1;
	}

	/**
	 * Does this territory use 'A4' or 'US-Letter' paper.
	 *
	 * @return string
	 */
	public function paperSize() {
		return 'A4';
	}

	/**
	 * What is the first day of the weekend?
	 * 0 = Sunday
	 * 1 = Monday
	 * etc.
	 *
	 * @return integer
	 */
	public function weekendStart() {
		return 6;
	}

	/**
	 * What is the last day of the weekend?
	 * 0 = Sunday
	 * 1 = Monday
	 * etc.
	 *
	 * @return integer
	 */
	public function weekendEnd() {
		return 0;
	}
}
