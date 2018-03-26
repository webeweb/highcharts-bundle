<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts options test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API
 * @version 5.0.14
 */
final class HighchartsOptionsTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\HighchartsOptions(true);

        $this->assertNull($obj1->getGlobal());
        $this->assertNull($obj1->getLang());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsOptions(false);

        $obj->newGlobal();
        $obj->newLang();

        $obj->clear();

        $res = ["global" => [], "lang" => []];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsOptions(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newGlobal() method.
     *
     * @return void.
     */
    public function testNewGlobal() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsOptions(false);

        $res = $obj->newGlobal();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Options\HighchartsGlobal::class, $res);
    }

    /**
     * Tests the newLang() method.
     *
     * @return void.
     */
    public function testNewLang() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsOptions(false);

        $res = $obj->newLang();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\HighchartsOptions(true);

        $obj->setGlobal(new \WBW\Bundle\HighchartsBundle\API\Options\HighchartsGlobal());

        $res1 = ["global" => []];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setLang(new \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang());

        $res2 = ["global" => [], "lang" => []];
        $this->assertEquals($res2, $obj->toArray());
    }

}
