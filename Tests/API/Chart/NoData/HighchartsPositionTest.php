<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\NoData;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts position test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\NoData
 * @version 5.0.14
 */
final class HighchartsPositionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\NoData\HighchartsPosition(true);

        $this->assertNull($obj1->getAlign());
        $this->assertNull($obj1->getVerticalAlign());
        $this->assertNull($obj1->getX());
        $this->assertNull($obj1->getY());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\NoData\HighchartsPosition(false);

        $this->assertEquals("center", $obj0->getAlign());
        $this->assertEquals("middle", $obj0->getVerticalAlign());
        $this->assertEquals(0, $obj0->getX());
        $this->assertEquals(0, $obj0->getY());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\NoData\HighchartsPosition(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\NoData\HighchartsPosition(true);

        $obj->setAlign("right");

        $res1 = ["align" => "right"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setVerticalAlign("bottom");

        $res2 = ["align" => "right", "verticalAlign" => "bottom"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setX(15);

        $res3 = ["align" => "right", "verticalAlign" => "bottom", "x" => 15];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setY(92);

        $res4 = ["align" => "right", "verticalAlign" => "bottom", "x" => 15, "y" => 92];
        $this->assertEquals($res4, $obj->toArray());
    }

}
