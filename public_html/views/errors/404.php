<?php
    header('HTTP/1.0 404 Not Found');
    header('Status: 404 Not Found');
?>

<?php get_header(); ?>
<div class="container contentwrap">
    <h2>Error 404!!!</h2>
    <p><?php echo $error;?></p>
</div>
<?php get_footer(); ?>
