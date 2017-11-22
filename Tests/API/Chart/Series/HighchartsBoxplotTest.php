<?php
/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts boxplot test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsBoxplotTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsBoxplot(true);

		$this->assertEquals(null, $obj1->getAllowPointSelect());
		$this->assertEquals(null, $obj1->getAnimationLimit());
		$this->assertEquals(null, $obj1->getClassName());
		$this->assertEquals(null, $obj1->getColor());
		$this->assertEquals(null, $obj1->getColorByPoint());
		$this->assertEquals(null, $obj1->getColorIndex());
		$this->assertEquals(null, $obj1->getColors());
		$this->assertEquals(null, $obj1->getCrisp());
		$this->assertEquals(null, $obj1->getCursor());
		$this->assertEquals(null, $obj1->getData());
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
		$this->assertEquals(null, $obj1->getId());
		$this->assertEquals(null, $obj1->getIndex());
		$this->assertEquals(null, $obj1->getKeys());
		$this->assertEquals(null, $obj1->getLegendIndex());
		$this->assertEquals(null, $obj1->getLineWidth());
		$this->assertEquals(null, $obj1->getLinkedTo());
		$this->assertEquals(null, $obj1->getMaxPointWidth());
		$this->assertEquals(null, $obj1->getMedianColor());
		$this->assertEquals(null, $obj1->getMedianWidth());
		$this->assertEquals(null, $obj1->getName());
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
		$this->assertEquals(null, $obj1->getType());
		$this->assertEquals(null, $obj1->getVisible());
		$this->assertEquals(null, $obj1->getWhiskerColor());
		$this->assertEquals(null, $obj1->getWhiskerLength());
		$this->assertEquals(null, $obj1->getWhiskerWidth());
		$this->assertEquals(null, $obj1->getXAxis());
		$this->assertEquals(null, $obj1->getYAxis());
		$this->assertEquals(null, $obj1->getZIndex());
		$this->assertEquals(null, $obj1->getZoneAxis());
		$this->assertEquals(null, $obj1->getZones());

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsBoxplot(false);

		$this->assertEquals(false, $obj0->getAllowPointSelect());
		$this->assertEquals(null, $obj0->getAnimationLimit());
		$this->assertEquals(null, $obj0->getClassName());
		$this->assertEquals(null, $obj0->getColor());
		$this->assertEquals(false, $obj0->getColorByPoint());
		$this->assertEquals(null, $obj0->getColorIndex());
		$this->assertEquals(null, $obj0->getColors());
		$this->assertEquals(true, $obj0->getCrisp());
		$this->assertEquals(null, $obj0->getCursor());
		$this->assertEquals(null, $obj0->getData());
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
		$this->assertEquals(null, $obj0->getId());
		$this->assertEquals(null, $obj0->getIndex());
		$this->assertEquals(null, $obj0->getKeys());
		$this->assertEquals(null, $obj0->getLegendIndex());
		$this->assertEquals(1, $obj0->getLineWidth());
		$this->assertEquals(null, $obj0->getLinkedTo());
		$this->assertEquals(null, $obj0->getMaxPointWidth());
		$this->assertEquals(null, $obj0->getMedianColor());
		$this->assertEquals(2, $obj0->getMedianWidth());
		$this->assertEquals(null, $obj0->getName());
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
		$this->assertEquals(null, $obj0->getType());
		$this->assertEquals(true, $obj0->getVisible());
		$this->assertEquals(null, $obj0->getWhiskerColor());
		$this->assertEquals("50%", $obj0->getWhiskerLength());
		$this->assertEquals(2, $obj0->getWhiskerWidth());
		$this->assertEquals("0", $obj0->getXAxis());
		$this->assertEquals("0", $obj0->getYAxis());
		$this->assertEquals(null, $obj0->getZIndex());
		$this->assertEquals("y", $obj0->getZoneAxis());
		$this->assertEquals(null, $obj0->getZones());
    }

	/**
	 * Tests the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsBoxplot(false);

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

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsBoxplot(true);

		$this->assertEquals([], $obj->jsonSerialize());
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsBoxplot(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Boxplot\HighchartsEvents::class, $res);
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsBoxplot(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Boxplot\HighchartsPoint::class, $res);
	}

	/**
	 * Tests the newStates() method.
	 *
	 * @return void.
	 */
	public function testNewStates() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsBoxplot(false);

		$res = $obj->newStates();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Boxplot\HighchartsStates::class, $res);
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsBoxplot(true);

		$obj->setAllowPointSelect(0);

		$res1 = ["allowPointSelect" => 0];
		$this->assertEquals($res1, $obj->toArray());

		$obj->setAnimationLimit(2);

		$res2 = ["allowPointSelect" => 0, "animationLimit" => 2];
		$this->assertEquals($res2, $obj->toArray());

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res3 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res3, $obj->toArray());

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res4 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res4, $obj->toArray());

		$obj->setColorByPoint(1);

		$res5 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1];
		$this->assertEquals($res5, $obj->toArray());

		$obj->setColorIndex(62);

		$res6 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62];
		$this->assertEquals($res6, $obj->toArray());

		$obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

		$res7 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
		$this->assertEquals($res7, $obj->toArray());

		$obj->setCrisp(1);

		$res8 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1];
		$this->assertEquals($res8, $obj->toArray());

		$obj->setCursor("crosshair");

		$res9 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair"];
		$this->assertEquals($res9, $obj->toArray());

		$obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

		$res10 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
		$this->assertEquals($res10, $obj->toArray());

		$obj->setDepth(12);

		$res11 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12];
		$this->assertEquals($res11, $obj->toArray());

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res12 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res12, $obj->toArray());

		$obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");

		$res13 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc"];
		$this->assertEquals($res13, $obj->toArray());

		$obj->setEdgeWidth(28);

		$res14 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28];
		$this->assertEquals($res14, $obj->toArray());

		$obj->setEnableMouseTracking(0);

		$res15 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0];
		$this->assertEquals($res15, $obj->toArray());

		$obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Boxplot\HighchartsEvents());

		$res16 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => []];
		$this->assertEquals($res16, $obj->toArray());

		$obj->setExposeElementToA11y(1);

		$res17 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1];
		$this->assertEquals($res17, $obj->toArray());

		$obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");

		$res18 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd"];
		$this->assertEquals($res18, $obj->toArray());

		$obj->setFindNearestPointBy("xy");

		$res19 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy"];
		$this->assertEquals($res19, $obj->toArray());

		$obj->setGetExtremesFromAll(0);

		$res20 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0];
		$this->assertEquals($res20, $obj->toArray());

		$obj->setGroupPadding(2);

		$res21 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2];
		$this->assertEquals($res21, $obj->toArray());

		$obj->setGroupZPadding(85);

		$res22 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85];
		$this->assertEquals($res22, $obj->toArray());

		$obj->setGrouping(1);

		$res23 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1];
		$this->assertEquals($res23, $obj->toArray());

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res24 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res24, $obj->toArray());

		$obj->setIndex(95);

		$res25 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95];
		$this->assertEquals($res25, $obj->toArray());

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res26 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res26, $obj->toArray());

		$obj->setLegendIndex(67);

		$res27 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67];
		$this->assertEquals($res27, $obj->toArray());

		$obj->setLineWidth(77);

		$res28 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77];
		$this->assertEquals($res28, $obj->toArray());

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res29 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res29, $obj->toArray());

		$obj->setMaxPointWidth(5);

		$res30 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5];
		$this->assertEquals($res30, $obj->toArray());

		$obj->setMedianColor("c7dbc658d3d58056469f6d2d5a8a3626");

		$res31 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626"];
		$this->assertEquals($res31, $obj->toArray());

		$obj->setMedianWidth(22);

		$res32 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22];
		$this->assertEquals($res32, $obj->toArray());

		$obj->setName("b068931cc450442b63f5b3d276ea4297");

		$res33 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297"];
		$this->assertEquals($res33, $obj->toArray());

		$obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

		$res34 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
		$this->assertEquals($res34, $obj->toArray());

		$obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Boxplot\HighchartsPoint());

		$res35 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => []];
		$this->assertEquals($res35, $obj->toArray());

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res36 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res36, $obj->toArray());

		$obj->setPointInterval(40);

		$res37 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40];
		$this->assertEquals($res37, $obj->toArray());

		$obj->setPointIntervalUnit("year");

		$res38 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year"];
		$this->assertEquals($res38, $obj->toArray());

		$obj->setPointPadding(38);

		$res39 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38];
		$this->assertEquals($res39, $obj->toArray());

		$obj->setPointPlacement("between");

		$res40 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38, "pointPlacement" => "between"];
		$this->assertEquals($res40, $obj->toArray());

		$obj->setPointRange(71);

		$res41 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38, "pointPlacement" => "between", "pointRange" => 71];
		$this->assertEquals($res41, $obj->toArray());

		$obj->setPointStart(0);

		$res42 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38, "pointPlacement" => "between", "pointRange" => 71, "pointStart" => 0];
		$this->assertEquals($res42, $obj->toArray());

		$obj->setPointWidth(35);

		$res43 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38, "pointPlacement" => "between", "pointRange" => 71, "pointStart" => 0, "pointWidth" => 35];
		$this->assertEquals($res43, $obj->toArray());

		$obj->setSelected(0);

		$res44 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38, "pointPlacement" => "between", "pointRange" => 71, "pointStart" => 0, "pointWidth" => 35, "selected" => 0];
		$this->assertEquals($res44, $obj->toArray());

		$obj->setShowCheckbox(1);

		$res45 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38, "pointPlacement" => "between", "pointRange" => 71, "pointStart" => 0, "pointWidth" => 35, "selected" => 0, "showCheckbox" => 1];
		$this->assertEquals($res45, $obj->toArray());

		$obj->setShowInLegend(0);

		$res46 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38, "pointPlacement" => "between", "pointRange" => 71, "pointStart" => 0, "pointWidth" => 35, "selected" => 0, "showCheckbox" => 1, "showInLegend" => 0];
		$this->assertEquals($res46, $obj->toArray());

		$obj->setSkipKeyboardNavigation(0);

		$res47 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38, "pointPlacement" => "between", "pointRange" => 71, "pointStart" => 0, "pointWidth" => 35, "selected" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0];
		$this->assertEquals($res47, $obj->toArray());

		$obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Boxplot\HighchartsStates());

		$res48 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38, "pointPlacement" => "between", "pointRange" => 71, "pointStart" => 0, "pointWidth" => 35, "selected" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => []];
		$this->assertEquals($res48, $obj->toArray());

		$obj->setStemColor("98696f23b6ed2a881042dfa365a28d23");

		$res49 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38, "pointPlacement" => "between", "pointRange" => 71, "pointStart" => 0, "pointWidth" => 35, "selected" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23"];
		$this->assertEquals($res49, $obj->toArray());

		$obj->setStemDashStyle("LongDashDotDot");

		$res50 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38, "pointPlacement" => "between", "pointRange" => 71, "pointStart" => 0, "pointWidth" => 35, "selected" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot"];
		$this->assertEquals($res50, $obj->toArray());

		$obj->setStemWidth(16);

		$res51 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38, "pointPlacement" => "between", "pointRange" => 71, "pointStart" => 0, "pointWidth" => 35, "selected" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 16];
		$this->assertEquals($res51, $obj->toArray());

		$obj->setStickyTracking(0);

		$res52 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38, "pointPlacement" => "between", "pointRange" => 71, "pointStart" => 0, "pointWidth" => 35, "selected" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 16, "stickyTracking" => 0];
		$this->assertEquals($res52, $obj->toArray());

		$obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

		$res53 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38, "pointPlacement" => "between", "pointRange" => 71, "pointStart" => 0, "pointWidth" => 35, "selected" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 16, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
		$this->assertEquals($res53, $obj->toArray());

		$obj->setTurboThreshold(72);

		$res54 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38, "pointPlacement" => "between", "pointRange" => 71, "pointStart" => 0, "pointWidth" => 35, "selected" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 16, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 72];
		$this->assertEquals($res54, $obj->toArray());

		$obj->setType("waterfall");

		$res55 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38, "pointPlacement" => "between", "pointRange" => 71, "pointStart" => 0, "pointWidth" => 35, "selected" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 16, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 72, "type" => "waterfall"];
		$this->assertEquals($res55, $obj->toArray());

		$obj->setVisible(0);

		$res56 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38, "pointPlacement" => "between", "pointRange" => 71, "pointStart" => 0, "pointWidth" => 35, "selected" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 16, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 72, "type" => "waterfall", "visible" => 0];
		$this->assertEquals($res56, $obj->toArray());

		$obj->setWhiskerColor("3176f361ab524a038497eb1a6c93df38");

		$res57 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38, "pointPlacement" => "between", "pointRange" => 71, "pointStart" => 0, "pointWidth" => 35, "selected" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 16, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 72, "type" => "waterfall", "visible" => 0, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38"];
		$this->assertEquals($res57, $obj->toArray());

		$obj->setWhiskerLength(44);

		$res58 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38, "pointPlacement" => "between", "pointRange" => 71, "pointStart" => 0, "pointWidth" => 35, "selected" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 16, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 72, "type" => "waterfall", "visible" => 0, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 44];
		$this->assertEquals($res58, $obj->toArray());

		$obj->setWhiskerWidth(74);

		$res59 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38, "pointPlacement" => "between", "pointRange" => 71, "pointStart" => 0, "pointWidth" => 35, "selected" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 16, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 72, "type" => "waterfall", "visible" => 0, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 44, "whiskerWidth" => 74];
		$this->assertEquals($res59, $obj->toArray());

		$obj->setXAxis(96);

		$res60 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38, "pointPlacement" => "between", "pointRange" => 71, "pointStart" => 0, "pointWidth" => 35, "selected" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 16, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 72, "type" => "waterfall", "visible" => 0, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 44, "whiskerWidth" => 74, "xAxis" => 96];
		$this->assertEquals($res60, $obj->toArray());

		$obj->setYAxis(5);

		$res61 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38, "pointPlacement" => "between", "pointRange" => 71, "pointStart" => 0, "pointWidth" => 35, "selected" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 16, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 72, "type" => "waterfall", "visible" => 0, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 44, "whiskerWidth" => 74, "xAxis" => 96, "yAxis" => 5];
		$this->assertEquals($res61, $obj->toArray());

		$obj->setZIndex(63);

		$res62 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38, "pointPlacement" => "between", "pointRange" => 71, "pointStart" => 0, "pointWidth" => 35, "selected" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 16, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 72, "type" => "waterfall", "visible" => 0, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 44, "whiskerWidth" => 74, "xAxis" => 96, "yAxis" => 5, "zIndex" => 63];
		$this->assertEquals($res62, $obj->toArray());

		$obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

		$res63 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38, "pointPlacement" => "between", "pointRange" => 71, "pointStart" => 0, "pointWidth" => 35, "selected" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 16, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 72, "type" => "waterfall", "visible" => 0, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 44, "whiskerWidth" => 74, "xAxis" => 96, "yAxis" => 5, "zIndex" => 63, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
		$this->assertEquals($res63, $obj->toArray());

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res64 = ["allowPointSelect" => 0, "animationLimit" => 2, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 62, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "depth" => 12, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 28, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 2, "groupZPadding" => 85, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 95, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 67, "lineWidth" => 77, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 5, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 22, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 40, "pointIntervalUnit" => "year", "pointPadding" => 38, "pointPlacement" => "between", "pointRange" => 71, "pointStart" => 0, "pointWidth" => 35, "selected" => 0, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 16, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 72, "type" => "waterfall", "visible" => 0, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 44, "whiskerWidth" => 74, "xAxis" => 96, "yAxis" => 5, "zIndex" => 63, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res64, $obj->toArray());
	}

}
