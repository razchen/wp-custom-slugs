<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
/* Template Name: specialties */

get_header();
?>

<main id="site-content" role="main">

    <?php echo get_query_var('specialty') ?>

    <a href="/lists/<?php echo get_query_var('specialty') ?>/12341234">12341234</a>
    <a href="/lists/<?php echo get_query_var('specialty') ?>/23452345">23452345</a>
</main><!-- #site-content -->

<?php get_footer(); ?>
