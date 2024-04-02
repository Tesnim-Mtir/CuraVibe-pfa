<?php

namespace App\Console\Commands;
use App\Services\SmsService;
use App\Models\Traitment;
use Carbon\Carbon;
use Illuminate\Console\Command;

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
        //

        
        $now = Carbon::now();
        $traitements = Traitment::where('is_current', true)->get();

        foreach ($traitements as $traitement) {
                // Vérifiez si c'est l'heure de prise du traitement
            if ($now->format('H:i') == $traitement->heure_de_prise) {
                // Envoyez un SMS à l'utilisateur
                $message = "Il est temps de prendre votre médicament.";
                $this->smsService->sendSms($traitement->user->phone_number, $message);
            }
    }
}
}