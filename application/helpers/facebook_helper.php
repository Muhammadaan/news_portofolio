<?php

	require_once( APPPATH . 'libraries/facebook-php-sdk-v4-5.0.0/src/Facebook/autoload.php' );
	//session_start();

	function getFacebookLoginUrl()
	{
      $fb = new Facebook\Facebook([
             'app_id' => '674814869352485',
            'app_secret' => '61a5db463f4ebd10d491f4235875f558',
            'default_graph_version' => 'v2.5',
      ]);

      $helper       = $fb->getRedirectLoginHelper();
      $permissions  = ['email', 'public_profile']; // optional
      $callback     = base_url('authuser/login_fb').'/';

      return $helper->getLoginUrl($callback, $permissions);
	}

	function getAccessFacebookData()
	{
		  $fb = new Facebook\Facebook([
             'app_id' => '674814869352485',
            'app_secret' => '61a5db463f4ebd10d491f4235875f558',
            'default_graph_version' => 'v2.5',
      ]);

      $helper = $fb->getRedirectLoginHelper();
      try {
        $accessToken  = $helper->getAccessToken();
        $response     = $fb->get('/me?fields=id,email,first_name,last_name,name,gender,picture', $accessToken);
        $user         = $response->getGraphUser();

      } catch(Facebook\Exceptions\FacebookResponseException $e) {
        $accessToken = 'Graph returned an error: ' . $e->getMessage();
        exit;
      } catch(Facebook\Exceptions\FacebookSDKException $e) {
        $accessToken = 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
      }
      return $user;
	}
