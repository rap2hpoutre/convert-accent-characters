# Convert accent characters

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
