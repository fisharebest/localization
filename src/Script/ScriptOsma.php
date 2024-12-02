<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptOsma - Representation of the Osmanya script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2024 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptOsma extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Osma';
    }

    public function numerals(): array
    {
        return ['𐒠', '𐒡', '𐒢', '𐒣', '𐒤', '𐒥', '𐒦', '𐒧', '𐒨', '𐒩'];
    }

    public function number(): string
    {
        return '260';
    }

    public function unicodeName(): ?string
    {
        return 'Osmanya';
    }
}
