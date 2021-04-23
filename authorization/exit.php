<?php
    session_start();
    $_SESSION['auth'] = 0;
   // session_destroy();
    header("Location: http://localhost:8080/task23/module23_php/module17_practice/");// /admin/ - это ссылка на страницу, которая откроется после выхода