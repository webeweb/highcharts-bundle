<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Legend;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts navigation test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Legend
 * @version 5.0.14
 */
final class HighchartsNavigationTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsNavigation(true);

        $this->assertNull($obj1->getActiveColor());
        $this->assertNull($obj1->getAnimation());
        $this->assertNull($obj1->getArrowSize());
        $this->assertNull($obj1->getEnabled());
        $this->assertNull($obj1->getInactiveColor());
        $this->assertNull($obj1->getStyle());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsNavigation(false);

        $this->assertEquals("#003399", $obj0->getActiveColor());
        $this->assertEquals(true, $obj0->getAnimation());
        $this->assertEquals(12, $obj0->getArrowSize());
        $this->assertEquals(true, $obj0->getEnabled());
        $this->assertEquals("#cccccc", $obj0->getInactiveColor());
        $this->assertNull($obj0->getStyle());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsNavigation(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsNavigation(true);

        $obj->setActiveColor("e696f1ec7e5059eee9c79e452a2547cd");

        $res1 = ["activeColor" => "e696f1ec7e5059eee9c79e452a2547cd"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAnimation(1);

        $res2 = ["activeColor" => "e696f1ec7e5059eee9c79e452a2547cd", "animation" => 1];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setArrowSize(86);

        $res3 = ["activeColor" => "e696f1ec7e5059eee9c79e452a2547cd", "animation" => 1, "arrowSize" => 86];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setEnabled(0);

        $res4 = ["activeColor" => "e696f1ec7e5059eee9c79e452a2547cd", "animation" => 1, "arrowSize" => 86, "enabled" => 0];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setInactiveColor("b3a75fd77d41e4b05a9ca48090851664");

        $res5 = ["activeColor" => "e696f1ec7e5059eee9c79e452a2547cd", "animation" => 1, "arrowSize" => 86, "enabled" => 0, "inactiveColor" => "b3a75fd77d41e4b05a9ca48090851664"];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $res6 = ["activeColor" => "e696f1ec7e5059eee9c79e452a2547cd", "animation" => 1, "arrowSize" => 86, "enabled" => 0, "inactiveColor" => "b3a75fd77d41e4b05a9ca48090851664", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
        $this->assertEquals($res6, $obj->toArray());
    }

}
