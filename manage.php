<?php
//...

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

require_once(__DIR__ . '/../../config.php');

$PAGE->set_url(new moodle_url('/local/message/manage.php'));
$PAGE->set_context(\context_system::instance());
$PAGE->set_title('Fisrt Assignment');
$PAGE->set_pagelayout('standard');

echo $OUTPUT->header();

$templatecontext = (object) [
    'texttodisplay' => 'Welcome to Rock Mountain!',
    'imageone' => $OUTPUT->image_url('rockymountainone', 'local_message'),
];



echo $OUTPUT->render_from_template('local_message/manage', $templatecontext);

echo $OUTPUT->footer();