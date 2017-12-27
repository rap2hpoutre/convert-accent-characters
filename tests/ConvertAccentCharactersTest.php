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
    public function testConversion()
    {
        $this->assertEquals('Hello', convert_accent_characters('Hello'));
        $this->assertEquals('Ca plait a sa majeste', convert_accent_characters('Ça plaît à sa majesté'));
        $this->assertEquals('Wikipedia', convert_accent_characters('Wikipédia'));
        $this->assertEquals('Strass', convert_accent_characters('Straß', 'de_DE'));
    }
}