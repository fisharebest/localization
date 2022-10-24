<?php

namespace Fisharebest\Localization;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the CLDR
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @coversNothing
 */
class CldrPluralRulesTest extends TestCase
{
    /**
     * Test plural rules
     *
     * @large
     */
    public function testPluralRules()
    {
        $cldr = simplexml_load_string(file_get_contents(__DIR__ . '/data/cldr-42/supplemental/plurals.xml'));

        foreach ($cldr->xpath("/supplementalData/plurals[@type='cardinal']/pluralRules") as $plural_rule) {
            $tmp          = $plural_rule->attributes(); // For PHP5.3
            $locale_codes = explode(' ', $tmp['locales']);
            $plurals      = $plural_rule->pluralRule;
            foreach ($locale_codes as $locale_code) {
                // The following CLDR definitions/examples are incompatible with the accepted gettext ones.
                switch ($locale_code) {
                    case 'root':  // This isn't a locale
                    case 'br':    // CLDR has 5 rules, whereas gettext has (0,1) (other)
                    case 'ca':    // CLDR has a third rule for multiples of 1,000,000
                    case 'cy':    // CLDR has 5 rules, whereas gettext has (1), (2), (other), (8,11)
                    case 'fil':   // CLDR has a different rule from gettext
                    case 'fr':    // CLDR has 3 rules, we have 2?
                    case 'he':    // CLDR has (1) (2) (many) (other), whereas gettext has (1) (other)
                    case 'in':    // This code (Indonesian) is deprecated. Use id.
                    case 'it':    // CLDR has 3 rules, we have 2
                    case 'iw':    // This code (Hebrew) is deprecated. Use he.
                    case 'ji':    // This code (Javanese) is deprecated, Use yi.
                    case 'jw':    // This code (Javanese) is deprecated.  Use jv.
                    case 'kw':    // CLDR has 3 rules, whereas gettext has (1), (2), (3), (other)
                    case 'lv':    // CLDR has (0) (1) (other), whereas gettext has (1) (other) (0)
                    case 'mk':    // There are lots of conflicting definitions.
                    case 'no':    // This code (Norwegian) is deprecated. Use nb or nn.
                    case 'prg':   // Same as lv
                    case 'pt':    // CLDR has a third rule for multiples of 1,000,000
                    case 'pt_PT': // CLDR has a third rule for multiples of 1,000,000
                    case 'es':    // CLDR has a third rule for multiples of 1,000,000
                    case 'se':    // CLDR has (1) (2) (other), whereas gettext has (0,1) (other)
                    case 'sh':    // This code (Serbo-croat) is deprecated
                    case 'vec':   // CLDR has a third rule for multiples of 1,000,000
                        continue 2;
                    case 'cs':   // 4/3
                    case 'sk':   // 4/3
                    case 'pl':   // 4/3
                    case 'be':   // 4/3
                    case 'lt':   // 4/3
                    case 'ru':   // 4/3
                    case 'uk':   // 4/3
                    case 'gv':   // 5/4
                        continue 2;
                    case 'sc':   // CLDR has rules for this language, but no definitions
                        continue 2;
                }
                $locale = Locale::create($locale_code);

                self::assertSame($locale->pluralRule()->plurals(), count($plurals), $locale_code);

                $plural_rule = 0;
                foreach ($plurals as $plural_examples) {
                    if (preg_match('/@integer ([^@]+)/', $plural_examples, $match)) {
                        $rules = preg_split('/[^0-9~]+/', $match[1], -1, PREG_SPLIT_NO_EMPTY);
                        foreach ($rules as $rule) {
                            if (strpos($rule, '~') !== false) {
                                list($low, $high) = explode('~', $rule);
                            } else {
                                $low  = $rule;
                                $high = $rule;
                            }

                            $low = (int) $low;
                            $high = (int) $high;

                            for ($number = $low; $number <= $high; ++$number) {
                                $debug = implode('|', array(
                                    $locale_code,
                                    $plural_rule,
                                    $rule,
                                ));

                                self::assertSame($plural_rule, $locale->pluralRule()->plural($number), $debug);
                            }
                        }
                    }
                    ++$plural_rule;
                }
            }
        }
    }
}
