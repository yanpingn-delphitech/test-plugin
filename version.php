<?php

/**
 * MOODLE VERSION INFORMATION
 *
 * This file defines the current version of the core Moodle code being used.
 * This is compared against the values stored in the database to determine
 * whether upgrades should be performed (see lib/db/*.php)
 *
 * @package    local
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'local_message';
$plugin->version  = 2021051704.00;      
$plugin->requires = 2020110900;        
$plugin->release  = '3.11.4 (Build: 20211108)';// Human-friendly version name
