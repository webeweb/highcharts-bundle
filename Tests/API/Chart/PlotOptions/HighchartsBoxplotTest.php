<?php
/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts boxplot test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsBoxplotTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBoxplot(true);

		$this->assertEquals(null, $obj1->getAllowPointSelect());
		$this->assertEquals(null, $obj1->getAnimationLimit());
		$this->assertEquals(null, $obj1->getClassName());
		$this->assertEquals(null, $obj1->getColor());
		$this->assertEquals(null, $obj1->getColorByPoint());
		$this->assertEquals(null, $obj1->getColorIndex());
		$this->assertEquals(null, $obj1->getColors());
		$this->assertEquals(null, $obj1->getCrisp());
		$this->assertEquals(null, $obj1->getCursor());
		$this->assertEquals(null, $obj1->getDepth());
		$this->assertEquals(null, $obj1->getDescription());
		$this->assertEquals(null, $obj1->getEdgeColor());
		$this->assertEquals(null, $obj1->getEdgeWidth());
		$this->assertEquals(null, $obj1->getEnableMouseTracking());
		$this->assertEquals(null, $obj1->getEvents());
		$this->assertEquals(null, $obj1->getExposeElementToA11y());
		$this->assertEquals(null, $obj1->getFillColor());
		$this->assertEquals(null, $obj1->getFindNearestPointBy());
		$this->assertEquals(null, $obj1->getGetExtremesFromAll());
		$this->assertEquals(null, $obj1->getGroupPadding());
		$this->assertEquals(null, $obj1->getGroupZPadding());
		$this->assertEquals(null, $obj1->getGrouping());
		$this->assertEquals(null, $obj1->getKeys());
		$this->assertEquals(null, $obj1->getLineWidth());
		$this->assertEquals(null, $obj1->getLinkedTo());
		$this->assertEquals(null, $obj1->getMaxPointWidth());
		$this->assertEquals(null, $obj1->getMedianColor());
		$this->assertEquals(null, $obj1->getMedianWidth());
		$this->assertEquals(null, $obj1->getNegativeColor());
		$this->assertEquals(null, $obj1->getPoint());
		$this->assertEquals(null, $obj1->getPointDescriptionFormatter());
		$this->assertEquals(null, $obj1->getPointInterval());
		$this->assertEquals(null, $obj1->getPointIntervalUnit());
		$this->assertEquals(null, $obj1->getPointPadding());
		$this->assertEquals(null, $obj1->getPointPlacement());
		$this->assertEquals(null, $obj1->getPointRange());
		$this->assertEquals(null, $obj1->getPointStart());
		$this->assertEquals(null, $obj1->getPointWidth());
		$this->assertEquals(null, $obj1->getSelected());
		$this->assertEquals(null, $obj1->getShowCheckbox());
		$this->assertEquals(null, $obj1->getShowInLegend());
		$this->assertEquals(null, $obj1->getSkipKeyboardNavigation());
		$this->assertEquals(null, $obj1->getStates());
		$this->assertEquals(null, $obj1->getStemColor());
		$this->assertEquals(null, $obj1->getStemDashStyle());
		$this->assertEquals(null, $obj1->getStemWidth());
		$this->assertEquals(null, $obj1->getStickyTracking());
		$this->assertEquals(null, $obj1->getTooltip());
		$this->assertEquals(null, $obj1->getTurboThreshold());
		$this->assertEquals(null, $obj1->getVisible());
		$this->assertEquals(null, $obj1->getWhiskerColor());
		$this->assertEquals(null, $obj1->getWhiskerLength());
		$this->assertEquals(null, $obj1->getWhiskerWidth());
		$this->assertEquals(null, $obj1->getZoneAxis());
		$this->assertEquals(null, $obj1->getZones());

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBoxplot(false);

		$this->assertEquals(false, $obj0->getAllowPointSelect());
		$this->assertEquals(null, $obj0->getAnimationLimit());
		$this->assertEquals(null, $obj0->getClassName());
		$this->assertEquals(null, $obj0->getColor());
		$this->assertEquals(false, $obj0->getColorByPoint());
		$this->assertEquals(null, $obj0->getColorIndex());
		$this->assertEquals(null, $obj0->getColors());
		$this->assertEquals(true, $obj0->getCrisp());
		$this->assertEquals(null, $obj0->getCursor());
		$this->assertEquals(25, $obj0->getDepth());
		$this->assertEquals(null, $obj0->getDescription());
		$this->assertEquals(null, $obj0->getEdgeColor());
		$this->assertEquals(1, $obj0->getEdgeWidth());
		$this->assertEquals(true, $obj0->getEnableMouseTracking());
		$this->assertEquals(null, $obj0->getEvents());
		$this->assertEquals(null, $obj0->getExposeElementToA11y());
		$this->assertEquals("#ffffff", $obj0->getFillColor());
		$this->assertEquals(null, $obj0->getFindNearestPointBy());
		$this->assertEquals(false, $obj0->getGetExtremesFromAll());
		$this->assertEquals(0.2, $obj0->getGroupPadding());
		$this->assertEquals(1, $obj0->getGroupZPadding());
		$this->assertEquals(true, $obj0->getGrouping());
		$this->assertEquals(null, $obj0->getKeys());
		$this->assertEquals(1, $obj0->getLineWidth());
		$this->assertEquals(null, $obj0->getLinkedTo());
		$this->assertEquals(null, $obj0->getMaxPointWidth());
		$this->assertEquals(null, $obj0->getMedianColor());
		$this->assertEquals(2, $obj0->getMedianWidth());
		$this->assertEquals(null, $obj0->getNegativeColor());
		$this->assertEquals(null, $obj0->getPoint());
		$this->assertEquals(null, $obj0->getPointDescriptionFormatter());
		$this->assertEquals(1, $obj0->getPointInterval());
		$this->assertEquals(null, $obj0->getPointIntervalUnit());
		$this->assertEquals(0.1, $obj0->getPointPadding());
		$this->assertEquals(null, $obj0->getPointPlacement());
		$this->assertEquals(null, $obj0->getPointRange());
		$this->assertEquals(0, $obj0->getPointStart());
		$this->assertEquals(null, $obj0->getPointWidth());
		$this->assertEquals(false, $obj0->getSelected());
		$this->assertEquals(false, $obj0->getShowCheckbox());
		$this->assertEquals(true, $obj0->getShowInLegend());
		$this->assertEquals(null, $obj0->getSkipKeyboardNavigation());
		$this->assertEquals(null, $obj0->getStates());
		$this->assertEquals(null, $obj0->getStemColor());
		$this->assertEquals("Solid", $obj0->getStemDashStyle());
		$this->assertEquals(null, $obj0->getStemWidth());
		$this->assertEquals(true, $obj0->getStickyTracking());
		$this->assertEquals(null, $obj0->getTooltip());
		$this->assertEquals(1000, $obj0->getTurboThreshold());
		$this->assertEquals(true, $obj0->getVisible());
		$this->assertEquals(null, $obj0->getWhiskerColor());
		$this->assertEquals("50%", $obj0->getWhiskerLength());
		$this->assertEquals(2, $obj0->getWhiskerWidth());
		$this->assertEquals("y", $obj0->getZoneAxis());
		$this->assertEquals(null, $obj0->getZones());
    }

	/**
	 * Tests the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBoxplot(false);

		$obj->newEvents();
		$obj->newPoint();
		$obj->newStates();

		$obj->clear();

		$res = ["events" => [], "point" => [], "states" => []];
		$this->assertEquals($res, $obj->toArray());
	}

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBoxplot(true);

		$this->assertEquals([], $obj->jsonSerialize());
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBoxplot(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Boxplot\HighchartsEvents::class, $res);
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBoxplot(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Boxplot\HighchartsPoint::class, $res);
	}

	/**
	 * Tests the newStates() method.
	 *
	 * @return void.
	 */
	public function testNewStates() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBoxplot(false);

		$res = $obj->newStates();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Boxplot\HighchartsStates::class, $res);
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBoxplot(true);

		$obj->setAllowPointSelect(1);

		$res1 = ["allowPointSelect" => 1];
		$this->assertEquals($res1, $obj->toArray());

		$obj->setAnimationLimit(88);

		$res2 = ["allowPointSelect" => 1, "animationLimit" => 88];
		$this->assertEquals($res2, $obj->toArray());

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res3 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res3, $obj->toArray());

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res4 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res4, $obj->toArray());

		$obj->setColorByPoint(1);

		$res5 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1];
		$this->assertEquals($res5, $obj->toArray());

		$obj->setColorIndex(27);

		$res6 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27];
		$this->assertEquals($res6, $obj->toArray());

		$obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

		$res7 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
		$this->assertEquals($res7, $obj->toArray());

		$obj->setCrisp(1);

		$res8 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1];
		$this->assertEquals($res8, $obj->toArray());

		$obj->setCursor("crosshair");

		$res9 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair"];
		$this->assertEquals($res9, $obj->toArray());

		$obj->setDepth(22);

		$res10 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22];
		$this->assertEquals($res10, $obj->toArray());

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res11 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res11, $obj->toArray());

		$obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");

		$res12 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc"];
		$this->assertEquals($res12, $obj->toArray());

		$obj->setEdgeWidth(57);

		$res13 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57];
		$this->assertEquals($res13, $obj->toArray());

		$obj->setEnableMouseTracking(0);

		$res14 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0];
		$this->assertEquals($res14, $obj->toArray());

		$obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Boxplot\HighchartsEvents());

		$res15 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => []];
		$this->assertEquals($res15, $obj->toArray());

		$obj->setExposeElementToA11y(1);

		$res16 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1];
		$this->assertEquals($res16, $obj->toArray());

		$obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");

		$res17 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd"];
		$this->assertEquals($res17, $obj->toArray());

		$obj->setFindNearestPointBy("xy");

		$res18 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy"];
		$this->assertEquals($res18, $obj->toArray());

		$obj->setGetExtremesFromAll(1);

		$res19 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1];
		$this->assertEquals($res19, $obj->toArray());

		$obj->setGroupPadding(62);

		$res20 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62];
		$this->assertEquals($res20, $obj->toArray());

		$obj->setGroupZPadding(44);

		$res21 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44];
		$this->assertEquals($res21, $obj->toArray());

		$obj->setGrouping(0);

		$res22 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0];
		$this->assertEquals($res22, $obj->toArray());

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res23 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res23, $obj->toArray());

		$obj->setLineWidth(49);

		$res24 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49];
		$this->assertEquals($res24, $obj->toArray());

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res25 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res25, $obj->toArray());

		$obj->setMaxPointWidth(82);

		$res26 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82];
		$this->assertEquals($res26, $obj->toArray());

		$obj->setMedianColor("c7dbc658d3d58056469f6d2d5a8a3626");

		$res27 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626"];
		$this->assertEquals($res27, $obj->toArray());

		$obj->setMedianWidth(7);

		$res28 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7];
		$this->assertEquals($res28, $obj->toArray());

		$obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

		$res29 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
		$this->assertEquals($res29, $obj->toArray());

		$obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Boxplot\HighchartsPoint());

		$res30 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => []];
		$this->assertEquals($res30, $obj->toArray());

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res31 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res31, $obj->toArray());

		$obj->setPointInterval(32);

		$res32 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 32];
		$this->assertEquals($res32, $obj->toArray());

		$obj->setPointIntervalUnit("year");

		$res33 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 32, "pointIntervalUnit" => "year"];
		$this->assertEquals($res33, $obj->toArray());

		$obj->setPointPadding(5);

		$res34 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 32, "pointIntervalUnit" => "year", "pointPadding" => 5];
		$this->assertEquals($res34, $obj->toArray());

		$obj->setPointPlacement("between");

		$res35 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 32, "pointIntervalUnit" => "year", "pointPadding" => 5, "pointPlacement" => "between"];
		$this->assertEquals($res35, $obj->toArray());

		$obj->setPointRange(11);

		$res36 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 32, "pointIntervalUnit" => "year", "pointPadding" => 5, "pointPlacement" => "between", "pointRange" => 11];
		$this->assertEquals($res36, $obj->toArray());

		$obj->setPointStart(65);

		$res37 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 32, "pointIntervalUnit" => "year", "pointPadding" => 5, "pointPlacement" => "between", "pointRange" => 11, "pointStart" => 65];
		$this->assertEquals($res37, $obj->toArray());

		$obj->setPointWidth(49);

		$res38 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 32, "pointIntervalUnit" => "year", "pointPadding" => 5, "pointPlacement" => "between", "pointRange" => 11, "pointStart" => 65, "pointWidth" => 49];
		$this->assertEquals($res38, $obj->toArray());

		$obj->setSelected(0);

		$res39 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 32, "pointIntervalUnit" => "year", "pointPadding" => 5, "pointPlacement" => "between", "pointRange" => 11, "pointStart" => 65, "pointWidth" => 49, "selected" => 0];
		$this->assertEquals($res39, $obj->toArray());

		$obj->setShowCheckbox(0);

		$res40 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 32, "pointIntervalUnit" => "year", "pointPadding" => 5, "pointPlacement" => "between", "pointRange" => 11, "pointStart" => 65, "pointWidth" => 49, "selected" => 0, "showCheckbox" => 0];
		$this->assertEquals($res40, $obj->toArray());

		$obj->setShowInLegend(1);

		$res41 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 32, "pointIntervalUnit" => "year", "pointPadding" => 5, "pointPlacement" => "between", "pointRange" => 11, "pointStart" => 65, "pointWidth" => 49, "selected" => 0, "showCheckbox" => 0, "showInLegend" => 1];
		$this->assertEquals($res41, $obj->toArray());

		$obj->setSkipKeyboardNavigation(1);

		$res42 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 32, "pointIntervalUnit" => "year", "pointPadding" => 5, "pointPlacement" => "between", "pointRange" => 11, "pointStart" => 65, "pointWidth" => 49, "selected" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1];
		$this->assertEquals($res42, $obj->toArray());

		$obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Boxplot\HighchartsStates());

		$res43 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 32, "pointIntervalUnit" => "year", "pointPadding" => 5, "pointPlacement" => "between", "pointRange" => 11, "pointStart" => 65, "pointWidth" => 49, "selected" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => []];
		$this->assertEquals($res43, $obj->toArray());

		$obj->setStemColor("98696f23b6ed2a881042dfa365a28d23");

		$res44 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 32, "pointIntervalUnit" => "year", "pointPadding" => 5, "pointPlacement" => "between", "pointRange" => 11, "pointStart" => 65, "pointWidth" => 49, "selected" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23"];
		$this->assertEquals($res44, $obj->toArray());

		$obj->setStemDashStyle("LongDashDotDot");

		$res45 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 32, "pointIntervalUnit" => "year", "pointPadding" => 5, "pointPlacement" => "between", "pointRange" => 11, "pointStart" => 65, "pointWidth" => 49, "selected" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot"];
		$this->assertEquals($res45, $obj->toArray());

		$obj->setStemWidth(8);

		$res46 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 32, "pointIntervalUnit" => "year", "pointPadding" => 5, "pointPlacement" => "between", "pointRange" => 11, "pointStart" => 65, "pointWidth" => 49, "selected" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 8];
		$this->assertEquals($res46, $obj->toArray());

		$obj->setStickyTracking(0);

		$res47 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 32, "pointIntervalUnit" => "year", "pointPadding" => 5, "pointPlacement" => "between", "pointRange" => 11, "pointStart" => 65, "pointWidth" => 49, "selected" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 8, "stickyTracking" => 0];
		$this->assertEquals($res47, $obj->toArray());

		$obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

		$res48 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 32, "pointIntervalUnit" => "year", "pointPadding" => 5, "pointPlacement" => "between", "pointRange" => 11, "pointStart" => 65, "pointWidth" => 49, "selected" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 8, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
		$this->assertEquals($res48, $obj->toArray());

		$obj->setTurboThreshold(97);

		$res49 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 32, "pointIntervalUnit" => "year", "pointPadding" => 5, "pointPlacement" => "between", "pointRange" => 11, "pointStart" => 65, "pointWidth" => 49, "selected" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 8, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 97];
		$this->assertEquals($res49, $obj->toArray());

		$obj->setVisible(0);

		$res50 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 32, "pointIntervalUnit" => "year", "pointPadding" => 5, "pointPlacement" => "between", "pointRange" => 11, "pointStart" => 65, "pointWidth" => 49, "selected" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 8, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 97, "visible" => 0];
		$this->assertEquals($res50, $obj->toArray());

		$obj->setWhiskerColor("3176f361ab524a038497eb1a6c93df38");

		$res51 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 32, "pointIntervalUnit" => "year", "pointPadding" => 5, "pointPlacement" => "between", "pointRange" => 11, "pointStart" => 65, "pointWidth" => 49, "selected" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 8, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 97, "visible" => 0, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38"];
		$this->assertEquals($res51, $obj->toArray());

		$obj->setWhiskerLength(45);

		$res52 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 32, "pointIntervalUnit" => "year", "pointPadding" => 5, "pointPlacement" => "between", "pointRange" => 11, "pointStart" => 65, "pointWidth" => 49, "selected" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 8, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 97, "visible" => 0, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 45];
		$this->assertEquals($res52, $obj->toArray());

		$obj->setWhiskerWidth(64);

		$res53 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 32, "pointIntervalUnit" => "year", "pointPadding" => 5, "pointPlacement" => "between", "pointRange" => 11, "pointStart" => 65, "pointWidth" => 49, "selected" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 8, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 97, "visible" => 0, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 45, "whiskerWidth" => 64];
		$this->assertEquals($res53, $obj->toArray());

		$obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

		$res54 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 32, "pointIntervalUnit" => "year", "pointPadding" => 5, "pointPlacement" => "between", "pointRange" => 11, "pointStart" => 65, "pointWidth" => 49, "selected" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 8, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 97, "visible" => 0, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 45, "whiskerWidth" => 64, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
		$this->assertEquals($res54, $obj->toArray());

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res55 = ["allowPointSelect" => 1, "animationLimit" => 88, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 27, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 22, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 57, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 62, "groupZPadding" => 44, "grouping" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 49, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 82, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 7, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 32, "pointIntervalUnit" => "year", "pointPadding" => 5, "pointPlacement" => "between", "pointRange" => 11, "pointStart" => 65, "pointWidth" => 49, "selected" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 8, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 97, "visible" => 0, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 45, "whiskerWidth" => 64, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res55, $obj->toArray());
	}

}
