<?php
/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\YAxis;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts stack labels test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\YAxis
 * @version 5.0.14
 */
final class HighchartsStackLabelsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels(true);

		$this->assertEquals(null, $obj1->getAlign());
		$this->assertEquals(null, $obj1->getEnabled());
		$this->assertEquals(null, $obj1->getFormat());
		$this->assertEquals(null, $obj1->getFormatter());
		$this->assertEquals(null, $obj1->getRotation());
		$this->assertEquals(null, $obj1->getStyle());
		$this->assertEquals(null, $obj1->getTextAlign());
		$this->assertEquals(null, $obj1->getUseHTML());
		$this->assertEquals(null, $obj1->getVerticalAlign());
		$this->assertEquals(null, $obj1->getX());
		$this->assertEquals(null, $obj1->getY());

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels(false);

		$this->assertEquals(null, $obj0->getAlign());
		$this->assertEquals(false, $obj0->getEnabled());
		$this->assertEquals("{total}", $obj0->getFormat());
		$this->assertEquals(null, $obj0->getFormatter());
		$this->assertEquals(0, $obj0->getRotation());
		$this->assertEquals(["color" => "#000000", "fontSize" => "11px", "fontWeight" => "bold", "textShadow" => "1px 1px contrast, -1px -1px contrast, -1px 1px contrast, 1px -1px contrast"], $obj0->getStyle());
		$this->assertEquals(null, $obj0->getTextAlign());
		$this->assertEquals(false, $obj0->getUseHTML());
		$this->assertEquals(null, $obj0->getVerticalAlign());
		$this->assertEquals(null, $obj0->getX());
		$this->assertEquals(null, $obj0->getY());
    }

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels(true);

		$this->assertEquals([], $obj->jsonSerialize());
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsStackLabels(true);

		$obj->setAlign("right");

		$res1 = ["align" => "right"];
		$this->assertEquals($res1, $obj->toArray());

		$obj->setEnabled(1);

		$res2 = ["align" => "right", "enabled" => 1];
		$this->assertEquals($res2, $obj->toArray());

		$obj->setFormat("1ddcb92ade31c8fbd370001f9b29a7d9");

		$res3 = ["align" => "right", "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9"];
		$this->assertEquals($res3, $obj->toArray());

		$obj->setFormatter("f2ffc59487832cbad265a8fef2133592");

		$res4 = ["align" => "right", "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592"];
		$this->assertEquals($res4, $obj->toArray());

		$obj->setRotation(24);

		$res5 = ["align" => "right", "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "rotation" => 24];
		$this->assertEquals($res5, $obj->toArray());

		$obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

		$res6 = ["align" => "right", "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "rotation" => 24, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
		$this->assertEquals($res6, $obj->toArray());

		$obj->setTextAlign("right");

		$res7 = ["align" => "right", "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "rotation" => 24, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "textAlign" => "right"];
		$this->assertEquals($res7, $obj->toArray());

		$obj->setUseHTML(0);

		$res8 = ["align" => "right", "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "rotation" => 24, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "textAlign" => "right", "useHTML" => 0];
		$this->assertEquals($res8, $obj->toArray());

		$obj->setVerticalAlign("bottom");

		$res9 = ["align" => "right", "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "rotation" => 24, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "textAlign" => "right", "useHTML" => 0, "verticalAlign" => "bottom"];
		$this->assertEquals($res9, $obj->toArray());

		$obj->setX(3);

		$res10 = ["align" => "right", "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "rotation" => 24, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "textAlign" => "right", "useHTML" => 0, "verticalAlign" => "bottom", "x" => 3];
		$this->assertEquals($res10, $obj->toArray());

		$obj->setY(49);

		$res11 = ["align" => "right", "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "rotation" => 24, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "textAlign" => "right", "useHTML" => 0, "verticalAlign" => "bottom", "x" => 3, "y" => 49];
		$this->assertEquals($res11, $obj->toArray());
	}

}
