<?php
// لود استایل‌های تم اصلی
add_action('wp_enqueue_scripts', 'hello_elementor_child_enqueue_styles');
function hello_elementor_child_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

// لود اسکریپت‌های Ajax ووکامرس در صفحات فروشگاه
add_action( 'wp_enqueue_scripts', 'custom_enqueue_wc_ajax_add_to_cart', 20 );
function custom_enqueue_wc_ajax_add_to_cart() {
    wp_enqueue_script( 'wc-add-to-cart' );
    wp_enqueue_script( 'woocommerce' );
    wp_enqueue_script( 'wc-cart-fragments' );
}

error_log("اسکریپت‌ها در حال لود شدن هستند");
