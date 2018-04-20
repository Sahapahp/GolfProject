<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of member_helper
 *
 * @author saktiporn
 */
if (!function_exists('current_member_lang')) {

    function current_member_lang() {
        $CI = &get_instance();
        $lang = $CI->session->userdata(session_key_name('current_lang'));
        if (empty($lang)) {
            $lang = $CI->config->item('language'); //Default
        }
        return $lang;
    }

}
if (!function_exists('current_member_login')) {

    function current_member_login() {
        $CI = &get_instance();
        $lang = $CI->session->userdata(session_key_name('current_member_login'));
        if (empty($lang)) {
            $lang = $CI->config->item('language'); //Default
        }
        return $lang;
    }

}
if (!function_exists('current_member_social')) {

    function current_member_social() {
        //echo "OK";
        $CI = &get_instance();
        $lang = $CI->session->userdata($_session_key_current_member_lang);
        if (empty($lang)) {
            $lang = $CI->config->item('language'); //Default
        }
        return $lang;
    }

}
if (!function_exists('current_member_authen_type')) {

    function current_member_authen_type() {
        //echo "OK";
        $CI = &get_instance();
        $data = $CI->session->userdata(session_key_name('authen_type'));
        return $data;
    }

}
if (!function_exists('set_current_member_authen_type')) {
    function set_current_member_authen_type($v) {
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
if (!function_exists('set_current_member_profile')) {
    function set_current_member_profile($data) {
        //print_r($data);
        $CI = &get_instance();
        $member_login='';
        $member_id = '';
        $member_email = '';
        $member_email_verify = 0;
        $member_name = '';
        $member_avatar = '';
        $permission = '';
        switch (current_member_authen_type()) {
            case "login_gg":
                $member_id = $data['id'];
                $member_email = $data['email'];
                $member_name = $data['name'];
                $member_avatar = $data['picture'];
                $member_email_verify = $data['verified_email'];
                break;
            case "login_fb":
                $member_id = $data['member']['id'];
                $member_email = $data['member']['email'];
                $member_name = $data['member']['name'];
                $member_avatar = 'https://graph.facebook.com/' . $member_id . '/picture?type=large';
                break;
            case "login_email":
                $member_id = $data['usrid'];
                $member_email = $data['email'];
                $member_name = $data['fname'] . ' ' . $data['lname'];
                $member_avatar = $data['pic_url'];
                $permission = $data['permission'];
                $member_login=$data['username'];
                break;
        }
        $CI->session->set_userdata(session_key_name('current_member_permission'), $permission);
        $CI->session->set_userdata(session_key_name('current_member_id'), $member_id);
        $CI->session->set_userdata(session_key_name('current_member_email'), $member_email);
        $CI->session->set_userdata(session_key_name('current_member_email_verify'), $member_email_verify);
        $CI->session->set_userdata(session_key_name('current_member_name'), $member_name);
        $CI->session->set_userdata(session_key_name('current_member_login'), $member_login);
        $CI->session->set_userdata(session_key_name('current_member_avatar'), $member_avatar);
    }
}
if (!function_exists('is_social_login')) {

    function is_social_login() {
        $byPassLoginType = array('login_fb', 'login_gg');
        return in_array(current_member_authen_type(), $byPassLoginType);
    }

}

if (!function_exists('current_member_permission')) {

    function current_member_permission() {
        $CI = &get_instance();
        return $CI->session->userdata(session_key_name('current_member_permission'));
    }

}
if (!function_exists('current_member_id')) {

    function current_member_id() {
        $CI = &get_instance();
        return $CI->session->userdata(session_key_name('current_member_id'));
    }

}
if (!function_exists('current_member_email')) {

    function current_member_email() {
        $CI = &get_instance();
        return $CI->session->userdata(session_key_name('current_member_email'));
    }

}
if (!function_exists('current_member_email_verify')) {

    function current_member_email_verify() {
        $CI = &get_instance();
        return $CI->session->userdata(session_key_name('current_member_email_verify'));
    }

}
if (!function_exists('current_member_name')) {

    function current_member_name() {
        $CI = &get_instance();
        return $CI->session->userdata(session_key_name('current_member_name'));
    }

}
if (!function_exists('current_member_avatar')) {

    function current_member_avatar() {
        $CI = &get_instance();
        return $CI->session->userdata(session_key_name('current_member_avatar'));
    }

}
if (!function_exists('current_member_position')) {

    function current_member_position() {
        $CI = &get_instance();
        $val = $CI->session->userdata(session_key_name('current_member_position'));
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
