<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptGuru - Representation of the Gurmukhi script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptGuru extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Guru';
    }

    public function numerals(): array
    {
        return ['੦', '੧', '੨', '੩', '੪', '੫', '੬', '੭', '੮', '੯'];
    }

    public function number(): string
    {
        return '310';
    }

    public function unicodeName(): ?string
    {
        return 'Gurmukhi';
    }
}
