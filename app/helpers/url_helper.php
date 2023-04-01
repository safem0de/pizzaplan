<?php
    function redirect($page)
    {
        header('location: ' . URLROOT . '/' . $page);
    }

    function refresh_page($sec, $page)
    {
        header("refresh:". $sec ."; location: " . URLROOT . "/" . $page);
    }