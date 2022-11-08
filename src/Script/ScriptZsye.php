<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptZsye - Representation of the Zsye script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptZsye extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Zsye';
    }

    public function number(): string
    {
        return '993';
    }
}
