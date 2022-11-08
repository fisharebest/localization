<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryZa;

/**
 * Class LanguageAf - Representation of the Afrikaans language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageAf extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'af';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryZa();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
