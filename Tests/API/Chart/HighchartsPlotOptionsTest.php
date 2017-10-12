<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts plot options test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsPlotOptionsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Chart\HighchartsPlotOptions(true);

		$this->assertEquals(null, $obj1->getArea(), "The method getArea() does not return the expected value");
		$this->assertEquals(null, $obj1->getArearange(), "The method getArearange() does not return the expected value");
		$this->assertEquals(null, $obj1->getAreaspline(), "The method getAreaspline() does not return the expected value");
		$this->assertEquals(null, $obj1->getAreasplinerange(), "The method getAreasplinerange() does not return the expected value");
		$this->assertEquals(null, $obj1->getBar(), "The method getBar() does not return the expected value");
		$this->assertEquals(null, $obj1->getBoxplot(), "The method getBoxplot() does not return the expected value");
		$this->assertEquals(null, $obj1->getBubble(), "The method getBubble() does not return the expected value");
		$this->assertEquals(null, $obj1->getColumn(), "The method getColumn() does not return the expected value");
		$this->assertEquals(null, $obj1->getColumnrange(), "The method getColumnrange() does not return the expected value");
		$this->assertEquals(null, $obj1->getErrorbar(), "The method getErrorbar() does not return the expected value");
		$this->assertEquals(null, $obj1->getFunnel(), "The method getFunnel() does not return the expected value");
		$this->assertEquals(null, $obj1->getGauge(), "The method getGauge() does not return the expected value");
		$this->assertEquals(null, $obj1->getHeatmap(), "The method getHeatmap() does not return the expected value");
		$this->assertEquals(null, $obj1->getLine(), "The method getLine() does not return the expected value");
		$this->assertEquals(null, $obj1->getPie(), "The method getPie() does not return the expected value");
		$this->assertEquals(null, $obj1->getPolygon(), "The method getPolygon() does not return the expected value");
		$this->assertEquals(null, $obj1->getPyramid(), "The method getPyramid() does not return the expected value");
		$this->assertEquals(null, $obj1->getScatter(), "The method getScatter() does not return the expected value");
		$this->assertEquals(null, $obj1->getSeries(), "The method getSeries() does not return the expected value");
		$this->assertEquals(null, $obj1->getSolidgauge(), "The method getSolidgauge() does not return the expected value");
		$this->assertEquals(null, $obj1->getSpline(), "The method getSpline() does not return the expected value");
		$this->assertEquals(null, $obj1->getTreemap(), "The method getTreemap() does not return the expected value");
		$this->assertEquals(null, $obj1->getWaterfall(), "The method getWaterfall() does not return the expected value");
	}

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsPlotOptions(false);

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
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsPlotOptions(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Tests the newArea() method.
	 *
	 * @return void.
	 */
	public function testNewArea() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsPlotOptions(false);

		$res = $obj->newArea();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsArea::class, $res, "The method newArea() does not return the expected object");
	}

	/**
	 * Tests the newArearange() method.
	 *
	 * @return void.
	 */
	public function testNewArearange() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsPlotOptions(false);

		$res = $obj->newArearange();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsArearange::class, $res, "The method newArearange() does not return the expected object");
	}

	/**
	 * Tests the newAreaspline() method.
	 *
	 * @return void.
	 */
	public function testNewAreaspline() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsPlotOptions(false);

		$res = $obj->newAreaspline();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreaspline::class, $res, "The method newAreaspline() does not return the expected object");
	}

	/**
	 * Tests the newAreasplinerange() method.
	 *
	 * @return void.
	 */
	public function testNewAreasplinerange() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsPlotOptions(false);

		$res = $obj->newAreasplinerange();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreasplinerange::class, $res, "The method newAreasplinerange() does not return the expected object");
	}

	/**
	 * Tests the newBar() method.
	 *
	 * @return void.
	 */
	public function testNewBar() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsPlotOptions(false);

		$res = $obj->newBar();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsBar::class, $res, "The method newBar() does not return the expected object");
	}

	/**
	 * Tests the newColumn() method.
	 *
	 * @return void.
	 */
	public function testNewColumn() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsPlotOptions(false);

		$res = $obj->newColumn();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn::class, $res, "The method newColumn() does not return the expected object");
	}

	/**
	 * Tests the newLine() method.
	 *
	 * @return void.
	 */
	public function testNewLine() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsPlotOptions(false);

		$res = $obj->newLine();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsLine::class, $res, "The method newLine() does not return the expected object");
	}

	/**
	 * Tests the newPie() method.
	 *
	 * @return void.
	 */
	public function testNewPie() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsPlotOptions(false);

		$res = $obj->newPie();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie::class, $res, "The method newPie() does not return the expected object");
	}

	/**
	 * Tests the newScatter() method.
	 *
	 * @return void.
	 */
	public function testNewScatter() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsPlotOptions(false);

		$res = $obj->newScatter();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsScatter::class, $res, "The method newScatter() does not return the expected object");
	}

	/**
	 * Tests the newSeries() method.
	 *
	 * @return void.
	 */
	public function testNewSeries() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsPlotOptions(false);

		$res = $obj->newSeries();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsSeries::class, $res, "The method newSeries() does not return the expected object");
	}

	/**
	 * Tests the newSpline() method.
	 *
	 * @return void.
	 */
	public function testNewSpline() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsPlotOptions(false);

		$res = $obj->newSpline();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsSpline::class, $res, "The method newSpline() does not return the expected object");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsPlotOptions(true);

		$obj->setArea(new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsArea());

		$res1 = ["area" => []];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with area");

		$obj->setArearange(new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsArearange());

		$res2 = ["area" => [], "arearange" => []];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with arearange");

		$obj->setAreaspline(new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreaspline());

		$res3 = ["area" => [], "arearange" => [], "areaspline" => []];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with areaspline");

		$obj->setAreasplinerange(new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreasplinerange());

		$res4 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => []];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with areasplinerange");

		$obj->setBar(new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsBar());

		$res5 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => []];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with bar");

		$obj->setBoxplot(["boxplot" => "75c65735f185835c9a02e33d5695a84e"]);

		$res6 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"]];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with boxplot");

		$obj->setBubble(["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"]);

		$res7 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"]];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with bubble");

		$obj->setColumn(new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn());

		$res8 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => []];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with column");

		$obj->setColumnrange(["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"]);

		$res9 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"]];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with columnrange");

		$obj->setErrorbar(["errorbar" => "116ed3b58f547a9f12d94e7750c71017"]);

		$res10 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"]];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with errorbar");

		$obj->setFunnel(["funnel" => "688d02b8ffc0740fc790871148d11e8c"]);

		$res11 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"]];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with funnel");

		$obj->setGauge(["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"]);

		$res12 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"]];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with gauge");

		$obj->setHeatmap(["heatmap" => "d922f01521180610c5e000ed93d40af2"]);

		$res13 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"]];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with heatmap");

		$obj->setLine(new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsLine());

		$res14 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => []];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with line");

		$obj->setPie(new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie());

		$res15 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => []];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with pie");

		$obj->setPolygon(["polygon" => "e4fdf3290654756def4e6816fddce608"]);

		$res16 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => [], "polygon" => ["polygon" => "e4fdf3290654756def4e6816fddce608"]];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with polygon");

		$obj->setPyramid(["pyramid" => "437233c74e25fe505293cd2e8ecc2696"]);

		$res17 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => [], "polygon" => ["polygon" => "e4fdf3290654756def4e6816fddce608"], "pyramid" => ["pyramid" => "437233c74e25fe505293cd2e8ecc2696"]];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with pyramid");

		$obj->setScatter(new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsScatter());

		$res18 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => [], "polygon" => ["polygon" => "e4fdf3290654756def4e6816fddce608"], "pyramid" => ["pyramid" => "437233c74e25fe505293cd2e8ecc2696"], "scatter" => []];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with scatter");

		$obj->setSeries(new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsSeries());

		$res19 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => [], "polygon" => ["polygon" => "e4fdf3290654756def4e6816fddce608"], "pyramid" => ["pyramid" => "437233c74e25fe505293cd2e8ecc2696"], "scatter" => [], "series" => []];
		$this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with series");

		$obj->setSolidgauge(["solidgauge" => "2b4610ac598c4c804779328d03893529"]);

		$res20 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => [], "polygon" => ["polygon" => "e4fdf3290654756def4e6816fddce608"], "pyramid" => ["pyramid" => "437233c74e25fe505293cd2e8ecc2696"], "scatter" => [], "series" => [], "solidgauge" => ["solidgauge" => "2b4610ac598c4c804779328d03893529"]];
		$this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with solidgauge");

		$obj->setSpline(new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsSpline());

		$res21 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => [], "polygon" => ["polygon" => "e4fdf3290654756def4e6816fddce608"], "pyramid" => ["pyramid" => "437233c74e25fe505293cd2e8ecc2696"], "scatter" => [], "series" => [], "solidgauge" => ["solidgauge" => "2b4610ac598c4c804779328d03893529"], "spline" => []];
		$this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with spline");

		$obj->setTreemap(["treemap" => "de4c250c4ad732f21f9be50a607ab230"]);

		$res22 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => [], "polygon" => ["polygon" => "e4fdf3290654756def4e6816fddce608"], "pyramid" => ["pyramid" => "437233c74e25fe505293cd2e8ecc2696"], "scatter" => [], "series" => [], "solidgauge" => ["solidgauge" => "2b4610ac598c4c804779328d03893529"], "spline" => [], "treemap" => ["treemap" => "de4c250c4ad732f21f9be50a607ab230"]];
		$this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with treemap");

		$obj->setWaterfall(["waterfall" => "911b1ca4b34d45a115afee01b1e4fbb9"]);

		$res23 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => [], "polygon" => ["polygon" => "e4fdf3290654756def4e6816fddce608"], "pyramid" => ["pyramid" => "437233c74e25fe505293cd2e8ecc2696"], "scatter" => [], "series" => [], "solidgauge" => ["solidgauge" => "2b4610ac598c4c804779328d03893529"], "spline" => [], "treemap" => ["treemap" => "de4c250c4ad732f21f9be50a607ab230"], "waterfall" => ["waterfall" => "911b1ca4b34d45a115afee01b1e4fbb9"]];
		$this->assertEquals($res23, $obj->toArray(), "The method toArray() does not return the expected array with waterfall");
	}

}
