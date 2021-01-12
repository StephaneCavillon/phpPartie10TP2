<?php
    $errorsArray = array();
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        include('utils\regexp.php');

        $civ = trim(filter_input(INPUT_POST, 'civ', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

        if(!empty($civ)){
            $test_regex = preg_match(REGEX_CIV, $civ);

            if($test_regex == false){
                $errorsArray['civ_error'] = 'La civilité n\'est pas valide';
            }
        }else{
            $errorsArray['civ_error'] = 'Le champ n\'est pas rempli';
        }
        //********************************************************** */

        $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

        if(!empty($name)){
            $test_regex = preg_match(REGEX_NAME, $name);

            if($test_regex == false){
                $errorsArray['name_error'] = 'Le nom n\'est pas valide';
            }
        }else{
            $errorsArray['name_error'] = 'Le champ Nom n\'est pas rempli';
        }

        //********************************************************** */

        $firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

        if(!empty($firstname)){
            $test_regex = preg_match(REGEX_NAME, $firstname);

            if($test_regex == false){
                $errorsArray['firstname_error'] = 'Le Prénom n\'est pas valide';
            }
        }else{
            $errorsArray['firstname_error'] = 'Le champ Prénom n\'est pas rempli';
        }
        
        //********************************************************** */

        $age = trim(filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT));

        
        if(!empty($age)){
            $age = filter_var($age,FILTER_VALIDATE_INT);
            
            if($age == false && ($age < 120 || $age > 18)){
                $errorsArray['age_error'] = 'L\'age n\'est pas valide';
            }
        }else{
            $errorsArray['age_error'] = 'Le champ n\'est pas rempli';
        }
        

        //********************************************************** */


        $organisation = trim(filter_input(INPUT_POST, 'organisation', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

        if(!empty($organisation)){
            $test_regex = preg_match(REGEX_ORGA, $organisation);


            if($test_regex == false){
                $errorsArray['organisation_error'] = 'Le nom n\'est pas valide';
            }
        }else{
            $errorsArray['organisation_error'] = 'Le champ n\'est pas rempli';
        }
        


    }