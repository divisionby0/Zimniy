<?php


class AddDateToMediaList
{
    public function __construct()
    {
        // admin add date to media List
// Add the column
        function date_column( $cols ) {
            $cols["party_date"] = "Party date";
            return $cols;
        }

// Display dates
        function date_value( $column_name, $id ) {
            //$meta = wp_get_attachment_metadata($id);
            $cap2 = get_post_meta( $id, '_abcfmlcf_caption2', true );
            echo $cap2;
        }

// Register the column as sortable & sort by name
        function date_column_sortable( $cols ) {
            $cols["party_date"] = "party_date";
            return $cols;
        }



        function hook_new_media_columns() {
            add_filter( 'manage_media_columns', 'date_column' );
            add_action( 'manage_media_custom_column', 'date_value', 10, 2 );
            add_filter( 'manage_upload_sortable_columns', 'date_column_sortable' );
        }


        add_action( 'admin_init', 'hook_new_media_columns' );
    }
}