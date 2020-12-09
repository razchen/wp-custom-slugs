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
/* Template Name: program_info */

get_header();
?>

<main id="site-content" role="main">

    <?php echo get_query_var('specialty') ?>
    <?php echo get_query_var('frieda') ?>
</main><!-- #site-content -->

<?php get_footer(); ?>
