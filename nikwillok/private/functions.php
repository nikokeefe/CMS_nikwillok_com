<?php

    // adds path constant so shared code works for everyone
    function url_for($script_path) {
        // add the leading '/' if not present
        if ($script_path[0] != '/') {
            $script_path = "/" . $script_path;
        }
        return WWW_ROOT . $script_path;
    }

    // shortcut function for encoding url query strings
    function u($string="") {
        return urlencode($string);
    }

    // ...for rawencode
    function raw_u($string="") {
        return rawurlencode($string);
    }

    // shortcut function for preventing use of html/javascript in url
    function h($string="") {
        return htmlspecialchars($string);
    }

?>