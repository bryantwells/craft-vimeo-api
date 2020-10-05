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
            $response = $this->client->request('/videos/'.$videoId, array('fields' => ['files', 'metadata.connections.pictures']), 'GET');
            
            $files = array_map(function($a) {
                return [
                    $a['public_name'] => $a
                ];
            }, $response['body']['files']);
            $files = call_user_func_array("array_merge", $files);
            $pictures = $response['body']['pictures'];
            return array('files' => $files, 'pictures' => $pictures);
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
