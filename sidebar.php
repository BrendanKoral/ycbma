<?php
$args =  array(
    'post_type' => 'news',
    'orderby' => 'menu_order',
    'order' => 'ASC'
);
$custom_query = new WP_Query( $args );
while ($custom_query->have_posts()) : $custom_query->the_post(); ?>