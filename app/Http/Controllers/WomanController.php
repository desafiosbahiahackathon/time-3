<?php

namespace App\Http\Controllers;

use App\Woman;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

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

    public function download(Request $request) {
        $style = '<style>
            table {
                width: 100%;
                border-collapse: separate;
                border-spacing: 0;
            }

            td, th {
                border: 1px solid #ddd;
                padding: 8px 10px;
                line-height: 1.42857143;
                vertical-align: top;
                text-align: center;
            }

            tr {
                background-color: #ffffff;
            }

            tr:nth-of-type(2n+1) {
                background-color: #f9f9f9;
            }
        </style>';

        $layoutStart = '
            <h1>Relatório</h1>
            <table>
                <thead>
                    <tr>
                        <th class="sorting_desc">Número MPU</th>
                        <th>Assistida</th>
                        <th>Idade</th>
                        <th>Endereço de visita</th>
                    </tr>
                </thead>
                <tbody>
        ';
        $layoutEnd = '</tbody></table>';

        $content = $style.$layoutStart.$request->content.$layoutEnd;

        $options = new Options();
        $options->set('defaultFont', 'Helvetica');

        $dompdf = new Dompdf($options);
        $dompdf->set_option('isHtml5ParserEnabled', true);
        $dompdf->loadHtml($content);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');
        // Render the HTML as PDF
        $dompdf->render();
        // Current DateTime
        $end = new Carbon(Carbon::now());
        // Output the generated PDF to Browser
        return $dompdf->stream('relatorio_assistidas_'.$end->Format('d-m-Y_H-i-s'));
    }
}
