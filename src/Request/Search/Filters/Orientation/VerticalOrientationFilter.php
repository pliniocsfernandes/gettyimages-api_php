<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 9/17/14
 * Time: 11:21 AM
 */

namespace GettyImages\Api\Request\Search\Filters\Orientation;

class VerticalOrientationFilter extends OrientationFilter {

    function getValue()
    {
        return "vertical";
    }
}