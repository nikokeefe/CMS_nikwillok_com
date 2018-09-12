<?php 
    require_once('../../../private/initialize.php'); 

    $test = $_GET['test'] ?? '';

    if ($test == '404') {
        error_404();
    } elseif ($test == '500') {
        error_404();
    } elseif ($test == 'redirect') {
        redirect_to(url_for('/admin/subjects/index.php'));
        exit;
    } else {
        echo 'No Error';
    }
?>