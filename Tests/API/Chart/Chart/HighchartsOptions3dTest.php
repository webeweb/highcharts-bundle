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
use WBW\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d;
use WBW\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame;

/**
 * Highcharts options3d test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Chart
 * @version 5.0.14
 */
final class HighchartsOptions3dTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsOptions3d(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the newFrame() method.
	 *
	 * @return void.
	 */
	public function testNewFrame() {

		$obj = new HighchartsOptions3d(false);

		$res = $obj->newFrame();
		$this->assertInstanceOf(HighchartsFrame::class, $res, "The method newFrame() does not return the expected class");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsOptions3d(false);

		$res = ["alpha" => 0, "beta" => 0, "depth" => 100, "enabled" => false, "fitToPlot" => true, "viewDistance" => 100];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setAxisLabelPosition("auto");

		$res1 = ["alpha" => 0, "beta" => 0, "depth" => 100, "enabled" => false, "fitToPlot" => true, "viewDistance" => 100, "axisLabelPosition" => "auto"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with axis label position");

		$obj->newFrame();

		$res2 = ["alpha" => 0, "beta" => 0, "depth" => 100, "enabled" => false, "fitToPlot" => true, "viewDistance" => 100, "axisLabelPosition" => "auto", "frame" => []];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with frame");
	}

}
