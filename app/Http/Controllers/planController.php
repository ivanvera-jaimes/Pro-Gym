<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Plan;
class planController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planes = plan::all();
        return view("planes.listarPlanes",compact(["planes"]));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("planes.formularioCrearPlan");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plan= Plan::create($request->all());
        return redirect()->route("planes.index");    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plan=Plan::find($id);
        return $plan;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plan = $this->show($id);
        return view("planes.formularioEditarPlan",compact(["plan"]));
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
        // $plan = $this->show($id);
        $plan = PLan::find($id);
        $plan->fill($request->all());
        $plan->save();
        return redirect()->route("planes.index");
    }

    /**
     * show the form to delete resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $plan = Plan::find($id);
        return view("planes.formularioEliminarPlan",compact(["plan"]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plan = Plan::find($id);
        $plan->delete();
        return redirect()->route("planes.index");
    }
}
