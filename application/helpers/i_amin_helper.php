<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin_helper
 *
 * @author saktiporn
 */
if (!function_exists('current_admin_lang')) {

    function current_admin_lang() {
        $CI = &get_instance();
        $lang = $CI->session->admindata(session_key_name('current_lang'));
        if (empty($lang)) {
            $lang = $CI->config->item('language'); //Default
        }
        return $lang;
    }

}
if (!function_exists('current_admin_login')) {

    function current_admin_login() {
        $CI = &get_instance();
        $lang = $CI->session->admindata(session_key_name('current_admin_login'));
        if (empty($lang)) {
            $lang = $CI->config->item('language'); //Default
        }
        return $lang;
    }

}
if (!function_exists('current_admin_social')) {

    function current_admin_social() {
        //echo "OK";
        $CI = &get_instance();
        $lang = $CI->session->admindata($_session_key_current_admin_lang);
        if (empty($lang)) {
            $lang = $CI->config->item('language'); //Default
        }
        return $lang;
    }

}
if (!function_exists('current_admin_authen_type')) {

    function current_admin_authen_type() {
        //echo "OK";
        $CI = &get_instance();
        $data = $CI->session->admindata(session_key_name('authen_type'));
        return $data;
    }

}
if (!function_exists('set_current_admin_authen_type')) {
    function set_current_admin_authen_type($v) {
        //echo "OK";
        $CI = &get_instance();
        $CI->session->set_admindata(session_key_name('authen_type'), $v);
    }
}
if (!function_exists('set_is_register')) {

    function set_is_register($v) {
        $CI = &get_instance();
        $CI->session->set_admindata(session_key_name('is_register'), $v);
    }

}
if (!function_exists('is_register')) {

    function is_register() {
        $CI = &get_instance();
        return $CI->session->admindata(session_key_name('is_register'));
    }

}
if (!function_exists('set_current_admin_profile')) {
    function set_current_admin_profile($data) {
        //print_r($data);
        $CI = &get_instance();
        $admin_login='';
        $admin_id = '';
        $admin_email = '';
        $admin_email_verify = 0;
        $admin_name = '';
        $admin_avatar = '';
        $permission = '';
        switch (current_admin_authen_type()) {
            case "login_gg":
                $admin_id = $data['id'];
                $admin_email = $data['email'];
                $admin_name = $data['name'];
                $admin_avatar = $data['picture'];
                $admin_email_verify = $data['verified_email'];
                break;
            case "login_fb":
                $admin_id = $data['admin']['id'];
                $admin_email = $data['admin']['email'];
                $admin_name = $data['admin']['name'];
                $admin_avatar = 'https://graph.facebook.com/' . $admin_id . '/picture?type=large';
                break;
            case "login_email":
                $admin_id = $data['usrid'];
                $admin_email = $data['email'];
                $admin_name = $data['fname'] . ' ' . $data['lname'];
                $admin_avatar = $data['pic_url'];
                $permission = $data['permission'];
                $admin_login=$data['adminname'];
                break;
        }
        $CI->session->set_admindata(session_key_name('current_admin_permission'), $permission);
        $CI->session->set_admindata(session_key_name('current_admin_id'), $admin_id);
        $CI->session->set_admindata(session_key_name('current_admin_email'), $admin_email);
        $CI->session->set_admindata(session_key_name('current_admin_email_verify'), $admin_email_verify);
        $CI->session->set_admindata(session_key_name('current_admin_name'), $admin_name);
        $CI->session->set_admindata(session_key_name('current_admin_login'), $admin_login);
        $CI->session->set_admindata(session_key_name('current_admin_avatar'), $admin_avatar);
    }
}
if (!function_exists('is_social_login')) {

    function is_social_login() {
        $byPassLoginType = array('login_fb', 'login_gg');
        return in_array(current_admin_authen_type(), $byPassLoginType);
    }

}

if (!function_exists('current_admin_permission')) {

    function current_admin_permission() {
        $CI = &get_instance();
        return $CI->session->admindata(session_key_name('current_admin_permission'));
    }

}
if (!function_exists('current_admin_id')) {

    function current_admin_id() {
        $CI = &get_instance();
        return $CI->session->admindata(session_key_name('current_admin_id'));
    }

}
if (!function_exists('current_admin_email')) {

    function current_admin_email() {
        $CI = &get_instance();
        return $CI->session->admindata(session_key_name('current_admin_email'));
    }

}
if (!function_exists('current_admin_email_verify')) {

    function current_admin_email_verify() {
        $CI = &get_instance();
        return $CI->session->admindata(session_key_name('current_admin_email_verify'));
    }

}
if (!function_exists('current_admin_name')) {

    function current_admin_name() {
        $CI = &get_instance();
        return $CI->session->admindata(session_key_name('current_admin_name'));
    }

}
if (!function_exists('current_admin_avatar')) {

    function current_admin_avatar() {
        $CI = &get_instance();
        return $CI->session->admindata(session_key_name('current_admin_avatar'));
    }

}
if (!function_exists('current_admin_position')) {

    function current_admin_position() {
        $CI = &get_instance();
        $val = $CI->session->admindata(session_key_name('current_admin_position'));
        return !empty($val) ? $val : 'ยังไม่ระบุตำแหน่ง';
    }

}

if (!function_exists('current_authentication_key')) {

    function current_authentication_key() {
        $CI = &get_instance();
        $val = $CI->session->admindata(session_key_name('current_authentication_key'));
        return !empty($val) ? $val : '';
    }

}
if (!function_exists('set_current_authentication_key')) {

    function set_current_authentication_key($val) {
        $CI = &get_instance();
        $CI->session->set_admindata(session_key_name('current_authentication_key'), $val);
    }

}
