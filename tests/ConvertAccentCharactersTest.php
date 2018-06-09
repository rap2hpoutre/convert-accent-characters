<?php
namespace Rap2hpoutre\ConvertAccentCharacters\Tests;

use PHPUnit\Framework\TestCase;
use function Rap2hpoutre\ConvertAccentCharacters\convert_accent_characters;

/**
 * Class ConvertAccentCharactersTest
 * @package Rap2hpoutre\ConvertAccentCharacters\Tests
 */
class ConvertAccentCharactersTest extends TestCase
{
    public function conversionDataProvider()
    {
        return [
            ['Hello', 'Hello'],
            ['Ca plait a sa majeste', 'Ça plaît à sa majesté'],
            ['Wikipedia', 'Wikipédia'],
        ];
    }

    /**
     * @dataProvider conversionDataProvider
     */
    public function testConversion($expectedString, $string)
    {
        $this->assertEquals($expectedString, convert_accent_characters($string));
    }

    public function conversionLocaleDataProvider()
    {
        return [
            ['Strass', 'Straß', 'de_DE'],
            ['Stras', 'Straß', 'da_DK'],
            ['Stras', 'Straß', 'ca'],
            ['Stras', 'Straß', 'sr_RS'],
            ['Stras', 'Straß', 'bs_BA'],
        ];
    }

    /**
     * @dataProvider conversionLocaleDataProvider
     */
    public function testConversionWithLocale($expectedString, $string, $locale)
    {
        $this->assertEquals($expectedString, convert_accent_characters($string, $locale));
    }
}
