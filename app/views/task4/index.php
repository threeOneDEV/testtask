<?php ob_start() ?>

<?php echo $string; ?>

<?php $content = ob_get_clean() ?>
<?php include('app/views/layout.php') ?>
