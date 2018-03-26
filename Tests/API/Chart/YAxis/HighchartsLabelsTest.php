<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\YAxis;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts labels test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\YAxis
 * @version 5.0.14
 */
final class HighchartsLabelsTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsLabels(true);

        $this->assertNull($obj1->getAlign());
        $this->assertNull($obj1->getAutoRotation());
        $this->assertNull($obj1->getAutoRotationLimit());
        $this->assertNull($obj1->getDistance());
        $this->assertNull($obj1->getEnabled());
        $this->assertNull($obj1->getFormat());
        $this->assertNull($obj1->getFormatter());
        $this->assertNull($obj1->getOverflow());
        $this->assertNull($obj1->getPadding());
        $this->assertNull($obj1->getReserveSpace());
        $this->assertNull($obj1->getRotation());
        $this->assertNull($obj1->getStaggerLines());
        $this->assertNull($obj1->getStep());
        $this->assertNull($obj1->getStyle());
        $this->assertNull($obj1->getUseHTML());
        $this->assertNull($obj1->getX());
        $this->assertNull($obj1->getY());
        $this->assertNull($obj1->getZIndex());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsLabels(false);

        $this->assertEquals("right", $obj0->getAlign());
        $this->assertEquals([-45], $obj0->getAutoRotation());
        $this->assertEquals(80, $obj0->getAutoRotationLimit());
        $this->assertEquals(-25, $obj0->getDistance());
        $this->assertEquals(true, $obj0->getEnabled());
        $this->assertEquals("{value}", $obj0->getFormat());
        $this->assertNull($obj0->getFormatter());
        $this->assertNull($obj0->getOverflow());
        $this->assertEquals(5, $obj0->getPadding());
        $this->assertEquals(true, $obj0->getReserveSpace());
        $this->assertEquals(0, $obj0->getRotation());
        $this->assertNull($obj0->getStaggerLines());
        $this->assertNull($obj0->getStep());
        $this->assertEquals(["color" => "#666666", "cursor" => "default", "fontSize" => "11px"], $obj0->getStyle());
        $this->assertEquals(false, $obj0->getUseHTML());
        $this->assertNull($obj0->getX());
        $this->assertEquals(3, $obj0->getY());
        $this->assertEquals(7, $obj0->getZIndex());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsLabels(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsLabels(true);

        $obj->setAlign("right");

        $res1 = ["align" => "right"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAutoRotation(["autoRotation" => "df2870a8069e229823782cfb008a95ed"]);

        $res2 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"]];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setAutoRotationLimit(4);

        $res3 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 4];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setDistance(46);

        $res4 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 4, "distance" => 46];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setEnabled(1);

        $res5 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 4, "distance" => 46, "enabled" => 1];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setFormat("1ddcb92ade31c8fbd370001f9b29a7d9");

        $res6 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 4, "distance" => 46, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9"];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setFormatter("f2ffc59487832cbad265a8fef2133592");

        $res7 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 4, "distance" => 46, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setOverflow("justify");

        $res8 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 4, "distance" => 46, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify"];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setPadding(30);

        $res9 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 4, "distance" => 46, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 30];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setReserveSpace(0);

        $res10 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 4, "distance" => 46, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 30, "reserveSpace" => 0];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setRotation(50);

        $res11 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 4, "distance" => 46, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 30, "reserveSpace" => 0, "rotation" => 50];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setStaggerLines(97);

        $res12 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 4, "distance" => 46, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 30, "reserveSpace" => 0, "rotation" => 50, "staggerLines" => 97];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setStep(54);

        $res13 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 4, "distance" => 46, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 30, "reserveSpace" => 0, "rotation" => 50, "staggerLines" => 97, "step" => 54];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $res14 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 4, "distance" => 46, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 30, "reserveSpace" => 0, "rotation" => 50, "staggerLines" => 97, "step" => 54, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setUseHTML(1);

        $res15 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 4, "distance" => 46, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 30, "reserveSpace" => 0, "rotation" => 50, "staggerLines" => 97, "step" => 54, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setX(67);

        $res16 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 4, "distance" => 46, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 30, "reserveSpace" => 0, "rotation" => 50, "staggerLines" => 97, "step" => 54, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1, "x" => 67];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setY(58);

        $res17 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 4, "distance" => 46, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 30, "reserveSpace" => 0, "rotation" => 50, "staggerLines" => 97, "step" => 54, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1, "x" => 67, "y" => 58];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setZIndex(8);

        $res18 = ["align" => "right", "autoRotation" => ["autoRotation" => "df2870a8069e229823782cfb008a95ed"], "autoRotationLimit" => 4, "distance" => 46, "enabled" => 1, "format" => "1ddcb92ade31c8fbd370001f9b29a7d9", "formatter" => "f2ffc59487832cbad265a8fef2133592", "overflow" => "justify", "padding" => 30, "reserveSpace" => 0, "rotation" => 50, "staggerLines" => 97, "step" => 54, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 1, "x" => 67, "y" => 58, "zIndex" => 8];
        $this->assertEquals($res18, $obj->toArray());
    }

}
