<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule6;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryLt;

/**
 * Class LanguageLt - Representation of the Lithuanian language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageLt extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'lt';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryLt();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule6();
    }
}
