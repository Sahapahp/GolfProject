<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user_helper
 *
 * @author saktiporn
 */
if (!function_exists('current_user_lang')) {

    function current_user_lang() {
        $CI = &get_instance();
        $lang = $CI->session->userdata(session_key_name('current_lang'));
        if (empty($lang)) {
            $lang = $CI->config->item('language'); //Default
        }
        return $lang;
    }

}
if (!function_exists('current_user_login')) {

    function current_user_login() {
        $CI = &get_instance();
        $lang = $CI->session->userdata(session_key_name('current_user_login'));
        if (empty($lang)) {
            $lang = $CI->config->item('language'); //Default
        }
        return $lang;
    }

}
if (!function_exists('current_user_social')) {

    function current_user_social() {
        //echo "OK";
        $CI = &get_instance();
        $lang = $CI->session->userdata($_session_key_current_user_lang);
        if (empty($lang)) {
            $lang = $CI->config->item('language'); //Default
        }
        return $lang;
    }

}
if (!function_exists('current_user_authen_type')) {

    function current_user_authen_type() {
        //echo "OK";
        $CI = &get_instance();
        $data = $CI->session->userdata(session_key_name('authen_type'));
        return $data;
    }

}
if (!function_exists('set_current_user_authen_type')) {
    function set_current_user_authen_type($v) {
        //echo "OK";
        $CI = &get_instance();
        $CI->session->set_userdata(session_key_name('authen_type'), $v);
    }
}
if (!function_exists('set_is_register')) {

    function set_is_register($v) {
        $CI = &get_instance();
        $CI->session->set_userdata(session_key_name('is_register'), $v);
    }

}
if (!function_exists('is_register')) {

    function is_register() {
        $CI = &get_instance();
        return $CI->session->userdata(session_key_name('is_register'));
    }

}
if (!function_exists('set_current_user_profile')) {
    function set_current_user_profile($data) {
        //print_r($data);
        $CI = &get_instance();
        $user_login='';
        $user_id = '';
        $user_email = '';
        $user_email_verify = 0;
        $user_name = '';
        $user_avatar = '';
        $permission = '';
        switch (current_user_authen_type()) {
            case "login_gg":
                $user_id = $data['id'];
                $user_email = $data['email'];
                $user_name = $data['name'];
                $user_avatar = $data['picture'];
                $user_email_verify = $data['verified_email'];
                break;
            case "login_fb":
                $user_id = $data['user']['id'];
                $user_email = $data['user']['email'];
                $user_name = $data['user']['name'];
                $user_avatar = 'https://graph.facebook.com/' . $user_id . '/picture?type=large';
                break;
            case "login_email":
                $user_id = $data['usrid'];
                $user_email = $data['email'];
                $user_name = $data['fname'] . ' ' . $data['lname'];
                $user_avatar = $data['pic_url'];
                $permission = $data['permission'];
                $user_login=$data['username'];
                break;
        }
        $CI->session->set_userdata(session_key_name('current_user_permission'), $permission);
        $CI->session->set_userdata(session_key_name('current_user_id'), $user_id);
        $CI->session->set_userdata(session_key_name('current_user_email'), $user_email);
        $CI->session->set_userdata(session_key_name('current_user_email_verify'), $user_email_verify);
        $CI->session->set_userdata(session_key_name('current_user_name'), $user_name);
        $CI->session->set_userdata(session_key_name('current_user_login'), $user_login);
        $CI->session->set_userdata(session_key_name('current_user_avatar'), $user_avatar);
    }
}
if (!function_exists('is_social_login')) {

    function is_social_login() {
        $byPassLoginType = array('login_fb', 'login_gg');
        return in_array(current_user_authen_type(), $byPassLoginType);
    }

}

if (!function_exists('current_user_permission')) {

    function current_user_permission() {
        $CI = &get_instance();
        return $CI->session->userdata(session_key_name('current_user_permission'));
    }

}
if (!function_exists('current_user_id')) {

    function current_user_id() {
        $CI = &get_instance();
        return $CI->session->userdata(session_key_name('current_user_id'));
    }

}
if (!function_exists('current_user_email')) {

    function current_user_email() {
        $CI = &get_instance();
        return $CI->session->userdata(session_key_name('current_user_email'));
    }

}
if (!function_exists('current_user_email_verify')) {

    function current_user_email_verify() {
        $CI = &get_instance();
        return $CI->session->userdata(session_key_name('current_user_email_verify'));
    }

}
if (!function_exists('current_user_name')) {

    function current_user_name() {
        $CI = &get_instance();
        return $CI->session->userdata(session_key_name('current_user_name'));
    }

}
if (!function_exists('current_user_avatar')) {

    function current_user_avatar() {
        $CI = &get_instance();
        return $CI->session->userdata(session_key_name('current_user_avatar'));
    }

}
if (!function_exists('current_user_position')) {

    function current_user_position() {
        $CI = &get_instance();
        $val = $CI->session->userdata(session_key_name('current_user_position'));
        return !empty($val) ? $val : 'ยังไม่ระบุตำแหน่ง';
    }

}

if (!function_exists('current_authentication_key')) {

    function current_authentication_key() {
        $CI = &get_instance();
        $val = $CI->session->userdata(session_key_name('current_authentication_key'));
        return !empty($val) ? $val : '';
    }

}
if (!function_exists('set_current_authentication_key')) {

    function set_current_authentication_key($val) {
        $CI = &get_instance();
        $CI->session->set_userdata(session_key_name('current_authentication_key'), $val);
    }

}
