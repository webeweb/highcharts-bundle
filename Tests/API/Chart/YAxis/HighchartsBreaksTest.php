<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\YAxis;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts breaks test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\YAxis
 * @version 5.0.14
 */
final class HighchartsBreaksTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsBreaks(true);

        $this->assertEquals(null, $obj1->getBreakSize(), "The method getBreakSize() does not return the expected value");
        $this->assertEquals(null, $obj1->getFrom(), "The method getFrom() does not return the expected value");
        $this->assertEquals(null, $obj1->getRepeat(), "The method getRepeat() does not return the expected value");
        $this->assertEquals(null, $obj1->getTo(), "The method getTo() does not return the expected value");

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsBreaks(false);

        $this->assertEquals(0, $obj0->getBreakSize(), "The method getBreakSize() does not return the expected value");
        $this->assertEquals(null, $obj0->getFrom(), "The method getFrom() does not return the expected value");
        $this->assertEquals(0, $obj0->getRepeat(), "The method getRepeat() does not return the expected value");
        $this->assertEquals(null, $obj0->getTo(), "The method getTo() does not return the expected value");
    }

    /**
     * Test the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsBreaks(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Test the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsBreaks(true);

        $obj->setBreakSize(78);

        $res1 = ["breakSize" => 78];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with break size");

        $obj->setFrom(41);

        $res2 = ["breakSize" => 78, "from" => 41];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with from");

        $obj->setRepeat(1);

        $res3 = ["breakSize" => 78, "from" => 41, "repeat" => 1];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with repeat");

        $obj->setTo(2);

        $res4 = ["breakSize" => 78, "from" => 41, "repeat" => 1, "to" => 2];
        $this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with to");
    }

}
