<?php
//
// defines configuration settings for the moodle_block_avasviewmypaymentsdue
// Madhu Avasarala
//
defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree)
{
	$settings->add(new admin_setting_configtext('block_avasviewmypaymentsdue/profile_field_shortname', 'Short Name of User Profile Field fees',
                'Enter the short name of the user profile field fees containing JSON encoded data (max 40 chars)', 'fees', PARAM_RAW, 40));

}
