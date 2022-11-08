<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryNz;

/**
 * Class LanguageMi - Representation of the Maori language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageMi extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'mi';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryNz();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule2();
    }
}
