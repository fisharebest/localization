<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryMa;

/**
 * Class LanguageZgh - Representation of the Standard Moroccan Tamazight language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageZgh extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'zgh';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryMa();
    }
}
