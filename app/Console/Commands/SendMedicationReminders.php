<?php

namespace App\Console\Commands;
use App\Services\SmsService;
use App\Models\Traitment;
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
         $currentHour = now()->hour;
 
         // Récupérer tous les traitements actifs pour lesquels le temps de prise correspond à l'heure actuelle
         $treatments = Traitment::where('temps_prise', $currentHour)
             ->where('is_current', true) // S'assurer que le traitement est en cours
             ->get();
 
         foreach ($treatments as $treatment) {
             $treatment->user->notify(new MedicationReminderNotification());
         }
 
         $this->info('Rappels envoyés avec succès.');
     }
 
    
}