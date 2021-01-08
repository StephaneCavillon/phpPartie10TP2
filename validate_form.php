<?php

    if($_SERVER['REQUEST_METHOD']=='POST'){

        if(!empty($_POST['lastname'])){
            $lastname = $_POST['lastname'];
        }


        if(!empty($_POST['name'])){
            $name = $_POST['name'];
        }

        if(!empty($_POST['age'])){
            $age = $_POST['age'];
        }

        if(!empty($_POST['organisation'])){
            $organisation = $_POST['organisation'];
        }

    }