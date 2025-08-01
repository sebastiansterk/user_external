<?php
/**
 * Copyright (c) 2012 Robin Appelman <icewind@owncloud.com>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */

OC_App::loadApp('user_external');
return array(
	'imap' => array(
		'run' => false,
		'mailbox' => '{imap.gmail.com:993/imap/ssl}INBOX', //see http://php.net/manual/en/function.imap-open.php
		'user' => 'foo',//valid username/password combination
		'password' => 'bar',
	),
	'smb' => array(
		'run' => false,
		'host' => 'localhost',
		'user' => 'test',//valid username/password combination
		'password' => 'test',
	),
	'ftp' => array(
		'run' => false,
		'host' => 'localhost',
		'user' => 'test',//valid username/password combination
		'password' => 'test',
	),
	'basic_auth' => array(
		'run' => false,
		'url' => 'localhost/basic_auth',
		'user' => 'test',//valid username/password combination
		'password' => 'test',
	),
	'http' => array(
		'run' => false,
		'endpoint' => 'localhost/http_auth',
		'hashAlgo' => false, // or 'md5', 'sha1', etc.
		'accessKey' => 'your_access_key',
		'user' => 'test',//valid username/password combination
		'password' => 'test',
	),
);
