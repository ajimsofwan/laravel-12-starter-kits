<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{

  public string $paydia_merchant_id;
  public string $paydia_client_key;
  public string $paydia_client_secret;
  public string $username;
  public string $password;
  public string $announcement;

  public static function group(): string
  {
    return 'general';
  }

  public static function encrypted(): array
  {
    return [
      'paydia_client_key',
      'paydia_client_secret',
      'password'
    ];
  }
}
