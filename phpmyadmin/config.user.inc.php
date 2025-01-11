<?php
$i = 0;

// MySQL 8.0 Host
$i++;
$cfg['Servers'][$i]['host'] = 'mysql80';
$cfg['Servers'][$i]['port'] = '3306';
$cfg['Servers'][$i]['auth_type'] = 'cookie';

// MySQL 5.7 Host
$i++;
$cfg['Servers'][$i]['host'] = 'mysql57';
$cfg['Servers'][$i]['port'] = '3306';
$cfg['Servers'][$i]['auth_type'] = 'cookie';
