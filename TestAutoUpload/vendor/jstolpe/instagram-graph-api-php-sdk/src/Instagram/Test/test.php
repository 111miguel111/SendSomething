
<?php
use Instagram\User\Media;
use Instagram\Page\Page;


use Instagram\FacebookLogin\FacebookLogin;

$config = array( // instantiation config params
    'app_id' => '26204642442459976', // facebook app id
    'app_secret' => '41139801cfb693987221502e4e469242', // facebook app secret
);

// uri facebook will send the user to after they login
$redirectUri = 'https://path/to/fb/login/redirect.php';

$permissions = array( // permissions to request from the user
    'instagram_basic',
    'instagram_content_publish', 
    'instagram_manage_insights', 
    'instagram_manage_comments',
    'pages_show_list', 
    'ads_management', 
    'business_management', 
    'pages_read_engagement'
);

// instantiate new facebook login
$facebookLogin = new FacebookLogin( $config );

// display login dialog link
echo '<a href="' . $facebookLogin->getLoginDialogUrl( $redirectUri, $permissions ) . '">' .
    'Log in with Facebook' .
'</a>';

/* 
// instantiation config params
$config = array( 
    'page_id' => $pageId,
    'access_token' => $accessToken,
);

// instantiate page        
$page = new Page( $config );

// get info
$pageInfo = $page->getSelf();




//Imagen generar el container
// instantiation config params
$config = array( 
    'user_id' => $user_id,
    'access_token' => $accessToken,
);

// instantiate user media
$media = new Media( $config );

$imageContainerParams = array( // container parameters for the image post
    'caption' => 'Test post', // caption for the post
    'image_url' => 'https://111miguel111.github.io/img/testimonial-4.jpg', // url to the image must be on a public server
);

// create image container
$imageContainer = $media->create( $imageContainerParams );

// get id of the image container
$imageContainerId = $imageContainer['id'];

 */

?>