<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBali - Representation of the Balinese script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptBali extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Bali';
    }

    public function numerals()
    {
        return array('᭐', '᭑', '᭒', '᭓', '᭔', '᭕', '᭖', '᭗', '᭘', '᭙');
    }

    public function number()
    {
        return '360';
    }

    public function unicodeName()
    {
        return 'Balinese';
    }
}
