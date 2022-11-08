<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryZm;

/**
 * Class LanguageBem - Representation of the Bemba (Zambia) language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageBem extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'bem';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryZm();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
