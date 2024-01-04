<?php

namespace App\Http\Controllers\Artikel;

use Carbon\Carbon;
use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class artikelController extends Controller
{
    public function index(Request $request) {
        $query = Artikel::orderBy('created_at', 'desc');

        // Filter using input type text
        if ($request->has('input_search')) {
            $query->where('judul_artikel', 'like', '%' . $request->input('input_search') . '%');
        }

        // Filter by date using dropdown
        $dateFilter = $request->input('sort_date');
        if ($dateFilter === 'latest') {
            $query->orderBy('created_at', 'desc');
        } elseif ($dateFilter === 'oldest') {
            $query->orderBy('created_at', 'asc');
        }

        // filter by topik using checkbox
        if ($request->has('topik')) {
            $query->where('topik', $request->input('topik'));
        }

        $data = $query->get();

        return view('pages.Artikel.artikel', [
            'data' => $data
        ]);
    }


    public function show($slug) {
        $data = Artikel::where('slug', $slug)
            ->firstOrFail();


        // dd($data);
        return view('pages.Artikel.artikel-detail',[
            'data' => $data
        ]);
    }
}
