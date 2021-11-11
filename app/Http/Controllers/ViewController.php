<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $resources = [];
        if($request->session()->exists('resources')) {
            $resources = $request->session()->get('resources');
        }
        $data = [];
        $data['resources'] = $resources;
        return view("views.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("views.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->input("id");
        $name = $request->input("name");
        $color = $request->input("color");
        $resources = [];
        
        if($request->session()->exists('resources')) {
            $resources = $request->session()->get('resources');
        }
        $idRequerida = 0;
        foreach($resources as $resource ) {
            if($resource['id'] > $idRequerida){
                $idRequerida = $resource['id'];
            }
        }
        $id = $idRequerida + 1;
        $resource = ['id' => $id, 'name' => $name, 'color' => $color];
        
        if(isset($resources[$id])) {
            return back()->withInput();
        } else {
            $resources[$id] = $resource;
        }
        $request->session()->put('resources', $resources);
        return redirect("resource");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if($request->session()->exists("resources") && isset($request->session()->get("resources")[$id])) {
            $resource = $request->session()->get("resources")[$id];
            $data = [];
            $data["resource"] = $resource;
            return view("views.show", $data);
        }
        return redirect("resource");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
      if($request->session()->exists("resources") && isset($request->session()->get("resources")[$id])) {
            $resource = $request->session()->get("resources")[$id];
            $data = [];
            $data["resource"] = $resource;
            return view("views.edit", $data);
        } else {
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->session()->exists('resources')) {
            $resources = $request->session()->get('resources');
            $name = $request->input('name');
            $color = $request->input('color');
            
            $resource['id'] = $id;
            $resource['name'] = $name;
            $resource['color'] = $color;
            $resources[$id] = $resource;
            $request->session()->put('resources', $resources);
                
            return redirect('resource');
        } else {
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
    public function destroy(Request $request, $id)
    {
        if($request->session()->exists("resources")) {
            $resources = $request->session()->get("resources");
            if(isset($resources[$id])) {
                unset($resources[$id]);
                $request->session()->put("resources", $resources);
            }
        }
        return redirect("resource");
    }
    
    function flush(Request $request) {
    $request->session()->flush();
    return redirect("resource");
    }
}
