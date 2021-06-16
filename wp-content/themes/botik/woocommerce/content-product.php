<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
    return;
}
$title = $product->get_title();
$price = $product->get_price_html();
$sale = get_post_meta(get_the_ID(), '_sale_price', true);
$productImage = get_the_post_thumbnail_url($product->post->ID);
$category = $product->get_categories();


?>
<div <?php wc_product_class('col-lg-3 col-md-6 mb-4', $product); ?>>

    <!--Card-->
    <div class="card">

        <!--Card image-->
        <div class="view overlay">
            <img src="<?php echo $productImage; ?>" class="card-img-top" alt="">
            <a href="<?php echo get_permalink(); ?>">
                <div class="mask rgba-white-slight"></div>
            </a>
        </div>
        <!--Card image-->

        <!--Card content-->
        <div class="card-body text-center">
            <!--Category & Title-->
            <a href="" class="grey-text">
                <h5><?php echo $category; ?></h5>
            </a>
            <h5>
                <strong>
                    <a href="<?php echo get_permalink(); ?>" class="dark-grey-text"><?php echo $title; ?>
                    </a>
                </strong>
            </h5>

            <h4 class="font-weight-bold blue-text">
                <strong><?php echo $price; ?></strong>
            </h4>

        </div>
        <!--Card content-->

    </div>
    <!--Card-->
</div>