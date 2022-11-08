<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;

/**
 * Class LanguageVo - Representation of the Volapük language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageVo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'vo';
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
