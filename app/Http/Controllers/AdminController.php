<?php

namespace App\Http\Controllers;

use App\Models\Webcam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $webcams = Webcam::all();
        return view('admin.index', compact('webcams'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'stream_url' => 'required',
            'image_url' => 'required',
        ]);

        Webcam::create($validatedData);

        return redirect()->route('admin.index')->with('success', 'Webcam aggiunta con successo.');
    }

    public function edit(Webcam $webcam)
    {
        return view('admin.edit', compact('webcam'));
    }

    public function update(Request $request, Webcam $webcam)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'stream_url' => 'required',
            'image_url' => 'required',
        ]);

        $webcam->update($validatedData);

        return redirect()->route('admin.index')->with('success', 'Webcam aggiornata con successo.');
    }

    public function destroy(Webcam $webcam)
    {
        $webcam->delete();

        return redirect()->route('admin.index')->with('success', 'Webcam eliminata con successo.');
    }

    public function statistics()
    {
        $dailyViews = Webcam::select(DB::raw('DATE(created_at) as date'), DB::raw('SUM(views) as views'))
            ->groupBy('date')
            ->get();

        // Statistiche visualizzazioni webcam mensili
        $monthlyViews = Webcam::select(DB::raw('YEAR(created_at) as year'), DB::raw('MONTH(created_at) as month'), DB::raw('SUM(views) as views'))
            ->groupBy('year', 'month')
            ->get();

        // Statistiche visualizzazioni webcam totali
        $totalWebcamViews = Webcam::sum('views');

        // Statistiche visualizzazioni sito web mensili
        $monthlyWebsiteViews = DB::table('website_views')
            ->select(DB::raw('YEAR(created_at) as year'), DB::raw('MONTH(created_at) as month'), DB::raw('SUM(views) as views'))
            ->groupBy('year', 'month')
            ->get();

        // Statistiche visualizzazioni sito web totali
        $totalWebsiteViews = DB::table('website_views')->sum('views');

        // Statistiche visualizzazioni sito web semestrali
        $currentMonth = now()->month;
        $currentYear = now()->year;

        $semiAnnualWebsiteViews = DB::table('website_views')
            ->select(DB::raw('YEAR(created_at) as year'), DB::raw('MONTH(created_at) as month'), DB::raw('SUM(views) as views'))
            ->where(function ($query) use ($currentYear, $currentMonth) {
                $query->where('created_at', '>=', now()->subMonths(5)->startOfMonth())
                    ->orWhere(function ($query) use ($currentYear, $currentMonth) {
                        $query->where('created_at', '<=', now()->endOfMonth());
                    });
            })
            ->groupBy('year', 'month')
            ->get();

        return view('admin.statistics', compact('dailyViews', 'monthlyViews', 'totalWebcamViews', 'monthlyWebsiteViews', 'totalWebsiteViews', 'semiAnnualWebsiteViews'));
    }
}
