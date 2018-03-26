<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts credits test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsCreditsTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsCredits(true);

        $this->assertNull($obj1->getEnabled());
        $this->assertNull($obj1->getHref());
        $this->assertNull($obj1->getPosition());
        $this->assertNull($obj1->getStyle());
        $this->assertNull($obj1->getText());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsCredits(false);

        $this->assertEquals(true, $obj0->getEnabled());
        $this->assertEquals("http://www.highcharts.com", $obj0->getHref());
        $this->assertNull($obj0->getPosition());
        $this->assertEquals(["cursor" => "pointer", "color" => "#999999", "fontSize" => "10px"], $obj0->getStyle());
        $this->assertEquals("Highcharts.com", $obj0->getText());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsCredits(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsCredits(true);

        $obj->setEnabled(0);

        $res1 = ["enabled" => 0];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setHref("e8fab833730f3a939d0b3812fe043b5d");

        $res2 = ["enabled" => 0, "href" => "e8fab833730f3a939d0b3812fe043b5d"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setPosition(["position" => "4757fe07fd492a8be0ea6a760d683d6e"]);

        $res3 = ["enabled" => 0, "href" => "e8fab833730f3a939d0b3812fe043b5d", "position" => ["position" => "4757fe07fd492a8be0ea6a760d683d6e"]];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $res4 = ["enabled" => 0, "href" => "e8fab833730f3a939d0b3812fe043b5d", "position" => ["position" => "4757fe07fd492a8be0ea6a760d683d6e"], "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");

        $res5 = ["enabled" => 0, "href" => "e8fab833730f3a939d0b3812fe043b5d", "position" => ["position" => "4757fe07fd492a8be0ea6a760d683d6e"], "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1"];
        $this->assertEquals($res5, $obj->toArray());
    }

}
