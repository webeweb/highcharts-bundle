<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Polygon\States;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts hover test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Polygon\States
 * @version 5.0.14
 */
final class HighchartsHoverTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Polygon\States\HighchartsHover(true);

		$this->assertEquals(null, $obj1->getAnimation(), "The method getAnimation() does not return the expected value");
		$this->assertEquals(null, $obj1->getEnabled(), "The method getEnabled() does not return the expected value");
		$this->assertEquals(null, $obj1->getHalo(), "The method getHalo() does not return the expected value");
		$this->assertEquals(null, $obj1->getLineWidth(), "The method getLineWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getLineWidthPlus(), "The method getLineWidthPlus() does not return the expected value");
		$this->assertEquals(null, $obj1->getMarker(), "The method getMarker() does not return the expected value");

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Polygon\States\HighchartsHover(false);

		$this->assertEquals(["duration" => 50], $obj0->getAnimation(), "The method getAnimation() does not return the expected value");
		$this->assertEquals(true, $obj0->getEnabled(), "The method getEnabled() does not return the expected value");
		$this->assertEquals(null, $obj0->getHalo(), "The method getHalo() does not return the expected value");
		$this->assertEquals(2, $obj0->getLineWidth(), "The method getLineWidth() does not return the expected value");
		$this->assertEquals(1, $obj0->getLineWidthPlus(), "The method getLineWidthPlus() does not return the expected value");
		$this->assertEquals(null, $obj0->getMarker(), "The method getMarker() does not return the expected value");
    }

	/**
	 * Tests the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Polygon\States\HighchartsHover(false);

		$obj->newMarker();

		$obj->clear();

		$res = ["marker" => []];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Polygon\States\HighchartsHover(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Tests the newMarker() method.
	 *
	 * @return void.
	 */
	public function testNewMarker() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Polygon\States\HighchartsHover(false);

		$res = $obj->newMarker();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Polygon\States\Hover\HighchartsMarker::class, $res, "The method newMarker() does not return the expected object");
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Polygon\States\HighchartsHover(true);

		$obj->setAnimation(0);

		$res1 = ["animation" => 0];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with animation");

		$obj->setEnabled(1);

		$res2 = ["animation" => 0, "enabled" => 1];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with enabled");

		$obj->setHalo(["halo" => "57f842286171094855e51fc3a541c1e2"]);

		$res3 = ["animation" => 0, "enabled" => 1, "halo" => ["halo" => "57f842286171094855e51fc3a541c1e2"]];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with halo");

		$obj->setLineWidth(82);

		$res4 = ["animation" => 0, "enabled" => 1, "halo" => ["halo" => "57f842286171094855e51fc3a541c1e2"], "lineWidth" => 82];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with line width");

		$obj->setLineWidthPlus(47);

		$res5 = ["animation" => 0, "enabled" => 1, "halo" => ["halo" => "57f842286171094855e51fc3a541c1e2"], "lineWidth" => 82, "lineWidthPlus" => 47];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with line width plus");

		$obj->setMarker(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Polygon\States\Hover\HighchartsMarker());

		$res6 = ["animation" => 0, "enabled" => 1, "halo" => ["halo" => "57f842286171094855e51fc3a541c1e2"], "lineWidth" => 82, "lineWidthPlus" => 47, "marker" => []];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with marker");
	}

}
