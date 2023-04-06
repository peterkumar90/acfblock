


<?php

add_action( 'acf/init', function () {

    acf_register_block_type( array(
        'name'            => 'gallery',
        'title'           => __( 'gallery' ),
        'description'     => '',
        'render_template' => ACF_BLOCKS_PATH . 'gallery/inc/block.php',
        'icon'            => 'align-wide',
        'keywords'        => array( 'gallery','france-gallery' ),
        'mode'            => false,
        'supports'        => array(
            'align'         => false,
            'align_content' => false,
        ),
        'enqueue_assets'  => function () {
            $name        = 'gallery';
            $assets      = ACF_BLOCKS_URI . "$name/assets/";
            $assets_time = ACF_BLOCKS_PATH . "$name/assets/";

           wp_enqueue_style( "block-" . $name, $assets . "gallery-style.css", array(), filemtime( $assets_time . "gallery-style.css" ), false );
           wp_enqueue_script( "block-" . $name, $assets . "gallery-script.js", array(), filemtime( $assets_time . "gallery-script.js" ), true );
        },
    ) );
} );
