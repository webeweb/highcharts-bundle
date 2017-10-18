<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Legend;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts navigation test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Legend
 * @version 5.0.14
 */
final class HighchartsNavigationTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsNavigation(true);

        $this->assertEquals(null, $obj1->getActiveColor(), "The method getActiveColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getAnimation(), "The method getAnimation() does not return the expected value");
        $this->assertEquals(null, $obj1->getArrowSize(), "The method getArrowSize() does not return the expected value");
        $this->assertEquals(null, $obj1->getEnabled(), "The method getEnabled() does not return the expected value");
        $this->assertEquals(null, $obj1->getInactiveColor(), "The method getInactiveColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getStyle(), "The method getStyle() does not return the expected value");

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsNavigation(false);

        $this->assertEquals("#003399", $obj0->getActiveColor(), "The method getActiveColor() does not return the expected value");
        $this->assertEquals(true, $obj0->getAnimation(), "The method getAnimation() does not return the expected value");
        $this->assertEquals(12, $obj0->getArrowSize(), "The method getArrowSize() does not return the expected value");
        $this->assertEquals(true, $obj0->getEnabled(), "The method getEnabled() does not return the expected value");
        $this->assertEquals("#cccccc", $obj0->getInactiveColor(), "The method getInactiveColor() does not return the expected value");
        $this->assertEquals(null, $obj0->getStyle(), "The method getStyle() does not return the expected value");
    }

    /**
     * Test the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsNavigation(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Test the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsNavigation(true);

        $obj->setActiveColor("e696f1ec7e5059eee9c79e452a2547cd");

        $res1 = ["activeColor" => "e696f1ec7e5059eee9c79e452a2547cd"];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with active color");

        $obj->setAnimation(1);

        $res2 = ["activeColor" => "e696f1ec7e5059eee9c79e452a2547cd", "animation" => 1];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with animation");

        $obj->setArrowSize(48);

        $res3 = ["activeColor" => "e696f1ec7e5059eee9c79e452a2547cd", "animation" => 1, "arrowSize" => 48];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with arrow size");

        $obj->setEnabled(1);

        $res4 = ["activeColor" => "e696f1ec7e5059eee9c79e452a2547cd", "animation" => 1, "arrowSize" => 48, "enabled" => 1];
        $this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with enabled");

        $obj->setInactiveColor("b3a75fd77d41e4b05a9ca48090851664");

        $res5 = ["activeColor" => "e696f1ec7e5059eee9c79e452a2547cd", "animation" => 1, "arrowSize" => 48, "enabled" => 1, "inactiveColor" => "b3a75fd77d41e4b05a9ca48090851664"];
        $this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with inactive color");

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $res6 = ["activeColor" => "e696f1ec7e5059eee9c79e452a2547cd", "animation" => 1, "arrowSize" => 48, "enabled" => 1, "inactiveColor" => "b3a75fd77d41e4b05a9ca48090851664", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
        $this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with style");
    }

}
