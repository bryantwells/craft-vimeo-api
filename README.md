# Vimeo API plugin for Craft CMS 3.x

Request video URL from Vimeo Pro using the PHP API

![Screenshot](resources/img/plugin-logo.png)

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require bryantwells/vimeo-api

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Vimeo API.

## Vimeo API Overview

Edit config in `config/vimeo-api.php`:
```
return [

    'CLIENT_ID' => getenv('VIMEO_CLIENT_ID'),
    'CLIENT_SECRET' => getenv('VIMEO_CLIENT_SECRET'),
    'ACCESS_TOKEN' => getenv('VIMEO_ACCESS_TOKEN')

];
```

## Configuring Vimeo API

-Insert text here-

## Using Vimeo API

-Insert text here-

## Vimeo API Roadmap

Some things to do, and ideas for potential features:

* Release it

Brought to you by [Bryant Wells](https://github.com/bryantwells)
