<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Navigation;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts button options test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Navigation
 * @version 5.0.14
 */
final class HighchartsButtonOptionsTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Navigation\HighchartsButtonOptions(true);

        $this->assertNull($obj1->getAlign());
        $this->assertNull($obj1->getEnabled());
        $this->assertNull($obj1->getHeight());
        $this->assertNull($obj1->getSymbolFill());
        $this->assertNull($obj1->getSymbolSize());
        $this->assertNull($obj1->getSymbolStroke());
        $this->assertNull($obj1->getSymbolStrokeWidth());
        $this->assertNull($obj1->getSymbolX());
        $this->assertNull($obj1->getSymbolY());
        $this->assertNull($obj1->getText());
        $this->assertNull($obj1->getTheme());
        $this->assertNull($obj1->getVerticalAlign());
        $this->assertNull($obj1->getWidth());
        $this->assertNull($obj1->getY());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Navigation\HighchartsButtonOptions(false);

        $this->assertEquals("right", $obj0->getAlign());
        $this->assertEquals(true, $obj0->getEnabled());
        $this->assertEquals(20, $obj0->getHeight());
        $this->assertEquals("#666666", $obj0->getSymbolFill());
        $this->assertEquals(14, $obj0->getSymbolSize());
        $this->assertEquals("#666666", $obj0->getSymbolStroke());
        $this->assertEquals(1, $obj0->getSymbolStrokeWidth());
        $this->assertEquals(12.5, $obj0->getSymbolX());
        $this->assertEquals(10.5, $obj0->getSymbolY());
        $this->assertNull($obj0->getText());
        $this->assertNull($obj0->getTheme());
        $this->assertEquals("top", $obj0->getVerticalAlign());
        $this->assertEquals(24, $obj0->getWidth());
        $this->assertEquals(0, $obj0->getY());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Navigation\HighchartsButtonOptions(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Navigation\HighchartsButtonOptions(true);

        $obj->setAlign("right");

        $res1 = ["align" => "right"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setEnabled(0);

        $res2 = ["align" => "right", "enabled" => 0];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setHeight(72);

        $res3 = ["align" => "right", "enabled" => 0, "height" => 72];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setSymbolFill("91c9eea38e42d2f606dbfea1e027bfbf");

        $res4 = ["align" => "right", "enabled" => 0, "height" => 72, "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setSymbolSize(87);

        $res5 = ["align" => "right", "enabled" => 0, "height" => 72, "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 87];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setSymbolStroke("07f92b4194c5eb604aeb59004eeaab2a");

        $res6 = ["align" => "right", "enabled" => 0, "height" => 72, "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 87, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a"];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setSymbolStrokeWidth(11);

        $res7 = ["align" => "right", "enabled" => 0, "height" => 72, "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 87, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 11];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setSymbolX(87);

        $res8 = ["align" => "right", "enabled" => 0, "height" => 72, "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 87, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 11, "symbolX" => 87];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setSymbolY(74);

        $res9 = ["align" => "right", "enabled" => 0, "height" => 72, "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 87, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 11, "symbolX" => 87, "symbolY" => 74];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");

        $res10 = ["align" => "right", "enabled" => 0, "height" => 72, "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 87, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 11, "symbolX" => 87, "symbolY" => 74, "text" => "1cb251ec0d568de6a929b520c4aed8d1"];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setTheme(["theme" => "f484570d7cf557020e11ace406901b10"]);

        $res11 = ["align" => "right", "enabled" => 0, "height" => 72, "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 87, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 11, "symbolX" => 87, "symbolY" => 74, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"]];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setVerticalAlign("bottom");

        $res12 = ["align" => "right", "enabled" => 0, "height" => 72, "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 87, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 11, "symbolX" => 87, "symbolY" => 74, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"], "verticalAlign" => "bottom"];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setWidth(70);

        $res13 = ["align" => "right", "enabled" => 0, "height" => 72, "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 87, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 11, "symbolX" => 87, "symbolY" => 74, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"], "verticalAlign" => "bottom", "width" => 70];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setY(100);

        $res14 = ["align" => "right", "enabled" => 0, "height" => 72, "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 87, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 11, "symbolX" => 87, "symbolY" => 74, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"], "verticalAlign" => "bottom", "width" => 70, "y" => 100];
        $this->assertEquals($res14, $obj->toArray());
    }

}
