<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSyre - Representation of the Syriac (Estrangelo variant) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptSyre extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Syre';
    }

    public function number(): string
    {
        return '138';
    }
}
