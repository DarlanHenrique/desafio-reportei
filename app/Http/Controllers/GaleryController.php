<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeries = Galery::all();
        return view('admin.galeries.index', compact('galeries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galery = new Galery();
        return view('admin.galeries.create', compact('galery'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = Str::slug("$request->name", '-');
        $data = $request->all();
        if ($request->hasfile('imagelink')) {
            $extension = $request->imagelink->getClientOriginalExtension();
            $nameFile = "$slug.{$extension}";
            $request->imagelink->storeAs('public/img/galeries', $nameFile);
            $data['imagelink'] = $nameFile;
        } else {
            unset($data['imagelink']);
        }
        $data['slug'] = $slug;
        galery::create($data);
        return redirect()->route('galeries.index')->with('success', true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function show(Galery $galery)
    {
        return view('admin.galeries.show', compact('galery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function edit(Galery $galery)
    {
        return view('admin.galeries.edit', compact('galery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galery $galery)
    {
        $slug = Str::slug("$request->name", '-');
        $data = $request->all();
        if ($request->hasfile('imagelink')) {
            $extension = $request->imagelink->getClientOriginalExtension();
            $nameFile = "$slug.{$extension}";
            $request->imagelink->storeAs('public/img/galeries', $nameFile);
            $data['imagelink'] = $nameFile;
        } else {
            unset($data['imagelink']);
        }
        $data['slug'] = $slug;
        $galery->update($data);
        return redirect()->route('galeries.index')->with('success', true);    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galery $galery)
    {
        $galery->delete();
        return redirect()->route('galeries.index')->with('success', true);
    }
}
