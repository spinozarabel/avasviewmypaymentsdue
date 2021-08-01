<?php

/**
 * T
 */

defined('MOODLE_INTERNAL') || die();

require_once('../../config.php');
require_once($CFG->libdir . '/formslib.php');

require_login();

global $CFG, $PAGE, $DB, $USER;

/*

$context = context_system::instance();
$PAGE->set_context($context);

$PAGE->set_pagelayout('incourse');
$PAGE->set_title('Initiate Payment Process of selected payment');
$PAGE->set_heading("Initiate Payment Process");
$PAGE->set_url('/blocks/avasviewmypaymentsdue/startpaymentprocess.php', ['amount'   => $_POST['amount'], 
                                                                         'payee'    => $_POST['payee'],
                                                                         'fees_for' => $_POST['fees_for'],
                                                                         'ay'       => $_POST['ay'],
                                                                        ]);
$PAGE->navbar->add('Initiate Payment Process of selected payment');

echo $OUTPUT->header();

*/

$amount     = $_POST['amount'];
$payee      = $_POST['payee'];
$fees_for   = $_POST['fees_for'];
$ay         = $_POST['ay'];

echo "Initiate the payment process for the item shown below: \n";

echo    "Amount (Rs): " . htmlspecialchars($amount)     . 
        "  Payee: "     . htmlspecialchars($payee)      . 
        "  Fee for: "   . htmlspecialchars($fees_for)   . 
        "  For AY: "    . htmlspecialchars($ay)          . 
        "\n";
        





