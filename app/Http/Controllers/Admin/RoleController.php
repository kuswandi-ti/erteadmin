<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:role_create,' . getGuardNameAdmin()])->only(['create', 'store']);
        $this->middleware(['permission:role_delete,' . getGuardNameAdmin()])->only(['destroy']);
        $this->middleware(['permission:role_index,' . getGuardNameAdmin()])->only(['index', 'show', 'data']);
        $this->middleware(['permission:role_restore,' . getGuardNameAdmin()])->only(['restore']);
        $this->middleware(['permission:role_update,' . getGuardNameAdmin()])->only(['edit', 'update']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
