<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/form-helpers.php';

$php_email_form = __DIR__ . '/../assets/vendor/php-email-form/php-email-form.php';

if (file_exists($php_email_form)) {
    include $php_email_form;
} else {
    form_fail('Unable to load the email form library.');
}

$serviceTypeLabels = [
    'electrical' => 'Electrical Service Call',
    'plumbing' => 'Plumbing Service Call',
    'home-repair' => 'Handyman / Home Repair',
    'remodel' => 'Handyman / Home Repair',
    'maintenance' => 'Maintenance / Punch List',
    'residential' => 'Residential / Home Project',
    'commercial' => 'Commercial Project',
    'renovation' => 'Home Repair / Improvement',
    'extension' => 'Home Extension',
    'infrastructure' => 'Infrastructure',
    'other' => 'Other',
];

$timelineLabels = [
    'asap' => 'ASAP',
    '1-2weeks' => '1-2 Weeks',
    '1-3months' => '1-3 Months',
    '3-6months' => '3-6 Months',
    '6-12months' => '6-12 Months',
    'planning' => 'Still Planning',
];

$name = required_form_value('name', 'your name');
$email = required_email_value('email', 'email address');
$phone = required_form_value('phone', 'a phone number');
$type = required_form_value('type', 'a service type');
$message = required_form_value('message', 'project details');
$timeline = optional_form_value('timeline');
$budget = optional_form_value('budget');

$contact = new PHP_Email_Form();
$contact->ajax = true;
$contact->to = BUSINESS_EMAIL;
$contact->from_name = $name;
$contact->from_email = $email;
$contact->subject = 'Request for a quote';

$contact->add_message($name, 'Name');
$contact->add_message($email, 'Email');
$contact->add_message($phone, 'Phone');
$contact->add_message(choice_label($type, $serviceTypeLabels), 'Service Type');

if ($timeline !== '') {
    $contact->add_message(choice_label($timeline, $timelineLabels), 'Timeline');
}

if ($budget !== '') {
    $contact->add_message($budget, 'Budget');
}

$contact->add_message($message, 'Project Details', 10);

echo $contact->send();
