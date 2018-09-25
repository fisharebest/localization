<?php

namespace Fisharebest\Localization;

use Fisharebest\Localization\PluralRule\PluralRule2;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the Translator/Translation classes
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class TranslateTest extends TestCase
{
    /**
     * Test invalid translation file
     */
    public function testInvalidPhpFile()
    {
        $translation = new Translation(__DIR__ . '/data/invalid.php');
        $translator  = new Translator($translation->asArray(), new PluralRule2());

        // Not translated
        $this->assertSame('the fish', $translator->translate('the fish'));
    }

    /**
     * Test translation using a .CSV data source
     */
    public function testCsv()
    {
        $translation = new Translation(__DIR__ . '/data/fish.csv');
        $translator  = new Translator($translation->asArray(), new PluralRule2());

        // Simple translation
        $this->assertSame('le poisson', $translator->translate('the fish'));
        // Context-sensitive translation
        $this->assertSame('poisson', $translator->translateContext('noun', 'fish'));
        // Singular and plural
        $this->assertSame('%d poisson', $translator->translatePlural('%d fish', '%d fishes', 0));
        $this->assertSame('%d poisson', $translator->translatePlural('%d fish', '%d fishes', 1));
        $this->assertSame('%d poissons', $translator->translatePlural('%d fish', '%d fishes', 2));

        // Untranslated
        $this->assertSame('FISH', $translator->translate('FISH'));
        // Untranslated context
        $this->assertSame('fish', $translator->translateContext('adjective', 'fish'));
        // Untranslated plural (uses English plural rules)
        $this->assertSame('%s fishes', $translator->translatePlural('%s fish', '%s fishes', 0));
        $this->assertSame('%s fish', $translator->translatePlural('%s fish', '%s fishes', 1));
        $this->assertSame('%s fishes', $translator->translatePlural('%s fish', '%s fishes', 2));
        // Wrongly use singular as plural
        $this->assertSame('fishes', $translator->translatePlural('fish', 'fishes', 0));
        $this->assertSame('fish', $translator->translatePlural('fish', 'fishes', 1));
        $this->assertSame('fishes', $translator->translatePlural('fish', 'fishes', 2));
        // Wrongly use plural as singular
        $this->assertSame('%s fish', $translator->translate('%s fish'));
    }

    /**
     * Test translation with invalid plural.
     */
    public function testInvalidPlural()
    {
        $translation = new Translation(__DIR__ . '/data/fish.bad-plural.php');
        $translator  = new Translator($translation->asArray(), new PluralRule2());

        // The plural translation does not exist, so untranslated (using English rules)
        $this->assertSame('%d fishes', $translator->translatePlural('%d fish', '%d fishes', 0));
        $this->assertSame('%d fish', $translator->translatePlural('%d fish', '%d fishes', 1));
        $this->assertSame('%d fishes', $translator->translatePlural('%d fish', '%d fishes', 2));
    }

    /**
     * Test translation using a .MO data source
     */
    public function testMo()
    {
        $translation = new Translation(__DIR__ . '/data/fish.mo');
        $translator  = new Translator($translation->asArray(), new PluralRule2());

        // Simple translation
        $this->assertSame('le poisson', $translator->translate('the fish'));
        // Context-sensitive translation
        $this->assertSame('poisson', $translator->translateContext('noun', 'fish'));
        // Singular and plural
        $this->assertSame('%d poisson', $translator->translatePlural('%d fish', '%d fishes', 0));
        $this->assertSame('%d poisson', $translator->translatePlural('%d fish', '%d fishes', 1));
        $this->assertSame('%d poissons', $translator->translatePlural('%d fish', '%d fishes', 2));

        // Untranslated
        $this->assertSame('FISH', $translator->translate('FISH'));
        // Untranslated context
        $this->assertSame('fish', $translator->translateContext('adjective', 'fish'));
        // Untranslated plural (uses English plural rules)
        $this->assertSame('%s fishes', $translator->translatePlural('%s fish', '%s fishes', 0));
        $this->assertSame('%s fish', $translator->translatePlural('%s fish', '%s fishes', 1));
        $this->assertSame('%s fishes', $translator->translatePlural('%s fish', '%s fishes', 2));
        // Wrongly use singular as plural
        $this->assertSame('fishes', $translator->translatePlural('fish', 'fishes', 0));
        $this->assertSame('fish', $translator->translatePlural('fish', 'fishes', 1));
        $this->assertSame('fishes', $translator->translatePlural('fish', 'fishes', 2));
        // Wrongly use plural as singular
        $this->assertSame('%s fish', $translator->translate('%s fish'));
    }

    /**
     * Test translation using a big-endian .MO data source
     */
    public function testMoBigEndian()
    {
        $translation = new Translation(__DIR__ . '/data/fish.big-endian.mo');
        $translator  = new Translator($translation->asArray(), new PluralRule2());

        // Simple translation
        $this->assertSame('le poisson', $translator->translate('the fish'));
        // Context-sensitive translation
        $this->assertSame('poisson', $translator->translateContext('noun', 'fish'));
        // Singular and plural
        $this->assertSame('%d poisson', $translator->translatePlural('%d fish', '%d fishes', 0));
        $this->assertSame('%d poisson', $translator->translatePlural('%d fish', '%d fishes', 1));
        $this->assertSame('%d poissons', $translator->translatePlural('%d fish', '%d fishes', 2));

        // Untranslated
        $this->assertSame('FISH', $translator->translate('FISH'));
        // Untranslated context
        $this->assertSame('fish', $translator->translateContext('adjective', 'fish'));
        // Untranslated plural (uses English plural rules)
        $this->assertSame('%s fishes', $translator->translatePlural('%s fish', '%s fishes', 0));
        $this->assertSame('%s fish', $translator->translatePlural('%s fish', '%s fishes', 1));
        $this->assertSame('%s fishes', $translator->translatePlural('%s fish', '%s fishes', 2));
        // Wrongly use singular as plural
        $this->assertSame('fishes', $translator->translatePlural('fish', 'fishes', 0));
        $this->assertSame('fish', $translator->translatePlural('fish', 'fishes', 1));
        $this->assertSame('fishes', $translator->translatePlural('fish', 'fishes', 2));
        // Wrongly use plural as singular
        $this->assertSame('%s fish', $translator->translate('%s fish'));
    }

    /**
     * Test translation using an invalid .MO data source
     *
     * @expectedException \InvalidArgumentException
     */
    public function testMoInvalid()
    {
        new Translation(__DIR__ . '/data/fish.invalid.mo');
    }

    /**
     * Test translation using a .PHP data source
     */
    public function testPhp()
    {
        $translation = new Translation(__DIR__ . '/data/fish.php');
        $translator  = new Translator($translation->asArray(), new PluralRule2());

        // Simple translation
        $this->assertSame('le poisson', $translator->translate('the fish'));
        // Context-sensitive translation
        $this->assertSame('poisson', $translator->translateContext('noun', 'fish'));
        // Singular and plural
        $this->assertSame('%d poisson', $translator->translatePlural('%d fish', '%d fishes', 0));
        $this->assertSame('%d poisson', $translator->translatePlural('%d fish', '%d fishes', 1));
        $this->assertSame('%d poissons', $translator->translatePlural('%d fish', '%d fishes', 2));

        // Untranslated
        $this->assertSame('FISH', $translator->translate('FISH'));
        // Untranslated context
        $this->assertSame('fish', $translator->translateContext('adjective', 'fish'));
        // Untranslated plural (uses English plural rules)
        $this->assertSame('%s fishes', $translator->translatePlural('%s fish', '%s fishes', 0));
        $this->assertSame('%s fish', $translator->translatePlural('%s fish', '%s fishes', 1));
        $this->assertSame('%s fishes', $translator->translatePlural('%s fish', '%s fishes', 2));
        // Wrongly use singular as plural
        $this->assertSame('fishes', $translator->translatePlural('fish', 'fishes', 0));
        $this->assertSame('fish', $translator->translatePlural('fish', 'fishes', 1));
        $this->assertSame('fishes', $translator->translatePlural('fish', 'fishes', 2));
        // Wrongly use plural as singular
        $this->assertSame('%s fish', $translator->translate('%s fish'));
    }
}
