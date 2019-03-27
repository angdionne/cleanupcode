<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
... mpla mpla mpla
 */

$active_group = 'default';
$active_record = TRUE;
$db['default']['hostname'] = getenv('DATABASE_HOST')?getenv('DATABASE_HOST'): 'localhost';
$db['default']['dbport'] = getenv('DATABASE_PORT')?getenv('DATABASE_PORT'):'3306';
$db['default']['username'] = getenv('DATABASE_USERNAME')?getenv('DATABASE_USERNAME'):'root';
$db['default']['password'] = getenv('DATABASE_PASSWORD')?getenv('DATABASE_PASSWORD'):'';
$db['default']['database'] = getenv('DATABASE_NAME')?getenv('DATABASE_NAME'):'okci_test';
$db['default']['dbdriver'] = 'mysqli';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;
$db['default']['failover'] = array();

/* End of file database.php */
/* Location: ./application/config/database.php */
