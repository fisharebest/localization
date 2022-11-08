<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageDav - Representation of the Taita language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageDav extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'dav';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryKe();
    }
}
