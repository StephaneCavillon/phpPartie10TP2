<?php

    include('controller\validate_form.php');
    
    include('view\template\header.php');

    include('view\form.php');

    if($_SERVER['REQUEST_METHOD']=='POST' && empty($errorsArray)){
        include('view\result.php');
    }

    include('view\template\footer.php');


?>