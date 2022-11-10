<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBali - Representation of the Balinese script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptBali extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Bali';
    }

    public function numerals(): array
    {
        return ['᭐', '᭑', '᭒', '᭓', '᭔', '᭕', '᭖', '᭗', '᭘', '᭙'];
    }

    public function number(): string
    {
        return '360';
    }

    public function unicodeName(): ?string
    {
        return 'Balinese';
    }
}
