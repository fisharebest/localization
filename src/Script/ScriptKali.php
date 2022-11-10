<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptKali - Representation of the Kayah Li script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptKali extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Kali';
    }

    public function numerals(): array
    {
        return ['꤀', '꤁', '꤂', '꤃', '꤄', '꤅', '꤆', '꤇', '꤈', '꤉'];
    }

    public function number(): string
    {
        return '357';
    }

    public function unicodeName(): ?string
    {
        return 'Kayah_Li';
    }
}
