<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Treemap\States;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts hover test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Treemap\States
 * @version 5.0.14
 */
final class HighchartsHoverTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\States\HighchartsHover(true);

        $this->assertEquals(null, $obj1->getAnimation());
        $this->assertEquals(null, $obj1->getBorderColor());
        $this->assertEquals(null, $obj1->getBrightness());
        $this->assertEquals(null, $obj1->getColor());
        $this->assertEquals(null, $obj1->getEnabled());
        $this->assertEquals(null, $obj1->getOpacity());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\States\HighchartsHover(false);

        $this->assertEquals(["duration" => 50], $obj0->getAnimation());
        $this->assertEquals(null, $obj0->getBorderColor());
        $this->assertEquals(0.1, $obj0->getBrightness());
        $this->assertEquals(null, $obj0->getColor());
        $this->assertEquals(true, $obj0->getEnabled());
        $this->assertEquals(0.75, $obj0->getOpacity());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\States\HighchartsHover(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\States\HighchartsHover(true);

        $obj->setAnimation(0);

        $res1 = ["animation" => 0];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res2 = ["animation" => 0, "borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setBrightness(56);

        $res3 = ["animation" => 0, "borderColor" => "97da935a74593c55d78be9d1295aa994", "brightness" => 56];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res4 = ["animation" => 0, "borderColor" => "97da935a74593c55d78be9d1295aa994", "brightness" => 56, "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setEnabled(0);

        $res5 = ["animation" => 0, "borderColor" => "97da935a74593c55d78be9d1295aa994", "brightness" => 56, "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "enabled" => 0];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setOpacity(22);

        $res6 = ["animation" => 0, "borderColor" => "97da935a74593c55d78be9d1295aa994", "brightness" => 56, "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "enabled" => 0, "opacity" => 22];
        $this->assertEquals($res6, $obj->toArray());
    }

}
