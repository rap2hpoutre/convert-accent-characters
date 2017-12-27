# Convert accent characters

[![Packagist](https://img.shields.io/packagist/v/rap2hpoutre/convert-accent-characters.svg)](https://packagist.org/packages/rap2hpoutre/convert-accent-characters)
[![Packagist](https://img.shields.io/packagist/l/rap2hpoutre/convert-accent-characters.svg)](https://packagist.org/packages/rap2hpoutre/convert-accent-characters)
[![Build Status](https://travis-ci.org/rap2hpoutre/convert-accent-characters.svg?branch=master)](https://travis-ci.org/rap2hpoutre/convert-accent-characters)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/rap2hpoutre/convert-accent-characters/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/rap2hpoutre/convert-accent-characters/?branch=master)

Converts all UTF-8 accent characters to ASCII characters.

## Installation

```bash
composer require rap2hpoutre/convert-accent-characters
```

## Usage

```php
use function Rap2hpoutre\ConvertAccentCharacters\convert_accent_characters;

echo convert_accent_characters('Ça plaît à sa majesté');

// echo "Ca plait a sa majeste"
```
