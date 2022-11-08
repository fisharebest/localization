<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryTr;

/**
 * Class LanguageKu - Representation of the Kurdish language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageKu extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ku';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryTr();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
