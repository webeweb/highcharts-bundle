<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Scatter\Marker\States;

use WBW\Bundle\HighchartsBundle\Tests\AbstractTestCase;

/**
 * Highcharts select test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Scatter\Marker\States
 * @version 5.0.14
 */
final class HighchartsSelectTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Scatter\Marker\States\HighchartsSelect(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests toArray()
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Scatter\Marker\States\HighchartsSelect(true);

        $obj->setEnabled(0);

        $res1 = ["enabled" => 0];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");

        $res2 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");

        $res3 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63"];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setLineWidth(70);

        $res4 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 70];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setRadius(49);

        $res5 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 70, "radius" => 49];
        $this->assertEquals($res5, $obj->toArray());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Scatter\Marker\States\HighchartsSelect(true);

        $this->assertNull($obj1->getEnabled());
        $this->assertNull($obj1->getFillColor());
        $this->assertNull($obj1->getLineColor());
        $this->assertNull($obj1->getLineWidth());
        $this->assertNull($obj1->getRadius());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Scatter\Marker\States\HighchartsSelect(false);

        $this->assertEquals(true, $obj0->getEnabled());
        $this->assertNull($obj0->getFillColor());
        $this->assertEquals("#000000", $obj0->getLineColor());
        $this->assertEquals(0, $obj0->getLineWidth());
        $this->assertNull($obj0->getRadius());
    }

}
