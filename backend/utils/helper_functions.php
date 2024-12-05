<?php
    function clean_input($input, $type) {
        switch ($type) {
            case 'string':
                return filter_var($input, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
                break;            
            case 'email':
                return filter_var($input, FILTER_SANITIZE_EMAIL);
                break;
            case 'number':
                return filter_var($input, FILTER_SANITIZE_NUMBER_INT);
                break;           
            case 'float':
                return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                break;            
            default:
                return '';
        }
    }
    

    function check_required($data, $required){
        // check if all the data matches the required then check if they are set and not empty if any is empty concatinate to missing feilds
        $missing_feilds = [];
        foreach ($required as $field) {
            if (!isset($data[$field]) || empty($data[$field])) {
                $missing_feilds[] = $field;
            }
        }
        return $missing_feilds;
    }