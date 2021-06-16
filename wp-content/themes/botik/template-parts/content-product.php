<?php

$product = new WC_Product($post->ID);

$price = $product->get_price_html();
$sale = get_post_meta(get_the_ID(), '_sale_price', true);
$productImage = get_the_post_thumbnail_url($product->post->ID);
$category = $product->get_categories();

?>
<!--Grid column-->
<div class="col-lg-3 col-md-6 mb-4">

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
                    <a href="<?php echo get_permalink(); ?>" class="dark-grey-text"><?php the_title(); ?>
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
<!--Grid column-->