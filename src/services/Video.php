<?php
/**
 * Vimeo API plugin for Craft CMS 3.x
 *
 * Request video URL from Vimeo Pro using the PHP API
 *
 * @link      https://github.com/bryantwells
 * @copyright Copyright (c) 2020 Bryant Wells
 */

namespace bryantwells\vimeoapi\services;

use bryantwells\vimeoapi\VimeoApi;
use Vimeo\Vimeo;

use Craft;
use craft\base\Component;

/**
 * @author    Bryant Wells
 * @package   VimeoApi
 * @since     1.0.0
 */
class Video extends Component {

    var $client;

    // Public Methods
    // =========================================================================

    /*
     * @return mixed
     */
    public function getVideoFiles($videoId = null)
    {
        if ($videoId) {
            $response = $this->client->request('/videos/'.$videoId, array('fields' => 'files'), 'GET');
            return $response['body']['files'];
        } else {
            return 0;
        }
        
    }

    /*
     * @return mixed
     */
    public function createClient()
    {
        $this->client = new Vimeo(
            VimeoApi::$plugin->getSettings()->CLIENT_ID, 
            VimeoApi::$plugin->getSettings()->CLIENT_SECRET, 
            VimeoApi::$plugin->getSettings()->ACCESS_TOKEN);
        return;
    }
}
