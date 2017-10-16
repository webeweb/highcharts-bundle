<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts options3d test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Chart
 * @version 5.0.14
 */
final class HighchartsOptions3dTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d(true);

		$this->assertEquals(null, $obj1->getAlpha(), "The method getAlpha() does not return the expected value");
		$this->assertEquals(null, $obj1->getAxisLabelPosition(), "The method getAxisLabelPosition() does not return the expected value");
		$this->assertEquals(null, $obj1->getBeta(), "The method getBeta() does not return the expected value");
		$this->assertEquals(null, $obj1->getDepth(), "The method getDepth() does not return the expected value");
		$this->assertEquals(null, $obj1->getEnabled(), "The method getEnabled() does not return the expected value");
		$this->assertEquals(null, $obj1->getFitToPlot(), "The method getFitToPlot() does not return the expected value");
		$this->assertEquals(null, $obj1->getFrame(), "The method getFrame() does not return the expected value");
		$this->assertEquals(null, $obj1->getViewDistance(), "The method getViewDistance() does not return the expected value");

		$obj0 = new \WBW\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d(false);

		$this->assertEquals(0, $obj0->getAlpha(), "The method getAlpha() does not return the expected value");
		$this->assertEquals(null, $obj0->getAxisLabelPosition(), "The method getAxisLabelPosition() does not return the expected value");
		$this->assertEquals(0, $obj0->getBeta(), "The method getBeta() does not return the expected value");
		$this->assertEquals(100, $obj0->getDepth(), "The method getDepth() does not return the expected value");
		$this->assertEquals(false, $obj0->getEnabled(), "The method getEnabled() does not return the expected value");
		$this->assertEquals(true, $obj0->getFitToPlot(), "The method getFitToPlot() does not return the expected value");
		$this->assertEquals(null, $obj0->getFrame(), "The method getFrame() does not return the expected value");
		$this->assertEquals(100, $obj0->getViewDistance(), "The method getViewDistance() does not return the expected value");
	}

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d(false);

		$obj->newFrame();

		$obj->clear();

		$res = ["frame" => []];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Tests the newFrame() method.
	 *
	 * @return void.
	 */
	public function testNewFrame() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d(false);

		$res = $obj->newFrame();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame::class, $res, "The method newFrame() does not return the expected object");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d(true);

		$obj->setAlpha(72);

		$res1 = ["alpha" => 72];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with alpha");

		$obj->setAxisLabelPosition("auto");

		$res2 = ["alpha" => 72, "axisLabelPosition" => "auto"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with axis label position");

		$obj->setBeta(48);

		$res3 = ["alpha" => 72, "axisLabelPosition" => "auto", "beta" => 48];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with beta");

		$obj->setDepth(90);

		$res4 = ["alpha" => 72, "axisLabelPosition" => "auto", "beta" => 48, "depth" => 90];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with depth");

		$obj->setEnabled(1);

		$res5 = ["alpha" => 72, "axisLabelPosition" => "auto", "beta" => 48, "depth" => 90, "enabled" => 1];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with enabled");

		$obj->setFitToPlot(1);

		$res6 = ["alpha" => 72, "axisLabelPosition" => "auto", "beta" => 48, "depth" => 90, "enabled" => 1, "fitToPlot" => 1];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with fit to plot");

		$obj->setFrame(new \WBW\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame());

		$res7 = ["alpha" => 72, "axisLabelPosition" => "auto", "beta" => 48, "depth" => 90, "enabled" => 1, "fitToPlot" => 1, "frame" => []];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with frame");

		$obj->setViewDistance(30);

		$res8 = ["alpha" => 72, "axisLabelPosition" => "auto", "beta" => 48, "depth" => 90, "enabled" => 1, "fitToPlot" => 1, "frame" => [], "viewDistance" => 30];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with view distance");
	}

}
