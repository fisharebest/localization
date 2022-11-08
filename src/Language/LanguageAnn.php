<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryNg;

/**
 * Class LanguageAnn - Representation of the Obolo language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageAnn extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ann';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryNg();
    }
}
