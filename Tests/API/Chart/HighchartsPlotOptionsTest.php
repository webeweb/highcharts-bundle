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
use WBW\HighchartsBundle\API\Chart\HighchartsPlotOptions;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsArea;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsArearange;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreaspline;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreasplinerange;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsBar;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsLine;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsScatter;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsSeries;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsSpline;

/**
 * Highcharts plot options test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsPlotOptionsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsPlotOptions(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), 'The method toArray() does not return the expected array');
	}

	/**
	 * Tests the newArea() method.
	 *
	 * @return void.
	 */
	public function testNewArea() {

		$obj = new HighchartsPlotOptions(false);

		$res = $obj->newArea();
		$this->assertInstanceOf(HighchartsArea::class, $res, 'The method newArea() does not return the expected class');
	}

	/**
	 * Tests the newArearange() method.
	 *
	 * @return void.
	 */
	public function testNewArearange() {

		$obj = new HighchartsPlotOptions(false);

		$res = $obj->newArearange();
		$this->assertInstanceOf(HighchartsArearange::class, $res, 'The method newArearange() does not return the expected class');
	}

	/**
	 * Tests the newAreaspline() method.
	 *
	 * @return void.
	 */
	public function testNewAreaspline() {

		$obj = new HighchartsPlotOptions(false);

		$res = $obj->newAreaspline();
		$this->assertInstanceOf(HighchartsAreaspline::class, $res, 'The method newAreaspline() does not return the expected class');
	}

	/**
	 * Tests the newAreasplinerange() method.
	 *
	 * @return void.
	 */
	public function testNewAreasplinerange() {

		$obj = new HighchartsPlotOptions(false);

		$res = $obj->newAreasplinerange();
		$this->assertInstanceOf(HighchartsAreasplinerange::class, $res, 'The method newAreasplinerange() does not return the expected class');
	}

	/**
	 * Tests the newBar() method.
	 *
	 * @return void.
	 */
	public function testNewBar() {

		$obj = new HighchartsPlotOptions(false);

		$res = $obj->newBar();
		$this->assertInstanceOf(HighchartsBar::class, $res, 'The method newBar() does not return the expected class');
	}

	/**
	 * Tests the newColumn() method.
	 *
	 * @return void.
	 */
	public function testNewColumn() {

		$obj = new HighchartsPlotOptions(false);

		$res = $obj->newColumn();
		$this->assertInstanceOf(HighchartsColumn::class, $res, 'The method newColumn() does not return the expected class');
	}

	/**
	 * Tests the newLine() method.
	 *
	 * @return void.
	 */
	public function testNewLine() {

		$obj = new HighchartsPlotOptions(false);

		$res = $obj->newLine();
		$this->assertInstanceOf(HighchartsLine::class, $res, 'The method newLine() does not return the expected class');
	}

	/**
	 * Tests the newPie() method.
	 *
	 * @return void.
	 */
	public function testNewPie() {

		$obj = new HighchartsPlotOptions(false);

		$res = $obj->newPie();
		$this->assertInstanceOf(HighchartsPie::class, $res, 'The method newPie() does not return the expected class');
	}

	/**
	 * Tests the newScatter() method.
	 *
	 * @return void.
	 */
	public function testNewScatter() {

		$obj = new HighchartsPlotOptions(false);

		$res = $obj->newScatter();
		$this->assertInstanceOf(HighchartsScatter::class, $res, 'The method newScatter() does not return the expected class');
	}

	/**
	 * Tests the newSeries() method.
	 *
	 * @return void.
	 */
	public function testNewSeries() {

		$obj = new HighchartsPlotOptions(false);

		$res = $obj->newSeries();
		$this->assertInstanceOf(HighchartsSeries::class, $res, 'The method newSeries() does not return the expected class');
	}

	/**
	 * Tests the newSpline() method.
	 *
	 * @return void.
	 */
	public function testNewSpline() {

		$obj = new HighchartsPlotOptions(false);

		$res = $obj->newSpline();
		$this->assertInstanceOf(HighchartsSpline::class, $res, 'The method newSpline() does not return the expected class');
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsPlotOptions(false);

		$obj->newArea();

		$res1 = ["area" => []];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with area');

		$obj->newArearange();

		$res2 = ["area" => [], "arearange" => []];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with arearange');

		$obj->newAreaspline();

		$res3 = ["area" => [], "arearange" => [], "areaspline" => []];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with areaspline');

		$obj->newAreasplinerange();

		$res4 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => []];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with areasplinerange');

		$obj->newBar();

		$res5 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => []];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with bar');

		$obj->setBoxplot(["boxplot" => "75c65735f185835c9a02e33d5695a84e"]);

		$res6 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"]];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with boxplot');

		$obj->setBubble(["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"]);

		$res7 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"]];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with bubble');

		$obj->newColumn();

		$res8 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => []];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with column');

		$obj->setColumnrange(["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"]);

		$res9 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"]];
		$this->assertEquals($res9, $obj->toArray(), 'The method toArray() does not return the expected array with columnrange');

		$obj->setErrorbar(["errorbar" => "116ed3b58f547a9f12d94e7750c71017"]);

		$res10 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"]];
		$this->assertEquals($res10, $obj->toArray(), 'The method toArray() does not return the expected array with errorbar');

		$obj->setFunnel(["funnel" => "688d02b8ffc0740fc790871148d11e8c"]);

		$res11 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"]];
		$this->assertEquals($res11, $obj->toArray(), 'The method toArray() does not return the expected array with funnel');

		$obj->setGauge(["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"]);

		$res12 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"]];
		$this->assertEquals($res12, $obj->toArray(), 'The method toArray() does not return the expected array with gauge');

		$obj->setHeatmap(["heatmap" => "d922f01521180610c5e000ed93d40af2"]);

		$res13 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"]];
		$this->assertEquals($res13, $obj->toArray(), 'The method toArray() does not return the expected array with heatmap');

		$obj->newLine();

		$res14 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => []];
		$this->assertEquals($res14, $obj->toArray(), 'The method toArray() does not return the expected array with line');

		$obj->newPie();

		$res15 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => []];
		$this->assertEquals($res15, $obj->toArray(), 'The method toArray() does not return the expected array with pie');

		$obj->setPolygon(["polygon" => "e4fdf3290654756def4e6816fddce608"]);

		$res16 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => [], "polygon" => ["polygon" => "e4fdf3290654756def4e6816fddce608"]];
		$this->assertEquals($res16, $obj->toArray(), 'The method toArray() does not return the expected array with polygon');

		$obj->setPyramid(["pyramid" => "437233c74e25fe505293cd2e8ecc2696"]);

		$res17 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => [], "polygon" => ["polygon" => "e4fdf3290654756def4e6816fddce608"], "pyramid" => ["pyramid" => "437233c74e25fe505293cd2e8ecc2696"]];
		$this->assertEquals($res17, $obj->toArray(), 'The method toArray() does not return the expected array with pyramid');

		$obj->newScatter();

		$res18 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => [], "polygon" => ["polygon" => "e4fdf3290654756def4e6816fddce608"], "pyramid" => ["pyramid" => "437233c74e25fe505293cd2e8ecc2696"], "scatter" => []];
		$this->assertEquals($res18, $obj->toArray(), 'The method toArray() does not return the expected array with scatter');

		$obj->newSeries();

		$res19 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => [], "polygon" => ["polygon" => "e4fdf3290654756def4e6816fddce608"], "pyramid" => ["pyramid" => "437233c74e25fe505293cd2e8ecc2696"], "scatter" => [], "series" => []];
		$this->assertEquals($res19, $obj->toArray(), 'The method toArray() does not return the expected array with series');

		$obj->setSolidgauge(["solidgauge" => "2b4610ac598c4c804779328d03893529"]);

		$res20 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => [], "polygon" => ["polygon" => "e4fdf3290654756def4e6816fddce608"], "pyramid" => ["pyramid" => "437233c74e25fe505293cd2e8ecc2696"], "scatter" => [], "series" => [], "solidgauge" => ["solidgauge" => "2b4610ac598c4c804779328d03893529"]];
		$this->assertEquals($res20, $obj->toArray(), 'The method toArray() does not return the expected array with solidgauge');

		$obj->newSpline();

		$res21 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => [], "polygon" => ["polygon" => "e4fdf3290654756def4e6816fddce608"], "pyramid" => ["pyramid" => "437233c74e25fe505293cd2e8ecc2696"], "scatter" => [], "series" => [], "solidgauge" => ["solidgauge" => "2b4610ac598c4c804779328d03893529"], "spline" => []];
		$this->assertEquals($res21, $obj->toArray(), 'The method toArray() does not return the expected array with spline');

		$obj->setTreemap(["treemap" => "de4c250c4ad732f21f9be50a607ab230"]);

		$res22 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => [], "polygon" => ["polygon" => "e4fdf3290654756def4e6816fddce608"], "pyramid" => ["pyramid" => "437233c74e25fe505293cd2e8ecc2696"], "scatter" => [], "series" => [], "solidgauge" => ["solidgauge" => "2b4610ac598c4c804779328d03893529"], "spline" => [], "treemap" => ["treemap" => "de4c250c4ad732f21f9be50a607ab230"]];
		$this->assertEquals($res22, $obj->toArray(), 'The method toArray() does not return the expected array with treemap');

		$obj->setWaterfall(["waterfall" => "911b1ca4b34d45a115afee01b1e4fbb9"]);

		$res23 = ["area" => [], "arearange" => [], "areaspline" => [], "areasplinerange" => [], "bar" => [], "boxplot" => ["boxplot" => "75c65735f185835c9a02e33d5695a84e"], "bubble" => ["bubble" => "a3fa9e0b6b24b1cada4b756c0d240444"], "column" => [], "columnrange" => ["columnrange" => "14a2c3aec90f10d7025019b3cbbff7cf"], "errorbar" => ["errorbar" => "116ed3b58f547a9f12d94e7750c71017"], "funnel" => ["funnel" => "688d02b8ffc0740fc790871148d11e8c"], "gauge" => ["gauge" => "37e1a9c3ba6042b79266687d13f3c5ff"], "heatmap" => ["heatmap" => "d922f01521180610c5e000ed93d40af2"], "line" => [], "pie" => [], "polygon" => ["polygon" => "e4fdf3290654756def4e6816fddce608"], "pyramid" => ["pyramid" => "437233c74e25fe505293cd2e8ecc2696"], "scatter" => [], "series" => [], "solidgauge" => ["solidgauge" => "2b4610ac598c4c804779328d03893529"], "spline" => [], "treemap" => ["treemap" => "de4c250c4ad732f21f9be50a607ab230"], "waterfall" => ["waterfall" => "911b1ca4b34d45a115afee01b1e4fbb9"]];
		$this->assertEquals($res23, $obj->toArray(), 'The method toArray() does not return the expected array with waterfall');
	}

}
