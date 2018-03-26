<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts options3d test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Chart
 * @version 5.0.14
 */
final class HighchartsOptions3dTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d(true);

        $this->assertNull($obj1->getAlpha());
        $this->assertNull($obj1->getAxisLabelPosition());
        $this->assertNull($obj1->getBeta());
        $this->assertNull($obj1->getDepth());
        $this->assertNull($obj1->getEnabled());
        $this->assertNull($obj1->getFitToPlot());
        $this->assertNull($obj1->getFrame());
        $this->assertNull($obj1->getViewDistance());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d(false);

        $this->assertEquals(0, $obj0->getAlpha());
        $this->assertNull($obj0->getAxisLabelPosition());
        $this->assertEquals(0, $obj0->getBeta());
        $this->assertEquals(100, $obj0->getDepth());
        $this->assertEquals(false, $obj0->getEnabled());
        $this->assertEquals(true, $obj0->getFitToPlot());
        $this->assertNull($obj0->getFrame());
        $this->assertEquals(100, $obj0->getViewDistance());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d(false);

        $obj->newFrame();

        $obj->clear();

        $res = ["frame" => []];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newFrame() method.
     *
     * @return void.
     */
    public function testNewFrame() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d(false);

        $res = $obj->newFrame();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d(true);

        $obj->setAlpha(7);

        $res1 = ["alpha" => 7];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAxisLabelPosition("auto");

        $res2 = ["alpha" => 7, "axisLabelPosition" => "auto"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setBeta(89);

        $res3 = ["alpha" => 7, "axisLabelPosition" => "auto", "beta" => 89];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setDepth(72);

        $res4 = ["alpha" => 7, "axisLabelPosition" => "auto", "beta" => 89, "depth" => 72];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setEnabled(1);

        $res5 = ["alpha" => 7, "axisLabelPosition" => "auto", "beta" => 89, "depth" => 72, "enabled" => 1];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setFitToPlot(1);

        $res6 = ["alpha" => 7, "axisLabelPosition" => "auto", "beta" => 89, "depth" => 72, "enabled" => 1, "fitToPlot" => 1];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setFrame(new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame());

        $res7 = ["alpha" => 7, "axisLabelPosition" => "auto", "beta" => 89, "depth" => 72, "enabled" => 1, "fitToPlot" => 1, "frame" => []];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setViewDistance(67);

        $res8 = ["alpha" => 7, "axisLabelPosition" => "auto", "beta" => 89, "depth" => 72, "enabled" => 1, "fitToPlot" => 1, "frame" => [], "viewDistance" => 67];
        $this->assertEquals($res8, $obj->toArray());
    }

}
