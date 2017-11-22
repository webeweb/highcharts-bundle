<?php
/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart;

use JsonSerializable;

/**
 * Highcharts series.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsSeries implements JsonSerializable {

	/**
	 * Data.
	 *
	 * @var array
	 */
	private $data;

	/**
	 * Data parser.
	 *
	 * @var string
	 * @deprecated
	 */
	private $dataParser;

	/**
	 * Data URL.
	 *
	 * @var string
	 * @deprecated
	 */
	private $dataURL;

	/**
	 * Id.
	 *
	 * @var string
	 * @since 1.2.0
	 */
	private $id;

	/**
	 * Index.
	 *
	 * @var integer
	 * @since 2.3.0
	 */
	private $index;

	/**
	 * Legend index.
	 *
	 * @var integer
	 */
	private $legendIndex;

	/**
	 * Name.
	 *
	 * @var string
	 */
	private $name;

	/**
	 * Stack.
	 *
	 * @var string
	 * @since 2.1
	 */
	private $stack;

	/**
	 * Type.
	 *
	 * @var string
	 */
	private $type;

	/**
	 * X axis.
	 *
	 * @var integer|string
	 */
	private $xAxis = "0";

	/**
	 * Y axis.
	 *
	 * @var integer|string
	 */
	private $yAxis = "0";

	/**
	 * Z index.
	 *
	 * @var integer
	 */
	private $zIndex;

	/**
	 * Constructor.
	 *
	 * @param boolean $ignoreDefaultValues Ignore the default values.
	 */
	public function __construct($ignoreDefaultValues = true) {
		if ($ignoreDefaultValues === true) {
			$this->clear();
		}
	}

	/**
	 * Clear.
	 *
	 * @return void
	 */
	public function clear() {

		// Clear the data.
		$this->data = null;

		// Clear the data parser.
		$this->dataParser = null;

		// Clear the data URL.
		$this->dataURL = null;

		// Clear the id.
		$this->id = null;

		// Clear the index.
		$this->index = null;

		// Clear the legend index.
		$this->legendIndex = null;

		// Clear the name.
		$this->name = null;

		// Clear the stack.
		$this->stack = null;

		// Clear the type.
		$this->type = null;

		// Clear the x axis.
		$this->xAxis = null;

		// Clear the y axis.
		$this->yAxis = null;

		// Clear the z index.
		$this->zIndex = null;
	}

	/**
	 * Get the data.
	 *
	 * @return array Returns the data.
	 */
	public function getData() {
		return $this->data;
	}

	/**
	 * Get the data parser.
	 *
	 * @return string Returns the data parser.
	 * @deprecated
	 */
	public function getDataParser() {
		return $this->dataParser;
	}

	/**
	 * Get the data URL.
	 *
	 * @return string Returns the data URL.
	 * @deprecated
	 */
	public function getDataURL() {
		return $this->dataURL;
	}

	/**
	 * Get the id.
	 *
	 * @return string Returns the id.
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Get the index.
	 *
	 * @return integer Returns the index.
	 */
	public function getIndex() {
		return $this->index;
	}

	/**
	 * Get the legend index.
	 *
	 * @return integer Returns the legend index.
	 */
	public function getLegendIndex() {
		return $this->legendIndex;
	}

	/**
	 * Get the name.
	 *
	 * @return string Returns the name.
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Get the stack.
	 *
	 * @return string Returns the stack.
	 */
	public function getStack() {
		return $this->stack;
	}

	/**
	 * Get the type.
	 *
	 * @return string Returns the type.
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Get the x axis.
	 *
	 * @return integer|string Returns the x axis.
	 */
	public function getXAxis() {
		return $this->xAxis;
	}

	/**
	 * Get the y axis.
	 *
	 * @return integer|string Returns the y axis.
	 */
	public function getYAxis() {
		return $this->yAxis;
	}

	/**
	 * Get the z index.
	 *
	 * @return integer Returns the z index.
	 */
	public function getZIndex() {
		return $this->zIndex;
	}

	/**
	 * Serialize this instance.
	 *
	 * @return array Returns an array representing this instance.
	 */
	public function jsonSerialize() {
		return $this->toArray();
	}

	/**
	 * Set the data.
	 *
	 * @param array $data The data.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSeries Returns the highcharts series.
	 */
	public function setData(array $data = null) {
		$this->data = $data;
		return $this;
	}

	/**
	 * Set the data parser.
	 *
	 * @param string $dataParser The data parser.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSeries Returns the highcharts series.
	 * @deprecated
	 */
	public function setDataParser($dataParser) {
		$this->dataParser = $dataParser;
		return $this;
	}

	/**
	 * Set the data URL.
	 *
	 * @param string $dataURL The data URL.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSeries Returns the highcharts series.
	 * @deprecated
	 */
	public function setDataURL($dataURL) {
		$this->dataURL = $dataURL;
		return $this;
	}

	/**
	 * Set the id.
	 *
	 * @param string $id The id.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSeries Returns the highcharts series.
	 */
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * Set the index.
	 *
	 * @param integer $index The index.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSeries Returns the highcharts series.
	 */
	public function setIndex($index) {
		$this->index = $index;
		return $this;
	}

	/**
	 * Set the legend index.
	 *
	 * @param integer $legendIndex The legend index.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSeries Returns the highcharts series.
	 */
	public function setLegendIndex($legendIndex) {
		$this->legendIndex = $legendIndex;
		return $this;
	}

	/**
	 * Set the name.
	 *
	 * @param string $name The name.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSeries Returns the highcharts series.
	 */
	public function setName($name) {
		$this->name = $name;
		return $this;
	}

	/**
	 * Set the stack.
	 *
	 * @param string $stack The stack.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSeries Returns the highcharts series.
	 */
	public function setStack($stack) {
		$this->stack = $stack;
		return $this;
	}

	/**
	 * Set the type.
	 *
	 * @param string $type The type.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSeries Returns the highcharts series.
	 */
	public function setType($type) {
		switch ($type) {
			case null:
			case "area":
			case "arearange":
			case "areaspline":
			case "areasplinerange":
			case "boxplot":
			case "bubble":
			case "column":
			case "columnrange":
			case "errorbar":
			case "funnel":
			case "gauge":
			case "line":
			case "pie":
			case "scatter":
			case "spline":
			case "waterfall":
			$this->type = $type;
			break;
		}
		return $this;
	}

	/**
	 * Set the x axis.
	 *
	 * @param integer|string $xAxis The x axis.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSeries Returns the highcharts series.
	 */
	public function setXAxis($xAxis) {
		$this->xAxis = $xAxis;
		return $this;
	}

	/**
	 * Set the y axis.
	 *
	 * @param integer|string $yAxis The y axis.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSeries Returns the highcharts series.
	 */
	public function setYAxis($yAxis) {
		$this->yAxis = $yAxis;
		return $this;
	}

	/**
	 * Set the z index.
	 *
	 * @param integer $zIndex The z index.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSeries Returns the highcharts series.
	 */
	public function setZIndex($zIndex) {
		$this->zIndex = $zIndex;
		return $this;
	}

	/**
	 * Convert into an array representing this instance.
	 *
	 * @return array Returns an array representing this instance.
	 */
	public function toArray() {

		// Initialize the output.
		$output = [];

		// Check the data.
		if (!is_null($this->data)) {
			$output["data"] = $this->data;
		}

		// Check the data parser.
		if (!is_null($this->dataParser)) {
			$output["dataParser"] = $this->dataParser;
		}

		// Check the data URL.
		if (!is_null($this->dataURL)) {
			$output["dataURL"] = $this->dataURL;
		}

		// Check the id.
		if (!is_null($this->id)) {
			$output["id"] = $this->id;
		}

		// Check the index.
		if (!is_null($this->index)) {
			$output["index"] = $this->index;
		}

		// Check the legend index.
		if (!is_null($this->legendIndex)) {
			$output["legendIndex"] = $this->legendIndex;
		}

		// Check the name.
		if (!is_null($this->name)) {
			$output["name"] = $this->name;
		}

		// Check the stack.
		if (!is_null($this->stack)) {
			$output["stack"] = $this->stack;
		}

		// Check the type.
		if (!is_null($this->type)) {
			$output["type"] = $this->type;
		}

		// Check the x axis.
		if (!is_null($this->xAxis)) {
			$output["xAxis"] = $this->xAxis;
		}

		// Check the y axis.
		if (!is_null($this->yAxis)) {
			$output["yAxis"] = $this->yAxis;
		}

		// Check the z index.
		if (!is_null($this->zIndex)) {
			$output["zIndex"] = $this->zIndex;
		}

		// Return the output.
		return $output;
	}

}
