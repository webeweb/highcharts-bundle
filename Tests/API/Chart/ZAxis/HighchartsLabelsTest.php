<?php
/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\ZAxis;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts labels test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\ZAxis
 * @version 5.0.14
 */
final class HighchartsLabelsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsLabels(true);

		$this->assertEquals(null, $obj1->getAlign());
		$this->assertEquals(null, $obj1->getAutoRotation());
		$this->assertEquals(null, $obj1->getAutoRotationLimit());
		$this->assertEquals(null, $obj1->getDistance());
		$this->assertEquals(null, $obj1->getEnabled());
		$this->assertEquals(null, $obj1->getFormat());
		$this->assertEquals(null, $obj1->getFormatter());
		$this->assertEquals(null, $obj1->getOverflow());
		$this->assertEquals(null, $obj1->getPadding());
		$this->assertEquals(null, $obj1->getReserveSpace());
		$this->assertEquals(null, $obj1->getRotation());
		$this->assertEquals(null, $obj1->getStaggerLines());
		$this->assertEquals(null, $obj1->getStep());
		$this->assertEquals(null, $obj1->getStyle());
		$this->assertEquals(null, $obj1->getUseHTML());
		$this->assertEquals(null, $obj1->getX());
		$this->assertEquals(null, $obj1->getY());
		$this->assertEquals(null, $obj1->getZIndex());

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsLabels(false);

		$this->assertEquals(null, $obj0->getAlign());
		$this->assertEquals([-45], $obj0->getAutoRotation());
		$this->assertEquals(80, $obj0->getAutoRotationLimit());
		$this->assertEquals(15, $obj0->getDistance());
		$this->assertEquals(true, $obj0->getEnabled());
		$this->assertEquals("{value}", $obj0->getFormat());
		$this->assertEquals(null, $obj0->getFormatter());
		$this->assertEquals(null, $obj0->getOverflow());
		$this->assertEquals(5, $obj0->getPadding());
		$this->assertEquals(true, $obj0->getReserveSpace());
		$this->assertEquals(0, $obj0->getRotation());
		$this->assertEquals(null, $obj0->getStaggerLines());
		$this->assertEquals(null, $obj0->getStep());
		$this->assertEquals(["color" => "#666666", "cursor" => "default", "fontSize" => "11px"], $obj0->getStyle());
		$this->assertEquals(false, $obj0->getUseHTML());
		$this->assertEquals(0, $obj0->getX());
		$this->assertEquals(null, $obj0->getY());
		$this->assertEquals(7, $obj0->getZIndex());
    }

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsLabels(true);

		$this->assertEquals([], $obj->jsonSerialize());
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsLabels(true);

		$obj->setAlign("right");

		$res1 = ["align" => "right"];
		$this->assertEquals($res1, $obj->toArray());

		$obj->setAutoRotation(["autoRotation" => "df2870a8069e229823782cfb008a95ed"]);

		$res2 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"]];
		$this->assertEquals($res2, $obj->toArray());

		$obj->setAutoRotationLimit(48);

		$res3 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 48];
		$this->assertEquals($res3, $obj->toArray());

		$obj->setDistance(56);

		$res4 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 48, "distance" => 56];
		$this->assertEquals($res4, $obj->toArray());

		$obj->setEnabled(1);

		$res5 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 48, "distance" => 56, "enabled" => 1];
		$this->assertEquals($res5, $obj->toArray());

		$obj->setFormat("1ddcb92ade31c8fbd370001f9b29a7d9");

		$res6 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 48, "distance" => 56, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9"];
		$this->assertEquals($res6, $obj->toArray());

		$obj->setFormatter("f2ffc59487832cbad265a8fef2133592");

		$res7 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 48, "distance" => 56, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592"];
		$this->assertEquals($res7, $obj->toArray());

		$obj->setOverflow("justify");

		$res8 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 48, "distance" => 56, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify"];
		$this->assertEquals($res8, $obj->toArray());

		$obj->setPadding(70);

		$res9 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 48, "distance" => 56, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 70];
		$this->assertEquals($res9, $obj->toArray());

		$obj->setReserveSpace(1);

		$res10 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 48, "distance" => 56, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 70, "reserveSpace" => 1];
		$this->assertEquals($res10, $obj->toArray());

		$obj->setRotation(22);

		$res11 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 48, "distance" => 56, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 70, "reserveSpace" => 1, "rotation" => 22];
		$this->assertEquals($res11, $obj->toArray());

		$obj->setStaggerLines(65);

		$res12 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 48, "distance" => 56, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 70, "reserveSpace" => 1, "rotation" => 22, "staggerLines" => 65];
		$this->assertEquals($res12, $obj->toArray());

		$obj->setStep(81);

		$res13 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 48, "distance" => 56, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 70, "reserveSpace" => 1, "rotation" => 22, "staggerLines" => 65, "step" => 81];
		$this->assertEquals($res13, $obj->toArray());

		$obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

		$res14 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 48, "distance" => 56, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 70, "reserveSpace" => 1, "rotation" => 22, "staggerLines" => 65, "step" => 81, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
		$this->assertEquals($res14, $obj->toArray());

		$obj->setUseHTML(1);

		$res15 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 48, "distance" => 56, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 70, "reserveSpace" => 1, "rotation" => 22, "staggerLines" => 65, "step" => 81, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1];
		$this->assertEquals($res15, $obj->toArray());

		$obj->setX(26);

		$res16 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 48, "distance" => 56, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 70, "reserveSpace" => 1, "rotation" => 22, "staggerLines" => 65, "step" => 81, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1, "x" => 26];
		$this->assertEquals($res16, $obj->toArray());

		$obj->setY(5);

		$res17 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 48, "distance" => 56, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 70, "reserveSpace" => 1, "rotation" => 22, "staggerLines" => 65, "step" => 81, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1, "x" => 26, "y" => 5];
		$this->assertEquals($res17, $obj->toArray());

		$obj->setZIndex(4);

		$res18 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 48, "distance" => 56, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 70, "reserveSpace" => 1, "rotation" => 22, "staggerLines" => 65, "step" => 81, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1, "x" => 26, "y" => 5, "zIndex" => 4];
		$this->assertEquals($res18, $obj->toArray());
	}

}
