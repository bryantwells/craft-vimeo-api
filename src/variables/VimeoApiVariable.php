<?php
/**
 * Vimeo API plugin for Craft CMS 3.x
 *
 * Request video URL from Vimeo Pro using the PHP API
 *
 * @link      https://github.com/bryantwells
 * @copyright Copyright (c) 2020 Bryant Wells
 */

namespace bryantwells\vimeoapi\variables;

use bryantwells\vimeoapi\VimeoApi;

use Craft;

/**
 * @author    Bryant Wells
 * @package   VimeoApi
 * @since     1.0.0
 */
class VimeoApiVariable
{
    // Public Methods
    // =========================================================================

    /**
     * @param null $optional
     * @return string
     */
    public function getVideoFiles($videoId = null)
    {
        return VimeoApi::$plugin->video->getVideoFiles($videoId);
    }
}
