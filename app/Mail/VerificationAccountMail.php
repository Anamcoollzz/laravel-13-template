<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerificationAccountMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * user var
     */
    public User $user;

    /**
     * isVerificationCode var
     */
    private bool $isVerificationCode;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, bool $isVerificationCode)
    {
        $this->user = $user;
        $this->isVerificationCode = $isVerificationCode;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject(__('Verifikasi Akun'))->view('stisla.emails.verification-account', [
            'isVerificationCode' => $this->isVerificationCode,
        ]);
    }
}
