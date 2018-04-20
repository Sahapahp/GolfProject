<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of i_session_helper
 *
 * @author saktiporn
 */
if (!function_exists('session_key_name')) {

    function session_key_name($n) {
        $prefixSession = 'session_key_' . $n;
        return $prefixSession; 
    }

}


            