<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBopo - Representation of the Bopomofo script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptBopo extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Bopo';
    }

    public function number(): string
    {
        return '285';
    }

    public function unicodeName(): ?string
    {
        return 'Bopomofo';
    }
}
