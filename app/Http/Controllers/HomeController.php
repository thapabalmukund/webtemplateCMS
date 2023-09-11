<?php

namespace App\Http\Controllers;

use App\Models\Frontend\Index;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }
    public function Display()
    {
        return view('Frontend.index');
    }

    public function index()
    {
        return view('dashboard.dashboard-system');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Home.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'heading1' => 'required',
            'heading2' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $fileName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/image', $fileName);

        $home = new Index;
        $home->heading1 = $request->input('heading1');
        $home->heading2 = $request->input('heading2');
        $home->description = $request->input('description');
        $home->image = $fileName;
        $home->save();

        return redirect()->route('index.index')->with([
            'message' => 'User Added Successfully!',
            'alert-type' => "success",
        ]);

    }
}