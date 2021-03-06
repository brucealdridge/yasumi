<?php declare(strict_types=1);
/**
 * This file is part of the Yasumi package.
 *
 * Copyright (c) 2015 - 2019 AzuyaLabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Sacha Telgenhof <me@sachatelgenhof.com>
 */

namespace Yasumi\tests\Netherlands;

use DateTime;
use DateTimeZone;
use Exception;
use InvalidArgumentException;
use PHPUnit_Framework_AssertionFailedError;
use ReflectionException;
use RuntimeException;
use Yasumi\Exception\UnknownLocaleException;
use Yasumi\Holiday;
use Yasumi\tests\YasumiTestCaseInterface;

/**
 * Class for testing Carnival in the Netherlands.
 */
class thirdCarnivalDay extends NetherlandsBaseTestCase implements YasumiTestCaseInterface
{

    /**
     * The name of the holiday to be tested
     */
    public const HOLIDAY = 'thirdCarnivalDay';

    /**
     * Tests the holiday defined in this test.
     *
     * @throws UnknownLocaleException
     * @throws InvalidArgumentException
     * @throws PHPUnit_Framework_AssertionFailedError
     * @throws RuntimeException
     * @throws ReflectionException
     * @throws Exception
     */
    public function testHoliday()
    {
        $year = 2015;
        $this->assertHoliday(
            self::REGION,
            self::HOLIDAY,
            $year,
            new DateTime("$year-2-17", new DateTimeZone(self::TIMEZONE))
        );
    }

    /**
     * Tests type of the holiday defined in this test.
     *
     * @throws InvalidArgumentException
     * @throws PHPUnit_Framework_AssertionFailedError
     * @throws RuntimeException
     * @throws UnknownLocaleException
     * @throws ReflectionException
     */
    public function testHolidayType(): void
    {
        $this->assertHolidayType(self::REGION, self::HOLIDAY, $this->generateRandomYear(), Holiday::TYPE_OBSERVANCE);
    }

    /**
     * Tests the translated name of the holiday defined in this test.
     *
     * @throws InvalidArgumentException
     * @throws PHPUnit_Framework_AssertionFailedError
     * @throws RuntimeException
     * @throws UnknownLocaleException
     * @throws ReflectionException
     */
    public function testTranslation(): void
    {
        $this->assertTranslatedHolidayName(
            self::REGION,
            self::HOLIDAY,
            $this->generateRandomYear(),
            [self::LOCALE => 'Carnaval']
        );
    }
}
