<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Labels;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts items test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Labels
 * @version 5.0.14
 */
final class HighchartsItemsTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Labels\HighchartsItems(true);

        $this->assertNull($obj1->getHtml());
        $this->assertNull($obj1->getStyle());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Labels\HighchartsItems(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Labels\HighchartsItems(true);

        $obj->setHtml("fc35fdc70d5fc69d269883a822c7a53e");

        $res1 = ["html" => "fc35fdc70d5fc69d269883a822c7a53e"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $res2 = ["html" => "fc35fdc70d5fc69d269883a822c7a53e", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
        $this->assertEquals($res2, $obj->toArray());
    }

}
