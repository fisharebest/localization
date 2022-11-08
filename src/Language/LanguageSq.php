<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryAl;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageSq - Representation of the Albanian language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageSq extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'sq';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryAl();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
