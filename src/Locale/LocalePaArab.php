<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Script\ScriptInterface;

/**
 * Class LocalePaArab
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocalePaArab extends LocalePa
{
    public function numberSymbols(): array
    {
        return array(
            self::DECIMAL => self::ARAB_DECIMAL,
        );
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::ARAB_PERCENT;
    }

    public function script(): ScriptInterface
    {
        return new ScriptArab();
    }
}
