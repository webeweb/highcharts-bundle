<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\YAxis;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts title test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\YAxis
 * @version 5.0.14
 */
final class HighchartsTitleTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsTitle(true);

        $this->assertNull($obj1->getAlign());
        $this->assertNull($obj1->getEnabled());
        $this->assertNull($obj1->getMargin());
        $this->assertNull($obj1->getOffset());
        $this->assertNull($obj1->getReserveSpace());
        $this->assertNull($obj1->getRotation());
        $this->assertNull($obj1->getStyle());
        $this->assertNull($obj1->getText());
        $this->assertNull($obj1->getX());
        $this->assertNull($obj1->getY());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsTitle(false);

        $this->assertEquals("middle", $obj0->getAlign());
        $this->assertEquals("middle", $obj0->getEnabled());
        $this->assertEquals(40, $obj0->getMargin());
        $this->assertNull($obj0->getOffset());
        $this->assertEquals(true, $obj0->getReserveSpace());
        $this->assertEquals(270, $obj0->getRotation());
        $this->assertEquals(["color" => "#666666"], $obj0->getStyle());
        $this->assertEquals("Values", $obj0->getText());
        $this->assertEquals(0, $obj0->getX());
        $this->assertNull($obj0->getY());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsTitle(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsTitle(true);

        $obj->setAlign("high");

        $res1 = ["align" => "high"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setEnabled("a10311459433adf322f2590a4987c423");

        $res2 = ["align" => "high", "enabled" => "a10311459433adf322f2590a4987c423"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setMargin(18);

        $res3 = ["align" => "high", "enabled" => "a10311459433adf322f2590a4987c423", "margin" => 18];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setOffset(60);

        $res4 = ["align" => "high", "enabled" => "a10311459433adf322f2590a4987c423", "margin" => 18, "offset" => 60];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setReserveSpace(1);

        $res5 = ["align" => "high", "enabled" => "a10311459433adf322f2590a4987c423", "margin" => 18, "offset" => 60, "reserveSpace" => 1];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setRotation(38);

        $res6 = ["align" => "high", "enabled" => "a10311459433adf322f2590a4987c423", "margin" => 18, "offset" => 60, "reserveSpace" => 1, "rotation" => 38];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $res7 = ["align" => "high", "enabled" => "a10311459433adf322f2590a4987c423", "margin" => 18, "offset" => 60, "reserveSpace" => 1, "rotation" => 38, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");

        $res8 = ["align" => "high", "enabled" => "a10311459433adf322f2590a4987c423", "margin" => 18, "offset" => 60, "reserveSpace" => 1, "rotation" => 38, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1"];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setX(65);

        $res9 = ["align" => "high", "enabled" => "a10311459433adf322f2590a4987c423", "margin" => 18, "offset" => 60, "reserveSpace" => 1, "rotation" => 38, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "x" => 65];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setY(0);

        $res10 = ["align" => "high", "enabled" => "a10311459433adf322f2590a4987c423", "margin" => 18, "offset" => 60, "reserveSpace" => 1, "rotation" => 38, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "x" => 65, "y" => 0];
        $this->assertEquals($res10, $obj->toArray());
    }

}
