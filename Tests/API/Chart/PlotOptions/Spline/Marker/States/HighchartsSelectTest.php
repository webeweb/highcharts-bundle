<?php
/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Spline\Marker\States;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts select test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Spline\Marker\States
 * @version 5.0.14
 */
final class HighchartsSelectTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Spline\Marker\States\HighchartsSelect(true);

		$this->assertEquals(null, $obj1->getEnabled());
		$this->assertEquals(null, $obj1->getFillColor());
		$this->assertEquals(null, $obj1->getLineColor());
		$this->assertEquals(null, $obj1->getLineWidth());
		$this->assertEquals(null, $obj1->getRadius());

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Spline\Marker\States\HighchartsSelect(false);

		$this->assertEquals(true, $obj0->getEnabled());
		$this->assertEquals(null, $obj0->getFillColor());
		$this->assertEquals("#000000", $obj0->getLineColor());
		$this->assertEquals(0, $obj0->getLineWidth());
		$this->assertEquals(null, $obj0->getRadius());
    }

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Spline\Marker\States\HighchartsSelect(true);

		$this->assertEquals([], $obj->jsonSerialize());
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Spline\Marker\States\HighchartsSelect(true);

		$obj->setEnabled(0);

		$res1 = ["enabled" => 0];
		$this->assertEquals($res1, $obj->toArray());

		$obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");

		$res2 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd"];
		$this->assertEquals($res2, $obj->toArray());

		$obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");

		$res3 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63"];
		$this->assertEquals($res3, $obj->toArray());

		$obj->setLineWidth(91);

		$res4 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91];
		$this->assertEquals($res4, $obj->toArray());

		$obj->setRadius(99);

		$res5 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 91, "radius" => 99];
		$this->assertEquals($res5, $obj->toArray());
	}

}
