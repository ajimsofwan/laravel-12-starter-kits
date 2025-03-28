<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->subject(__('mail.verify_subject'))
                ->line(__('mail.verify_email'))
                ->salutation(__('mail.verify_salutation'))
                ->action(__('mail.verify_action'), $url);
        });

        ResetPassword::toMailUsing(function ($notifiable, string $token) {
            $url = url(route('password.reset', [
                'token' => $token,
                'email' => $notifiable->email,
            ], false));

            return (new MailMessage)
                ->subject(__('mail.reset_subject'))
                ->line(__('mail.reset_email'))
                ->action(__('mail.reset_action'), $url)
                ->line(__('mail.reset_line_1'))
                ->line(__('mail.reset_line_2'))
                ->salutation(__('mail.reset_salutation'));
        });
    }
}
