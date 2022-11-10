<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptJava - Representation of the Javanese script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptJava extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Java';
    }

    public function numerals(): array
    {
        return ['꧐', '꧑', '꧒', '꧓', '꧔', '꧕', '꧖', '꧗', '꧘', '꧙'];
    }

    public function number(): string
    {
        return '361';
    }

    public function unicodeName(): ?string
    {
        return 'Javanese';
    }
}
