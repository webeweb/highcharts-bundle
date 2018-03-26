<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Responsive;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts rules test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Responsive
 * @version 5.0.14
 */
final class HighchartsRulesTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Responsive\HighchartsRules(true);

        $this->assertNull($obj1->getChartOptions());
        $this->assertNull($obj1->getCondition());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Responsive\HighchartsRules(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Responsive\HighchartsRules(true);

        $obj->setChartOptions(["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"]);

        $res1 = ["chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"]];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setCondition(["condition" => "3f9178c25b78ed8bed19091bcb62e266"]);

        $res2 = ["chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "condition" => ["condition" => "3f9178c25b78ed8bed19091bcb62e266"]];
        $this->assertEquals($res2, $obj->toArray());
    }

}
