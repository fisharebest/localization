<?php namespace Fisharebest\Localization;

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
		$translation = new Translation(__DIR__ . '/../data/fish.mo');
		$translator = new Translator($translation->asArray(), new PluralRule2);

		// Simple translation
		$this->assertSame('le poisson', $translator->translate('the fish'));
		// Context-sensitive translation
		$this->assertSame('poisson', $translator->translateContext('noun', 'fish'));
		// Singular and plural
		$this->assertSame('%d poisson', $translator->plural('%d fish', '%d fishes', 0));
		$this->assertSame('%d poisson', $translator->plural('%d fish', '%d fishes', 1));
		$this->assertSame('%d poissons', $translator->plural('%d fish', '%d fishes', 2));

		// Untranslated
		$this->assertSame('FISH', $translator->translate('FISH'));
		// Untranslated context
		$this->assertSame('fish', $translator->translateContext('adjective', 'fish'));
		// Untranslated plural (uses English plural rules)
		$this->assertSame('%s fishes', $translator->plural('%s fish', '%s fishes', 0));
		$this->assertSame('%s fish', $translator->plural('%s fish', '%s fishes', 1));
		$this->assertSame('%s fishes', $translator->plural('%s fish', '%s fishes', 2));
		// Wrongly use singular as plural
		$this->assertSame('fishes', $translator->plural('fish', 'fishes', 0));
		$this->assertSame('fish', $translator->plural('fish', 'fishes', 1));
		$this->assertSame('fishes', $translator->plural('fish', 'fishes', 2));
		// Wrongly use plural as singular
		$this->assertSame('%s fish', $translator->translate('%s fish'));
	}
}
