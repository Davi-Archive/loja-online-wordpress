<?php
// Template: Home
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h1><?php the_title() ?></h1>
        <main><?php the_content() ?></main>

        <pre>
        <?php
        $product = wc_get_product(13);

        echo '<p>' . $product->get_status();
        echo '<p>' .  $product->get_sku();
        echo '<p>' .  $product->get_name();
        echo '<p>' .  $product->get_stock_quantity();
        ?>
        </pre>

<?php endwhile;
else : endif; ?>

<?php
get_footer();
?>