<?php
define("THEME_DIR", get_template_directory_uri());
/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');

//include_once('php/div0/utils/logging/Logging.php');
//include_once('php/div0/utils/logging/Logger.php');
include_once ('php/div0/admin/media/AddDateToMediaList.php');

include_once ('php/div0/collections/Map.php');
include_once ('php/div0/collections/iterators/MapIterator.php');
include_once ('php/div0/collections/json/MapJsonEncoderException.php');
include_once ('php/div0/collections/json/MapJsonDecoder.php');
include_once ('php/div0/collections/json/MapJsonEncoder.php');
include_once ('php/div0/collections/exceptions/KeyExistsException.php');
include_once ('php/div0/collections/exceptions/CollectionException.php');

include_once('php/div0/gallery/Image.php');
include_once('php/div0/gallery/view/GalleryView.php');

include_once('php/div0/gallery/GetIDsByDate.php');
include_once('php/div0/gallery/GetImages.php');

include_once('php/div0/calendar/Calendar.php');

include_once('php/div0/tags/GetTags.php');
include_once('php/div0/tags/TagsView.php');

require_once dirname(__FILE__).'/php/div0/utils/logging/log4php/Logger.php';
//Logger::configure(dirname(__FILE__).'/php/div0/utils/logging/log4php/resources/appender_file.properties');

//$logger = Logger::getRootLogger();
//$logger->debug("\nLog started");

new AddDateToMediaList();

// ENQUEUE STYLES
function enqueue_styles() {
    /** REGISTER css/screen.css **/
    wp_register_style( 'screen-style', THEME_DIR . '/css/main.css', array(), '1', 'all' );
    wp_enqueue_style( 'screen-style' );

    wp_register_style( 'screen-style', THEME_DIR . '/css/main.css', array(), '1', 'all' );
    wp_enqueue_style( 'screen-style' );

    wp_register_style( 'jqueryUI', 'http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css');
    wp_enqueue_style( 'jqueryUI' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_styles' );


// ENQUEUE SCRIPTS
function enqueue_scripts() {

    /** REGISTER HTML5 Shim **/
    wp_register_script( 'html5-shim', THEME_DIR . '/js/libs/html5shiv/html5shiv.min.js', array( 'jquery' ), '1', false );
    wp_enqueue_script( 'html5-shim' );

    wp_register_script( 'map', THEME_DIR . '/js/libs/collections/Map.js');
    wp_register_script( 'list', THEME_DIR . '/js/libs/collections/List.js');
    wp_register_script( 'listIterator', THEME_DIR . '/js/libs/collections/iterators/ListIterator.js');
    
    wp_register_script( 'eventBus', THEME_DIR . '/js/libs/events/EventBus.js');
    
    wp_register_script( 'initor', THEME_DIR . '/js/div0/Initor.js');
    wp_register_script( 'fotogalleryView', THEME_DIR . '/js/div0/fotogallery/FotogalleryView.js');
    wp_register_script( 'calendar', THEME_DIR . '/js/div0/calendar/Calendar.js');

    /** REGISTER HTML5 OtherScript.js **/
    //wp_register_script( 'custom-script', THEME_DIR . '/js_path/customscript.js', array( 'jquery' ), '1', false );
    //wp_enqueue_script( 'custom-script' );

    wp_enqueue_script( 'jquery-ui-datepicker' );

    wp_enqueue_script( 'map' );
    wp_enqueue_script( 'list' );
    wp_enqueue_script( 'listIterator' );

    wp_enqueue_script( 'eventBus' );
    
    wp_enqueue_script( 'initor' );
    wp_enqueue_script( 'fotogalleryView' );
    wp_enqueue_script( 'calendar' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

// adding ajaxurl for frontend
add_action('wp_head', 'myplugin_ajaxurl');
function myplugin_ajaxurl() {
    echo '<script type="text/javascript">
           var ajaxurl = "' . admin_url('admin-ajax.php') . '";
         </script>';
}

//ajax calls this function
function get_ids_by_date_callback(){
    global $wpdb;
    $selectedDate = $_POST['selectedDate'];
    if(isset($selectedDate)){
        $ids = $wpdb->get_results('SELECT post_id  FROM wp_postmeta WHERE (CONVERT(`meta_id` USING utf8) LIKE \'%'.$selectedDate.'%\' OR CONVERT(`post_id` USING utf8) LIKE \'%'.$selectedDate.'%\' OR CONVERT(`meta_key` USING utf8) LIKE \'%'.$selectedDate.'%\' OR CONVERT(`meta_value` USING utf8) LIKE \'%'.$selectedDate.'%\')', ARRAY_A);
        echo json_encode($ids);
        //echo $ids;
    }
    else{
        echo 'get_ids by date error';
    }
    die(); // this is required to return a proper result
}

//ajax calls this function
function get_images_by_ids_callback(){
    $ids = stripslashes($_POST['data']);

    $idsArray = array();
    $idsCollection = json_decode($ids);

    global $wpdb;
    $query = 'SELECT guid FROM wp_posts WHERE `ID` in (';

    $counter = 0;
    foreach($idsCollection as &$idData){
        array_push($idsArray, $idData->post_id);
        $query .= $idData->post_id;

        $counter ++;
        if($counter != sizeof($idsCollection)){
            $query .= ',';
        }
    }
    $query .= ')';

    $images = $wpdb->get_results($query, ARRAY_A);
    echo stripslashes(json_encode($images));
}

add_action('wp_ajax_get_ids_by_date', 'get_ids_by_date_callback');
add_action('wp_ajax_get_images_by_ids', 'get_images_by_ids_callback');