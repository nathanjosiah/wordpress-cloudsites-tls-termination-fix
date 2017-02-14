<?php
/*
 Plugin Name: Cloud Sites SSL Fixes
 Plugin URI: https://github.com/nathanjosiah/wordpress-cloudsites-tls-termination-fix
 Description: This plugin fixes issues associated with Cloud Sites using TLS termination.
 Author: Nathan Smith
 Version: 0.1
*/

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
	$_SERVER['SERVER_PORT'] = '443';
	$_SERVER['REQUEST_SCHEME'] = 'https';
	$_SERVER['X-FORWARDED-PROTO'] = 'https';
}
