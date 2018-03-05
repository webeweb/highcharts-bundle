<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\Exception;

use PHPUnit_Framework_TestCase;
use WBW\Bundle\HighchartsBundle\Exception\HighchartsFileNotFoundException;

/**
 * Highcharts file not found exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Exception
 * @final
 */
final class HighchartsFileNotFoundExceptionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new HighchartsFileNotFoundException("exception");

        $res = "The file \"exception\" was not found";
        $this->assertEquals($res, $obj->getMessage());
    }

}
