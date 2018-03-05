<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Exporting\Buttons;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts context button test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Exporting\Buttons
 * @version 5.0.14
 */
final class HighchartsContextButtonTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton(true);

        $this->assertEquals(null, $obj1->getAlign());
        $this->assertEquals(null, $obj1->getEnabled());
        $this->assertEquals(null, $obj1->getHeight());
        $this->assertEquals(null, $obj1->getMenuItems());
        $this->assertEquals(null, $obj1->getOnclick());
        $this->assertEquals(null, $obj1->getSymbol());
        $this->assertEquals(null, $obj1->getSymbolFill());
        $this->assertEquals(null, $obj1->getSymbolSize());
        $this->assertEquals(null, $obj1->getSymbolStroke());
        $this->assertEquals(null, $obj1->getSymbolStrokeWidth());
        $this->assertEquals(null, $obj1->getSymbolX());
        $this->assertEquals(null, $obj1->getSymbolY());
        $this->assertEquals(null, $obj1->getText());
        $this->assertEquals(null, $obj1->getTheme());
        $this->assertEquals(null, $obj1->getVerticalAlign());
        $this->assertEquals(null, $obj1->getWidth());
        $this->assertEquals(null, $obj1->getX());
        $this->assertEquals(null, $obj1->getY());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton(false);

        $this->assertEquals("right", $obj0->getAlign());
        $this->assertEquals(true, $obj0->getEnabled());
        $this->assertEquals(20, $obj0->getHeight());
        $this->assertEquals(null, $obj0->getMenuItems());
        $this->assertEquals(null, $obj0->getOnclick());
        $this->assertEquals("menu", $obj0->getSymbol());
        $this->assertEquals("#666666", $obj0->getSymbolFill());
        $this->assertEquals(14, $obj0->getSymbolSize());
        $this->assertEquals("#666666", $obj0->getSymbolStroke());
        $this->assertEquals(1, $obj0->getSymbolStrokeWidth());
        $this->assertEquals(12.5, $obj0->getSymbolX());
        $this->assertEquals(10.5, $obj0->getSymbolY());
        $this->assertEquals(null, $obj0->getText());
        $this->assertEquals(null, $obj0->getTheme());
        $this->assertEquals("top", $obj0->getVerticalAlign());
        $this->assertEquals(24, $obj0->getWidth());
        $this->assertEquals(-10, $obj0->getX());
        $this->assertEquals(0, $obj0->getY());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton(true);

        $obj->setAlign("right");

        $res1 = ["align" => "right"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setEnabled(1);

        $res2 = ["align" => "right", "enabled" => 1];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setHeight(60);

        $res3 = ["align" => "right", "enabled" => 1, "height" => 60];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setMenuItems(["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"]);

        $res4 = ["align" => "right", "enabled" => 1, "height" => 60, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"]];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setOnclick("c0bb2196426022e8adf9a5b6d34fd45e");

        $res5 = ["align" => "right", "enabled" => 1, "height" => 60, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e"];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setSymbol("menu");

        $res6 = ["align" => "right", "enabled" => 1, "height" => 60, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu"];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setSymbolFill("91c9eea38e42d2f606dbfea1e027bfbf");

        $res7 = ["align" => "right", "enabled" => 1, "height" => 60, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu", "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setSymbolSize(38);

        $res8 = ["align" => "right", "enabled" => 1, "height" => 60, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu", "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 38];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setSymbolStroke("07f92b4194c5eb604aeb59004eeaab2a");

        $res9 = ["align" => "right", "enabled" => 1, "height" => 60, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu", "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 38, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a"];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setSymbolStrokeWidth(97);

        $res10 = ["align" => "right", "enabled" => 1, "height" => 60, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu", "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 38, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 97];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setSymbolX(30);

        $res11 = ["align" => "right", "enabled" => 1, "height" => 60, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu", "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 38, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 97, "symbolX" => 30];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setSymbolY(32);

        $res12 = ["align" => "right", "enabled" => 1, "height" => 60, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu", "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 38, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 97, "symbolX" => 30, "symbolY" => 32];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");

        $res13 = ["align" => "right", "enabled" => 1, "height" => 60, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu", "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 38, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 97, "symbolX" => 30, "symbolY" => 32, "text" => "1cb251ec0d568de6a929b520c4aed8d1"];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setTheme(["theme" => "f484570d7cf557020e11ace406901b10"]);

        $res14 = ["align" => "right", "enabled" => 1, "height" => 60, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu", "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 38, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 97, "symbolX" => 30, "symbolY" => 32, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"]];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setVerticalAlign("bottom");

        $res15 = ["align" => "right", "enabled" => 1, "height" => 60, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu", "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 38, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 97, "symbolX" => 30, "symbolY" => 32, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"], "verticalAlign" => "bottom"];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setWidth(46);

        $res16 = ["align" => "right", "enabled" => 1, "height" => 60, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu", "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 38, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 97, "symbolX" => 30, "symbolY" => 32, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"], "verticalAlign" => "bottom", "width" => 46];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setX(57);

        $res17 = ["align" => "right", "enabled" => 1, "height" => 60, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu", "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 38, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 97, "symbolX" => 30, "symbolY" => 32, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"], "verticalAlign" => "bottom", "width" => 46, "x" => 57];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setY(82);

        $res18 = ["align" => "right", "enabled" => 1, "height" => 60, "menuItems" => ["menuItems" => "3081c7ff634acf2d84cebc0fe12eef3f"], "onclick" => "c0bb2196426022e8adf9a5b6d34fd45e", "symbol" => "menu", "symbolFill" => "91c9eea38e42d2f606dbfea1e027bfbf", "symbolSize" => 38, "symbolStroke" => "07f92b4194c5eb604aeb59004eeaab2a", "symbolStrokeWidth" => 97, "symbolX" => 30, "symbolY" => 32, "text" => "1cb251ec0d568de6a929b520c4aed8d1", "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"], "verticalAlign" => "bottom", "width" => 46, "x" => 57, "y" => 82];
        $this->assertEquals($res18, $obj->toArray());
    }

}
