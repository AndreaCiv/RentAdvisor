<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Resources\Annuncio;
use App\Models\Resources\Opzione_Annuncio;
use App\Models\Catalogo;

class Statistiche extends Model
{ 

    public function get_numero_annunci(){
        $annunci_totali = Annuncio::count();
        return $annunci_totali;
    }

    public function get_numero_richieste($filtri){

        $annunci_richiesti = Opzione_Annuncio::select()
                            ->join('Annuncio', 'Annuncio.id', '=', 'id_annuncio');

        if($filtri['locazione_inizio'])
            $annunci_richiesti->where('data_opzione','<', $filtri['locazione_inizio']);
        if($filtri['locazione_fine'])
            $annunci_richiesti->where('data_opzione','>', $filtri['locazione_fine']);
        if($filtri['tipologia']=='appartamento') 
            $annunci_richiesti->where('appartamento');
        if($filtri['tipologia']=='posto_letto')
            $annunci_richiesti->where('posto_letto');

        $numero_richieste = count($annunci_richiesti);

        return $numero_richieste;
    }

}