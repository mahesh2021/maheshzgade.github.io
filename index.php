<?php

//print_r($_SERVER);die();

$sitepad['db_name'] = 'serverhu_spad975';
$sitepad['db_user'] = 'serverhu_spad975';
$sitepad['db_pass'] = '.G!c0At(V4';
$sitepad['db_host'] = 'localhost';
$sitepad['db_table_prefix'] = '5ce2xJq_';
$sitepad['charset'] = 'utf8mb4';
$sitepad['collate'] = 'utf8mb4_unicode_ci';
$sitepad['serving_url'] = 'mahesh.serverhub.in';// URL without protocol but with directory as well
$sitepad['url'] = 'https://mahesh.serverhub.in';
$sitepad['relativeurl'] = '';
$sitepad['.sitepad'] = '/home/serverhu';
$sitepad['sitepad_plugin_path'] = '/usr/local/sitepad';
$sitepad['editor_path'] = '/usr/local/sitepad/editor';
$sitepad['path'] = dirname(__FILE__);
$sitepad['AUTH_KEY'] = 'pvM1AZLH89hi0OjErnE2NUvIN3336D59bpf8TYbku0NQXu9NtalGcNNNF5fSJwfP';
$sitepad['SECURE_AUTH_KEY'] = 'XCtXTn0hRXxBMvJwbgIjdoyno3TZh6JaXJKKQy2tMiULRXTSHWLoZpc4EK8M2yNz';
$sitepad['LOGGED_IN_KEY'] = 'y6YLP9LvHIXbBpgmLtuti2EIKpMxC4X7a6PghC3Ek85qaYNfk0XrJXOuTA5b8PsM';
$sitepad['NONCE_KEY'] = '04NTYaCoCSVY0NFPhBfdrpmPkWYYQP17STz83aRnwe3waFHKx5FDvfvBqArd9wkz';
$sitepad['AUTH_SALT'] = 'VzSePJeZnILOqjh3cebV06AAlInoyV57iUHFNF3LDQT2FeYCJcnGAvM2eDxj3p1S';
$sitepad['SECURE_AUTH_SALT'] = 'Rm9nEtG5coMgRu1tuPKiiM5dlBTZkaHgJVT5P7qZcsfZfhnIl50jfyRUlJwWuSVc';
$sitepad['LOGGED_IN_SALT'] = 'NqUfj0eaceNNgonjAgSCsGiLdkxezcsmhzuXwPaen6PAUcqLlbayDYOfTImtadAy';
$sitepad['NONCE_SALT'] = '1Eo854ubVdvPUUKk2itp6XMm11VzcRTjpd8EaBtRTXSvhoUPwPFfHtxiuzHzpAOM';

if(!include_once($sitepad['editor_path'].'/site-inc/bootstrap.php')){
	die('Could not include the bootstrap.php. One of the reasons could be open_basedir restriction !');
}

