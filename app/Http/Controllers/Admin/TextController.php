<?php

namespace App\Http\Controllers\Admin;

use App\Text;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TextController extends Controller
{
    //
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewAdvantages()
    {
        $user = Auth::user();
        $text = Text::getAdvantagesTexts();
        return view('admin/texts/viewAdvantages', ['text' => $text, 'user' => $user]);
    }

    public function editAdvantages($id){
        dd($id);
        Text::getTextsById($id);
        return redirect()->route('viewAdvantages');
    }

}
