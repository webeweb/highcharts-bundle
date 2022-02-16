<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Line\States;

use WBW\Bundle\HighchartsBundle\Tests\AbstractTestCase;

/**
 * Highcharts hover test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Line\States
 * @version 5.0.14
 */
final class HighchartsHoverTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Line\States\HighchartsHover(true);

        $this->assertNull($obj1->getAnimation());
        $this->assertNull($obj1->getEnabled());
        $this->assertNull($obj1->getHalo());
        $this->assertNull($obj1->getLineWidth());
        $this->assertNull($obj1->getLineWidthPlus());
        $this->assertNull($obj1->getMarker());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Line\States\HighchartsHover(false);

        $this->assertEquals(["duration" => 50], $obj0->getAnimation());
        $this->assertEquals(true, $obj0->getEnabled());
        $this->assertNull($obj0->getHalo());
        $this->assertEquals(2, $obj0->getLineWidth());
        $this->assertEquals(1, $obj0->getLineWidthPlus());
        $this->assertNull($obj0->getMarker());
    }

    /**
     * Tests clear()
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Line\States\HighchartsHover(false);

        $obj->newMarker();

        $obj->clear();

        $res = ["marker" => []];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Line\States\HighchartsHover(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests newMarker()
     *
     * @return void.
     */
    public function testNewMarker() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Line\States\HighchartsHover(false);

        $res = $obj->newMarker();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Line\States\Hover\HighchartsMarker::class, $res);
    }

    /**
     * Tests toArray()
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Line\States\HighchartsHover(true);

        $obj->setAnimation(1);

        $res1 = ["animation" => 1];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setEnabled(0);

        $res2 = ["animation" => 1, "enabled" => 0];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setHalo(["halo" => "57f842286171094855e51fc3a541c1e2"]);

        $res3 = ["animation" => 1, "enabled" => 0, "halo" => ["halo" => "57f842286171094855e51fc3a541c1e2"]];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setLineWidth(100);

        $res4 = ["animation" => 1, "enabled" => 0, "halo" => ["halo" => "57f842286171094855e51fc3a541c1e2"], "lineWidth" => 100];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setLineWidthPlus(65);

        $res5 = ["animation" => 1, "enabled" => 0, "halo" => ["halo" => "57f842286171094855e51fc3a541c1e2"], "lineWidth" => 100, "lineWidthPlus" => 65];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setMarker(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Line\States\Hover\HighchartsMarker());

        $res6 = ["animation" => 1, "enabled" => 0, "halo" => ["halo" => "57f842286171094855e51fc3a541c1e2"], "lineWidth" => 100, "lineWidthPlus" => 65, "marker" => []];
        $this->assertEquals($res6, $obj->toArray());
    }

}
