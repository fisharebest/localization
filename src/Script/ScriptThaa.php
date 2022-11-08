<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptThaa - Representation of the Thaana script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptThaa extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Thaa';
    }

    public function number(): string
    {
        return '170';
    }

    public function unicodeName(): ?string
    {
        return 'Thaana';
    }
}
