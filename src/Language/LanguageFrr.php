<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryDe;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageEn - Representation of the North Frisian language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageFrr extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'frr';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryDe();
    }
}
