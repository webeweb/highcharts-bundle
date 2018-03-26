<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Responsive\Rules;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts condition test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Responsive\Rules
 * @version 5.0.14
 */
final class HighchartsConditionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Responsive\Rules\HighchartsCondition(true);

        $this->assertNull($obj1->getCallback());
        $this->assertNull($obj1->getMaxHeight());
        $this->assertNull($obj1->getMaxWidth());
        $this->assertNull($obj1->getMinHeight());
        $this->assertNull($obj1->getMinWidth());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Responsive\Rules\HighchartsCondition(false);

        $this->assertNull($obj0->getCallback());
        $this->assertNull($obj0->getMaxHeight());
        $this->assertNull($obj0->getMaxWidth());
        $this->assertEquals(0, $obj0->getMinHeight());
        $this->assertEquals(0, $obj0->getMinWidth());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Responsive\Rules\HighchartsCondition(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Responsive\Rules\HighchartsCondition(true);

        $obj->setCallback("924a8ceeac17f54d3be3f8cdf1c04eb2");

        $res1 = ["callback" => "924a8ceeac17f54d3be3f8cdf1c04eb2"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setMaxHeight(16);

        $res2 = ["callback" => "924a8ceeac17f54d3be3f8cdf1c04eb2", "maxHeight" => 16];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setMaxWidth(85);

        $res3 = ["callback" => "924a8ceeac17f54d3be3f8cdf1c04eb2", "maxHeight" => 16, "maxWidth" => 85];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setMinHeight(13);

        $res4 = ["callback" => "924a8ceeac17f54d3be3f8cdf1c04eb2", "maxHeight" => 16, "maxWidth" => 85, "minHeight" => 13];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setMinWidth(100);

        $res5 = ["callback" => "924a8ceeac17f54d3be3f8cdf1c04eb2", "maxHeight" => 16, "maxWidth" => 85, "minHeight" => 13, "minWidth" => 100];
        $this->assertEquals($res5, $obj->toArray());
    }

}
