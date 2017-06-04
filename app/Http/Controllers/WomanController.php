<?php

namespace App\Http\Controllers;

use App\Woman;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WomanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $begin = new Carbon('4 weeks ago');
        $end = new Carbon(Carbon::now()->addYears(1));

        $women = self::getByRange($begin, $end);

        return view('woman.index')->with('women', $women);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('woman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Woman::create($request->all())) {
            return redirect()
                ->back()
                ->withSuccess('Assistida adicionada com sucesso!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Woman  $woman
     * @return \Illuminate\Http\Response
     */
    public function show(Woman $woman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Woman  $woman
     * @return \Illuminate\Http\Response
     */
    public function edit(Woman $woman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Woman  $woman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Woman $woman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Woman  $woman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Woman $woman)
    {
        //
    }

    public function scopeBetween($query, Carbon $from, Carbon $to)
    {
        $query->whereDate('date', '>=', $from);
        $query->whereDate('date', '<', $to);
    }

    public function modifyRange(Request $request) {
        $begin = new Carbon(str_replace('/', '-',$request->begin));
        $end = new Carbon(str_replace('/', '-',$request->end));

        $reports = Woman::getByRange($begin, $end);

        return view('woman.index')
            ->withReports($reports)
            ->withBegin($begin->Format('d/m/Y'))
            ->withEnd($end->Format('d/m/Y'));
    }
    //
    // public function getDateAttribute()
    // {
    //     $carbon = Carbon::createFromFormat('Y-m-d', $this->attributes['day']);
    //     return $carbon->format('d/m/Y');
    // }
    //
    public static function getByRange($begin, $end) {
        $women = Woman::paginate(20);
        return $women;
    }
    //
    // public function setDateAttribute($value)
    // {
    //     $carbon = Carbon::createFromFormat('d/m/Y', $value);
    //     $this->attributes['day'] = $carbon->format('Y-m-d');
    // }
}
