<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts treemap.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions
 * @version 5.0.14
 * @final
 */
final class HighchartsTreemap implements JsonSerializable {

    /**
     * Allow drill to node.
     *
     * @var boolean
     * @since 4.1.0
     */
    private $allowDrillToNode = false;

    /**
     * Allow point select.
     *
     * @var boolean
     * @since 1.2.0
     */
    private $allowPointSelect = false;

    /**
     * Alternate starting direction.
     *
     * @var boolean
     * @since 4.1.0
     */
    private $alternateStartingDirection = false;

    /**
     * Animation.
     *
     * @var boolean
     */
    private $animation = true;

    /**
     * Animation limit.
     *
     * @var integer
     */
    private $animationLimit;

    /**
     * Border color.
     *
     * @var string
     */
    private $borderColor = "#e6e6e6";

    /**
     * Border width.
     *
     * @var integer
     */
    private $borderWidth = 1;

    /**
     * Class name.
     *
     * @var string
     * @since 5.0.0
     */
    private $className;

    /**
     * Color.
     *
     * @var string
     * @since 4.0
     */
    private $color;

    /**
     * Color by point.
     *
     * @var boolean
     * @since 2.0
     */
    private $colorByPoint = false;

    /**
     * Color index.
     *
     * @var integer
     * @since 5.0.0
     */
    private $colorIndex;

    /**
     * Colors.
     *
     * @var array
     * @since 3.0
     */
    private $colors;

    /**
     * Crisp.
     *
     * @var boolean
     * @since 5.0.10
     */
    private $crisp = true;

    /**
     * Crop threshold.
     *
     * @var integer
     * @since 4.1.0
     */
    private $cropThreshold = 300;

    /**
     * Cursor.
     *
     * @var string
     */
    private $cursor;

    /**
     * Data labels.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsDataLabels
     * @since 4.1.0
     */
    private $dataLabels;

    /**
     * Description.
     *
     * @var string
     * @since 5.0.0
     */
    private $description;

    /**
     * Enable mouse tracking.
     *
     * @var boolean
     */
    private $enableMouseTracking = true;

    /**
     * Events.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsEvents
     */
    private $events;

    /**
     * Expose element to a11y.
     *
     * @var boolean
     * @since 5.0.12
     */
    private $exposeElementToA11y;

    /**
     * Find nearest point by.
     *
     * @var string
     * @since 5.0.10
     */
    private $findNearestPointBy;

    /**
     * Get extremes from all.
     *
     * @var boolean
     * @since 4.1.6
     */
    private $getExtremesFromAll = false;

    /**
     * Ignore hidden point.
     *
     * @var boolean
     * @since 5.0.8
     */
    private $ignoreHiddenPoint = true;

    /**
     * Interact by leaf.
     *
     * @var boolean
     * @since 4.1.2
     */
    private $interactByLeaf;

    /**
     * Keys.
     *
     * @var array
     * @since 4.1.6
     */
    private $keys;

    /**
     * Layout algorithm.
     *
     * @var string
     * @since 4.1.0
     */
    private $layoutAlgorithm = "sliceAndDice";

    /**
     * Layout starting direction.
     *
     * @var string
     * @since 4.1.0
     */
    private $layoutStartingDirection = "vertical";

    /**
     * Level is constant.
     *
     * @var boolean
     * @since 4.1.0
     */
    private $levelIsConstant = true;

    /**
     * Levels.
     *
     * @var array
     * @since 4.1.0
     */
    private $levels;

    /**
     * Linked to.
     *
     * @var string
     * @since 3.0
     */
    private $linkedTo;

    /**
     * Max point width.
     *
     * @var integer
     * @since 4.1.8
     */
    private $maxPointWidth;

    /**
     * Opacity.
     *
     * @var integer
     * @since 4.2.4
     */
    private $opacity = 0.15;

    /**
     * Point.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsPoint
     */
    private $point;

    /**
     * Point description formatter.
     *
     * @var string
     * @since 5.0.12
     */
    private $pointDescriptionFormatter;

    /**
     * Selected.
     *
     * @var boolean
     * @since 1.2.0
     */
    private $selected = false;

    /**
     * Shadow.
     *
     * @var boolean|array
     */
    private $shadow = false;

    /**
     * Show checkbox.
     *
     * @var boolean
     * @since 1.2.0
     */
    private $showCheckbox = false;

    /**
     * Show in legend.
     *
     * @var boolean
     */
    private $showInLegend = false;

    /**
     * Skip keyboard navigation.
     *
     * @var boolean
     * @since 5.0.12
     */
    private $skipKeyboardNavigation;

    /**
     * Sort index.
     *
     * @var integer
     * @since 4.1.10
     */
    private $sortIndex;

    /**
     * States.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsStates
     */
    private $states;

    /**
     * Sticky tracking.
     *
     * @var boolean
     * @since 2.0
     */
    private $stickyTracking = true;

    /**
     * Tooltip.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsTooltip
     * @since 4.1.0
     */
    private $tooltip;

    /**
     * Turbo threshold.
     *
     * @var integer
     * @since 2.2
     */
    private $turboThreshold = 1000;

    /**
     * Visible.
     *
     * @var boolean
     */
    private $visible = true;

    /**
     * Zone axis.
     *
     * @var string
     * @since 4.1.0
     */
    private $zoneAxis = "y";

    /**
     * Zones.
     *
     * @var array
     * @since 4.1.0
     */
    private $zones;

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

        // Clear the allow drill to node.
        $this->allowDrillToNode = null;

        // Clear the allow point select.
        $this->allowPointSelect = null;

        // Clear the alternate starting direction.
        $this->alternateStartingDirection = null;

        // Clear the animation.
        $this->animation = null;

        // Clear the animation limit.
        $this->animationLimit = null;

        // Clear the border color.
        $this->borderColor = null;

        // Clear the border width.
        $this->borderWidth = null;

        // Clear the class name.
        $this->className = null;

        // Clear the color.
        $this->color = null;

        // Clear the color by point.
        $this->colorByPoint = null;

        // Clear the color index.
        $this->colorIndex = null;

        // Clear the colors.
        $this->colors = null;

        // Clear the crisp.
        $this->crisp = null;

        // Clear the crop threshold.
        $this->cropThreshold = null;

        // Clear the cursor.
        $this->cursor = null;

        // Clear the data labels.
        if (null !== $this->dataLabels) {
            $this->dataLabels->clear();
        }

        // Clear the description.
        $this->description = null;

        // Clear the enable mouse tracking.
        $this->enableMouseTracking = null;

        // Clear the events.
        if (null !== $this->events) {
            $this->events->clear();
        }

        // Clear the expose element to a11y.
        $this->exposeElementToA11y = null;

        // Clear the find nearest point by.
        $this->findNearestPointBy = null;

        // Clear the get extremes from all.
        $this->getExtremesFromAll = null;

        // Clear the ignore hidden point.
        $this->ignoreHiddenPoint = null;

        // Clear the interact by leaf.
        $this->interactByLeaf = null;

        // Clear the keys.
        $this->keys = null;

        // Clear the layout algorithm.
        $this->layoutAlgorithm = null;

        // Clear the layout starting direction.
        $this->layoutStartingDirection = null;

        // Clear the level is constant.
        $this->levelIsConstant = null;

        // Clear the levels.
        $this->levels = null;

        // Clear the linked to.
        $this->linkedTo = null;

        // Clear the max point width.
        $this->maxPointWidth = null;

        // Clear the opacity.
        $this->opacity = null;

        // Clear the point.
        if (null !== $this->point) {
            $this->point->clear();
        }

        // Clear the point description formatter.
        $this->pointDescriptionFormatter = null;

        // Clear the selected.
        $this->selected = null;

        // Clear the shadow.
        $this->shadow = null;

        // Clear the show checkbox.
        $this->showCheckbox = null;

        // Clear the show in legend.
        $this->showInLegend = null;

        // Clear the skip keyboard navigation.
        $this->skipKeyboardNavigation = null;

        // Clear the sort index.
        $this->sortIndex = null;

        // Clear the states.
        if (null !== $this->states) {
            $this->states->clear();
        }

        // Clear the sticky tracking.
        $this->stickyTracking = null;

        // Clear the tooltip.
        if (null !== $this->tooltip) {
            $this->tooltip->clear();
        }

        // Clear the turbo threshold.
        $this->turboThreshold = null;

        // Clear the visible.
        $this->visible = null;

        // Clear the zone axis.
        $this->zoneAxis = null;

        // Clear the zones.
        $this->zones = null;
    }

    /**
     * Get the allow drill to node.
     *
     * @return boolean Returns the allow drill to node.
     */
    public function getAllowDrillToNode() {
        return $this->allowDrillToNode;
    }

    /**
     * Get the allow point select.
     *
     * @return boolean Returns the allow point select.
     */
    public function getAllowPointSelect() {
        return $this->allowPointSelect;
    }

    /**
     * Get the alternate starting direction.
     *
     * @return boolean Returns the alternate starting direction.
     */
    public function getAlternateStartingDirection() {
        return $this->alternateStartingDirection;
    }

    /**
     * Get the animation.
     *
     * @return boolean Returns the animation.
     */
    public function getAnimation() {
        return $this->animation;
    }

    /**
     * Get the animation limit.
     *
     * @return integer Returns the animation limit.
     */
    public function getAnimationLimit() {
        return $this->animationLimit;
    }

    /**
     * Get the border color.
     *
     * @return string Returns the border color.
     */
    public function getBorderColor() {
        return $this->borderColor;
    }

    /**
     * Get the border width.
     *
     * @return integer Returns the border width.
     */
    public function getBorderWidth() {
        return $this->borderWidth;
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
     * Get the color.
     *
     * @return string Returns the color.
     */
    public function getColor() {
        return $this->color;
    }

    /**
     * Get the color by point.
     *
     * @return boolean Returns the color by point.
     */
    public function getColorByPoint() {
        return $this->colorByPoint;
    }

    /**
     * Get the color index.
     *
     * @return integer Returns the color index.
     */
    public function getColorIndex() {
        return $this->colorIndex;
    }

    /**
     * Get the colors.
     *
     * @return array Returns the colors.
     */
    public function getColors() {
        return $this->colors;
    }

    /**
     * Get the crisp.
     *
     * @return boolean Returns the crisp.
     */
    public function getCrisp() {
        return $this->crisp;
    }

    /**
     * Get the crop threshold.
     *
     * @return integer Returns the crop threshold.
     */
    public function getCropThreshold() {
        return $this->cropThreshold;
    }

    /**
     * Get the cursor.
     *
     * @return string Returns the cursor.
     */
    public function getCursor() {
        return $this->cursor;
    }

    /**
     * Get the data labels.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsDataLabels Returns the data labels.
     */
    public function getDataLabels() {
        return $this->dataLabels;
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
     * Get the enable mouse tracking.
     *
     * @return boolean Returns the enable mouse tracking.
     */
    public function getEnableMouseTracking() {
        return $this->enableMouseTracking;
    }

    /**
     * Get the events.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsEvents Returns the events.
     */
    public function getEvents() {
        return $this->events;
    }

    /**
     * Get the expose element to a11y.
     *
     * @return boolean Returns the expose element to a11y.
     */
    public function getExposeElementToA11y() {
        return $this->exposeElementToA11y;
    }

    /**
     * Get the find nearest point by.
     *
     * @return string Returns the find nearest point by.
     */
    public function getFindNearestPointBy() {
        return $this->findNearestPointBy;
    }

    /**
     * Get the get extremes from all.
     *
     * @return boolean Returns the get extremes from all.
     */
    public function getGetExtremesFromAll() {
        return $this->getExtremesFromAll;
    }

    /**
     * Get the ignore hidden point.
     *
     * @return boolean Returns the ignore hidden point.
     */
    public function getIgnoreHiddenPoint() {
        return $this->ignoreHiddenPoint;
    }

    /**
     * Get the interact by leaf.
     *
     * @return boolean Returns the interact by leaf.
     */
    public function getInteractByLeaf() {
        return $this->interactByLeaf;
    }

    /**
     * Get the keys.
     *
     * @return array Returns the keys.
     */
    public function getKeys() {
        return $this->keys;
    }

    /**
     * Get the layout algorithm.
     *
     * @return string Returns the layout algorithm.
     */
    public function getLayoutAlgorithm() {
        return $this->layoutAlgorithm;
    }

    /**
     * Get the layout starting direction.
     *
     * @return string Returns the layout starting direction.
     */
    public function getLayoutStartingDirection() {
        return $this->layoutStartingDirection;
    }

    /**
     * Get the level is constant.
     *
     * @return boolean Returns the level is constant.
     */
    public function getLevelIsConstant() {
        return $this->levelIsConstant;
    }

    /**
     * Get the levels.
     *
     * @return array Returns the levels.
     */
    public function getLevels() {
        return $this->levels;
    }

    /**
     * Get the linked to.
     *
     * @return string Returns the linked to.
     */
    public function getLinkedTo() {
        return $this->linkedTo;
    }

    /**
     * Get the max point width.
     *
     * @return integer Returns the max point width.
     */
    public function getMaxPointWidth() {
        return $this->maxPointWidth;
    }

    /**
     * Get the opacity.
     *
     * @return integer Returns the opacity.
     */
    public function getOpacity() {
        return $this->opacity;
    }

    /**
     * Get the point.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsPoint Returns the point.
     */
    public function getPoint() {
        return $this->point;
    }

    /**
     * Get the point description formatter.
     *
     * @return string Returns the point description formatter.
     */
    public function getPointDescriptionFormatter() {
        return $this->pointDescriptionFormatter;
    }

    /**
     * Get the selected.
     *
     * @return boolean Returns the selected.
     */
    public function getSelected() {
        return $this->selected;
    }

    /**
     * Get the shadow.
     *
     * @return boolean|array Returns the shadow.
     */
    public function getShadow() {
        return $this->shadow;
    }

    /**
     * Get the show checkbox.
     *
     * @return boolean Returns the show checkbox.
     */
    public function getShowCheckbox() {
        return $this->showCheckbox;
    }

    /**
     * Get the show in legend.
     *
     * @return boolean Returns the show in legend.
     */
    public function getShowInLegend() {
        return $this->showInLegend;
    }

    /**
     * Get the skip keyboard navigation.
     *
     * @return boolean Returns the skip keyboard navigation.
     */
    public function getSkipKeyboardNavigation() {
        return $this->skipKeyboardNavigation;
    }

    /**
     * Get the sort index.
     *
     * @return integer Returns the sort index.
     */
    public function getSortIndex() {
        return $this->sortIndex;
    }

    /**
     * Get the states.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsStates Returns the states.
     */
    public function getStates() {
        return $this->states;
    }

    /**
     * Get the sticky tracking.
     *
     * @return boolean Returns the sticky tracking.
     */
    public function getStickyTracking() {
        return $this->stickyTracking;
    }

    /**
     * Get the tooltip.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsTooltip Returns the tooltip.
     */
    public function getTooltip() {
        return $this->tooltip;
    }

    /**
     * Get the turbo threshold.
     *
     * @return integer Returns the turbo threshold.
     */
    public function getTurboThreshold() {
        return $this->turboThreshold;
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
     * Get the zone axis.
     *
     * @return string Returns the zone axis.
     */
    public function getZoneAxis() {
        return $this->zoneAxis;
    }

    /**
     * Get the zones.
     *
     * @return array Returns the zones.
     */
    public function getZones() {
        return $this->zones;
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
     * Create a new data labels.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsDataLabels Returns the data labels.
     */
    public function newDataLabels() {
        $this->dataLabels = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsDataLabels();
        return $this->dataLabels;
    }

    /**
     * Create a new events.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsEvents Returns the events.
     */
    public function newEvents() {
        $this->events = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsEvents();
        return $this->events;
    }

    /**
     * Create a new point.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsPoint Returns the point.
     */
    public function newPoint() {
        $this->point = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsPoint();
        return $this->point;
    }

    /**
     * Create a new states.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsStates Returns the states.
     */
    public function newStates() {
        $this->states = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsStates();
        return $this->states;
    }

    /**
     * Create a new tooltip.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsTooltip Returns the tooltip.
     */
    public function newTooltip() {
        $this->tooltip = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsTooltip();
        return $this->tooltip;
    }

    /**
     * Set the allow drill to node.
     *
     * @param boolean $allowDrillToNode The allow drill to node.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setAllowDrillToNode($allowDrillToNode) {
        switch ($allowDrillToNode) {
            case "false":
            case "true":
            $this->allowDrillToNode = $allowDrillToNode;
            break;
        }
        return $this;
    }

    /**
     * Set the allow point select.
     *
     * @param boolean $allowPointSelect The allow point select.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setAllowPointSelect($allowPointSelect) {
        $this->allowPointSelect = $allowPointSelect;
        return $this;
    }

    /**
     * Set the alternate starting direction.
     *
     * @param boolean $alternateStartingDirection The alternate starting direction.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setAlternateStartingDirection($alternateStartingDirection) {
        $this->alternateStartingDirection = $alternateStartingDirection;
        return $this;
    }

    /**
     * Set the animation.
     *
     * @param boolean $animation The animation.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setAnimation($animation) {
        $this->animation = $animation;
        return $this;
    }

    /**
     * Set the animation limit.
     *
     * @param integer $animationLimit The animation limit.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setAnimationLimit($animationLimit) {
        $this->animationLimit = $animationLimit;
        return $this;
    }

    /**
     * Set the border color.
     *
     * @param string $borderColor The border color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setBorderColor($borderColor) {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * Set the border width.
     *
     * @param integer $borderWidth The border width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setBorderWidth($borderWidth) {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * Set the class name.
     *
     * @param string $className The class name.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setClassName($className) {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color.
     *
     * @param string $color The color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setColor($color) {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the color by point.
     *
     * @param boolean $colorByPoint The color by point.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setColorByPoint($colorByPoint) {
        $this->colorByPoint = $colorByPoint;
        return $this;
    }

    /**
     * Set the color index.
     *
     * @param integer $colorIndex The color index.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setColorIndex($colorIndex) {
        $this->colorIndex = $colorIndex;
        return $this;
    }

    /**
     * Set the colors.
     *
     * @param array $colors The colors.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setColors(array $colors = null) {
        $this->colors = $colors;
        return $this;
    }

    /**
     * Set the crisp.
     *
     * @param boolean $crisp The crisp.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setCrisp($crisp) {
        $this->crisp = $crisp;
        return $this;
    }

    /**
     * Set the crop threshold.
     *
     * @param integer $cropThreshold The crop threshold.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setCropThreshold($cropThreshold) {
        $this->cropThreshold = $cropThreshold;
        return $this;
    }

    /**
     * Set the cursor.
     *
     * @param string $cursor The cursor.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setCursor($cursor) {
        switch ($cursor) {
            case null:
            case "crosshair":
            case "default":
            case "help":
            case "none":
            case "pointer":
            $this->cursor = $cursor;
            break;
        }
        return $this;
    }

    /**
     * Set the data labels.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsDataLabels $dataLabels The data labels.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setDataLabels(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsDataLabels $dataLabels = null) {
        $this->dataLabels = $dataLabels;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string $description The description.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the enable mouse tracking.
     *
     * @param boolean $enableMouseTracking The enable mouse tracking.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setEnableMouseTracking($enableMouseTracking) {
        $this->enableMouseTracking = $enableMouseTracking;
        return $this;
    }

    /**
     * Set the events.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsEvents $events The events.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setEvents(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsEvents $events = null) {
        $this->events = $events;
        return $this;
    }

    /**
     * Set the expose element to a11y.
     *
     * @param boolean $exposeElementToA11y The expose element to a11y.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setExposeElementToA11y($exposeElementToA11y) {
        $this->exposeElementToA11y = $exposeElementToA11y;
        return $this;
    }

    /**
     * Set the find nearest point by.
     *
     * @param string $findNearestPointBy The find nearest point by.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setFindNearestPointBy($findNearestPointBy) {
        switch ($findNearestPointBy) {
            case "x":
            case "xy":
            $this->findNearestPointBy = $findNearestPointBy;
            break;
        }
        return $this;
    }

    /**
     * Set the get extremes from all.
     *
     * @param boolean $getExtremesFromAll The get extremes from all.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setGetExtremesFromAll($getExtremesFromAll) {
        $this->getExtremesFromAll = $getExtremesFromAll;
        return $this;
    }

    /**
     * Set the ignore hidden point.
     *
     * @param boolean $ignoreHiddenPoint The ignore hidden point.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setIgnoreHiddenPoint($ignoreHiddenPoint) {
        $this->ignoreHiddenPoint = $ignoreHiddenPoint;
        return $this;
    }

    /**
     * Set the interact by leaf.
     *
     * @param boolean $interactByLeaf The interact by leaf.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setInteractByLeaf($interactByLeaf) {
        switch ($interactByLeaf) {
            case false:
            case true:
            $this->interactByLeaf = $interactByLeaf;
            break;
        }
        return $this;
    }

    /**
     * Set the keys.
     *
     * @param array $keys The keys.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setKeys(array $keys = null) {
        $this->keys = $keys;
        return $this;
    }

    /**
     * Set the layout algorithm.
     *
     * @param string $layoutAlgorithm The layout algorithm.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setLayoutAlgorithm($layoutAlgorithm) {
        switch ($layoutAlgorithm) {
            case "sliceAndDice":
            case "squarified":
            case "strip":
            case "stripes":
            $this->layoutAlgorithm = $layoutAlgorithm;
            break;
        }
        return $this;
    }

    /**
     * Set the layout starting direction.
     *
     * @param string $layoutStartingDirection The layout starting direction.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setLayoutStartingDirection($layoutStartingDirection) {
        switch ($layoutStartingDirection) {
            case "horizontal":
            case "vertical":
            $this->layoutStartingDirection = $layoutStartingDirection;
            break;
        }
        return $this;
    }

    /**
     * Set the level is constant.
     *
     * @param boolean $levelIsConstant The level is constant.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setLevelIsConstant($levelIsConstant) {
        switch ($levelIsConstant) {
            case "false":
            case "true":
            $this->levelIsConstant = $levelIsConstant;
            break;
        }
        return $this;
    }

    /**
     * Set the levels.
     *
     * @param array $levels The levels.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setLevels(array $levels = null) {
        $this->levels = $levels;
        return $this;
    }

    /**
     * Set the linked to.
     *
     * @param string $linkedTo The linked to.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setLinkedTo($linkedTo) {
        $this->linkedTo = $linkedTo;
        return $this;
    }

    /**
     * Set the max point width.
     *
     * @param integer $maxPointWidth The max point width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setMaxPointWidth($maxPointWidth) {
        $this->maxPointWidth = $maxPointWidth;
        return $this;
    }

    /**
     * Set the opacity.
     *
     * @param integer $opacity The opacity.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setOpacity($opacity) {
        $this->opacity = $opacity;
        return $this;
    }

    /**
     * Set the point.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsPoint $point The point.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setPoint(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsPoint $point = null) {
        $this->point = $point;
        return $this;
    }

    /**
     * Set the point description formatter.
     *
     * @param string $pointDescriptionFormatter The point description formatter.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setPointDescriptionFormatter($pointDescriptionFormatter) {
        $this->pointDescriptionFormatter = $pointDescriptionFormatter;
        return $this;
    }

    /**
     * Set the selected.
     *
     * @param boolean $selected The selected.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setSelected($selected) {
        $this->selected = $selected;
        return $this;
    }

    /**
     * Set the shadow.
     *
     * @param boolean|array $shadow The shadow.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setShadow($shadow) {
        $this->shadow = $shadow;
        return $this;
    }

    /**
     * Set the show checkbox.
     *
     * @param boolean $showCheckbox The show checkbox.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setShowCheckbox($showCheckbox) {
        $this->showCheckbox = $showCheckbox;
        return $this;
    }

    /**
     * Set the show in legend.
     *
     * @param boolean $showInLegend The show in legend.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setShowInLegend($showInLegend) {
        $this->showInLegend = $showInLegend;
        return $this;
    }

    /**
     * Set the skip keyboard navigation.
     *
     * @param boolean $skipKeyboardNavigation The skip keyboard navigation.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setSkipKeyboardNavigation($skipKeyboardNavigation) {
        $this->skipKeyboardNavigation = $skipKeyboardNavigation;
        return $this;
    }

    /**
     * Set the sort index.
     *
     * @param integer $sortIndex The sort index.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setSortIndex($sortIndex) {
        $this->sortIndex = $sortIndex;
        return $this;
    }

    /**
     * Set the states.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsStates $states The states.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setStates(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsStates $states = null) {
        $this->states = $states;
        return $this;
    }

    /**
     * Set the sticky tracking.
     *
     * @param boolean $stickyTracking The sticky tracking.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setStickyTracking($stickyTracking) {
        $this->stickyTracking = $stickyTracking;
        return $this;
    }

    /**
     * Set the tooltip.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsTooltip $tooltip The tooltip.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setTooltip(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsTooltip $tooltip = null) {
        $this->tooltip = $tooltip;
        return $this;
    }

    /**
     * Set the turbo threshold.
     *
     * @param integer $turboThreshold The turbo threshold.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setTurboThreshold($turboThreshold) {
        $this->turboThreshold = $turboThreshold;
        return $this;
    }

    /**
     * Set the visible.
     *
     * @param boolean $visible The visible.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setVisible($visible) {
        $this->visible = $visible;
        return $this;
    }

    /**
     * Set the zone axis.
     *
     * @param string $zoneAxis The zone axis.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setZoneAxis($zoneAxis) {
        $this->zoneAxis = $zoneAxis;
        return $this;
    }

    /**
     * Set the zones.
     *
     * @param array $zones The zones.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap Returns the highcharts treemap.
     */
    public function setZones(array $zones = null) {
        $this->zones = $zones;
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

        // Set the allow drill to node.
        ArrayUtility::set($output, "allowDrillToNode", $this->allowDrillToNode, [null]);

        // Set the allow point select.
        ArrayUtility::set($output, "allowPointSelect", $this->allowPointSelect, [null]);

        // Set the alternate starting direction.
        ArrayUtility::set($output, "alternateStartingDirection", $this->alternateStartingDirection, [null]);

        // Set the animation.
        ArrayUtility::set($output, "animation", $this->animation, [null]);

        // Set the animation limit.
        ArrayUtility::set($output, "animationLimit", $this->animationLimit, [null]);

        // Set the border color.
        ArrayUtility::set($output, "borderColor", $this->borderColor, [null]);

        // Set the border width.
        ArrayUtility::set($output, "borderWidth", $this->borderWidth, [null]);

        // Set the class name.
        ArrayUtility::set($output, "className", $this->className, [null]);

        // Set the color.
        ArrayUtility::set($output, "color", $this->color, [null]);

        // Set the color by point.
        ArrayUtility::set($output, "colorByPoint", $this->colorByPoint, [null]);

        // Set the color index.
        ArrayUtility::set($output, "colorIndex", $this->colorIndex, [null]);

        // Set the colors.
        ArrayUtility::set($output, "colors", $this->colors, [null]);

        // Set the crisp.
        ArrayUtility::set($output, "crisp", $this->crisp, [null]);

        // Set the crop threshold.
        ArrayUtility::set($output, "cropThreshold", $this->cropThreshold, [null]);

        // Set the cursor.
        ArrayUtility::set($output, "cursor", $this->cursor, [null]);

        // Set the data labels.
        if (null !== $this->dataLabels) {
            ArrayUtility::set($output, "dataLabels", $this->dataLabels->toArray(), []);
        }

        // Set the description.
        ArrayUtility::set($output, "description", $this->description, [null]);

        // Set the enable mouse tracking.
        ArrayUtility::set($output, "enableMouseTracking", $this->enableMouseTracking, [null]);

        // Set the events.
        if (null !== $this->events) {
            ArrayUtility::set($output, "events", $this->events->toArray(), []);
        }

        // Set the expose element to a11y.
        ArrayUtility::set($output, "exposeElementToA11y", $this->exposeElementToA11y, [null]);

        // Set the find nearest point by.
        ArrayUtility::set($output, "findNearestPointBy", $this->findNearestPointBy, [null]);

        // Set the get extremes from all.
        ArrayUtility::set($output, "getExtremesFromAll", $this->getExtremesFromAll, [null]);

        // Set the ignore hidden point.
        ArrayUtility::set($output, "ignoreHiddenPoint", $this->ignoreHiddenPoint, [null]);

        // Set the interact by leaf.
        ArrayUtility::set($output, "interactByLeaf", $this->interactByLeaf, [null]);

        // Set the keys.
        ArrayUtility::set($output, "keys", $this->keys, [null]);

        // Set the layout algorithm.
        ArrayUtility::set($output, "layoutAlgorithm", $this->layoutAlgorithm, [null]);

        // Set the layout starting direction.
        ArrayUtility::set($output, "layoutStartingDirection", $this->layoutStartingDirection, [null]);

        // Set the level is constant.
        ArrayUtility::set($output, "levelIsConstant", $this->levelIsConstant, [null]);

        // Set the levels.
        ArrayUtility::set($output, "levels", $this->levels, [null]);

        // Set the linked to.
        ArrayUtility::set($output, "linkedTo", $this->linkedTo, [null]);

        // Set the max point width.
        ArrayUtility::set($output, "maxPointWidth", $this->maxPointWidth, [null]);

        // Set the opacity.
        ArrayUtility::set($output, "opacity", $this->opacity, [null]);

        // Set the point.
        if (null !== $this->point) {
            ArrayUtility::set($output, "point", $this->point->toArray(), []);
        }

        // Set the point description formatter.
        ArrayUtility::set($output, "pointDescriptionFormatter", $this->pointDescriptionFormatter, [null]);

        // Set the selected.
        ArrayUtility::set($output, "selected", $this->selected, [null]);

        // Set the shadow.
        ArrayUtility::set($output, "shadow", $this->shadow, [null]);

        // Set the show checkbox.
        ArrayUtility::set($output, "showCheckbox", $this->showCheckbox, [null]);

        // Set the show in legend.
        ArrayUtility::set($output, "showInLegend", $this->showInLegend, [null]);

        // Set the skip keyboard navigation.
        ArrayUtility::set($output, "skipKeyboardNavigation", $this->skipKeyboardNavigation, [null]);

        // Set the sort index.
        ArrayUtility::set($output, "sortIndex", $this->sortIndex, [null]);

        // Set the states.
        if (null !== $this->states) {
            ArrayUtility::set($output, "states", $this->states->toArray(), []);
        }

        // Set the sticky tracking.
        ArrayUtility::set($output, "stickyTracking", $this->stickyTracking, [null]);

        // Set the tooltip.
        if (null !== $this->tooltip) {
            ArrayUtility::set($output, "tooltip", $this->tooltip->toArray(), []);
        }

        // Set the turbo threshold.
        ArrayUtility::set($output, "turboThreshold", $this->turboThreshold, [null]);

        // Set the visible.
        ArrayUtility::set($output, "visible", $this->visible, [null]);

        // Set the zone axis.
        ArrayUtility::set($output, "zoneAxis", $this->zoneAxis, [null]);

        // Set the zones.
        ArrayUtility::set($output, "zones", $this->zones, [null]);

        // Return the output.
        return $output;
    }

}
