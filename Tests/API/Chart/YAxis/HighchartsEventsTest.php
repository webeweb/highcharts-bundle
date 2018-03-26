<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\YAxis;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts events test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\YAxis
 * @version 5.0.14
 */
final class HighchartsEventsTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsEvents(true);

        $this->assertNull($obj1->getAfterBreaks());
        $this->assertNull($obj1->getAfterSetExtremes());
        $this->assertNull($obj1->getPointBreak());
        $this->assertNull($obj1->getPointInBreak());
        $this->assertNull($obj1->getSetExtremes());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsEvents(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\YAxis\HighchartsEvents(true);

        $obj->setAfterBreaks("2aee0ecaa51b86ca6fb2f52e53055d9c");

        $res1 = ["afterBreaks" => "2aee0ecaa51b86ca6fb2f52e53055d9c"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAfterSetExtremes("782a209aa49fe0f760e3d9379f843e13");

        $res2 = ["afterBreaks" => "2aee0ecaa51b86ca6fb2f52e53055d9c", "afterSetExtremes" => "782a209aa49fe0f760e3d9379f843e13"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setPointBreak("0b72c42e9ef65da30a50c4374ac0ea59");

        $res3 = ["afterBreaks" => "2aee0ecaa51b86ca6fb2f52e53055d9c", "afterSetExtremes" => "782a209aa49fe0f760e3d9379f843e13", "pointBreak" => "0b72c42e9ef65da30a50c4374ac0ea59"];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setPointInBreak("84525ae3843d52f899c93a7e8d266492");

        $res4 = ["afterBreaks" => "2aee0ecaa51b86ca6fb2f52e53055d9c", "afterSetExtremes" => "782a209aa49fe0f760e3d9379f843e13", "pointBreak" => "0b72c42e9ef65da30a50c4374ac0ea59", "pointInBreak" => "84525ae3843d52f899c93a7e8d266492"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setSetExtremes("057f72c70fe8778e16e200860308778c");

        $res5 = ["afterBreaks" => "2aee0ecaa51b86ca6fb2f52e53055d9c", "afterSetExtremes" => "782a209aa49fe0f760e3d9379f843e13", "pointBreak" => "0b72c42e9ef65da30a50c4374ac0ea59", "pointInBreak" => "84525ae3843d52f899c93a7e8d266492", "setExtremes" => "057f72c70fe8778e16e200860308778c"];
        $this->assertEquals($res5, $obj->toArray());
    }

}
