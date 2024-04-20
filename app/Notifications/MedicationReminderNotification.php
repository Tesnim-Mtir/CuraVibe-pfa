<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\TwilioMessage;
use Twilio\Rest\Client; 


class MedicationReminderNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['twilio'];
    }

    /**
     * Get the mail representation of the notification.
    */
  /*  public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Rappel de prise de médicaments')
                    ->line('C\'est le moment de prendre votre médicament !');
    } 
*/

    public function toTwilio($notifiable)
    {   $phoneNumber = $notifiable->routeNotificationForTwilio();
        $twilio = new Client(config('services.twilio.sid'), config('services.twilio.token'));
    
        $twilio->messages->create(
            $phoneNumber, 
            [
                'from' => config('services.twilio.from'),
                'body' => 'C\'est le moment de prendre votre médicament !'
            ]
        );
    }



   // public function toDatabase($notifiable)
//{
   // return [
       // 'message' => 'C\'est le moment de prendre votre médicament !'
    //];
//}


    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
