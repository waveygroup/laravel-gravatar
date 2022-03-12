<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Gravatar Base Url
    |--------------------------------------------------------------------------
    |
    | Here you can modify the base URL for Gravatar. Usually, this will stay
    | the same and not need changed, however in the event Gravatar updates
    | their base url you can do this here.
    |
    */
    'base_url' => env('GRAVATAR_BASE_URL', 'https://www.gravatar.com/avatar/'),

    /*
    |--------------------------------------------------------------------------
    | Gravatar Default Image
    |--------------------------------------------------------------------------
    |
    | Gravatar gives you the ability to serve a default image in the event that
    | the user simply doesn't have one. Values can be: 404, mp, identicon,
    | monsterid, wavatar, retro, robohash, blank
    |
    */
    'default_image' => env('GRAVATAR_DEFAULT_IMAGE', 'mp'),

    /*
    |--------------------------------------------------------------------------
    | Gravatar Default Size
    |--------------------------------------------------------------------------
    |
    | By default, we will attempt to load a default size of 100x100 pixels.
    | If you require a larger or smaller image, simply modify this value
    | and we will serve the correct size.
    |
    */
    'default_size' => env('GRAVATAR_DEFAULT_SIZE', '200'),

    /*
    |--------------------------------------------------------------------------
    | Gravatar Default Rating
    |--------------------------------------------------------------------------
    |
    | By default, we will serve images that are PG rated or below. You can
    | modify this value using the following: g, pg, r, x
    | https://en.gravatar.com/site/implement/images/
    |
    */
    'default_rating' => env('GRAVATAR_DEFAULT_RATING', 'pg'),

    /*
    |--------------------------------------------------------------------------
    | Gravatar Default Format
    |--------------------------------------------------------------------------
    |
    | Gravatar gives you the ability to modify the format of the picture,
    | by default, we will serve jpg files, you can use the following:
    | jpg, jpeg, gif, png
    |
    */
    'default_format' => env('GRAVATAR_DEFAULT_FORMAT', 'jpg'),
];
