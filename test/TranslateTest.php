<?php namespace Fisharebest\Localization;

use Fisharebest\Localization\PluralRule\PluralRule2;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the Translator/Translation classes
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class TranslateTest extends TestCase {
	public function testMo() {
		$translation = new Translation(__DIR__ . '/data/fish.mo');
		$translator = new Translator($translation->asArray(), new PluralRule2);

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
