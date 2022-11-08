<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\PluralRule\PluralRuleUnknown;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\Territory001;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class AbstractLanguage - Representation of a language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
abstract class AbstractLanguage
{
    /**
     * @return TerritoryInterface
     */
    public function defaultTerritory(): TerritoryInterface
    {
        return new Territory001();
    }

    /**
     * @return ScriptInterface
     */
    public function defaultScript(): ScriptInterface
    {
        return new ScriptLatn();
    }

    /**
     * @return PluralRuleInterface
     */
    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRuleUnknown();
    }
}
