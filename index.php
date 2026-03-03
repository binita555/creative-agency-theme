<?php get_header(); ?>

<h1><?php echo esc_html( get_the_title() ); ?></h1>

<a href="<?php echo esc_url( home_url() ); ?>">Go Home</a>

<?php get_footer(); ?>