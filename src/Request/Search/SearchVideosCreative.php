<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 9/17/14
 * Time: 10:42 AM
 */

namespace GettyImages\Connect\Request\Search {

    class SearchVideosCreative extends SearchVideos {

        /**
         * @ignore
         */
        protected $route = "search/videos/creative/";

        /**
         * Gets the route configuration of the current search
         *
         * @return string The relative route for this request type
         */
        public function getRoute() {
            return $this->route;
        }
    }
}