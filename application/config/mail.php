<?php
defined('BASEPATH') or exit('No direct script access allowed');

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'mail.help.kanavu.org';
$config['smtp_port'] = 465;
$config['smtp_user'] = 'support@help.kanavu.org';
$config['smtp_pass'] = 'S8z?HUxsnd30';

$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['wordwrap'] = TRUE;
$config['newline'] = "\r\n";
$config['crlf'] = "\r\n";
$config['smtp_timeout'] = 30;
$config['smtp_crypto'] = 'ssl';
$config['validate'] = TRUE;
$config['priority'] = 3;
?>