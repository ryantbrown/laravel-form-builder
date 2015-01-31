<?php

if (!function_exists('form_number_string')) {

    function form_row_number_string($number)
    {
        switch($number)
        {
            case 2: return 'two'; break;
            case 3: return 'three'; break;
            case 4: return 'four'; break;
            case 5: return 'five'; break;
            case 6: return 'six'; break;
            case 7: return 'seven'; break;
            case 8: return 'eight'; break;
            case 9: return 'nine'; break;
            case 10: return 'ten'; break;            
            default: return '';
        }
    }

}