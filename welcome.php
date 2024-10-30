<?php

require_once 'header.php';

if (!empty($_SESSION['auth'])) {
    require_once 'filterTable.php';
}
else{
    require_once 'mainPage.html';
    require_once 'footer.html';
}

?>