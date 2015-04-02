<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | DEFAULT CONNECTION
    |--------------------------------------------------------------------------
    |
    | Your Twilio default connections which will be used.
    |
    */

    'default' => 'twilio',

    'connections' => array(

        'twilio' => array(

            /*
            |--------------------------------------------------------------------------
            | SID
            |--------------------------------------------------------------------------
            |
            | Your Twilio Account SID #
            |
            */

            'sid'    => env('TWILIO_SID', 'ACb70cbe08263ae21fc41b260e29ad8ad1'),

            /*
            |--------------------------------------------------------------------------
            | Access Token
            |--------------------------------------------------------------------------
            |
            | Access token that can be found in your Twilio dashboard
            |
            */
            'token'  => env('TWILIO_TOKEN', '76a13232c1eb09a19624bc0dfd065b77'),

            /*
            |--------------------------------------------------------------------------
            | From Number
            |--------------------------------------------------------------------------
            |
            | The Phone number registered with Twilio that your SMS & Calls will come from
            |
            */
            'from'   => '+16785353181',
        )
    )
);