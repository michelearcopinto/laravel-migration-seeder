<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PageController extends Controller
{
    public function index()
    {

        $title = 'Lista Treni';

        $table_headers_values = [
            'Azienda',
            'Stazione di partenza',
            'Stazione di arrivo',
            'Orario di partenza',
            'Orario di arrivo',
            'Codice Treno',
            'Numero Carrozze',
            'In orario',
            'Cancellato'
        ];

        $trains = Train::orderBy('departure_time')->get();

        return view('pages.home', compact('title', 'table_headers_values', 'trains'));
    }

    public function index_filtered()
    {

        $title = 'Lista Treni filtrati';

        $table_headers_values = [
            'Azienda',
            'Stazione di partenza',
            'Stazione di arrivo',
            'Orario di partenza',
            'Orario di arrivo',
            'Codice Treno',
            'Numero Carrozze',
            'In orario',
            'Cancellato'
        ];

        $trains = Train::where('departure_time', '>', Carbon::now())->orderBy('departure_time')->get();;

        return view('pages.about', compact('title', 'table_headers_values', 'trains'));
    }
}
