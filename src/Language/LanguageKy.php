<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryKg;

/**
 * Class LanguageKy - Representation of the Kirghiz language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageKy extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ky';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryKg();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
