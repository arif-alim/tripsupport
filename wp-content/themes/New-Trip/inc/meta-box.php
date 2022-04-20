<?php add_action('cmb2_admin_init', 'cmb2_sample_metaboxes');
/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes()
{

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box(array(
        'id' => 'test_metabox',
        'title' => __('Metabox', 'cmb2'),
        'object_types' => array('vacation', 'flights', 'hotel', 'flight_hotel'), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
// 'cmb_styles' => false, // false to disable the CMB stylesheet
// 'closed'     => true, // Keep the metabox closed by default
    ));

    $cmb_post = new_cmb2_box(array(
        'id' => 'post_metabox',
        'title' => __('Metabox Cover Image ', 'cmb2'),
        'object_types' => 'post', // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
// 'cmb_styles' => false, // false to disable the CMB stylesheet
// 'closed'     => true, // Keep the metabox closed by default
    ));

    $cmb_hotel = new_cmb2_box(array(
        'id' => 'hotel_metabox',
        'title' => __('Metabox Hotel Api ', 'cmb2'),
        'object_types' => 'hotel_api', // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
// 'cmb_styles' => false, // false to disable the CMB stylesheet
// 'closed'     => true, // Keep the metabox closed by default
    ));

// Regular text field

    $cmb_post->add_field( array(
        'name' => 'Cover Image',
        'id' => 'cover_image',
        'type' => 'file',
        'query_args' => array('type' => 'image'),
    ));

// Add other metaboxes as needed
    $cmb->add_field(array(
        'name' => 'Map',
        'id' => 'Map_url',
        'type' => 'text_url',
        'desc'    => 'Create map links :  <a href="https://media.star-telegram.com/static/labs/GoogleMapLink2/index.html">https://media.star-telegram.com/static/labs/GoogleMapLink2/index.html</a>',
    ));
    $cmb->add_field(array(
        'name' => 'Currency',
        'id' => 'currency',
        'type' => 'text',
    ));
    $cmb->add_field(array(
        'name' => 'ShortCode Weather',
        'id' => 'weather',
        'type' => 'text',
        'desc'    => 'Sample ShortCode :[wpc-weather id="7578"/] <br> Create ShortCode Weather :  <a href="https://tripsupport.ca/wp-admin/edit.php?post_type=wpc-weather">https://tripsupport.ca/wp-admin/edit.php?post_type=wpc-weather</a>',

    ));
    $cmb->add_field(array(
        'name' => 'Image City',
        'desc' => '',
        'id' => 'slider_image',
        'type' => 'file_list',
        // 'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
        'query_args' => array('type' => 'image'), // Only images attachment
        // Optional, override default text strings
        'text' => array(
            'add_upload_files_text' => 'Upload Images', // default: "Add or Upload Files"
            'remove_image_text' => 'Replacement', // default: "Remove Image"
            'file_text' => 'Replacement', // default: "File:"
            'file_download_text' => 'Replacement', // default: "Download"
            'remove_text' => 'Replacement', // default: "Remove"
        ),
    ));
    $cmb->add_field(array(
        'name' => 'Do you use Elementor',
        'id' => 'elementor_radio',
        'type' => 'radio_inline',
        'options' => array(
            'true' => __('Yes', 'cmb2'),
            'false' => __('No', 'cmb2'),

        ),
        'default' => 'false',
    ));

    $banner = $cmb->add_field(array(
        'id' => 'banner_page',
        'type' => 'group',
        'repeatable' => false, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => 'Banner',
            'add_button' => 'Add Item',
            'remove_button' => 'Delete ',
            'closed' => true,  // Repeater fields closed by default - neat & compact.
            'sortable' => true,  // Allow changing the order of repeated groups.
        ),
    ));
    $cmb->add_group_field($banner, array(
        'name' => 'Banner Image',
        'id' => 'banner_image',
        'type' => 'file',
        'query_args' => array('type' => 'image'),
    ));
    $cmb->add_group_field($banner, array(
        'name' => 'SubTitle',
        'id' => 'banner_subtitle',
        'type' => 'text',

    ));
    $cmb->add_group_field($banner, array(
        'name' => 'Second Title',
        'id' => 'banner_second_title',
        'type' => 'text',

    ));
    $cmb->add_group_field($banner, array(
        'name' => 'Description',
        'id' => 'banner_Description',
        'type' => 'textarea',

    ));


    $Travel_Guide = $cmb->add_field(array(
        'id' => 'Travel_Guide',
        'type' => 'group',
        'repeatable' => false, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => 'Travel Guide',
            'add_button' => 'Add Item',
            'remove_button' => 'Delete ',
            'closed' => true,  // Repeater fields closed by default - neat & compact.
            'sortable' => true,  // Allow changing the order of repeated groups.
        ),
    ));
    $cmb->add_group_field($Travel_Guide, array(
        'name' => 'Title',
        'id' => 'Travel_Guide_Title',
        'type' => 'text',

    ));
    $cmb->add_group_field($Travel_Guide, array(
        'name' => 'Description',
        'id' => 'Travel_Guide_Description',
        'type' => 'textarea',

    ));
    $cmb->add_group_field($Travel_Guide, array(
        'name' => 'Title What To Do',
        'id' => 'Travel_Guide_Title_what_to_do',
        'type' => 'text',

    ));
    $cmb->add_group_field($Travel_Guide, array(
        'name' => 'Title What To See',
        'id' => 'Travel_Guide_Title_what_to_see',
        'type' => 'text',

    ));
    $cmb->add_group_field($Travel_Guide, array(
        'name' => 'Title What To Stay',
        'id' => 'Travel_Guide_Title_what_to_stay',
        'type' => 'text',

    ));



    $city_info = $cmb->add_field(array(
        'id' => 'city_info_todo',
        'type' => 'group',
        'repeatable' => true, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => 'What To Do In',
            'add_button' => 'Add Item',
            'remove_button' => 'Delete ',
            'closed' => true,  // Repeater fields closed by default - neat & compact.
            'sortable' => true,  // Allow changing the order of repeated groups.
        ),
    ));
    $cmb->add_group_field($city_info, array(
        'name' => 'What To Do Title',
        'id' => 'WhatToDoTitle',
        'type' => 'text',

    ));
    $cmb->add_group_field($city_info, array(
        'name' => 'What To Do Description',
        'id' => 'WhatToDoDescription',
        'type' => 'textarea',

    ));

    $city_info_see = $cmb->add_field(array(
        'id' => 'city_info_to_see',
        'type' => 'group',
        'repeatable' => true, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => 'What to see In',
            'add_button' => 'Add Item',
            'remove_button' => 'Delete ',
            'closed' => true,  // Repeater fields closed by default - neat & compact.
            'sortable' => true,  // Allow changing the order of repeated groups.
        ),
    ));
    $cmb->add_group_field($city_info_see, array(
        'name' => 'What to see Title',
        'id' => 'WhatToSeeTitle',
        'type' => 'text',

    ));
    $cmb->add_group_field($city_info_see, array(
        'name' => 'What to see Description',
        'desc' => 'Class for Title => box-travel-guide-subtitle  <br> Class for Description => box-travel-guide-description ',
        'id' => 'WhatToSeeDescription',
        'type' => 'textarea',

    ));

    $city_info_stay = $cmb->add_field(array(
        'id' => 'city_info_to_stay',
        'type' => 'group',
        'repeatable' => true, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => 'Where To Stay In',
            'add_button' => 'Add Item',
            'remove_button' => 'Delete ',
            'closed' => true,  // Repeater fields closed by default - neat & compact.
            'sortable' => true,  // Allow changing the order of repeated groups.
        ),
    ));
    $cmb->add_group_field($city_info_stay, array(
        'name' => 'Where To Stay Title',
        'id' => 'WhereToStayTitle',
        'type' => 'text',

    ));
    $cmb->add_group_field($city_info_stay, array(
        'name' => 'Where To Stay Description',
        'id' => 'WhereToStayDescription',
        'type' => 'textarea',

    ));


    $Faq = $cmb->add_field(array(
        'id' => 'faq_asked',
        'type' => 'group',
        'repeatable' => false, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => 'Asked Questions Title',
            'add_button' => 'Add Item',
            'remove_button' => 'Delete ',
            'closed' => true,  // Repeater fields closed by default - neat & compact.
            'sortable' => true,  // Allow changing the order of repeated groups.
        ),
    ));
    $cmb->add_group_field($Faq, array(
        'name' => 'Title',
        'id' => 'faq_asked_Title',
        'type' => 'text',

    ));
    $cmb->add_group_field($Faq, array(
        'name' => 'Description',
        'id' => 'faq_asked_Description',
        'type' => 'textarea',

    ));
    $questions = $cmb->add_field(array(
        'id' => 'questions',
        'type' => 'group',
        'repeatable' => true, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => 'Frequently asked questions',
            'add_button' => 'Add Item',
            'remove_button' => 'Delete ',
            'closed' => true,  // Repeater fields closed by default - neat & compact.
            'sortable' => true,  // Allow changing the order of repeated groups.
        ),
    ));
    $cmb->add_group_field($questions, array(
        'name' => 'Question',
        'id' => 'question',
        'type' => 'text',

    ));
    $cmb->add_group_field($questions, array(
        'name' => 'Answer',
        'id' => 'answer',
        'type' => 'textarea',

    ));

    $More_destinations_to_explore = $cmb->add_field(array(
        'id' => 'More_destinations_to_explore',
        'type' => 'group',
        'repeatable' => false, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => 'More destinations to explore',
            'add_button' => 'Add Item',
            'remove_button' => 'Delete ',
            'closed' => true,  // Repeater fields closed by default - neat & compact.
            'sortable' => true,  // Allow changing the order of repeated groups.
        ),
    ));
    $cmb->add_group_field($More_destinations_to_explore, array(
        'name' => 'Title',
        'id' => 'More_destinations_Title',
        'type' => 'text',

    ));
    $cmb->add_group_field($More_destinations_to_explore, array(
        'name' => 'Description',
        'id' => 'More_destinations_Description',
        'type' => 'textarea',

    ));
    $cmb->add_group_field($More_destinations_to_explore, array(
        'name' => 'Tab Name Destinations',
        'id' => 'Tab_Destinations_Name',
        'type' => 'text',

    ));
    $cmb->add_group_field($More_destinations_to_explore, array(
        'name' => 'Tab Name Destinations In the World',
        'id' => 'Tab_Destinations_World_Name',
        'type' => 'text',

    ));
    $cmb->add_group_field($More_destinations_to_explore, array(
        'name' => ' Tab Citie Near Name',
        'id' => 'Tab_to_Cities_Near_Name',
        'type' => 'text',

    ));

    $Top_Flight_Destinations = $cmb->add_field(array(
        'id' => 'Top_Flight_Destinations',
        'type' => 'group',
        'repeatable' => true, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => 'Top Destinations',
            'add_button' => 'Add Item',
            'remove_button' => 'Delete ',
            'closed' => true,  // Repeater fields closed by default - neat & compact.
            'sortable' => true,  // Allow changing the order of repeated groups.
        ),
    ));
    $cmb->add_group_field($Top_Flight_Destinations, array(
        'name' => 'Destinations Title',
        'id' => 'Flight_Destinations_Title',
        'type' => 'text',

    ));
    $cmb->add_group_field($Top_Flight_Destinations, array(
        'name' => 'Destinations Url',
        'id' => 'Flight_Destinations_Url',
        'type' => 'text_url',

    ));

    $Top_Flight_Destinations_In_the_World = $cmb->add_field(array(
        'id' => 'Top_Flight_Destinations_In_the_World',
        'type' => 'group',
        'repeatable' => true, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => ' Top Destinations In the World',
            'add_button' => 'Add Item',
            'remove_button' => 'Delete ',
            'closed' => true,  // Repeater fields closed by default - neat & compact.
            'sortable' => true,  // Allow changing the order of repeated groups.
        ),
    ));
    $cmb->add_group_field($Top_Flight_Destinations_In_the_World, array(
        'name' => ' Destinations In the World Title',
        'id' => 'Flight_Destinations_World_Title',
        'type' => 'text',

    ));
    $cmb->add_group_field($Top_Flight_Destinations_In_the_World, array(
        'name' => 'Destinations In the World Url',
        'id' => 'Flight_Destinations_World_Url',
        'type' => 'text_url',

    ));

    $Flights_to_Cities_Near = $cmb->add_field(array(
        'id' => 'Flights_to_Cities_Near',
        'type' => 'group',
        'repeatable' => true, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => 'Cities Near',
            'add_button' => 'Add Item',
            'remove_button' => 'Delete ',
            'closed' => true,  // Repeater fields closed by default - neat & compact.
            'sortable' => true,  // Allow changing the order of repeated groups.
        ),
    ));
    $cmb->add_group_field($Flights_to_Cities_Near, array(
        'name' => ' Citie Near Title',
        'id' => 'Flights_to_Cities_Near_Title',
        'type' => 'text',

    ));
    $cmb->add_group_field($Flights_to_Cities_Near, array(
        'name' => 'Cities Near Url',
        'id' => 'Flights_to_Cities_Near_Url',
        'type' => 'text_url',

    ));

  /*  $hotel_api = $cmb_hotel->add_field(array(
        'id' => 'hotel_info',
        'type' => 'group',
        'repeatable' => false, // use false if you want non-repeatable group
        'options' => array(
            'group_title' => 'Hotel Information',
            'add_button' => 'Add Item',
            'remove_button' => 'Delete ',
            'closed' => true,  // Repeater fields closed by default - neat & compact.
            'sortable' => true,  // Allow changing the order of repeated groups.
        ),
    ));*/
    $cmb_hotel->add_field( array(
        'name' => 'Hotel Image',
        'id' => 'hotel_image',
        'type' => 'file',
        'query_args' => array('type' => 'image'),
    ));
    $cmb_hotel->add_field( array(
        'name' => 'Hotel Name',
        'id' => 'hotel_name',
        'type' => 'text',

    ));
    $cmb_hotel->add_field( array(
        'name' => 'Description',
        'id' => 'hotel_description',
        'type' => 'textarea',

    ));
    $cmb_hotel->add_field( array(
        'name' => 'Hotel Url',
        'id' => 'hotel_url',
        'type' => 'text_url',

    ));
    $cmb_hotel->add_field( array(
        'name' => 'Country',
        'id' => 'hotel_country',
        'type' => 'text',

    ));
    $cmb_hotel->add_field( array(
        'name' => 'City',
        'id' => 'hotel_city',
        'type' => 'text',
    ));




}

function section_meta_box()
{
    add_meta_box('section_box', ' Useful Information Sidebar ', 'section_box_content', array('vacation', 'flights', 'hotel', 'flight_hotel'));
}

function section_box_content($post)
{
    $useful = get_post_meta($post->ID, 'useful', true);
    $explore = get_post_meta($post->ID, 'explore', true);

    ?>
    <div class="meta-box-row">

        <fieldset>
            <div class="panel-frm-row">
                <div>
                    <legend> Useful Information about</legend>
                    <div>
                        <?php wp_editor($useful, '_wp_editor_test_2'); ?>
                    </div>
                </div>

                <div>
                    <legend>More to explore for</legend>
                    <div>
                        <?php wp_editor($explore, '_wp_editor_test_3'); ?>
                    </div>
                </div>

            </div>
        </fieldset>

    </div>
    <?php
}

function section_save($post_id)
{

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (isset($_POST['_wp_editor_test_2'])) $useful = $_POST['_wp_editor_test_2'];
    if (isset($_POST['_wp_editor_test_3'])) $explore = $_POST['_wp_editor_test_3'];


    if (isset($_POST['_wp_editor_test_2']) && (!empty($_POST['_wp_editor_test_2']))) {
        update_post_meta($post_id, 'useful', $useful);
    } else {
        delete_post_meta($post_id, 'useful');
    }
    if (isset($_POST['_wp_editor_test_3']) && (!empty($_POST['_wp_editor_test_3']))) {
        update_post_meta($post_id, 'explore', $explore);
    } else {
        delete_post_meta($post_id, 'explore');
    }

}

add_action('add_meta_boxes', 'section_meta_box');
add_action('save_post', 'section_save');