<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\frontend\AboutUs;
use App\Models\frontend\Clients;
use App\Models\frontend\ContactUs;
use App\Models\Frontend\Index;
use App\Models\frontend\Projects;
use App\Models\frontend\Services;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function Change()
    {
        $data = Index::first();
        return view('Frontend.index', compact('data'));

    }
    public function Change1()
    {
        $data1 = AboutUs::first();
        return view('Frontend.about', compact('data1'));

    }
    public function Change2()
    {
        $data2 = Clients::first();
        return view('Frontend.clients', compact('data2'));

    }
    public function Change3()
    {
        $data3 = ContactUs::first();
        return view('Frontend.Contact', compact('data3'));

    }
    public function Change4()
    {
        $data4 = Projects::first();
        return view('Frontend.projects', compact('data4'));

    }
    public function Change5()
    {
        $data5 = Services::first();
        return view('Frontend.Services', compact('data5'));

    }
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $admin = Admin::orderBy('id')->paginate(5);
    //     return view('Backend.index', compact('admin'));
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     return view('Backend.create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     $data = $request->validate([
    //         'title' => 'required|max:255',
    //         'description' => 'required',
    //     ]);
    //     //create a new content using the content model
    //     Admin::create($data);
    //     return redirect()->route('admin.index')->with('sucess', "Content posted successfully!");
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     return view('Backend.index', compact('Admin'));
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Request $request, string $id)
    // {
    //     $data = Admin::find($id);
    //     //show the edit form and pass the content
    //     return View('Backend.Edit')
    //         ->with(['admin' => $data]);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, Admin $admin, string $id)
    // {
    //     $validatedData = $request->validate([
    //         'title' => 'required|max:250',
    //         'description' => 'required',
    //         // 'image_url'=>['nullable','mimes:'jpeg,'jpg']

    //     ]);
    //     $admin->update($validatedData);
    //     // $content->fill($request->post())->save();
    //     return redirect()->route('admin.index')->with('sucess', 'Content Created');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Request $request, string $id)
    // {

    //     $content = Admin::findOrFail($id);
    //     $content->delete($request->first());
    //     // $content->delete($content, $id);
    //     return redirect()->route('admin.index')->with('success', 'Content deleted');
    // }




}