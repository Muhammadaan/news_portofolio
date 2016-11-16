<?php

require_once( APPPATH . 'libraries/facebook-php-sdk-v4-5.0.0/src/Facebook/autoload.php' );

function getloginfacebook()
{
        $fb = new Facebook\Facebook([
            'app_id' => '674814869352485',
            'app_secret' => '61a5db463f4ebd10d491f4235875f558',
            'default_graph_version' => 'v2.5',
        ]);

        $helper = $fb->getRedirectLoginHelper();
}

function getfandi()
{
    echo "fandi";
}