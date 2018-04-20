<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$config['googleplus']['application_name'] = '';
$config['googleplus']['client_id'] = '';
$config['googleplus']['client_secret'] = '';
$config['googleplus']['api_key'] = '';
$config['googleplus']['redirect_uri'] = base_url() . 'authorize/gg/callback';
$config['googleplus']['scopes'] = array(
    'https://www.googleapis.com/auth/plus.login',
    'https://www.googleapis.com/auth/userinfo.email',
    'https://www.googleapis.com/auth/plus.me',
    'https://www.googleapis.com/auth/calendar',
    'https://www.googleapis.com/auth/calendar.readonly');

