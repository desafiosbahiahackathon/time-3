<?php

namespace App\Http\Controllers;

use App\Visit;
use App\Woman;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visits = Visit::paginate(20);

        return view('visit.index')->with('visits', $visits);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dailyVisits()
    {
        $endDate = Carbon::now()->toDateString();
        $startDate = Carbon::now()->subWeekdays(15)->toDateString();

        $visits = DB::select("SELECT women.name, t.date, women.id, women.meeting_neighborhood, women.mpu_number FROM women join
                        (SELECT t1.*
                        FROM visits t1
                        WHERE t1.id = (SELECT t2.id
                                         FROM visits t2
                                         WHERE t2.women_id = t1.women_id
                                         ORDER BY t2.date DESC
                                         LIMIT 1)

                        ) as t where t.women_id = women.id and t.date < CURRENT_DATE() - INTERVAL 1 MONTH order by t.date asc LIMIT 10
                    ");

        $mapsURL = "https://maps.googleapis.com/maps/api/directions/json?origin=Engenho+Velho+de+Brotas,Salvador&destination=Dendenzeiros,Salvador&waypoints=";
        for ($i=0; $i < count($visits); $i++) {
            $mapsURL .= $visits[$i]->meeting_neighborhood . "|";
        }
        $mapsURL .= "&key=AIzaSyDsARP9xoHf3uMnUMKcrgMKNBlpvJd6ODE";

        // dd($mapsURL);

        // $visits = Woman::join(
        //    'visits',
        //     function ($join) {
        //         $join->on('women.id', '=', 'visits.women_id');
        //     }
        // )
        // ->orderBy('women.mpu_number', 'asc')
        // ->orderBy('visits.date', 'desc')
        // ->selectRaw('women.name, women.mpu_number, women.meeting_neighborhood, visits.date')
        // ->groupBy('women.name')
        // ->groupBy('women.mpu_number')
        // ->groupBy('women.meeting_neighborhood')
        // ->groupBy('visits.date')
        // ->groupBy('women.name')
        // ->havingRaw("visits.date BETWEEN '" . $startDate . "' AND '" . $endDate . "'")
        // ->limit(1)
        // ->get();
        // dd($visits);
        return view('visit.daily')->withVisits($visits);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function show(Visit $visit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function edit(Visit $visit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visit $visit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visit $visit)
    {
        //
    }
}
