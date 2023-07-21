<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Employes;
use Illuminate\Support\Facades\Redis;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = Employes::all();
        return view('index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Employes::create($request->all());
        return redirect()->route('employee.index')->with('message', 'add a new employee successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employes::find($id);
        return view('detail', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employes $employee)
    {
        return view('edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employes $employee)
    {
        $nrd = DB::update('UPDATE employes SET 社員番号 = ?, 氏名 = ?, 部署 =?, 性別 = ? WHERE ID = ?', [$request->社員番号,$request->氏名,$request->部署,$request->性別, $employee->ID]);
        return redirect()->route('employee.index')->with('message', 'apdate a new employee successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $nrd = DB::delete('DELETE from employes where id = ?',[$id]);
        return redirect()->back()->with('message', "delete successful!");
    }
}
