<?php

require(APPPATH . '/helpers/i_session_helper.php');
require(APPPATH . '/helpers/i_users_helper.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AuthorizeLoader
 *
 * @author saktiporn
 */
class AuthorizeLoader {

    //put your code here
    function CheckPermission() {

        $ci = & get_instance();
        //$directory=$ci->router->directory;
        //print_r($directory);
        //echo 'OK';
// p    //rint_r($ci);
        //$ci->load->helper('i_session_helper');
        $login_type = current_user_authen_type();
        $c_class = $ci->router->class;
        $c_method = $ci->router->method;
        //echo $c_class;
        //echo $c_method;
        //echo $login_type;
        $bypassArr = array('authorize', 'fb', 'gg');
        $byPassLoginType = array('login_fb', 'login_gg', 'login_email');
        $byPassPublic = array('docs', 'users', 'tracking', 'location', 'tracking');
        $isRegister = is_register();
//        echo $isRegister;
//        echo $login_type;
//        if (empty($login_type)) {
//            if (in_array($c_class, $bypassArr)) {
//                if ($c_class != 'authorize') {
//                    redirect(base_url() . 'login');
//                }
//                //ไม่ทำไร
//            }
//            else
//            {
//                redirect(base_url() . 'login');
//            }
//        }
//        else
//        {
//            //ตรววจสอบสิทธิ์การเข้าใช้งาน Module และ Function
//        }
    }
}
    