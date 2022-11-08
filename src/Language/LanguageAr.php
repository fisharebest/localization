<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule12;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Script\ScriptInterface;

/**
 * Class LanguageAr - Representation of the Arabic language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageAr extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ar';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptArab();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule12();
    }
}
