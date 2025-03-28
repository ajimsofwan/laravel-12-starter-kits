<?php

return [
  'verify_subject' => 'Welcome to ' . config('app.name') . '. This is your account verification email.',
  'verify_email' => 'Click the button below to verify your email address.',
  'verify_salutation' => 'If you did not create an account, no further action is required.',
  'verify_action' => 'Verify Email Address',

  'reset_subject' => 'Reset Password ' . config('app.name'),
  'reset_email' => 'You are receiving this email because we received a password reset request for your account.',
  'reset_action' => 'Reset Password',
  'reset_line_1' => 'This password reset link will expire in 60 minutes.',
  'reset_line_2' => 'If you did not request a password reset, no further action is required.',
  'reset_salutation' => 'Thank you.',
];
