<?php

    require_once('../../../private/initialize.php'); 

    $id = $_GET['id'] ?? '1'; // php7

    echo h($id);

?>

<?php $page_title = 'Show Page'; ?>
<?php include(SHARED_PATH . '/admin_header.php'); ?>

    <div id="content">
        <a class="back-link" href="<?php echo url_for('/admin/pages/index.php'); ?>">&laquo; Back to List</a>

        <div class="page show">
            Page ID: <?php echo h($id); ?>
        </div>
    </div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>