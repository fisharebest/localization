<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class AbstractScript - Representation of a writing system.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
abstract class AbstractScript
{
    /**
     * What are the default digits used by this script?
     * This is an array of translations from Hindu-Arabic (0123456789)
     * symbols to other symbols.  For English, etc., this array is empty.
     * Some locales (e.g. Persian) use their own digits, rather than
     * the default digits of their script.
     *
     * @return array<int,string>
     */
    public function numerals(): array
    {
        return array();
    }

    /**
     * Is the script written left-to-right “ltr” or right-to-left “rtl”.
     *
     * @return string “ltr” or “rtl”
     */
    public function direction(): string
    {
        return substr_compare($this->number(), '1', 0, 1) !== 0 ? 'ltr' : 'rtl';
    }

    /**
     * The ISO15924 number for this script.
     *
     * @return string
     */
    abstract public function number(): string;

    /**
     * The Unicode name (aka “property value alias”) for this script, or
     * null if one does not exist.
     *
     * @return string|null
     */
    public function unicodeName(): ?string
    {
        return null;
    }
}
