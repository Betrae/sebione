<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\UploadImage;

class DashboardController extends Controller
{
    /*Auth middleware */
    public function __construct() {
        $this->middleware(['auth']);
    }

    /*Return dashboard view */
    public function index() {
        return view('dashboard')->with('companies', Company::paginate(10));
    }

    /*Store Company */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'logo' => 'required',
            'website' => 'required',
        ]);

        Company::create([
            'name' => request('name'),
            'email' => request('email'),
            'logo' => UploadImage::upload($request, 'logo'),
            'website' => request('website')
        ]);

        return redirect('dashboard');
    }

    public function destroy($id) {
        Company::where('id', $id)->delete();

        return redirect('dashboard');
    }
}
