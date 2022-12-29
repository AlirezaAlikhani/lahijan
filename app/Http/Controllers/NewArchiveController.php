<?php

namespace App\Http\Controllers;

use App\Models\NewArchive;
use Illuminate\Http\Request;

class NewArchiveController extends Controller
{
    public function index()
    {
        $newArchives = NewArchive::all();
        return view('home' , compact('newArchives'));
    }

    public function fileImport(Request $request)
    {
        $validated = $request->validate([
            'file' => 'required',
        ]);
        Excel::import(new UsersImport, $request->file('file')->store('temp'));
        return back()->with('toastr-success' , 'کاربران جدید اضافه شد');
//        return back()->with('toastr-error' , 'این بخش در دسترس نیست');
    }
}
