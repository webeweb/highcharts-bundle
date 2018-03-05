<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts z axis test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsZAxisTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis(true);

        $this->assertEquals(null, $obj1->getAllowDecimals());
        $this->assertEquals(null, $obj1->getAlternateGridColor());
        $this->assertEquals(null, $obj1->getCategories());
        $this->assertEquals(null, $obj1->getCeiling());
        $this->assertEquals(null, $obj1->getClassName());
        $this->assertEquals(null, $obj1->getCrosshair());
        $this->assertEquals(null, $obj1->getDateTimeLabelFormats());
        $this->assertEquals(null, $obj1->getDescription());
        $this->assertEquals(null, $obj1->getEndOnTick());
        $this->assertEquals(null, $obj1->getEvents());
        $this->assertEquals(null, $obj1->getFloor());
        $this->assertEquals(null, $obj1->getGridLineColor());
        $this->assertEquals(null, $obj1->getGridLineDashStyle());
        $this->assertEquals(null, $obj1->getGridLineWidth());
        $this->assertEquals(null, $obj1->getGridZIndex());
        $this->assertEquals(null, $obj1->getId());
        $this->assertEquals(null, $obj1->getLabels());
        $this->assertEquals(null, $obj1->getLineColor());
        $this->assertEquals(null, $obj1->getLineWidth());
        $this->assertEquals(null, $obj1->getLinkedTo());
        $this->assertEquals(null, $obj1->getMax());
        $this->assertEquals(null, $obj1->getMaxPadding());
        $this->assertEquals(null, $obj1->getMaxZoom());
        $this->assertEquals(null, $obj1->getMin());
        $this->assertEquals(null, $obj1->getMinPadding());
        $this->assertEquals(null, $obj1->getMinRange());
        $this->assertEquals(null, $obj1->getMinTickInterval());
        $this->assertEquals(null, $obj1->getMinorGridLineColor());
        $this->assertEquals(null, $obj1->getMinorGridLineDashStyle());
        $this->assertEquals(null, $obj1->getMinorGridLineWidth());
        $this->assertEquals(null, $obj1->getMinorTickColor());
        $this->assertEquals(null, $obj1->getMinorTickInterval());
        $this->assertEquals(null, $obj1->getMinorTickLength());
        $this->assertEquals(null, $obj1->getMinorTickPosition());
        $this->assertEquals(null, $obj1->getMinorTickWidth());
        $this->assertEquals(null, $obj1->getOffset());
        $this->assertEquals(null, $obj1->getOpposite());
        $this->assertEquals(null, $obj1->getPlotBands());
        $this->assertEquals(null, $obj1->getPlotLines());
        $this->assertEquals(null, $obj1->getReversed());
        $this->assertEquals(null, $obj1->getShowEmpty());
        $this->assertEquals(null, $obj1->getShowFirstLabel());
        $this->assertEquals(null, $obj1->getShowLastLabel());
        $this->assertEquals(null, $obj1->getSoftMax());
        $this->assertEquals(null, $obj1->getSoftMin());
        $this->assertEquals(null, $obj1->getStartOfWeek());
        $this->assertEquals(null, $obj1->getStartOnTick());
        $this->assertEquals(null, $obj1->getTickAmount());
        $this->assertEquals(null, $obj1->getTickColor());
        $this->assertEquals(null, $obj1->getTickInterval());
        $this->assertEquals(null, $obj1->getTickLength());
        $this->assertEquals(null, $obj1->getTickPixelInterval());
        $this->assertEquals(null, $obj1->getTickPosition());
        $this->assertEquals(null, $obj1->getTickPositioner());
        $this->assertEquals(null, $obj1->getTickPositions());
        $this->assertEquals(null, $obj1->getTickWidth());
        $this->assertEquals(null, $obj1->getTickmarkPlacement());
        $this->assertEquals(null, $obj1->getTitle());
        $this->assertEquals(null, $obj1->getType());
        $this->assertEquals(null, $obj1->getUniqueNames());
        $this->assertEquals(null, $obj1->getUnits());
        $this->assertEquals(null, $obj1->getVisible());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis(false);

        $this->assertEquals(true, $obj0->getAllowDecimals());
        $this->assertEquals(null, $obj0->getAlternateGridColor());
        $this->assertEquals(null, $obj0->getCategories());
        $this->assertEquals(null, $obj0->getCeiling());
        $this->assertEquals(null, $obj0->getClassName());
        $this->assertEquals(null, $obj0->getCrosshair());
        $this->assertEquals(null, $obj0->getDateTimeLabelFormats());
        $this->assertEquals(null, $obj0->getDescription());
        $this->assertEquals(false, $obj0->getEndOnTick());
        $this->assertEquals(null, $obj0->getEvents());
        $this->assertEquals(null, $obj0->getFloor());
        $this->assertEquals("#e6e6e6", $obj0->getGridLineColor());
        $this->assertEquals("Solid", $obj0->getGridLineDashStyle());
        $this->assertEquals(0, $obj0->getGridLineWidth());
        $this->assertEquals(1, $obj0->getGridZIndex());
        $this->assertEquals(null, $obj0->getId());
        $this->assertEquals(null, $obj0->getLabels());
        $this->assertEquals("#ccd6eb", $obj0->getLineColor());
        $this->assertEquals(1, $obj0->getLineWidth());
        $this->assertEquals(null, $obj0->getLinkedTo());
        $this->assertEquals(null, $obj0->getMax());
        $this->assertEquals(0.01, $obj0->getMaxPadding());
        $this->assertEquals(null, $obj0->getMaxZoom());
        $this->assertEquals(null, $obj0->getMin());
        $this->assertEquals(0.01, $obj0->getMinPadding());
        $this->assertEquals(null, $obj0->getMinRange());
        $this->assertEquals(null, $obj0->getMinTickInterval());
        $this->assertEquals("#f2f2f2", $obj0->getMinorGridLineColor());
        $this->assertEquals("Solid", $obj0->getMinorGridLineDashStyle());
        $this->assertEquals(1, $obj0->getMinorGridLineWidth());
        $this->assertEquals("#999999", $obj0->getMinorTickColor());
        $this->assertEquals(null, $obj0->getMinorTickInterval());
        $this->assertEquals(2, $obj0->getMinorTickLength());
        $this->assertEquals("outside", $obj0->getMinorTickPosition());
        $this->assertEquals(0, $obj0->getMinorTickWidth());
        $this->assertEquals(0, $obj0->getOffset());
        $this->assertEquals(false, $obj0->getOpposite());
        $this->assertEquals(null, $obj0->getPlotBands());
        $this->assertEquals(null, $obj0->getPlotLines());
        $this->assertEquals(false, $obj0->getReversed());
        $this->assertEquals(true, $obj0->getShowEmpty());
        $this->assertEquals(true, $obj0->getShowFirstLabel());
        $this->assertEquals(true, $obj0->getShowLastLabel());
        $this->assertEquals(null, $obj0->getSoftMax());
        $this->assertEquals(null, $obj0->getSoftMin());
        $this->assertEquals(1, $obj0->getStartOfWeek());
        $this->assertEquals(false, $obj0->getStartOnTick());
        $this->assertEquals(null, $obj0->getTickAmount());
        $this->assertEquals("#ccd6eb", $obj0->getTickColor());
        $this->assertEquals(null, $obj0->getTickInterval());
        $this->assertEquals(10, $obj0->getTickLength());
        $this->assertEquals(null, $obj0->getTickPixelInterval());
        $this->assertEquals("outside", $obj0->getTickPosition());
        $this->assertEquals(null, $obj0->getTickPositioner());
        $this->assertEquals(null, $obj0->getTickPositions());
        $this->assertEquals(1, $obj0->getTickWidth());
        $this->assertEquals(null, $obj0->getTickmarkPlacement());
        $this->assertEquals(null, $obj0->getTitle());
        $this->assertEquals("linear", $obj0->getType());
        $this->assertEquals(true, $obj0->getUniqueNames());
        $this->assertEquals(null, $obj0->getUnits());
        $this->assertEquals(true, $obj0->getVisible());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis(false);

        $obj->newCrosshair();
        $obj->newEvents();
        $obj->newLabels();
        $obj->newTitle();

        $obj->clear();

        $res = ["crosshair" => [], "events" => [], "labels" => [], "title" => []];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newCrosshair() method.
     *
     * @return void.
     */
    public function testNewCrosshair() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis(false);

        $res = $obj->newCrosshair();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsCrosshair::class, $res);
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsEvents::class, $res);
    }

    /**
     * Tests the newLabels() method.
     *
     * @return void.
     */
    public function testNewLabels() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis(false);

        $res = $obj->newLabels();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsLabels::class, $res);
    }

    /**
     * Tests the newTitle() method.
     *
     * @return void.
     */
    public function testNewTitle() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis(false);

        $res = $obj->newTitle();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsTitle::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis(true);

        $obj->setAllowDecimals(0);

        $res1 = ["allowDecimals" => 0];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAlternateGridColor("e4c3a98e933a4f898d10c74d6b0cc3e9");

        $res2 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setCategories(["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"]);

        $res3 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"]];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setCeiling(9);

        $res4 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res5 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setCrosshair(new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsCrosshair());

        $res6 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => []];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setDateTimeLabelFormats(["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]);

        $res7 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res8 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setEndOnTick(1);

        $res9 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsEvents());

        $res10 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => []];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setFloor(78);

        $res11 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setGridLineColor("fa817119e014d62cd3eeb4aef3821870");

        $res12 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870"];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setGridLineDashStyle("LongDashDotDot");

        $res13 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot"];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setGridLineWidth(21);

        $res14 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setGridZIndex(15);

        $res15 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setId("b80bb7740288fda1f201890375a60c8f");

        $res16 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f"];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsLabels());

        $res17 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => []];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");

        $res18 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63"];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setLineWidth(4);

        $res19 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setLinkedTo(60);

        $res20 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setMax(84);

        $res21 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setMaxPadding(6);

        $res22 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setMaxZoom(71);

        $res23 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setMin(50);

        $res24 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setMinPadding(49);

        $res25 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setMinRange(67);

        $res26 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setMinTickInterval(10);

        $res27 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10];
        $this->assertEquals($res27, $obj->toArray());

        $obj->setMinorGridLineColor("02d67903f43b194a260f6e05958c6f60");

        $res28 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60"];
        $this->assertEquals($res28, $obj->toArray());

        $obj->setMinorGridLineDashStyle("LongDashDotDot");

        $res29 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot"];
        $this->assertEquals($res29, $obj->toArray());

        $obj->setMinorGridLineWidth(26);

        $res30 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26];
        $this->assertEquals($res30, $obj->toArray());

        $obj->setMinorTickColor("58f14daeca50e29794caa541286c45b5");

        $res31 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5"];
        $this->assertEquals($res31, $obj->toArray());

        $obj->setMinorTickInterval("bec8a7be3cd5e2a8eff4a3ee2f5c7e2d");

        $res32 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d"];
        $this->assertEquals($res32, $obj->toArray());

        $obj->setMinorTickLength(48);

        $res33 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48];
        $this->assertEquals($res33, $obj->toArray());

        $obj->setMinorTickPosition("outside");

        $res34 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside"];
        $this->assertEquals($res34, $obj->toArray());

        $obj->setMinorTickWidth(83);

        $res35 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83];
        $this->assertEquals($res35, $obj->toArray());

        $obj->setOffset(75);

        $res36 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75];
        $this->assertEquals($res36, $obj->toArray());

        $obj->setOpposite(1);

        $res37 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1];
        $this->assertEquals($res37, $obj->toArray());

        $obj->setPlotBands(["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"]);

        $res38 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"]];
        $this->assertEquals($res38, $obj->toArray());

        $obj->setPlotLines(["plotLines" => "ca27823684c96816234d7d97344db89c"]);

        $res39 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"]];
        $this->assertEquals($res39, $obj->toArray());

        $obj->setReversed(0);

        $res40 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0];
        $this->assertEquals($res40, $obj->toArray());

        $obj->setShowEmpty(1);

        $res41 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1];
        $this->assertEquals($res41, $obj->toArray());

        $obj->setShowFirstLabel(0);

        $res42 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0];
        $this->assertEquals($res42, $obj->toArray());

        $obj->setShowLastLabel(1);

        $res43 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1];
        $this->assertEquals($res43, $obj->toArray());

        $obj->setSoftMax(27);

        $res44 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 27];
        $this->assertEquals($res44, $obj->toArray());

        $obj->setSoftMin(74);

        $res45 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 27, "softMin" => 74];
        $this->assertEquals($res45, $obj->toArray());

        $obj->setStartOfWeek(47);

        $res46 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 27, "softMin" => 74, "startOfWeek" => 47];
        $this->assertEquals($res46, $obj->toArray());

        $obj->setStartOnTick(1);

        $res47 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 27, "softMin" => 74, "startOfWeek" => 47, "startOnTick" => 1];
        $this->assertEquals($res47, $obj->toArray());

        $obj->setTickAmount(82);

        $res48 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 27, "softMin" => 74, "startOfWeek" => 47, "startOnTick" => 1, "tickAmount" => 82];
        $this->assertEquals($res48, $obj->toArray());

        $obj->setTickColor("3569a8266538a625569574b2c96e237c");

        $res49 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 27, "softMin" => 74, "startOfWeek" => 47, "startOnTick" => 1, "tickAmount" => 82, "tickColor" => "3569a8266538a625569574b2c96e237c"];
        $this->assertEquals($res49, $obj->toArray());

        $obj->setTickInterval(15);

        $res50 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 27, "softMin" => 74, "startOfWeek" => 47, "startOnTick" => 1, "tickAmount" => 82, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 15];
        $this->assertEquals($res50, $obj->toArray());

        $obj->setTickLength(58);

        $res51 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 27, "softMin" => 74, "startOfWeek" => 47, "startOnTick" => 1, "tickAmount" => 82, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 15, "tickLength" => 58];
        $this->assertEquals($res51, $obj->toArray());

        $obj->setTickPixelInterval(22);

        $res52 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 27, "softMin" => 74, "startOfWeek" => 47, "startOnTick" => 1, "tickAmount" => 82, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 15, "tickLength" => 58, "tickPixelInterval" => 22];
        $this->assertEquals($res52, $obj->toArray());

        $obj->setTickPosition("outside");

        $res53 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 27, "softMin" => 74, "startOfWeek" => 47, "startOnTick" => 1, "tickAmount" => 82, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 15, "tickLength" => 58, "tickPixelInterval" => 22, "tickPosition" => "outside"];
        $this->assertEquals($res53, $obj->toArray());

        $obj->setTickPositioner("c6a22a267ac93652e3443f821bb369bd");

        $res54 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 27, "softMin" => 74, "startOfWeek" => 47, "startOnTick" => 1, "tickAmount" => 82, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 15, "tickLength" => 58, "tickPixelInterval" => 22, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd"];
        $this->assertEquals($res54, $obj->toArray());

        $obj->setTickPositions(["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"]);

        $res55 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 27, "softMin" => 74, "startOfWeek" => 47, "startOnTick" => 1, "tickAmount" => 82, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 15, "tickLength" => 58, "tickPixelInterval" => 22, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"]];
        $this->assertEquals($res55, $obj->toArray());

        $obj->setTickWidth(25);

        $res56 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 27, "softMin" => 74, "startOfWeek" => 47, "startOnTick" => 1, "tickAmount" => 82, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 15, "tickLength" => 58, "tickPixelInterval" => 22, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickWidth" => 25];
        $this->assertEquals($res56, $obj->toArray());

        $obj->setTickmarkPlacement("between");

        $res57 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 27, "softMin" => 74, "startOfWeek" => 47, "startOnTick" => 1, "tickAmount" => 82, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 15, "tickLength" => 58, "tickPixelInterval" => 22, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickWidth" => 25, "tickmarkPlacement" => "between"];
        $this->assertEquals($res57, $obj->toArray());

        $obj->setTitle(new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsTitle());

        $res58 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 27, "softMin" => 74, "startOfWeek" => 47, "startOnTick" => 1, "tickAmount" => 82, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 15, "tickLength" => 58, "tickPixelInterval" => 22, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickWidth" => 25, "tickmarkPlacement" => "between", "title" => []];
        $this->assertEquals($res58, $obj->toArray());

        $obj->setType("category");

        $res59 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 27, "softMin" => 74, "startOfWeek" => 47, "startOnTick" => 1, "tickAmount" => 82, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 15, "tickLength" => 58, "tickPixelInterval" => 22, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickWidth" => 25, "tickmarkPlacement" => "between", "title" => [], "type" => "category"];
        $this->assertEquals($res59, $obj->toArray());

        $obj->setUniqueNames(1);

        $res60 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 27, "softMin" => 74, "startOfWeek" => 47, "startOnTick" => 1, "tickAmount" => 82, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 15, "tickLength" => 58, "tickPixelInterval" => 22, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickWidth" => 25, "tickmarkPlacement" => "between", "title" => [], "type" => "category", "uniqueNames" => 1];
        $this->assertEquals($res60, $obj->toArray());

        $obj->setUnits(["units" => "b98b3dfbd27e710e6c3ceeae58770b52"]);

        $res61 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 27, "softMin" => 74, "startOfWeek" => 47, "startOnTick" => 1, "tickAmount" => 82, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 15, "tickLength" => 58, "tickPixelInterval" => 22, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickWidth" => 25, "tickmarkPlacement" => "between", "title" => [], "type" => "category", "uniqueNames" => 1, "units" => ["units" => "b98b3dfbd27e710e6c3ceeae58770b52"]];
        $this->assertEquals($res61, $obj->toArray());

        $obj->setVisible(1);

        $res62 = ["allowDecimals" => 0, "alternateGridColor" => "e4c3a98e933a4f898d10c74d6b0cc3e9", "categories" => ["categories" => "b0b5ccb4a195a07fd3eed14affb8695f"], "ceiling" => 9, "className" => "6f66e878c62db60568a3487869695820", "crosshair" => [], "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "description" => "67daf92c833c41c95db874e18fcb2786", "endOnTick" => 1, "events" => [], "floor" => 78, "gridLineColor" => "fa817119e014d62cd3eeb4aef3821870", "gridLineDashStyle" => "LongDashDotDot", "gridLineWidth" => 21, "gridZIndex" => 15, "id" => "b80bb7740288fda1f201890375a60c8f", "labels" => [], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 4, "linkedTo" => 60, "max" => 84, "maxPadding" => 6, "maxZoom" => 71, "min" => 50, "minPadding" => 49, "minRange" => 67, "minTickInterval" => 10, "minorGridLineColor" => "02d67903f43b194a260f6e05958c6f60", "minorGridLineDashStyle" => "LongDashDotDot", "minorGridLineWidth" => 26, "minorTickColor" => "58f14daeca50e29794caa541286c45b5", "minorTickInterval" => "bec8a7be3cd5e2a8eff4a3ee2f5c7e2d", "minorTickLength" => 48, "minorTickPosition" => "outside", "minorTickWidth" => 83, "offset" => 75, "opposite" => 1, "plotBands" => ["plotBands" => "a6eb9963a4bde85c1ff1d28632fe012d"], "plotLines" => ["plotLines" => "ca27823684c96816234d7d97344db89c"], "reversed" => 0, "showEmpty" => 1, "showFirstLabel" => 0, "showLastLabel" => 1, "softMax" => 27, "softMin" => 74, "startOfWeek" => 47, "startOnTick" => 1, "tickAmount" => 82, "tickColor" => "3569a8266538a625569574b2c96e237c", "tickInterval" => 15, "tickLength" => 58, "tickPixelInterval" => 22, "tickPosition" => "outside", "tickPositioner" => "c6a22a267ac93652e3443f821bb369bd", "tickPositions" => ["tickPositions" => "8c5d1b19e77eea01652836867fe6d741"], "tickWidth" => 25, "tickmarkPlacement" => "between", "title" => [], "type" => "category", "uniqueNames" => 1, "units" => ["units" => "b98b3dfbd27e710e6c3ceeae58770b52"], "visible" => 1];
        $this->assertEquals($res62, $obj->toArray());
    }

}
