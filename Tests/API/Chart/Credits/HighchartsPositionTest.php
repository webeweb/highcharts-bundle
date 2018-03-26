<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Credits;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts position test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Credits
 * @version 5.0.14
 */
final class HighchartsPositionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Credits\HighchartsPosition(true);

        $this->assertNull($obj1->getAlign());
        $this->assertNull($obj1->getVerticalAlign());
        $this->assertNull($obj1->getX());
        $this->assertNull($obj1->getY());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Credits\HighchartsPosition(false);

        $this->assertEquals("right", $obj0->getAlign());
        $this->assertEquals("bottom", $obj0->getVerticalAlign());
        $this->assertEquals(-10, $obj0->getX());
        $this->assertEquals(-5, $obj0->getY());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Credits\HighchartsPosition(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Credits\HighchartsPosition(true);

        $obj->setAlign("right");

        $res1 = ["align" => "right"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setVerticalAlign("bottom");

        $res2 = ["align" => "right", "verticalAlign" => "bottom"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setX(7);

        $res3 = ["align" => "right", "verticalAlign" => "bottom", "x" => 7];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setY(88);

        $res4 = ["align" => "right", "verticalAlign" => "bottom", "x" => 7, "y" => 88];
        $this->assertEquals($res4, $obj->toArray());
    }

}
