<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
  public function up(): void
  {
    $this->migrator->add('general.paydia_merchant_id', '');
    $this->migrator->addEncrypted('general.paydia_client_key', '');
    $this->migrator->addEncrypted('general.paydia_client_secret', '');
    $this->migrator->add('general.username', '');
    $this->migrator->addEncrypted('general.password', '');
    $this->migrator->add('general.announcement', '');
  }
};
