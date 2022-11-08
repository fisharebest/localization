<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptHebr;
use Fisharebest\Localization\Script\ScriptInterface;

/**
 * Class LanguageYi - Representation of the Yiddish language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageYi extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'yi';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptHebr();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
