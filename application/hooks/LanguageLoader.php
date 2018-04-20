<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LanguageLoader
 *
 * @author saktiporn
 */
class LanguageLoader {

    //put your code here
    function initialize() {
        $ci = & get_instance();
        //$ci->load->helper('session');
        $lang = isset($_REQUEST['lang']) ? $_REQUEST['lang'] : '';
        if (!empty($lang)) {
            switch ($lang) {
                case 'th':
                    $ci->session->set_userdata(session_key_name('current_lang'), 'thailand');
                    break;
                case 'vn':
                    $ci->session->set_userdata(session_key_name('current_lang'), 'vietnam');
                    break;
                case 'cn':
                    $ci->session->set_userdata(session_key_name('current_lang'), 'china');
                    break;
                default:
                    $ci->session->set_userdata(session_key_name('current_lang'), 'english');
                    break;
            }
        }
    }
}
