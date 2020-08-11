<?php
/**
 * Vimeo API plugin for Craft CMS 3.x
 *
 * Request video URL from Vimeo Pro using the PHP API
 *
 * @link      https://github.com/bryantwells
 * @copyright Copyright (c) 2020 Bryant Wells
 */

namespace bryantwells\vimeoapi\models;

use bryantwells\vimeoapi\VimeoApi;

use Craft;
use craft\base\Model;

/**
 * @author    Bryant Wells
 * @package   VimeoApi
 * @since     1.0.0
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $CLIENT_ID = '';

    /**
     * @var string
     */
    public $CLIENT_SECRET = '';

    /**
     * @var string
     */
    public $ACCESS_TOKEN = '';

}
