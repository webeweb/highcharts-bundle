<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts z axis.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsZAxis implements JsonSerializable {

    /**
     * Allow decimals.
     *
     * @var boolean
     * @since 2.0
     */
    private $allowDecimals = true;

    /**
     * Alternate grid color.
     *
     * @var string
     */
    private $alternateGridColor;

    /**
     * Categories.
     *
     * @var array
     */
    private $categories;

    /**
     * Ceiling.
     *
     * @var integer
     * @since 4.0
     */
    private $ceiling;

    /**
     * Class name.
     *
     * @var string
     * @since 5.0.0
     */
    private $className;

    /**
     * Crosshair.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsCrosshair
     * @since 4.1
     */
    private $crosshair;

    /**
     * Date time label formats.
     *
     * @var array
     */
    private $dateTimeLabelFormats;

    /**
     * Description.
     *
     * @var string
     * @since 5.0.0
     */
    private $description;

    /**
     * End on tick.
     *
     * @var boolean
     * @since 1.2.0
     */
    private $endOnTick = false;

    /**
     * Events.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsEvents
     */
    private $events;

    /**
     * Floor.
     *
     * @var integer
     * @since 4.0
     */
    private $floor;

    /**
     * Grid line color.
     *
     * @var string
     */
    private $gridLineColor = "#e6e6e6";

    /**
     * Grid line dash style.
     *
     * @var string
     * @since 1.2
     */
    private $gridLineDashStyle = "Solid";

    /**
     * Grid line width.
     *
     * @var integer
     */
    private $gridLineWidth = 0;

    /**
     * Grid z index.
     *
     * @var integer
     */
    private $gridZIndex = 1;

    /**
     * Id.
     *
     * @var string
     * @since 1.2.0
     */
    private $id;

    /**
     * Labels.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsLabels
     */
    private $labels;

    /**
     * Line color.
     *
     * @var string
     */
    private $lineColor = "#ccd6eb";

    /**
     * Line width.
     *
     * @var integer
     */
    private $lineWidth = 1;

    /**
     * Linked to.
     *
     * @var integer
     * @since 2.0.2
     */
    private $linkedTo;

    /**
     * Max.
     *
     * @var integer
     */
    private $max;

    /**
     * Max padding.
     *
     * @var integer
     * @since 1.2.0
     */
    private $maxPadding = 0.01;

    /**
     * Max zoom.
     *
     * @var integer
     * @deprecated
     */
    private $maxZoom;

    /**
     * Min.
     *
     * @var integer
     */
    private $min;

    /**
     * Min padding.
     *
     * @var integer
     * @since 1.2.0
     */
    private $minPadding = 0.01;

    /**
     * Min range.
     *
     * @var integer
     */
    private $minRange;

    /**
     * Min tick interval.
     *
     * @var integer
     * @since 2.3.0
     */
    private $minTickInterval;

    /**
     * Minor grid line color.
     *
     * @var string
     */
    private $minorGridLineColor = "#f2f2f2";

    /**
     * Minor grid line dash style.
     *
     * @var string
     * @since 1.2
     */
    private $minorGridLineDashStyle = "Solid";

    /**
     * Minor grid line width.
     *
     * @var integer
     */
    private $minorGridLineWidth = 1;

    /**
     * Minor tick color.
     *
     * @var string
     */
    private $minorTickColor = "#999999";

    /**
     * Minor tick interval.
     *
     * @var string|integer
     */
    private $minorTickInterval;

    /**
     * Minor tick length.
     *
     * @var integer
     */
    private $minorTickLength = 2;

    /**
     * Minor tick position.
     *
     * @var string
     */
    private $minorTickPosition = "outside";

    /**
     * Minor tick width.
     *
     * @var integer
     */
    private $minorTickWidth = 0;

    /**
     * Offset.
     *
     * @var integer
     */
    private $offset = 0;

    /**
     * Opposite.
     *
     * @var boolean
     */
    private $opposite = false;

    /**
     * Plot bands.
     *
     * @var array
     */
    private $plotBands;

    /**
     * Plot lines.
     *
     * @var array
     */
    private $plotLines;

    /**
     * Reversed.
     *
     * @var boolean
     */
    private $reversed = false;

    /**
     * Show empty.
     *
     * @var boolean
     * @since 1.1
     */
    private $showEmpty = true;

    /**
     * Show first label.
     *
     * @var boolean
     */
    private $showFirstLabel = true;

    /**
     * Show last label.
     *
     * @var boolean
     */
    private $showLastLabel = true;

    /**
     * Soft max.
     *
     * @var integer
     * @since 5.0.1
     */
    private $softMax;

    /**
     * Soft min.
     *
     * @var integer
     * @since 5.0.1
     */
    private $softMin;

    /**
     * Start of week.
     *
     * @var integer
     */
    private $startOfWeek = 1;

    /**
     * Start on tick.
     *
     * @var boolean
     * @since 1.2.0
     */
    private $startOnTick = false;

    /**
     * Tick amount.
     *
     * @var integer
     * @since 4.1.0
     */
    private $tickAmount;

    /**
     * Tick color.
     *
     * @var string
     */
    private $tickColor = "#ccd6eb";

    /**
     * Tick interval.
     *
     * @var integer
     */
    private $tickInterval;

    /**
     * Tick length.
     *
     * @var integer
     */
    private $tickLength = 10;

    /**
     * Tick pixel interval.
     *
     * @var integer
     */
    private $tickPixelInterval;

    /**
     * Tick position.
     *
     * @var string
     */
    private $tickPosition = "outside";

    /**
     * Tick positioner.
     *
     * @var string
     */
    private $tickPositioner;

    /**
     * Tick positions.
     *
     * @var array
     */
    private $tickPositions;

    /**
     * Tick width.
     *
     * @var integer
     */
    private $tickWidth = 1;

    /**
     * Tickmark placement.
     *
     * @var string
     */
    private $tickmarkPlacement;

    /**
     * Title.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsTitle
     */
    private $title;

    /**
     * Type.
     *
     * @var string
     */
    private $type = "linear";

    /**
     * Unique names.
     *
     * @var boolean
     * @since 4.2.7
     */
    private $uniqueNames = true;

    /**
     * Units.
     *
     * @var array
     */
    private $units;

    /**
     * Visible.
     *
     * @var boolean
     * @since 4.1.9
     */
    private $visible = true;

    /**
     * Constructor.
     *
     * @param boolean $ignoreDefaultValues Ignore the default values.
     */
    public function __construct($ignoreDefaultValues = true) {
        if (true === $ignoreDefaultValues) {
            $this->clear();
        }
    }

    /**
     * Clear.
     *
     * @return void
     */
    public function clear() {

        // Clear the allow decimals.
        $this->allowDecimals = null;

        // Clear the alternate grid color.
        $this->alternateGridColor = null;

        // Clear the categories.
        $this->categories = null;

        // Clear the ceiling.
        $this->ceiling = null;

        // Clear the class name.
        $this->className = null;

        // Clear the crosshair.
        if (null !== $this->crosshair) {
            $this->crosshair->clear();
        }

        // Clear the date time label formats.
        $this->dateTimeLabelFormats = null;

        // Clear the description.
        $this->description = null;

        // Clear the end on tick.
        $this->endOnTick = null;

        // Clear the events.
        if (null !== $this->events) {
            $this->events->clear();
        }

        // Clear the floor.
        $this->floor = null;

        // Clear the grid line color.
        $this->gridLineColor = null;

        // Clear the grid line dash style.
        $this->gridLineDashStyle = null;

        // Clear the grid line width.
        $this->gridLineWidth = null;

        // Clear the grid z index.
        $this->gridZIndex = null;

        // Clear the id.
        $this->id = null;

        // Clear the labels.
        if (null !== $this->labels) {
            $this->labels->clear();
        }

        // Clear the line color.
        $this->lineColor = null;

        // Clear the line width.
        $this->lineWidth = null;

        // Clear the linked to.
        $this->linkedTo = null;

        // Clear the max.
        $this->max = null;

        // Clear the max padding.
        $this->maxPadding = null;

        // Clear the max zoom.
        $this->maxZoom = null;

        // Clear the min.
        $this->min = null;

        // Clear the min padding.
        $this->minPadding = null;

        // Clear the min range.
        $this->minRange = null;

        // Clear the min tick interval.
        $this->minTickInterval = null;

        // Clear the minor grid line color.
        $this->minorGridLineColor = null;

        // Clear the minor grid line dash style.
        $this->minorGridLineDashStyle = null;

        // Clear the minor grid line width.
        $this->minorGridLineWidth = null;

        // Clear the minor tick color.
        $this->minorTickColor = null;

        // Clear the minor tick interval.
        $this->minorTickInterval = null;

        // Clear the minor tick length.
        $this->minorTickLength = null;

        // Clear the minor tick position.
        $this->minorTickPosition = null;

        // Clear the minor tick width.
        $this->minorTickWidth = null;

        // Clear the offset.
        $this->offset = null;

        // Clear the opposite.
        $this->opposite = null;

        // Clear the plot bands.
        $this->plotBands = null;

        // Clear the plot lines.
        $this->plotLines = null;

        // Clear the reversed.
        $this->reversed = null;

        // Clear the show empty.
        $this->showEmpty = null;

        // Clear the show first label.
        $this->showFirstLabel = null;

        // Clear the show last label.
        $this->showLastLabel = null;

        // Clear the soft max.
        $this->softMax = null;

        // Clear the soft min.
        $this->softMin = null;

        // Clear the start of week.
        $this->startOfWeek = null;

        // Clear the start on tick.
        $this->startOnTick = null;

        // Clear the tick amount.
        $this->tickAmount = null;

        // Clear the tick color.
        $this->tickColor = null;

        // Clear the tick interval.
        $this->tickInterval = null;

        // Clear the tick length.
        $this->tickLength = null;

        // Clear the tick pixel interval.
        $this->tickPixelInterval = null;

        // Clear the tick position.
        $this->tickPosition = null;

        // Clear the tick positioner.
        $this->tickPositioner = null;

        // Clear the tick positions.
        $this->tickPositions = null;

        // Clear the tick width.
        $this->tickWidth = null;

        // Clear the tickmark placement.
        $this->tickmarkPlacement = null;

        // Clear the title.
        if (null !== $this->title) {
            $this->title->clear();
        }

        // Clear the type.
        $this->type = null;

        // Clear the unique names.
        $this->uniqueNames = null;

        // Clear the units.
        $this->units = null;

        // Clear the visible.
        $this->visible = null;
    }

    /**
     * Get the allow decimals.
     *
     * @return boolean Returns the allow decimals.
     */
    public function getAllowDecimals() {
        return $this->allowDecimals;
    }

    /**
     * Get the alternate grid color.
     *
     * @return string Returns the alternate grid color.
     */
    public function getAlternateGridColor() {
        return $this->alternateGridColor;
    }

    /**
     * Get the categories.
     *
     * @return array Returns the categories.
     */
    public function getCategories() {
        return $this->categories;
    }

    /**
     * Get the ceiling.
     *
     * @return integer Returns the ceiling.
     */
    public function getCeiling() {
        return $this->ceiling;
    }

    /**
     * Get the class name.
     *
     * @return string Returns the class name.
     */
    public function getClassName() {
        return $this->className;
    }

    /**
     * Get the crosshair.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsCrosshair Returns the crosshair.
     */
    public function getCrosshair() {
        return $this->crosshair;
    }

    /**
     * Get the date time label formats.
     *
     * @return array Returns the date time label formats.
     */
    public function getDateTimeLabelFormats() {
        return $this->dateTimeLabelFormats;
    }

    /**
     * Get the description.
     *
     * @return string Returns the description.
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Get the end on tick.
     *
     * @return boolean Returns the end on tick.
     */
    public function getEndOnTick() {
        return $this->endOnTick;
    }

    /**
     * Get the events.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsEvents Returns the events.
     */
    public function getEvents() {
        return $this->events;
    }

    /**
     * Get the floor.
     *
     * @return integer Returns the floor.
     */
    public function getFloor() {
        return $this->floor;
    }

    /**
     * Get the grid line color.
     *
     * @return string Returns the grid line color.
     */
    public function getGridLineColor() {
        return $this->gridLineColor;
    }

    /**
     * Get the grid line dash style.
     *
     * @return string Returns the grid line dash style.
     */
    public function getGridLineDashStyle() {
        return $this->gridLineDashStyle;
    }

    /**
     * Get the grid line width.
     *
     * @return integer Returns the grid line width.
     */
    public function getGridLineWidth() {
        return $this->gridLineWidth;
    }

    /**
     * Get the grid z index.
     *
     * @return integer Returns the grid z index.
     */
    public function getGridZIndex() {
        return $this->gridZIndex;
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
     * Get the labels.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsLabels Returns the labels.
     */
    public function getLabels() {
        return $this->labels;
    }

    /**
     * Get the line color.
     *
     * @return string Returns the line color.
     */
    public function getLineColor() {
        return $this->lineColor;
    }

    /**
     * Get the line width.
     *
     * @return integer Returns the line width.
     */
    public function getLineWidth() {
        return $this->lineWidth;
    }

    /**
     * Get the linked to.
     *
     * @return integer Returns the linked to.
     */
    public function getLinkedTo() {
        return $this->linkedTo;
    }

    /**
     * Get the max.
     *
     * @return integer Returns the max.
     */
    public function getMax() {
        return $this->max;
    }

    /**
     * Get the max padding.
     *
     * @return integer Returns the max padding.
     */
    public function getMaxPadding() {
        return $this->maxPadding;
    }

    /**
     * Get the max zoom.
     *
     * @return integer Returns the max zoom.
     * @deprecated
     */
    public function getMaxZoom() {
        return $this->maxZoom;
    }

    /**
     * Get the min.
     *
     * @return integer Returns the min.
     */
    public function getMin() {
        return $this->min;
    }

    /**
     * Get the min padding.
     *
     * @return integer Returns the min padding.
     */
    public function getMinPadding() {
        return $this->minPadding;
    }

    /**
     * Get the min range.
     *
     * @return integer Returns the min range.
     */
    public function getMinRange() {
        return $this->minRange;
    }

    /**
     * Get the min tick interval.
     *
     * @return integer Returns the min tick interval.
     */
    public function getMinTickInterval() {
        return $this->minTickInterval;
    }

    /**
     * Get the minor grid line color.
     *
     * @return string Returns the minor grid line color.
     */
    public function getMinorGridLineColor() {
        return $this->minorGridLineColor;
    }

    /**
     * Get the minor grid line dash style.
     *
     * @return string Returns the minor grid line dash style.
     */
    public function getMinorGridLineDashStyle() {
        return $this->minorGridLineDashStyle;
    }

    /**
     * Get the minor grid line width.
     *
     * @return integer Returns the minor grid line width.
     */
    public function getMinorGridLineWidth() {
        return $this->minorGridLineWidth;
    }

    /**
     * Get the minor tick color.
     *
     * @return string Returns the minor tick color.
     */
    public function getMinorTickColor() {
        return $this->minorTickColor;
    }

    /**
     * Get the minor tick interval.
     *
     * @return string|integer Returns the minor tick interval.
     */
    public function getMinorTickInterval() {
        return $this->minorTickInterval;
    }

    /**
     * Get the minor tick length.
     *
     * @return integer Returns the minor tick length.
     */
    public function getMinorTickLength() {
        return $this->minorTickLength;
    }

    /**
     * Get the minor tick position.
     *
     * @return string Returns the minor tick position.
     */
    public function getMinorTickPosition() {
        return $this->minorTickPosition;
    }

    /**
     * Get the minor tick width.
     *
     * @return integer Returns the minor tick width.
     */
    public function getMinorTickWidth() {
        return $this->minorTickWidth;
    }

    /**
     * Get the offset.
     *
     * @return integer Returns the offset.
     */
    public function getOffset() {
        return $this->offset;
    }

    /**
     * Get the opposite.
     *
     * @return boolean Returns the opposite.
     */
    public function getOpposite() {
        return $this->opposite;
    }

    /**
     * Get the plot bands.
     *
     * @return array Returns the plot bands.
     */
    public function getPlotBands() {
        return $this->plotBands;
    }

    /**
     * Get the plot lines.
     *
     * @return array Returns the plot lines.
     */
    public function getPlotLines() {
        return $this->plotLines;
    }

    /**
     * Get the reversed.
     *
     * @return boolean Returns the reversed.
     */
    public function getReversed() {
        return $this->reversed;
    }

    /**
     * Get the show empty.
     *
     * @return boolean Returns the show empty.
     */
    public function getShowEmpty() {
        return $this->showEmpty;
    }

    /**
     * Get the show first label.
     *
     * @return boolean Returns the show first label.
     */
    public function getShowFirstLabel() {
        return $this->showFirstLabel;
    }

    /**
     * Get the show last label.
     *
     * @return boolean Returns the show last label.
     */
    public function getShowLastLabel() {
        return $this->showLastLabel;
    }

    /**
     * Get the soft max.
     *
     * @return integer Returns the soft max.
     */
    public function getSoftMax() {
        return $this->softMax;
    }

    /**
     * Get the soft min.
     *
     * @return integer Returns the soft min.
     */
    public function getSoftMin() {
        return $this->softMin;
    }

    /**
     * Get the start of week.
     *
     * @return integer Returns the start of week.
     */
    public function getStartOfWeek() {
        return $this->startOfWeek;
    }

    /**
     * Get the start on tick.
     *
     * @return boolean Returns the start on tick.
     */
    public function getStartOnTick() {
        return $this->startOnTick;
    }

    /**
     * Get the tick amount.
     *
     * @return integer Returns the tick amount.
     */
    public function getTickAmount() {
        return $this->tickAmount;
    }

    /**
     * Get the tick color.
     *
     * @return string Returns the tick color.
     */
    public function getTickColor() {
        return $this->tickColor;
    }

    /**
     * Get the tick interval.
     *
     * @return integer Returns the tick interval.
     */
    public function getTickInterval() {
        return $this->tickInterval;
    }

    /**
     * Get the tick length.
     *
     * @return integer Returns the tick length.
     */
    public function getTickLength() {
        return $this->tickLength;
    }

    /**
     * Get the tick pixel interval.
     *
     * @return integer Returns the tick pixel interval.
     */
    public function getTickPixelInterval() {
        return $this->tickPixelInterval;
    }

    /**
     * Get the tick position.
     *
     * @return string Returns the tick position.
     */
    public function getTickPosition() {
        return $this->tickPosition;
    }

    /**
     * Get the tick positioner.
     *
     * @return string Returns the tick positioner.
     */
    public function getTickPositioner() {
        return $this->tickPositioner;
    }

    /**
     * Get the tick positions.
     *
     * @return array Returns the tick positions.
     */
    public function getTickPositions() {
        return $this->tickPositions;
    }

    /**
     * Get the tick width.
     *
     * @return integer Returns the tick width.
     */
    public function getTickWidth() {
        return $this->tickWidth;
    }

    /**
     * Get the tickmark placement.
     *
     * @return string Returns the tickmark placement.
     */
    public function getTickmarkPlacement() {
        return $this->tickmarkPlacement;
    }

    /**
     * Get the title.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsTitle Returns the title.
     */
    public function getTitle() {
        return $this->title;
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
     * Get the unique names.
     *
     * @return boolean Returns the unique names.
     */
    public function getUniqueNames() {
        return $this->uniqueNames;
    }

    /**
     * Get the units.
     *
     * @return array Returns the units.
     */
    public function getUnits() {
        return $this->units;
    }

    /**
     * Get the visible.
     *
     * @return boolean Returns the visible.
     */
    public function getVisible() {
        return $this->visible;
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
     * Create a new crosshair.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsCrosshair Returns the crosshair.
     */
    public function newCrosshair() {
        $this->crosshair = new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsCrosshair();
        return $this->crosshair;
    }

    /**
     * Create a new events.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsEvents Returns the events.
     */
    public function newEvents() {
        $this->events = new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsEvents();
        return $this->events;
    }

    /**
     * Create a new labels.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsLabels Returns the labels.
     */
    public function newLabels() {
        $this->labels = new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsLabels();
        return $this->labels;
    }

    /**
     * Create a new title.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsTitle Returns the title.
     */
    public function newTitle() {
        $this->title = new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsTitle();
        return $this->title;
    }

    /**
     * Set the allow decimals.
     *
     * @param boolean $allowDecimals The allow decimals.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setAllowDecimals($allowDecimals) {
        $this->allowDecimals = $allowDecimals;
        return $this;
    }

    /**
     * Set the alternate grid color.
     *
     * @param string $alternateGridColor The alternate grid color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setAlternateGridColor($alternateGridColor) {
        $this->alternateGridColor = $alternateGridColor;
        return $this;
    }

    /**
     * Set the categories.
     *
     * @param array $categories The categories.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setCategories(array $categories = null) {
        $this->categories = $categories;
        return $this;
    }

    /**
     * Set the ceiling.
     *
     * @param integer $ceiling The ceiling.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setCeiling($ceiling) {
        $this->ceiling = $ceiling;
        return $this;
    }

    /**
     * Set the class name.
     *
     * @param string $className The class name.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setClassName($className) {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the crosshair.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsCrosshair $crosshair The crosshair.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setCrosshair(\WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsCrosshair $crosshair = null) {
        $this->crosshair = $crosshair;
        return $this;
    }

    /**
     * Set the date time label formats.
     *
     * @param array $dateTimeLabelFormats The date time label formats.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setDateTimeLabelFormats(array $dateTimeLabelFormats = null) {
        $this->dateTimeLabelFormats = $dateTimeLabelFormats;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string $description The description.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the end on tick.
     *
     * @param boolean $endOnTick The end on tick.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setEndOnTick($endOnTick) {
        $this->endOnTick = $endOnTick;
        return $this;
    }

    /**
     * Set the events.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsEvents $events The events.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setEvents(\WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsEvents $events = null) {
        $this->events = $events;
        return $this;
    }

    /**
     * Set the floor.
     *
     * @param integer $floor The floor.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setFloor($floor) {
        $this->floor = $floor;
        return $this;
    }

    /**
     * Set the grid line color.
     *
     * @param string $gridLineColor The grid line color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setGridLineColor($gridLineColor) {
        $this->gridLineColor = $gridLineColor;
        return $this;
    }

    /**
     * Set the grid line dash style.
     *
     * @param string $gridLineDashStyle The grid line dash style.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setGridLineDashStyle($gridLineDashStyle) {
        switch ($gridLineDashStyle) {
            case "Dash":
            case "DashDot":
            case "Dot":
            case "LongDash":
            case "LongDashDot":
            case "LongDashDotDot":
            case "ShortDash":
            case "ShortDashDot":
            case "ShortDashDotDot":
            case "ShortDot":
            case "Solid":
            $this->gridLineDashStyle = $gridLineDashStyle;
            break;
        }
        return $this;
    }

    /**
     * Set the grid line width.
     *
     * @param integer $gridLineWidth The grid line width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setGridLineWidth($gridLineWidth) {
        $this->gridLineWidth = $gridLineWidth;
        return $this;
    }

    /**
     * Set the grid z index.
     *
     * @param integer $gridZIndex The grid z index.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setGridZIndex($gridZIndex) {
        $this->gridZIndex = $gridZIndex;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string $id The id.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the labels.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsLabels $labels The labels.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setLabels(\WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsLabels $labels = null) {
        $this->labels = $labels;
        return $this;
    }

    /**
     * Set the line color.
     *
     * @param string $lineColor The line color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setLineColor($lineColor) {
        $this->lineColor = $lineColor;
        return $this;
    }

    /**
     * Set the line width.
     *
     * @param integer $lineWidth The line width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setLineWidth($lineWidth) {
        $this->lineWidth = $lineWidth;
        return $this;
    }

    /**
     * Set the linked to.
     *
     * @param integer $linkedTo The linked to.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setLinkedTo($linkedTo) {
        $this->linkedTo = $linkedTo;
        return $this;
    }

    /**
     * Set the max.
     *
     * @param integer $max The max.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setMax($max) {
        $this->max = $max;
        return $this;
    }

    /**
     * Set the max padding.
     *
     * @param integer $maxPadding The max padding.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setMaxPadding($maxPadding) {
        $this->maxPadding = $maxPadding;
        return $this;
    }

    /**
     * Set the max zoom.
     *
     * @param integer $maxZoom The max zoom.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     * @deprecated
     */
    public function setMaxZoom($maxZoom) {
        $this->maxZoom = $maxZoom;
        return $this;
    }

    /**
     * Set the min.
     *
     * @param integer $min The min.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setMin($min) {
        $this->min = $min;
        return $this;
    }

    /**
     * Set the min padding.
     *
     * @param integer $minPadding The min padding.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setMinPadding($minPadding) {
        $this->minPadding = $minPadding;
        return $this;
    }

    /**
     * Set the min range.
     *
     * @param integer $minRange The min range.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setMinRange($minRange) {
        $this->minRange = $minRange;
        return $this;
    }

    /**
     * Set the min tick interval.
     *
     * @param integer $minTickInterval The min tick interval.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setMinTickInterval($minTickInterval) {
        $this->minTickInterval = $minTickInterval;
        return $this;
    }

    /**
     * Set the minor grid line color.
     *
     * @param string $minorGridLineColor The minor grid line color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setMinorGridLineColor($minorGridLineColor) {
        $this->minorGridLineColor = $minorGridLineColor;
        return $this;
    }

    /**
     * Set the minor grid line dash style.
     *
     * @param string $minorGridLineDashStyle The minor grid line dash style.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setMinorGridLineDashStyle($minorGridLineDashStyle) {
        switch ($minorGridLineDashStyle) {
            case "Dash":
            case "DashDot":
            case "Dot":
            case "LongDash":
            case "LongDashDot":
            case "LongDashDotDot":
            case "ShortDash":
            case "ShortDashDot":
            case "ShortDashDotDot":
            case "ShortDot":
            case "Solid":
            $this->minorGridLineDashStyle = $minorGridLineDashStyle;
            break;
        }
        return $this;
    }

    /**
     * Set the minor grid line width.
     *
     * @param integer $minorGridLineWidth The minor grid line width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setMinorGridLineWidth($minorGridLineWidth) {
        $this->minorGridLineWidth = $minorGridLineWidth;
        return $this;
    }

    /**
     * Set the minor tick color.
     *
     * @param string $minorTickColor The minor tick color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setMinorTickColor($minorTickColor) {
        $this->minorTickColor = $minorTickColor;
        return $this;
    }

    /**
     * Set the minor tick interval.
     *
     * @param string|integer $minorTickInterval The minor tick interval.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setMinorTickInterval($minorTickInterval) {
        $this->minorTickInterval = $minorTickInterval;
        return $this;
    }

    /**
     * Set the minor tick length.
     *
     * @param integer $minorTickLength The minor tick length.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setMinorTickLength($minorTickLength) {
        $this->minorTickLength = $minorTickLength;
        return $this;
    }

    /**
     * Set the minor tick position.
     *
     * @param string $minorTickPosition The minor tick position.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setMinorTickPosition($minorTickPosition) {
        switch ($minorTickPosition) {
            case "inside":
            case "outside":
            $this->minorTickPosition = $minorTickPosition;
            break;
        }
        return $this;
    }

    /**
     * Set the minor tick width.
     *
     * @param integer $minorTickWidth The minor tick width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setMinorTickWidth($minorTickWidth) {
        $this->minorTickWidth = $minorTickWidth;
        return $this;
    }

    /**
     * Set the offset.
     *
     * @param integer $offset The offset.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setOffset($offset) {
        $this->offset = $offset;
        return $this;
    }

    /**
     * Set the opposite.
     *
     * @param boolean $opposite The opposite.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setOpposite($opposite) {
        $this->opposite = $opposite;
        return $this;
    }

    /**
     * Set the plot bands.
     *
     * @param array $plotBands The plot bands.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setPlotBands(array $plotBands = null) {
        $this->plotBands = $plotBands;
        return $this;
    }

    /**
     * Set the plot lines.
     *
     * @param array $plotLines The plot lines.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setPlotLines(array $plotLines = null) {
        $this->plotLines = $plotLines;
        return $this;
    }

    /**
     * Set the reversed.
     *
     * @param boolean $reversed The reversed.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setReversed($reversed) {
        $this->reversed = $reversed;
        return $this;
    }

    /**
     * Set the show empty.
     *
     * @param boolean $showEmpty The show empty.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setShowEmpty($showEmpty) {
        $this->showEmpty = $showEmpty;
        return $this;
    }

    /**
     * Set the show first label.
     *
     * @param boolean $showFirstLabel The show first label.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setShowFirstLabel($showFirstLabel) {
        $this->showFirstLabel = $showFirstLabel;
        return $this;
    }

    /**
     * Set the show last label.
     *
     * @param boolean $showLastLabel The show last label.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setShowLastLabel($showLastLabel) {
        $this->showLastLabel = $showLastLabel;
        return $this;
    }

    /**
     * Set the soft max.
     *
     * @param integer $softMax The soft max.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setSoftMax($softMax) {
        $this->softMax = $softMax;
        return $this;
    }

    /**
     * Set the soft min.
     *
     * @param integer $softMin The soft min.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setSoftMin($softMin) {
        $this->softMin = $softMin;
        return $this;
    }

    /**
     * Set the start of week.
     *
     * @param integer $startOfWeek The start of week.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setStartOfWeek($startOfWeek) {
        $this->startOfWeek = $startOfWeek;
        return $this;
    }

    /**
     * Set the start on tick.
     *
     * @param boolean $startOnTick The start on tick.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setStartOnTick($startOnTick) {
        $this->startOnTick = $startOnTick;
        return $this;
    }

    /**
     * Set the tick amount.
     *
     * @param integer $tickAmount The tick amount.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setTickAmount($tickAmount) {
        $this->tickAmount = $tickAmount;
        return $this;
    }

    /**
     * Set the tick color.
     *
     * @param string $tickColor The tick color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setTickColor($tickColor) {
        $this->tickColor = $tickColor;
        return $this;
    }

    /**
     * Set the tick interval.
     *
     * @param integer $tickInterval The tick interval.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setTickInterval($tickInterval) {
        $this->tickInterval = $tickInterval;
        return $this;
    }

    /**
     * Set the tick length.
     *
     * @param integer $tickLength The tick length.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setTickLength($tickLength) {
        $this->tickLength = $tickLength;
        return $this;
    }

    /**
     * Set the tick pixel interval.
     *
     * @param integer $tickPixelInterval The tick pixel interval.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setTickPixelInterval($tickPixelInterval) {
        $this->tickPixelInterval = $tickPixelInterval;
        return $this;
    }

    /**
     * Set the tick position.
     *
     * @param string $tickPosition The tick position.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setTickPosition($tickPosition) {
        switch ($tickPosition) {
            case "inside":
            case "outside":
            $this->tickPosition = $tickPosition;
            break;
        }
        return $this;
    }

    /**
     * Set the tick positioner.
     *
     * @param string $tickPositioner The tick positioner.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setTickPositioner($tickPositioner) {
        $this->tickPositioner = $tickPositioner;
        return $this;
    }

    /**
     * Set the tick positions.
     *
     * @param array $tickPositions The tick positions.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setTickPositions(array $tickPositions = null) {
        $this->tickPositions = $tickPositions;
        return $this;
    }

    /**
     * Set the tick width.
     *
     * @param integer $tickWidth The tick width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setTickWidth($tickWidth) {
        $this->tickWidth = $tickWidth;
        return $this;
    }

    /**
     * Set the tickmark placement.
     *
     * @param string $tickmarkPlacement The tickmark placement.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setTickmarkPlacement($tickmarkPlacement) {
        switch ($tickmarkPlacement) {
            case null:
            case "between":
            case "on":
            $this->tickmarkPlacement = $tickmarkPlacement;
            break;
        }
        return $this;
    }

    /**
     * Set the title.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsTitle $title The title.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setTitle(\WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsTitle $title = null) {
        $this->title = $title;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setType($type) {
        switch ($type) {
            case "category":
            case "datetime":
            case "linear":
            case "logarithmic":
            $this->type = $type;
            break;
        }
        return $this;
    }

    /**
     * Set the unique names.
     *
     * @param boolean $uniqueNames The unique names.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setUniqueNames($uniqueNames) {
        $this->uniqueNames = $uniqueNames;
        return $this;
    }

    /**
     * Set the units.
     *
     * @param array $units The units.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setUnits(array $units = null) {
        $this->units = $units;
        return $this;
    }

    /**
     * Set the visible.
     *
     * @param boolean $visible The visible.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the highcharts z axis.
     */
    public function setVisible($visible) {
        $this->visible = $visible;
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

        // Set the allow decimals.
        ArrayUtility::set($output, "allowDecimals", $this->allowDecimals, [null]);

        // Set the alternate grid color.
        ArrayUtility::set($output, "alternateGridColor", $this->alternateGridColor, [null]);

        // Set the categories.
        ArrayUtility::set($output, "categories", $this->categories, [null]);

        // Set the ceiling.
        ArrayUtility::set($output, "ceiling", $this->ceiling, [null]);

        // Set the class name.
        ArrayUtility::set($output, "className", $this->className, [null]);

        // Set the crosshair.
        if (null !== $this->crosshair) {
            ArrayUtility::set($output, "crosshair", $this->crosshair->toArray(), []);
        }

        // Set the date time label formats.
        ArrayUtility::set($output, "dateTimeLabelFormats", $this->dateTimeLabelFormats, [null]);

        // Set the description.
        ArrayUtility::set($output, "description", $this->description, [null]);

        // Set the end on tick.
        ArrayUtility::set($output, "endOnTick", $this->endOnTick, [null]);

        // Set the events.
        if (null !== $this->events) {
            ArrayUtility::set($output, "events", $this->events->toArray(), []);
        }

        // Set the floor.
        ArrayUtility::set($output, "floor", $this->floor, [null]);

        // Set the grid line color.
        ArrayUtility::set($output, "gridLineColor", $this->gridLineColor, [null]);

        // Set the grid line dash style.
        ArrayUtility::set($output, "gridLineDashStyle", $this->gridLineDashStyle, [null]);

        // Set the grid line width.
        ArrayUtility::set($output, "gridLineWidth", $this->gridLineWidth, [null]);

        // Set the grid z index.
        ArrayUtility::set($output, "gridZIndex", $this->gridZIndex, [null]);

        // Set the id.
        ArrayUtility::set($output, "id", $this->id, [null]);

        // Set the labels.
        if (null !== $this->labels) {
            ArrayUtility::set($output, "labels", $this->labels->toArray(), []);
        }

        // Set the line color.
        ArrayUtility::set($output, "lineColor", $this->lineColor, [null]);

        // Set the line width.
        ArrayUtility::set($output, "lineWidth", $this->lineWidth, [null]);

        // Set the linked to.
        ArrayUtility::set($output, "linkedTo", $this->linkedTo, [null]);

        // Set the max.
        ArrayUtility::set($output, "max", $this->max, [null]);

        // Set the max padding.
        ArrayUtility::set($output, "maxPadding", $this->maxPadding, [null]);

        // Set the max zoom.
        ArrayUtility::set($output, "maxZoom", $this->maxZoom, [null]);

        // Set the min.
        ArrayUtility::set($output, "min", $this->min, [null]);

        // Set the min padding.
        ArrayUtility::set($output, "minPadding", $this->minPadding, [null]);

        // Set the min range.
        ArrayUtility::set($output, "minRange", $this->minRange, [null]);

        // Set the min tick interval.
        ArrayUtility::set($output, "minTickInterval", $this->minTickInterval, [null]);

        // Set the minor grid line color.
        ArrayUtility::set($output, "minorGridLineColor", $this->minorGridLineColor, [null]);

        // Set the minor grid line dash style.
        ArrayUtility::set($output, "minorGridLineDashStyle", $this->minorGridLineDashStyle, [null]);

        // Set the minor grid line width.
        ArrayUtility::set($output, "minorGridLineWidth", $this->minorGridLineWidth, [null]);

        // Set the minor tick color.
        ArrayUtility::set($output, "minorTickColor", $this->minorTickColor, [null]);

        // Set the minor tick interval.
        ArrayUtility::set($output, "minorTickInterval", $this->minorTickInterval, [null]);

        // Set the minor tick length.
        ArrayUtility::set($output, "minorTickLength", $this->minorTickLength, [null]);

        // Set the minor tick position.
        ArrayUtility::set($output, "minorTickPosition", $this->minorTickPosition, [null]);

        // Set the minor tick width.
        ArrayUtility::set($output, "minorTickWidth", $this->minorTickWidth, [null]);

        // Set the offset.
        ArrayUtility::set($output, "offset", $this->offset, [null]);

        // Set the opposite.
        ArrayUtility::set($output, "opposite", $this->opposite, [null]);

        // Set the plot bands.
        ArrayUtility::set($output, "plotBands", $this->plotBands, [null]);

        // Set the plot lines.
        ArrayUtility::set($output, "plotLines", $this->plotLines, [null]);

        // Set the reversed.
        ArrayUtility::set($output, "reversed", $this->reversed, [null]);

        // Set the show empty.
        ArrayUtility::set($output, "showEmpty", $this->showEmpty, [null]);

        // Set the show first label.
        ArrayUtility::set($output, "showFirstLabel", $this->showFirstLabel, [null]);

        // Set the show last label.
        ArrayUtility::set($output, "showLastLabel", $this->showLastLabel, [null]);

        // Set the soft max.
        ArrayUtility::set($output, "softMax", $this->softMax, [null]);

        // Set the soft min.
        ArrayUtility::set($output, "softMin", $this->softMin, [null]);

        // Set the start of week.
        ArrayUtility::set($output, "startOfWeek", $this->startOfWeek, [null]);

        // Set the start on tick.
        ArrayUtility::set($output, "startOnTick", $this->startOnTick, [null]);

        // Set the tick amount.
        ArrayUtility::set($output, "tickAmount", $this->tickAmount, [null]);

        // Set the tick color.
        ArrayUtility::set($output, "tickColor", $this->tickColor, [null]);

        // Set the tick interval.
        ArrayUtility::set($output, "tickInterval", $this->tickInterval, [null]);

        // Set the tick length.
        ArrayUtility::set($output, "tickLength", $this->tickLength, [null]);

        // Set the tick pixel interval.
        ArrayUtility::set($output, "tickPixelInterval", $this->tickPixelInterval, [null]);

        // Set the tick position.
        ArrayUtility::set($output, "tickPosition", $this->tickPosition, [null]);

        // Set the tick positioner.
        ArrayUtility::set($output, "tickPositioner", $this->tickPositioner, [null]);

        // Set the tick positions.
        ArrayUtility::set($output, "tickPositions", $this->tickPositions, [null]);

        // Set the tick width.
        ArrayUtility::set($output, "tickWidth", $this->tickWidth, [null]);

        // Set the tickmark placement.
        ArrayUtility::set($output, "tickmarkPlacement", $this->tickmarkPlacement, [null]);

        // Set the title.
        if (null !== $this->title) {
            ArrayUtility::set($output, "title", $this->title->toArray(), []);
        }

        // Set the type.
        ArrayUtility::set($output, "type", $this->type, [null]);

        // Set the unique names.
        ArrayUtility::set($output, "uniqueNames", $this->uniqueNames, [null]);

        // Set the units.
        ArrayUtility::set($output, "units", $this->units, [null]);

        // Set the visible.
        ArrayUtility::set($output, "visible", $this->visible, [null]);

        // Return the output.
        return $output;
    }

}
