<?php
namespace App\Notifications;

use App\Models\BookTransition;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BookRequestNotification extends Notification
{
    use Queueable;

    public $bookTransition;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(BookTransition $bookTransition)
    {
        $this->bookTransition = $bookTransition;

        // dd($bookTransition);
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->greeting('Hello ', $this->bookTransition->user->name)
                    ->action('View Your Book Request', url(route('admin.book-transition.show', $this->bookTransition->id)))
                    ->line('Your Status is' . $this->bookTransition->request_status)
                    ->line('Thank you.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
