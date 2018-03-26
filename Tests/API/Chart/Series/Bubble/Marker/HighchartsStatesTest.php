<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Bubble\Marker;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts states test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Bubble\Marker
 * @version 5.0.14
 */
final class HighchartsStatesTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Bubble\Marker\HighchartsStates(true);

        $this->assertNull($obj1->getHover());
        $this->assertNull($obj1->getSelect());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Bubble\Marker\HighchartsStates(false);

        $obj->newHover();
        $obj->newSelect();

        $obj->clear();

        $res = ["hover" => [], "select" => []];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Bubble\Marker\HighchartsStates(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newHover() method.
     *
     * @return void.
     */
    public function testNewHover() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Bubble\Marker\HighchartsStates(false);

        $res = $obj->newHover();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Bubble\Marker\States\HighchartsHover::class, $res);
    }

    /**
     * Tests the newSelect() method.
     *
     * @return void.
     */
    public function testNewSelect() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Bubble\Marker\HighchartsStates(false);

        $res = $obj->newSelect();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Bubble\Marker\States\HighchartsSelect::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Bubble\Marker\HighchartsStates(true);

        $obj->setHover(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Bubble\Marker\States\HighchartsHover());

        $res1 = ["hover" => []];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setSelect(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Bubble\Marker\States\HighchartsSelect());

        $res2 = ["hover" => [], "select" => []];
        $this->assertEquals($res2, $obj->toArray());
    }

}
