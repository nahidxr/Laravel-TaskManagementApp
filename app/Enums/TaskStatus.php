<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class TaskStatus extends Enum
{
    const Pending =   0;
    const Ongoing =   1;
    const Done = 2;
    public static function getDescription($value): string
    {
        if ($value === self::Ongoing) {
            return 'On-going';
        }

        return parent::getDescription($value);
    }
}
