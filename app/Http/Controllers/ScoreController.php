<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Team;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.scores.index', [
            'scores' => Score::latest()->get(),
            'teams' => Team::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'selects.*.team_id' => 'required',
        ]);

        if ($request->selects == null) {
            flash('Pilih tim terlebih dahulu!')->error();
            return back();
        }
        // return $data;
        foreach ($request->selects as $key => $value) {
            Score::create($value);
        }
        flash('Data berhasil ditambahkan!')->success();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Score $score)
    {
        $request->validate([
            'selects.*.team_id' => 'nullable',
        ]);
        $data = $request->except('_token');

         if ($data['win'] || $data['draw'] || $data['lose']) {
            // bagaimana cara mengetahui dia menang berapa kali?
            // jawabannya: $data['win'], karena $data['win'] berisi jumlah kemenangan, misal 2, maka dia menang 2 kali
            // jadi, points = 2 * 3 = 6
            $data['points'] = $data['win'] * 3 + $data['draw'] * 1 + $data['lose'] * 0;
            // cara baca: dia menang 2 kali, seri 1 kali, kalah 1 kali, maka points = 2 * 3 + 1 * 1 + 1 * 0 = 7
        } else {
            $data['points'] = 0;
        }

        $score->update($data);
        flash('Data update terbaru berhasil di simpan!')->success();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Score $score)
    {
        $score->delete();
        flash('Data berhasil dihapus!')->success();
        return back();
    }
}
