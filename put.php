<?php
if ($_GET['id']) {
    file_put_contents('db.txt', "\n" . $_GET['id'], FILE_APPEND);
}