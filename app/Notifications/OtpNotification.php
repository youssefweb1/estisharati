<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OtpNotification extends Notification
{
    use Queueable;

    protected $otp;

    public function __construct($otp)
    {
        $this->otp = $otp;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('كود OTP لإعادة تعيين كلمة المرور')
            ->line('كود OTP الخاص بك هو: ' . $this->otp)
            ->line('يرجى استخدام هذا الكود لإعادة تعيين كلمة المرور الخاصة بك.');
    }
}
