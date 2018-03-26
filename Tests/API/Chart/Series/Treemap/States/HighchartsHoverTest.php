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

        $this->assertNull($obj1->getAnimation());
        $this->assertNull($obj1->getBorderColor());
        $this->assertNull($obj1->getBrightness());
        $this->assertNull($obj1->getColor());
        $this->assertNull($obj1->getEnabled());
        $this->assertNull($obj1->getOpacity());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\States\HighchartsHover(false);

        $this->assertEquals(["duration" => 50], $obj0->getAnimation());
        $this->assertNull($obj0->getBorderColor());
        $this->assertEquals(0.1, $obj0->getBrightness());
        $this->assertNull($obj0->getColor());
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

        $obj->setAnimation(1);

        $res1 = ["animation" => 1];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res2 = ["animation" => 1, "borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setBrightness(64);

        $res3 = ["animation" => 1, "borderColor" => "97da935a74593c55d78be9d1295aa994", "brightness" => 64];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res4 = ["animation" => 1, "borderColor" => "97da935a74593c55d78be9d1295aa994", "brightness" => 64, "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setEnabled(0);

        $res5 = ["animation" => 1, "borderColor" => "97da935a74593c55d78be9d1295aa994", "brightness" => 64, "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "enabled" => 0];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setOpacity(56);

        $res6 = ["animation" => 1, "borderColor" => "97da935a74593c55d78be9d1295aa994", "brightness" => 64, "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "enabled" => 0, "opacity" => 56];
        $this->assertEquals($res6, $obj->toArray());
    }

}
