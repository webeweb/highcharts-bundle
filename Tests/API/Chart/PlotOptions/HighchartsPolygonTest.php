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
 * Highcharts polygon test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsPolygonTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPolygon(true);

		$this->assertEquals(null, $obj1->getAllowPointSelect());
		$this->assertEquals(null, $obj1->getAnimation());
		$this->assertEquals(null, $obj1->getAnimationLimit());
		$this->assertEquals(null, $obj1->getClassName());
		$this->assertEquals(null, $obj1->getColor());
		$this->assertEquals(null, $obj1->getColorIndex());
		$this->assertEquals(null, $obj1->getCropThreshold());
		$this->assertEquals(null, $obj1->getCursor());
		$this->assertEquals(null, $obj1->getDashStyle());
		$this->assertEquals(null, $obj1->getDataLabels());
		$this->assertEquals(null, $obj1->getDescription());
		$this->assertEquals(null, $obj1->getEnableMouseTracking());
		$this->assertEquals(null, $obj1->getEvents());
		$this->assertEquals(null, $obj1->getExposeElementToA11y());
		$this->assertEquals(null, $obj1->getFindNearestPointBy());
		$this->assertEquals(null, $obj1->getGetExtremesFromAll());
		$this->assertEquals(null, $obj1->getKeys());
		$this->assertEquals(null, $obj1->getLineWidth());
		$this->assertEquals(null, $obj1->getLinkedTo());
		$this->assertEquals(null, $obj1->getMarker());
		$this->assertEquals(null, $obj1->getNegativeColor());
		$this->assertEquals(null, $obj1->getPoint());
		$this->assertEquals(null, $obj1->getPointDescriptionFormatter());
		$this->assertEquals(null, $obj1->getPointInterval());
		$this->assertEquals(null, $obj1->getPointIntervalUnit());
		$this->assertEquals(null, $obj1->getPointStart());
		$this->assertEquals(null, $obj1->getSelected());
		$this->assertEquals(null, $obj1->getShadow());
		$this->assertEquals(null, $obj1->getShowCheckbox());
		$this->assertEquals(null, $obj1->getShowInLegend());
		$this->assertEquals(null, $obj1->getSkipKeyboardNavigation());
		$this->assertEquals(null, $obj1->getStates());
		$this->assertEquals(null, $obj1->getStickyTracking());
		$this->assertEquals(null, $obj1->getTooltip());
		$this->assertEquals(null, $obj1->getTurboThreshold());
		$this->assertEquals(null, $obj1->getVisible());
		$this->assertEquals(null, $obj1->getZoneAxis());
		$this->assertEquals(null, $obj1->getZones());

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPolygon(false);

		$this->assertEquals(false, $obj0->getAllowPointSelect());
		$this->assertEquals(true, $obj0->getAnimation());
		$this->assertEquals(null, $obj0->getAnimationLimit());
		$this->assertEquals(null, $obj0->getClassName());
		$this->assertEquals(null, $obj0->getColor());
		$this->assertEquals(null, $obj0->getColorIndex());
		$this->assertEquals(300, $obj0->getCropThreshold());
		$this->assertEquals(null, $obj0->getCursor());
		$this->assertEquals("Solid", $obj0->getDashStyle());
		$this->assertEquals(null, $obj0->getDataLabels());
		$this->assertEquals(null, $obj0->getDescription());
		$this->assertEquals(true, $obj0->getEnableMouseTracking());
		$this->assertEquals(null, $obj0->getEvents());
		$this->assertEquals(null, $obj0->getExposeElementToA11y());
		$this->assertEquals(null, $obj0->getFindNearestPointBy());
		$this->assertEquals(false, $obj0->getGetExtremesFromAll());
		$this->assertEquals(null, $obj0->getKeys());
		$this->assertEquals(0, $obj0->getLineWidth());
		$this->assertEquals(null, $obj0->getLinkedTo());
		$this->assertEquals(null, $obj0->getMarker());
		$this->assertEquals(null, $obj0->getNegativeColor());
		$this->assertEquals(null, $obj0->getPoint());
		$this->assertEquals(null, $obj0->getPointDescriptionFormatter());
		$this->assertEquals(1, $obj0->getPointInterval());
		$this->assertEquals(null, $obj0->getPointIntervalUnit());
		$this->assertEquals(0, $obj0->getPointStart());
		$this->assertEquals(false, $obj0->getSelected());
		$this->assertEquals(false, $obj0->getShadow());
		$this->assertEquals(false, $obj0->getShowCheckbox());
		$this->assertEquals(true, $obj0->getShowInLegend());
		$this->assertEquals(null, $obj0->getSkipKeyboardNavigation());
		$this->assertEquals(null, $obj0->getStates());
		$this->assertEquals(false, $obj0->getStickyTracking());
		$this->assertEquals(null, $obj0->getTooltip());
		$this->assertEquals(1000, $obj0->getTurboThreshold());
		$this->assertEquals(true, $obj0->getVisible());
		$this->assertEquals("y", $obj0->getZoneAxis());
		$this->assertEquals(null, $obj0->getZones());
    }

	/**
	 * Tests the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPolygon(false);

		$obj->newDataLabels();
		$obj->newEvents();
		$obj->newMarker();
		$obj->newPoint();
		$obj->newStates();

		$obj->clear();

		$res = ["dataLabels" => [], "events" => [], "marker" => [], "point" => [], "states" => []];
		$this->assertEquals($res, $obj->toArray());
	}

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPolygon(true);

		$this->assertEquals([], $obj->jsonSerialize());
	}

	/**
	 * Tests the newDataLabels() method.
	 *
	 * @return void.
	 */
	public function testNewDataLabels() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPolygon(false);

		$res = $obj->newDataLabels();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Polygon\HighchartsDataLabels::class, $res);
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPolygon(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Polygon\HighchartsEvents::class, $res);
	}

	/**
	 * Tests the newMarker() method.
	 *
	 * @return void.
	 */
	public function testNewMarker() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPolygon(false);

		$res = $obj->newMarker();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Polygon\HighchartsMarker::class, $res);
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPolygon(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Polygon\HighchartsPoint::class, $res);
	}

	/**
	 * Tests the newStates() method.
	 *
	 * @return void.
	 */
	public function testNewStates() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPolygon(false);

		$res = $obj->newStates();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Polygon\HighchartsStates::class, $res);
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPolygon(true);

		$obj->setAllowPointSelect(0);

		$res1 = ["allowPointSelect" => 0];
		$this->assertEquals($res1, $obj->toArray());

		$obj->setAnimation(0);

		$res2 = ["allowPointSelect" => 0, "animation" => 0];
		$this->assertEquals($res2, $obj->toArray());

		$obj->setAnimationLimit(43);

		$res3 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43];
		$this->assertEquals($res3, $obj->toArray());

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res4 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res4, $obj->toArray());

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res5 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res5, $obj->toArray());

		$obj->setColorIndex(18);

		$res6 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18];
		$this->assertEquals($res6, $obj->toArray());

		$obj->setCropThreshold(17);

		$res7 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17];
		$this->assertEquals($res7, $obj->toArray());

		$obj->setCursor("crosshair");

		$res8 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair"];
		$this->assertEquals($res8, $obj->toArray());

		$obj->setDashStyle("LongDashDotDot");

		$res9 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot"];
		$this->assertEquals($res9, $obj->toArray());

		$obj->setDataLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Polygon\HighchartsDataLabels());

		$res10 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => []];
		$this->assertEquals($res10, $obj->toArray());

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res11 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res11, $obj->toArray());

		$obj->setEnableMouseTracking(1);

		$res12 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1];
		$this->assertEquals($res12, $obj->toArray());

		$obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Polygon\HighchartsEvents());

		$res13 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => []];
		$this->assertEquals($res13, $obj->toArray());

		$obj->setExposeElementToA11y(1);

		$res14 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1];
		$this->assertEquals($res14, $obj->toArray());

		$obj->setFindNearestPointBy("xy");

		$res15 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy"];
		$this->assertEquals($res15, $obj->toArray());

		$obj->setGetExtremesFromAll(0);

		$res16 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0];
		$this->assertEquals($res16, $obj->toArray());

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res17 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res17, $obj->toArray());

		$obj->setLineWidth(12);

		$res18 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 12];
		$this->assertEquals($res18, $obj->toArray());

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res19 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 12, "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res19, $obj->toArray());

		$obj->setMarker(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Polygon\HighchartsMarker());

		$res20 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 12, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => []];
		$this->assertEquals($res20, $obj->toArray());

		$obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

		$res21 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 12, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
		$this->assertEquals($res21, $obj->toArray());

		$obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Polygon\HighchartsPoint());

		$res22 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 12, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => []];
		$this->assertEquals($res22, $obj->toArray());

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res23 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 12, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res23, $obj->toArray());

		$obj->setPointInterval(71);

		$res24 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 12, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 71];
		$this->assertEquals($res24, $obj->toArray());

		$obj->setPointIntervalUnit("year");

		$res25 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 12, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 71, "pointIntervalUnit" => "year"];
		$this->assertEquals($res25, $obj->toArray());

		$obj->setPointStart(40);

		$res26 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 12, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 71, "pointIntervalUnit" => "year", "pointStart" => 40];
		$this->assertEquals($res26, $obj->toArray());

		$obj->setSelected(1);

		$res27 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 12, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 71, "pointIntervalUnit" => "year", "pointStart" => 40, "selected" => 1];
		$this->assertEquals($res27, $obj->toArray());

		$obj->setShadow(0);

		$res28 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 12, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 71, "pointIntervalUnit" => "year", "pointStart" => 40, "selected" => 1, "shadow" => 0];
		$this->assertEquals($res28, $obj->toArray());

		$obj->setShowCheckbox(1);

		$res29 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 12, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 71, "pointIntervalUnit" => "year", "pointStart" => 40, "selected" => 1, "shadow" => 0, "showCheckbox" => 1];
		$this->assertEquals($res29, $obj->toArray());

		$obj->setShowInLegend(1);

		$res30 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 12, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 71, "pointIntervalUnit" => "year", "pointStart" => 40, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1];
		$this->assertEquals($res30, $obj->toArray());

		$obj->setSkipKeyboardNavigation(1);

		$res31 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 12, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 71, "pointIntervalUnit" => "year", "pointStart" => 40, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1];
		$this->assertEquals($res31, $obj->toArray());

		$obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Polygon\HighchartsStates());

		$res32 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 12, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 71, "pointIntervalUnit" => "year", "pointStart" => 40, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => []];
		$this->assertEquals($res32, $obj->toArray());

		$obj->setStickyTracking(1);

		$res33 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 12, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 71, "pointIntervalUnit" => "year", "pointStart" => 40, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1];
		$this->assertEquals($res33, $obj->toArray());

		$obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

		$res34 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 12, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 71, "pointIntervalUnit" => "year", "pointStart" => 40, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
		$this->assertEquals($res34, $obj->toArray());

		$obj->setTurboThreshold(39);

		$res35 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 12, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 71, "pointIntervalUnit" => "year", "pointStart" => 40, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 39];
		$this->assertEquals($res35, $obj->toArray());

		$obj->setVisible(0);

		$res36 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 12, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 71, "pointIntervalUnit" => "year", "pointStart" => 40, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 39, "visible" => 0];
		$this->assertEquals($res36, $obj->toArray());

		$obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

		$res37 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 12, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 71, "pointIntervalUnit" => "year", "pointStart" => 40, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 39, "visible" => 0, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
		$this->assertEquals($res37, $obj->toArray());

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res38 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "cropThreshold" => 17, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 12, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 71, "pointIntervalUnit" => "year", "pointStart" => 40, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 39, "visible" => 0, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res38, $obj->toArray());
	}

}
