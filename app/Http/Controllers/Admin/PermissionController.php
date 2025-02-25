<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:permission_create,' . getGuardNameAdmin()])->only(['create', 'store']);
        $this->middleware(['permission:permission_delete,' . getGuardNameAdmin()])->only(['destroy']);
        $this->middleware(['permission:permission_index,' . getGuardNameAdmin()])->only(['index', 'show', 'data']);
        $this->middleware(['permission:permission_update,' . getGuardNameAdmin()])->only(['edit', 'update']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.permission.index');
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

    public function data(Request $request)
    {
        $query = Permission::where('id', '<>', 0)->get();

        return datatables($query)
            ->addIndexColumn()
            ->addColumn('action', function ($query) {
                if (canAccess(['permission_update'])) {
                    $update = '
                                <a class="btn btn-warning me-1 mb-1 btn-sm" href="' . route('admin.permission.edit', $query) . '">' . __("Perbarui") . '
                                </a>
                        ';
                }
                if (canAccess(['permission_delete'])) {
                    $delete = '
                                <a class="btn btn-danger me-1 mb-1 btn-sm" href="' . route('admin.permission.destroy', $query) . '">' . __("Hapus") . '
                                </a>
                        ';
                }
                if (canAccess(['permission_update', 'permission_delete'])) {
                    return (!empty($update) ? $update : '') . (!empty($delete) ? $delete : '');
                } else {
                    return '<span class="badge badge-info">' . __("Tidak ada akses") . '</span>';
                }
            })
            ->rawColumns(['action'])
            ->escapeColumns([])
            ->make(true);
    }
}
