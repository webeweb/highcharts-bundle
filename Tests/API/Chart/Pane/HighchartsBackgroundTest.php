<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Pane;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts background test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Pane
 * @version 5.0.14
 */
final class HighchartsBackgroundTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\HighchartsBundle\API\Chart\Pane\HighchartsBackground(true);

        $this->assertEquals(null, $obj1->getBackgroundColor(), "The method getBackgroundColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getBorderColor(), "The method getBorderColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
        $this->assertEquals(null, $obj1->getClassName(), "The method getClassName() does not return the expected value");
        $this->assertEquals(null, $obj1->getInnerRadius(), "The method getInnerRadius() does not return the expected value");
        $this->assertEquals(null, $obj1->getOuterRadius(), "The method getOuterRadius() does not return the expected value");
        $this->assertEquals(null, $obj1->getShape(), "The method getShape() does not return the expected value");

        $obj0 = new \WBW\HighchartsBundle\API\Chart\Pane\HighchartsBackground(false);

        $this->assertEquals(null, $obj0->getBackgroundColor(), "The method getBackgroundColor() does not return the expected value");
        $this->assertEquals("#cccccc", $obj0->getBorderColor(), "The method getBorderColor() does not return the expected value");
        $this->assertEquals(1, $obj0->getBorderWidth(), "The method getBorderWidth() does not return the expected value");
        $this->assertEquals("highcharts-pane", $obj0->getClassName(), "The method getClassName() does not return the expected value");
        $this->assertEquals("0", $obj0->getInnerRadius(), "The method getInnerRadius() does not return the expected value");
        $this->assertEquals("105%", $obj0->getOuterRadius(), "The method getOuterRadius() does not return the expected value");
        $this->assertEquals("solid", $obj0->getShape(), "The method getShape() does not return the expected value");
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\HighchartsBundle\API\Chart\Pane\HighchartsBackground(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\HighchartsBundle\API\Chart\Pane\HighchartsBackground(true);

        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");

        $res1 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f"];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with background color");

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res2 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with border color");

        $obj->setBorderWidth(37);

        $res3 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 37];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with border width");

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res4 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 37, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with class name");

        $obj->setInnerRadius(35);

        $res5 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 37, "className" => "6f66e878c62db60568a3487869695820", "innerRadius" => 35];
        $this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with inner radius");

        $obj->setOuterRadius(87);

        $res6 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 37, "className" => "6f66e878c62db60568a3487869695820", "innerRadius" => 35, "outerRadius" => 87];
        $this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with outer radius");

        $obj->setShape("arc");

        $res7 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 37, "className" => "6f66e878c62db60568a3487869695820", "innerRadius" => 35, "outerRadius" => 87, "shape" => "arc"];
        $this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with shape");
    }

}
