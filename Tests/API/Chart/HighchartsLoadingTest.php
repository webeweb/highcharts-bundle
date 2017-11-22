<?php
/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts loading test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsLoadingTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLoading(true);

		$this->assertEquals(null, $obj1->getHideDuration());
		$this->assertEquals(null, $obj1->getLabelStyle());
		$this->assertEquals(null, $obj1->getShowDuration());
		$this->assertEquals(null, $obj1->getStyle());

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLoading(false);

		$this->assertEquals(100, $obj0->getHideDuration());
		$this->assertEquals(["fontWeight" => "bold", "position" => "relative", "top" => "45%"], $obj0->getLabelStyle());
		$this->assertEquals(100, $obj0->getShowDuration());
		$this->assertEquals(["position" => "absolute", "backgroundColor" => "#ffffff", "opacity" => 0.5, "textAlign" => "center"], $obj0->getStyle());
    }

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLoading(true);

		$this->assertEquals([], $obj->jsonSerialize());
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLoading(true);

		$obj->setHideDuration(82);

		$res1 = ["hideDuration" => 82];
		$this->assertEquals($res1, $obj->toArray());

		$obj->setLabelStyle(["labelStyle" => "00faa433bf869443728e502b4f7c6850"]);

		$res2 = ["hideDuration" => 82, "labelStyle" => ["labelStyle" => "00faa433bf869443728e502b4f7c6850"]];
		$this->assertEquals($res2, $obj->toArray());

		$obj->setShowDuration(24);

		$res3 = ["hideDuration" => 82, "labelStyle" => ["labelStyle" => "00faa433bf869443728e502b4f7c6850"], "showDuration" => 24];
		$this->assertEquals($res3, $obj->toArray());

		$obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

		$res4 = ["hideDuration" => 82, "labelStyle" => ["labelStyle" => "00faa433bf869443728e502b4f7c6850"], "showDuration" => 24, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
		$this->assertEquals($res4, $obj->toArray());
	}

}
