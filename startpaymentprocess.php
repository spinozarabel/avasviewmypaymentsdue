<?php

/**
 * T
 */

// defined('MOODLE_INTERNAL') || die();

require_once('../../config.php');
require_once($CFG->libdir . '/formslib.php');

$amount         = required_param('amount',      PARAM_TEXT);
$payee          = required_param('payee',       PARAM_TEXT);
$fees_for       = required_param('fees_for',    PARAM_TEXT);
$ay             = required_param('ay',          PARAM_TEXT);

echo "Initiate the payment process for the item shown below: \n";


require_login();

global $CFG, $PAGE, $DB, $USER;

$context = context_system::instance();
$PAGE->set_context($context);

$PAGE->set_pagelayout('incourse');
$PAGE->set_title('Initiate Payment Process of selected payment');
$PAGE->set_heading("Initiate Payment Process");
$PAGE->set_url('/blocks/avasviewmypaymentsdue/startpaymentprocess.php', ['amount'   => $amount, 
                                                                         'payee'    => $payee,
                                                                         'fees_for' => $fees_for,
                                                                         'ay'       => $ay,
                                                                        ]);
$PAGE->navbar->add('Initiate Payment Process of selected payment');

echo $OUTPUT->header();


echo "Initiate the payment process for the item shown below: \n";

echo    "Amount (Rs): " . htmlspecialchars($amount)     . 
        "  Payee: "     . htmlspecialchars($payee)      . 
        "  Fee for: "   . htmlspecialchars($fees_for)   . 
        "  For AY: "    . htmlspecialchars($ay)          . 
        "\n";
        





