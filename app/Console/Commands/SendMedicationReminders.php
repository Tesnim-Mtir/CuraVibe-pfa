<?php

namespace App\Console\Commands;
use App\Services\SmsService;
use App\Models\Traitment;
use App\Models\Prise_horaire;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Twilio\Rest\Client;
use App\Notifications\MedicationReminderNotification;

class SendMedicationReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-medication-reminders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    protected $smsService;





   
    /**
     * Execute the console command.
     */
   

     public function handle()
     {
        $currentHour = Carbon::now()->hour;
 

        $treatments = Traitment::where('is_current', true)->get();

        foreach ($treatments as $treatment) {
          
            $heuresPrises = $treatment->prisesHoraires()->where('heure', $currentHour)->get();

        }
              
        foreach ($heuresPrises as $heurePrise) {
            $heurePrise->user->notify(new MedicationReminderNotification());
        }
   
         $this->info('Rappels envoyés avec succès.');
     }



    

  
      
   

   
}
 
    
