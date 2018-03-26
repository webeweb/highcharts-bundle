<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\XAxis;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts breaks test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\XAxis
 * @version 5.0.14
 */
final class HighchartsBreaksTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\HighchartsBreaks(true);

        $this->assertNull($obj1->getBreakSize());
        $this->assertNull($obj1->getFrom());
        $this->assertNull($obj1->getRepeat());
        $this->assertNull($obj1->getTo());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\HighchartsBreaks(false);

        $this->assertEquals(0, $obj0->getBreakSize());
        $this->assertNull($obj0->getFrom());
        $this->assertEquals(0, $obj0->getRepeat());
        $this->assertNull($obj0->getTo());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\HighchartsBreaks(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\HighchartsBreaks(true);

        $obj->setBreakSize(25);

        $res1 = ["breakSize" => 25];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setFrom(25);

        $res2 = ["breakSize" => 25, "from" => 25];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setRepeat(72);

        $res3 = ["breakSize" => 25, "from" => 25, "repeat" => 72];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setTo(65);

        $res4 = ["breakSize" => 25, "from" => 25, "repeat" => 72, "to" => 65];
        $this->assertEquals($res4, $obj->toArray());
    }

}
