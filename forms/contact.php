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

$name = required_form_value('name', 'your name');
$email = required_email_value('email', 'email address');
$subject = one_line_value(required_form_value('subject', 'a subject'));
$message = required_form_value('message', 'a message');
$phone = optional_form_value('phone');

$contact = new PHP_Email_Form();
$contact->ajax = true;
$contact->to = BUSINESS_EMAIL;
$contact->from_name = $name;
$contact->from_email = $email;
$contact->subject = $subject;

$contact->add_message($name, 'From');
$contact->add_message($email, 'Email');

if ($phone !== '') {
    $contact->add_message($phone, 'Phone');
}

$contact->add_message($message, 'Message', 10);

echo $contact->send();
