<?php
    header('HTTP/1.0 403 Forbidden');
    header('Status: 403 Forbidden');
?>

<?php get_header(); ?>
<div class="container contentwrap">
    <h2>Error 403!!!</h2>
    <p><?php echo $error;?></p>
    <p>Error DB connection!</p>
</div>
<?php get_footer(); ?>

