<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\PluralRule\PluralRuleZeroOneOther;
use Fisharebest\Localization\Territory\TerritoryDe;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageKsh - Representation of the Kölsch language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageKsh extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ksh';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryDe();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRuleZeroOneOther();
    }
}
