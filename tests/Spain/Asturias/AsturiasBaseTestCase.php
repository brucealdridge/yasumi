<?php
/**
 *  This file is part of the Yasumi package.
 *
 *  Copyright (c) 2015 - 2016 AzuyaLabs
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 *  @author Sacha Telgenhof <stelgenhof@gmail.com>
 */
namespace Yasumi\Tests\Spain\Asturias;

use Yasumi\Tests\Spain\SpainBaseTestCase;
use Yasumi\Tests\YasumiBase;

/**
 * Base class for test cases of the Asturias (Spain) holiday provider.
 */
abstract class AsturiasBaseTestCase extends SpainBaseTestCase
{
    use YasumiBase;

    /**
     * Name of the region (e.g. country / state) to be tested
     */
    const REGION = 'Spain/Asturias';

    /**
     * Timezone in which this provider has holidays defined
     */
    const TIMEZONE = 'Europe/Madrid';

    /**
     * List of holidays (shortnames) that are generally expected to be defined
     */
    public static $expectedHolidays = [
        'newYearsDay',
        'epiphany',
        'valentinesDay',
        'stJosephsDay',
        'maundyThursday',
        'goodFriday',
        'easter',
        'internationalWorkersDay',
        'assumptionOfMary',
        'asturiasDay',
        'nationalDay',
        'allSaintsDay',
        'constitutionDay',
        'immaculateConception',
        'christmasDay',
    ];
}
