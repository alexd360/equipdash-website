<?php

namespace App\Notifications;

use App\Models\FormSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class FormSubmissionNotification extends Notification
{
    use Queueable;

    public function __construct(
        protected FormSubmission $submission
    ) {}

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        $data = $this->submission->data;
        $type = str_replace('_', ' ', ucfirst($this->submission->form_type));

        $message = (new MailMessage)
            ->subject("New {$type} Submission - EquipDash")
            ->greeting("New {$type}")
            ->line("A new form submission has been received.");

        foreach ($data as $key => $value) {
            if ($value) {
                $label = str_replace('_', ' ', ucfirst($key));
                $message->line("**{$label}:** {$value}");
            }
        }

        $message->line('---')
            ->line("IP: {$this->submission->ip_address}")
            ->line("Submitted: {$this->submission->created_at->format('M d, Y g:ia')}")
            ->action('View in Admin', url('/admin/form-submissions'));

        return $message;
    }
}
