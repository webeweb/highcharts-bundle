<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\ZAxis\PlotLines;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts label test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\ZAxis\PlotLines
 * @version 5.0.14
 */
final class HighchartsLabelTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\PlotLines\HighchartsLabel(true);

        $this->assertNull($obj1->getAlign());
        $this->assertNull($obj1->getRotation());
        $this->assertNull($obj1->getStyle());
        $this->assertNull($obj1->getText());
        $this->assertNull($obj1->getTextAlign());
        $this->assertNull($obj1->getUseHTML());
        $this->assertNull($obj1->getVerticalAlign());
        $this->assertNull($obj1->getX());
        $this->assertNull($obj1->getY());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\PlotLines\HighchartsLabel(false);

        $this->assertEquals("left", $obj0->getAlign());
        $this->assertNull($obj0->getRotation());
        $this->assertNull($obj0->getStyle());
        $this->assertNull($obj0->getText());
        $this->assertNull($obj0->getTextAlign());
        $this->assertEquals(false, $obj0->getUseHTML());
        $this->assertEquals("top", $obj0->getVerticalAlign());
        $this->assertNull($obj0->getX());
        $this->assertNull($obj0->getY());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\PlotLines\HighchartsLabel(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\PlotLines\HighchartsLabel(true);

        $obj->setAlign("f792d1afb0399dce47533bead9d71a8a");

        $res1 = ["align" => "f792d1afb0399dce47533bead9d71a8a"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setRotation(22);

        $res2 = ["align" => "f792d1afb0399dce47533bead9d71a8a", "rotation" => 22];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $res3 = ["align" => "f792d1afb0399dce47533bead9d71a8a", "rotation" => 22, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");

        $res4 = ["align" => "f792d1afb0399dce47533bead9d71a8a", "rotation" => 22, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setTextAlign("6e1fcbf7c065b2e7fef4cdc9bae3fe53");

        $res5 = ["align" => "f792d1afb0399dce47533bead9d71a8a", "rotation" => 22, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "textAlign" => "6e1fcbf7c065b2e7fef4cdc9bae3fe53"];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setUseHTML(1);

        $res6 = ["align" => "f792d1afb0399dce47533bead9d71a8a", "rotation" => 22, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "textAlign" => "6e1fcbf7c065b2e7fef4cdc9bae3fe53", "useHTML" => 1];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setVerticalAlign("bottom");

        $res7 = ["align" => "f792d1afb0399dce47533bead9d71a8a", "rotation" => 22, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "textAlign" => "6e1fcbf7c065b2e7fef4cdc9bae3fe53", "useHTML" => 1, "verticalAlign" => "bottom"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setX(86);

        $res8 = ["align" => "f792d1afb0399dce47533bead9d71a8a", "rotation" => 22, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "textAlign" => "6e1fcbf7c065b2e7fef4cdc9bae3fe53", "useHTML" => 1, "verticalAlign" => "bottom", "x" => 86];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setY(13);

        $res9 = ["align" => "f792d1afb0399dce47533bead9d71a8a", "rotation" => 22, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "textAlign" => "6e1fcbf7c065b2e7fef4cdc9bae3fe53", "useHTML" => 1, "verticalAlign" => "bottom", "x" => 86, "y" => 13];
        $this->assertEquals($res9, $obj->toArray());
    }

}
