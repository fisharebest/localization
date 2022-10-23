<?php

namespace Fisharebest\Localization;

use DomainException;
use Fisharebest\Localization\Locale\LocaleEnAu;
use Fisharebest\Localization\Locale\LocaleEnGb;
use Fisharebest\Localization\Locale\LocaleEnUs;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the AbstractLocale class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleTest extends TestCase
{
    /**
     * Test the comparator
     */
    public function testCompare()
    {
        // American English, Australian English, British English
        self::assertLessThan(0, Locale::compare(new LocaleEnAU(), new LocaleEnGb()));
        self::assertLessThan(0, Locale::compare(new LocaleEnUs(), new LocaleEnAu()));
        self::assertLessThan(0, Locale::compare(new LocaleEnUs(), new LocaleEnGb()));

        self::assertEquals(0, Locale::compare(new LocaleEnAu(), new LocaleEnAu()));
        self::assertEquals(0, Locale::compare(new LocaleEnGb(), new LocaleEnGb()));
        self::assertEquals(0, Locale::compare(new LocaleEnUs(), new LocaleEnUs()));

        self::assertGreaterThan(0, Locale::compare(new LocaleEnAu(), new LocaleEnUs()));
        self::assertGreaterThan(0, Locale::compare(new LocaleEnGb(), new LocaleEnUs()));
        self::assertGreaterThan(0, Locale::compare(new LocaleEnGb(), new LocaleEnAu()));
    }

    /**
     * Test the comparator
     *
     * @medium
     */
    public function testCompareAll()
    {
        $array = array_map(function ($x) {
            $class = __NAMESPACE__ . '\Locale\\' . basename($x, '.php');

            return new $class();
        }, preg_grep('/Abstract|Interface/', glob(__DIR__ . '/../src/Locale/Locale??*.php'), PREG_GREP_INVERT));

        usort($array, __NAMESPACE__ . '\Locale::compare');
        self::assertNotEmpty($array);
        self::assertTrue(is_array($array));
    }

    /**
     * Test creating valid locales
     */
    public function testCreateValidLocale()
    {
        $locale1 = Locale::create('en-GB');
        $locale2 = Locale::create('en_GB');
        $locale3 = Locale::create('En-gB');

        self::assertinstanceof(get_class(new LocaleEnGb()), $locale1);
        self::assertinstanceof(get_class(new LocaleEnGb()), $locale2);
        self::assertinstanceof(get_class(new LocaleEnGb()), $locale3);
    }

    /**
     * Test creating locales
     *
     * @return void
     */
    public function testCreateInvalidLocale()
    {
        try {
            Locale::create('xxx');

            self::fail();
        } catch (DomainException $ex) {
            self::assertTrue(true);
        }
    }

    /**
     * Test language negotiation
     */
    public function testHttpAcceptLanguage()
    {
        $available = array(
            Locale::create('de'),
            Locale::create('en'),
            Locale::create('fr'),
            Locale::create('it'),
        );
        $server    = array('HTTP_ACCEPT_LANGUAGE' => 'it;q=0.8,de,fr,ar');
        $default   = Locale::create('en-US');
        $locale    = Locale::httpAcceptLanguage($server, $available, $default);

        self::assertEquals(Locale::create('de'), $locale);
    }

    /**
     * Test language negotiation
     */
    public function testHttpAcceptLanguageNoneMatching()
    {
        $available = array(
            Locale::create('de'),
            Locale::create('en'),
            Locale::create('fr'),
            Locale::create('it'),
        );
        $server    = array('HTTP_ACCEPT_LANGUAGE' => 'he;q=0.8,pl,ru,ar');
        $default   = Locale::create('en-US');
        $locale    = Locale::httpAcceptLanguage($server, $available, $default);

        self::assertEquals($default, $locale);
    }

    /**
     * Test language negotiation
     */
    public function testHttpAcceptLanguageDowngrade()
    {
        $available = array(
            Locale::create('de'),
            Locale::create('en'),
            Locale::create('fr'),
            Locale::create('it'),
        );
        $server    = array('HTTP_ACCEPT_LANGUAGE' => 'de-DE');
        $default   = Locale::create('en-US');
        $locale    = Locale::httpAcceptLanguage($server, $available, $default);

        self::assertEquals(Locale::create('de'), $locale);
    }

    /**
     * Test language negotiation
     */
    public function testHttpAcceptLanguageDoubleDowngrade()
    {
        $available = array(
            Locale::create('zh'),
        );
        $server    = array('HTTP_ACCEPT_LANGUAGE' => 'zh-Hans-CN');
        $default   = Locale::create('en-US');
        $locale    = Locale::httpAcceptLanguage($server, $available, $default);

        self::assertEquals(Locale::create('zh'), $locale);
    }

    /**
     * Test language negotiation
     */
    public function testHttpAcceptChinese()
    {
        $available = array(
            Locale::create('zh-Hans'),
            Locale::create('zh-Hant'),
            Locale::create('en-US'),
        );

        $default   = Locale::create('en-US');

        $server    = array('HTTP_ACCEPT_LANGUAGE' => 'zh-CN');
        $locale    = Locale::httpAcceptLanguage($server, $available, $default);
        self::assertEquals(Locale::create('zh-Hans'), $locale);

        $server    = array('HTTP_ACCEPT_LANGUAGE' => 'zh-SG');
        $locale    = Locale::httpAcceptLanguage($server, $available, $default);
        self::assertEquals(Locale::create('zh-Hans'), $locale);

        $server    = array('HTTP_ACCEPT_LANGUAGE' => 'zh-HK');
        $locale    = Locale::httpAcceptLanguage($server, $available, $default);
        self::assertEquals(Locale::create('zh-Hant'), $locale);

        $server    = array('HTTP_ACCEPT_LANGUAGE' => 'zh-MO');
        $locale    = Locale::httpAcceptLanguage($server, $available, $default);
        self::assertEquals(Locale::create('zh-Hant'), $locale);

        $server    = array('HTTP_ACCEPT_LANGUAGE' => 'zh-TW');
        $locale    = Locale::httpAcceptLanguage($server, $available, $default);
        self::assertEquals(Locale::create('zh-Hant'), $locale);

        // google: ZH-CN，ZH; Q = 0.9
        $server    = array('HTTP_ACCEPT_LANGUAGE' => 'ZH-CN，ZH; Q = 0.9');
        $locale    = Locale::httpAcceptLanguage($server, $available, $default);
        self::assertEquals(Locale::create('zh-Hans'), $locale);

        // QQ移动浏览器: zh-CN，zh-CN; q = 0.8，zh-CN; q = 0.6
        $server    = array('HTTP_ACCEPT_LANGUAGE' => 'zh-CN，zh-CN; q = 0.8，zh-CN; q = 0.6');
        $locale    = Locale::httpAcceptLanguage($server, $available, $default);
        self::assertEquals(Locale::create('zh-Hans'), $locale);

        // 华为移动浏览器: zh-CN，zh-CN ; q = 0.8，en-US; q = 0.6
        $server    = array('HTTP_ACCEPT_LANGUAGE' => 'zh-CN，zh-CN ; q = 0.8，en-US; q = 0.6');
        $locale    = Locale::httpAcceptLanguage($server, $available, $default);
        self::assertEquals(Locale::create('zh-Hans'), $locale);

        // UC Mobile Brower: zh-Hans-CN，en-US; q = 0.8
        $server    = array('HTTP_ACCEPT_LANGUAGE' => 'zh-Hans-CN，en-US; q = 0.8');
        $locale    = Locale::httpAcceptLanguage($server, $available, $default);
        self::assertEquals(Locale::create('zh-Hans'), $locale);

        // Baidu Mobile Brower: zh-CN ，EN-US; q = 0.9
        $server    = array('HTTP_ACCEPT_LANGUAGE' => 'zh-CN ，EN-US; q = 0.9');
        $locale    = Locale::httpAcceptLanguage($server, $available, $default);
        self::assertEquals(Locale::create('zh-Hans'), $locale);
    }

    /**
     * Test language negotiation
     */
    public function testHttpAcceptLanguageNoneSelected()
    {
        $available = array();
        $server    = array('HTTP_ACCEPT_LANGUAGE' => 'he;q=0.8,pl,ru,ar');
        $default   = Locale::create('en-US');
        $locale    = Locale::httpAcceptLanguage($server, $available, $default);

        self::assertEquals($default, $locale);
    }
}
