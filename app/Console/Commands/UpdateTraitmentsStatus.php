<?php

namespace App\Console\Commands;
use App\Models\Traitment;
use Carbon\Carbon;

use Illuminate\Console\Command;

class UpdateTraitmentsStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-traitments-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Récupérer la date actuelle
        $now = Carbon::now();
        // Journalisation pour déboguer
        $this->info('Date actuelle : ' . $now);
    
        // Mettre à jour les traitements où end_date est supérieur à la date actuelle
        $count = Traitment::where('end_date', '<=', $now)->update(['is_current' => false]);
        // Journalisation pour voir combien d'enregistrements ont été mis à jour
        $this->info('Nombre d\'enregistrements mis à jour : ' . $count);
    }
    

        // Récupérer tous les traitements en cours
       // $traitements = Traitment::where('is_current', true)->get();

        // Parcourir tous les traitements et vérifier la date de fin
       // foreach ($traitements as $traitement) {
           // if ($traitement->end_date && $traitement->end_date <= $now) {
                // Mettre à jour is_current à false
               // $traitement->is_current = false;
                //$traitement->update();
            }
       //}
   // }


