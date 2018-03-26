<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Treemap;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts levels test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Treemap
 * @version 5.0.14
 */
final class HighchartsLevelsTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsLevels(true);

        $this->assertNull($obj1->getBorderColor());
        $this->assertNull($obj1->getBorderDashStyle());
        $this->assertNull($obj1->getBorderWidth());
        $this->assertNull($obj1->getColor());
        $this->assertNull($obj1->getDataLabels());
        $this->assertNull($obj1->getLayoutAlgorithm());
        $this->assertNull($obj1->getLayoutStartingDirection());
        $this->assertNull($obj1->getLevel());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsLevels(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsLevels(true);

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res1 = ["borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setBorderDashStyle("8c4e9f2e21a77d83fc413d4c86d1cc81");

        $res2 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderDashStyle" => "8c4e9f2e21a77d83fc413d4c86d1cc81"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setBorderWidth(100);

        $res3 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderDashStyle" => "8c4e9f2e21a77d83fc413d4c86d1cc81", "borderWidth" => 100];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res4 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderDashStyle" => "8c4e9f2e21a77d83fc413d4c86d1cc81", "borderWidth" => 100, "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);

        $res5 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderDashStyle" => "8c4e9f2e21a77d83fc413d4c86d1cc81", "borderWidth" => 100, "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setLayoutAlgorithm("strip");

        $res6 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderDashStyle" => "8c4e9f2e21a77d83fc413d4c86d1cc81", "borderWidth" => 100, "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "layoutAlgorithm" => "strip"];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setLayoutStartingDirection("horizontal");

        $res7 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderDashStyle" => "8c4e9f2e21a77d83fc413d4c86d1cc81", "borderWidth" => 100, "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setLevel(78);

        $res8 = ["borderColor" => "97da935a74593c55d78be9d1295aa994", "borderDashStyle" => "8c4e9f2e21a77d83fc413d4c86d1cc81", "borderWidth" => 100, "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "level" => 78];
        $this->assertEquals($res8, $obj->toArray());
    }

}
