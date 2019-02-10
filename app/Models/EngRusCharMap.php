<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/*
** Using the Enum implementation for Laravel to define a mapping between
** Russian and English Characters. 
* @api getKeys(): array
* @api getValues: array
* @api getKey(string|int $value): string
* @api getValue(string $key): string|int
*
 */
final class EngRusCharMap extends Enum {

	const а = 'a';
	const б = 'b';
	const в = 'v';
	const г = 'g';
	const д = 'd';
	const е = 'e';
    const ё = 'yo';
    const ж = 'zh';
    const з = 'z';
    const и = 'i';
    const й = 'y';
    const к = 'k';
    const л = 'l';
    const м = 'm';
    const н = 'n';
    const о = 'o';
    const п = 'p';
    const р = 'r';
    const с = 's';
    const т = 't';
    const у = 'u';
    const ф = 'f';
    const х = 'kh';
    const ц = 'ts';
    const ч = 'ch';
    const ш = 'sh';
    const щ = 'sh';
    const ъ = '';
    const ы = 'y';
    const ь = '':
    const э = 'e';
    const ю = 'yu';
    const я = 'ya';
}