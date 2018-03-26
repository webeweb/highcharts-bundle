<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts plot options test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsPlotOptionsTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions(true);

        $this->assertNull($obj1->getArea());
        $this->assertNull($obj1->getArearange());
        $this->assertNull($obj1->getAreaspline());
        $this->assertNull($obj1->getAreasplinerange());
        $this->assertNull($obj1->getBar());
        $this->assertNull($obj1->getBoxplot());
        $this->assertNull($obj1->getBubble());
        $this->assertNull($obj1->getColumn());
        $this->assertNull($obj1->getColumnrange());
        $this->assertNull($obj1->getErrorbar());
        $this->assertNull($obj1->getFunnel());
        $this->assertNull($obj1->getGauge());
        $this->assertNull($obj1->getHeatmap());
        $this->assertNull($obj1->getLine());
        $this->assertNull($obj1->getPie());
        $this->assertNull($obj1->getPolygon());
        $this->assertNull($obj1->getPyramid());
        $this->assertNull($obj1->getScatter());
        $this->assertNull($obj1->getSeries());
        $this->assertNull($obj1->getSolidgauge());
        $this->assertNull($obj1->getSpline());
        $this->assertNull($obj1->getTreemap());
        $this->assertNull($obj1->getWaterfall());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions(false);

        $obj->newArea();
        $obj->newArearange();
        $obj->newAreaspline();
        $obj->newAreasplinerange();
        $obj->newBar();
        $obj->newColumn();
        $obj->newLine();
        $obj->newPie();
        $obj->newScatter();
        $obj->newSeries();
        $obj->newSpline();

        $obj->clear();

        $res = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "column" => [], "line" => [], "pie" => [], "scatter" => [], "series" => [], "spline" => []];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newArea() method.
     *
     * @return void.
     */
    public function testNewArea() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions(false);

        $res = $obj->newArea();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsArea::class, $res);
    }

    /**
     * Tests the newArearange() method.
     *
     * @return void.
     */
    public function testNewArearange() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions(false);

        $res = $obj->newArearange();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsArearange::class, $res);
    }

    /**
     * Tests the newAreaspline() method.
     *
     * @return void.
     */
    public function testNewAreaspline() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions(false);

        $res = $obj->newAreaspline();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreaspline::class, $res);
    }

    /**
     * Tests the newAreasplinerange() method.
     *
     * @return void.
     */
    public function testNewAreasplinerange() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions(false);

        $res = $obj->newAreasplinerange();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreasplinerange::class, $res);
    }

    /**
     * Tests the newBar() method.
     *
     * @return void.
     */
    public function testNewBar() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions(false);

        $res = $obj->newBar();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBar::class, $res);
    }

    /**
     * Tests the newColumn() method.
     *
     * @return void.
     */
    public function testNewColumn() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions(false);

        $res = $obj->newColumn();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn::class, $res);
    }

    /**
     * Tests the newLine() method.
     *
     * @return void.
     */
    public function testNewLine() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions(false);

        $res = $obj->newLine();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsLine::class, $res);
    }

    /**
     * Tests the newPie() method.
     *
     * @return void.
     */
    public function testNewPie() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions(false);

        $res = $obj->newPie();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie::class, $res);
    }

    /**
     * Tests the newScatter() method.
     *
     * @return void.
     */
    public function testNewScatter() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions(false);

        $res = $obj->newScatter();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsScatter::class, $res);
    }

    /**
     * Tests the newSeries() method.
     *
     * @return void.
     */
    public function testNewSeries() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions(false);

        $res = $obj->newSeries();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSeries::class, $res);
    }

    /**
     * Tests the newSpline() method.
     *
     * @return void.
     */
    public function testNewSpline() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions(false);

        $res = $obj->newSpline();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSpline::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions(true);

        $obj->setArea(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsArea());

        $res1 = ["area" => []];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setArearange(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsArearange());

        $res2 = ["area" => [], "arearange" => []];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setAreaspline(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreaspline());

        $res3 = ["area" => [], "arearange" => [], "areaspline" => []];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setAreasplinerange(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreasplinerange());

        $res4 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => []];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setBar(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBar());

        $res5 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => []];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setBoxplot(["boxplot" => "75c65735f185835c9a02e33d5695a84e"]);

        $res6 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"]];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setBubble(["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"]);

        $res7 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"]];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setColumn(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn());

        $res8 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => []];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setColumnrange(["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"]);

        $res9 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"]];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setErrorbar(["errorbar" => "116ed3b58f547a9f12d94e7750c71017"]);

        $res10 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"]];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setFunnel(["funnel" => "688d02b8ffc0740fc790871148d11e8c"]);

        $res11 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"]];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setGauge(["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"]);

        $res12 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"]];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setHeatmap(["heatmap" => "d922f01521180610c5e000ed93d40af2"]);

        $res13 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"]];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setLine(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsLine());

        $res14 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => []];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setPie(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie());

        $res15 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => []];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setPolygon(["polygon" => "e4fdf3290654756def4e6816fddce608"]);

        $res16 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => [], "polygon" => ["polygon" => "e4fdf3290654756def4e6816fddce608"]];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setPyramid(["pyramid" => "437233c74e25fe505293cd2e8ecc2696"]);

        $res17 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => [], "polygon" => ["polygon" => "e4fdf3290654756def4e6816fddce608"], "pyramid" => ["pyramid" => "437233c74e25fe505293cd2e8ecc2696"]];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setScatter(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsScatter());

        $res18 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => [], "polygon" => ["polygon" => "e4fdf3290654756def4e6816fddce608"], "pyramid" => ["pyramid" => "437233c74e25fe505293cd2e8ecc2696"], "scatter" => []];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setSeries(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSeries());

        $res19 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => [], "polygon" => ["polygon" => "e4fdf3290654756def4e6816fddce608"], "pyramid" => ["pyramid" => "437233c74e25fe505293cd2e8ecc2696"], "scatter" => [], "series" => []];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setSolidgauge(["solidgauge" => "2b4610ac598c4c804779328d03893529"]);

        $res20 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => [], "polygon" => ["polygon" => "e4fdf3290654756def4e6816fddce608"], "pyramid" => ["pyramid" => "437233c74e25fe505293cd2e8ecc2696"], "scatter" => [], "series" => [], "solidgauge" => ["solidgauge" => "2b4610ac598c4c804779328d03893529"]];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setSpline(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSpline());

        $res21 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => [], "polygon" => ["polygon" => "e4fdf3290654756def4e6816fddce608"], "pyramid" => ["pyramid" => "437233c74e25fe505293cd2e8ecc2696"], "scatter" => [], "series" => [], "solidgauge" => ["solidgauge" => "2b4610ac598c4c804779328d03893529"], "spline" => []];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setTreemap(["treemap" => "de4c250c4ad732f21f9be50a607ab230"]);

        $res22 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => [], "polygon" => ["polygon" => "e4fdf3290654756def4e6816fddce608"], "pyramid" => ["pyramid" => "437233c74e25fe505293cd2e8ecc2696"], "scatter" => [], "series" => [], "solidgauge" => ["solidgauge" => "2b4610ac598c4c804779328d03893529"], "spline" => [], "treemap" => ["treemap" => "de4c250c4ad732f21f9be50a607ab230"]];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setWaterfall(["waterfall" => "911b1ca4b34d45a115afee01b1e4fbb9"]);

        $res23 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => [], "polygon" => ["polygon" => "e4fdf3290654756def4e6816fddce608"], "pyramid" => ["pyramid" => "437233c74e25fe505293cd2e8ecc2696"], "scatter" => [], "series" => [], "solidgauge" => ["solidgauge" => "2b4610ac598c4c804779328d03893529"], "spline" => [], "treemap" => ["treemap" => "de4c250c4ad732f21f9be50a607ab230"], "waterfall" => ["waterfall" => "911b1ca4b34d45a115afee01b1e4fbb9"]];
        $this->assertEquals($res23, $obj->toArray());
    }

}
