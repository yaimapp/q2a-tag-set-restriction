<?php

/*
	Plugin Name: Tag Set Restriction
	Plugin URI:
	Plugin Description: A tag bill is restricted to an administrator.
	Plugin Version: 1.0
	Plugin Date: 2016-06-30
	Plugin Author:38qa.net
	Plugin Author URI:
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.7
	Plugin Update Check URI:
*/

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}

// language file
qa_register_plugin_phrases('qa-tag-set-restriction-lang-*.php', 'qa_tag_set_restriction');
// admin
qa_register_plugin_module('module', 'qa-tag-set-restriction-admin.php', 'qa_tag_set_restriction_admin', 'Tag Set Restriction Admin');
// layer
qa_register_plugin_layer('qa-tag-set-restriction-layer.php', 'Tag Set Restriction Layer');
