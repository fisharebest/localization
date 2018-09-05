<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the CLDR
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
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
        $cldr = simplexml_load_file(__DIR__ . '/data/cldr-33.1/supplemental/plurals.xml');

        foreach ($cldr->xpath("/supplementalData/plurals[@type='cardinal']/pluralRules") as $plural_rule) {
            $tmp          = $plural_rule->attributes(); // For PHP5.3
            $locale_codes = explode(' ', $tmp['locales']);
            $plurals      = $plural_rule->pluralRule;
            foreach ($locale_codes as $locale_code) {
                // The following CLDR definitions/examples are incompatible with the accepted gettext ones.
                switch ($locale_code) {
                    case 'root': // This isn't a locale
                    case 'br':   // CLDR has 5 rules, whereas gettext has (0,1) (other)
                    case 'cy':   // CLDR has 5 rules, whereas gettext has (1), (2), (other), (8,11)
                    case 'fa':   // CLDR has (0,1) (other), whereas gettext has (other)
                    case 'fil':  // CLDR has a different rule from gettext
                    case 'he':   // CLDR has (1) (2) (many) (other), whereas gettext has (1) (other)
                    case 'in':   // This code (Indonesian) is deprecated. Use id.
                    case 'iw':   // This code (Hebrew) is deprecated. Use he.
                    case 'ji':   // This code (Javanese) is deprecated,  Use yi.
                    case 'jw':   // This code (Javanese) is deprecated.  Use jv.
                    case 'kw':   // CLDR has 3 rules, whereas gettext has (1), (2), (3), (other)
                    case 'lv':   // CLDR has (0) (1) (other), whereas gettext has (1) (other) (0)
                    case 'mk':   // There are lots of conflicting definitions.
                    case 'no':   // This code (Norwegian) is deprecated. Use nb or nn.
                    case 'prg':  // Same as lv
                    case 'pt':   // CLDR has the rule for pt_BR, whereas gettext has the rule for pt_PT
                    case 'se':   // CLDR has (1) (2) (other), whereas gettext has (0,1) (other)
                    case 'sh':   // This code (Serbo-croat) is deprecated
                    case 'tr':   // CLDR has (1) (other), whereas gettext has (other)
                        continue 2;
                    case 'sdh':  // TO BE IMPLEMENTED
                    case 'cs':   // 4/3
                    case 'sk':   // 4/3
                    case 'pl':   // 4/3
                    case 'be':   // 4/3
                    case 'lt':   // 4/3
                    case 'ru':   // 4/3
                    case 'uk':   // 4/3
                    case 'gv':   // 5/4
                        continue 2;
                }
                $locale = Locale::create($locale_code);

                $this->assertSame($locale->pluralRule()->plurals(), count($plurals));

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
                                
                                $this->assertSame($plural_rule, $locale->pluralRule()->plural($number), $debug);
                            }
                        }
                    }
                    ++$plural_rule;
                }
            }
        }
    }
}
