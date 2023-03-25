<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-25 18:33:55 --> Email could not been sent. Mailer Error (Line 166): Could not instantiate mail function.
ERROR - 2023-03-25 18:33:55 --> #0 /var/www/html/application/libraries/Notifications.php(94): EA\Engine\Notifications\Email->send_appointment_details(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email), Object(EA\Engine\Types\Text), 'America/Sao_Pau...')
#1 /var/www/html/application/controllers/Appointments.php(590): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#2 /var/www/html/system/core/CodeIgniter.php(481): Appointments->ajax_register_appointment()
#3 /var/www/html/index.php(341): require_once('/var/www/html/s...')
#4 {main}
