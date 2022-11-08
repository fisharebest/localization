<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule4;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryGb;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageGd - Representation of the Scottish Gaelic language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageGd extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'gd';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryGb();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule4();
    }
}
