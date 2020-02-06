<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store(Request $request, $micropost_id)
    {
        \Auth::user()->favo($micropost_id);
        
        //ここの戻り先はもう一度確認
        return back();
    }
    
    public function destroy($micropost_id)
    {
        \Auth::user()->unfavo($micropost_id);
        
        //ここの戻り先ももう一度確認
        return back();
    }
}
