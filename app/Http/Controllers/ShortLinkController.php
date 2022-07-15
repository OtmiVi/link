<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShortLinkController extends Controller
{
    public function store(Request $request){
        $inputData = $request->input();

        $data = [
            'short_link' => Str::random(6),
            'link' => $inputData['link']
        ];
        $item = (new ShortLink())->create($data);

        if($item){
            return redirect()->to('/')->with(['success'=> 'a']);
        }
        else{
            return redirect()->to('/')->withInput()->withErrors(['message' => "Невдале створення"]);
        }
        
    }

    public function index(){
        $links = ShortLink::all();
        return view('index', compact('links'));
    }

    public function redirect($shortLink){
        $item = ShortLink::where('short_link','=', $shortLink)->first();
        return redirect()->away($item->link);
    }
}
