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

echo nl2br("Initiate the payment process for the item shown below or Cancel: \n");


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


echo nl2br("Initiate the payment process for the item shown below: \n");

echo nl2br(     "Amount (Rs): " . htmlspecialchars($amount)     . 
                "  Payee: "     . htmlspecialchars($payee)      . 
                "  Fee for: "   . htmlspecialchars($fees_for)   . 
                "  For AY: "    . htmlspecialchars($ay)         . 
                "\n");
        
class paymentprocess_form extends moodleform 
{

        public function definition() 
        {
                global $COURSE;
        
                $mform =& $this->_form;
        
                $mform->addElement('hidden', 'amount',          $this->_customdata['amount']);
                $mform->addElement('hidden', 'payee',           $this->_customdata['payee']);
                $mform->addElement('hidden', 'fees_for',        $this->_customdata['fees_for']);
                $mform->addElement('hidden', 'ay',              $this->_customdata['ay']);
        
                $buttons = array();
                $buttons[] =& $mform->createElement('submit', 'Start Payment', 'Start Payment Process');
                $buttons[] =& $mform->createElement('cancel');
        
                $mform->addGroup($buttons, 'buttons', get_string('actions'), array(' '), false);
        }
}

$form = new \paymentprocess_form(null, ['amount'        => $amount, 
                                        'payee'         => $payee,
                                        'fees_for'      => $fees_for,
                                        'ay'            => $ay,
                                       ]);
if ($form->is_cancelled()) 
{
        redirect(new \moodle_url('/my'));
} 
else if ($formdata = $form->get_data()) 
{
        $amount         = $formdata->amount;
        $payee          = $formdata->payee;
        $fees_for       = $formdata->fees_for;
        $ay             = $formdata->ay;
}

echo \html_writer::start_tag('div', ['class' => 'no-overflow']);
$form->display();
echo \html_writer::end_tag('div');



echo $OUTPUT->footer();


                    




