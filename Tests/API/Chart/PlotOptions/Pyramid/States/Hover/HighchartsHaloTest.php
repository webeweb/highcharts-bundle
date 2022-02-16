<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Pyramid\States\Hover;

use WBW\Bundle\HighchartsBundle\Tests\AbstractTestCase;

/**
 * Highcharts halo test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Pyramid\States\Hover
 * @version 5.0.14
 */
final class HighchartsHaloTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pyramid\States\Hover\HighchartsHalo(true);

        $this->assertNull($obj1->getAttributes());
        $this->assertNull($obj1->getOpacity());
        $this->assertNull($obj1->getSize());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pyramid\States\Hover\HighchartsHalo(false);

        $this->assertNull($obj0->getAttributes());
        $this->assertEquals(0.25, $obj0->getOpacity());
        $this->assertEquals(10, $obj0->getSize());
    }

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pyramid\States\Hover\HighchartsHalo(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests toArray()
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pyramid\States\Hover\HighchartsHalo(true);

        $obj->setAttributes(["attributes" => "736b91750e516139acc13c5eb6564f92"]);

        $res1 = ["attributes" => ["attributes" => "736b91750e516139acc13c5eb6564f92"]];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setOpacity(64);

        $res2 = ["attributes" => ["attributes" => "736b91750e516139acc13c5eb6564f92"], "opacity" => 64];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setSize(36);

        $res3 = ["attributes" => ["attributes" => "736b91750e516139acc13c5eb6564f92"], "opacity" => 64, "size" => 36];
        $this->assertEquals($res3, $obj->toArray());
    }

}
