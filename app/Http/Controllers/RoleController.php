<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index')
            ->with('roles', $roles);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if( $request->ajax() ){
            // $role = Role::firstOrNew(['id' => $request['rid']]);
            $role = Role::find($request['rid']);
            if( !$role ){
                $role = new Role;
            }
            
            $role->name = $request['rnm'];
            $role->status = $request['rst'];
            $role->save();

            return response()->json(['data' => 'Success',
                                     'nm' => $request['rnm'],
                                     'st' => $request['rst']
                                    ]);
        }        
        return response()->json(['data' => 'Not Success, Http Request..']);
    }

    public function show(Role $role)
    {
        //
    }

    public function edit(Role $role)
    {
        //
    }

    public function update(Request $request, Role $role)
    {
        //
    }

    public function destroy(Role $role)
    {
        echo "hello";

        return back();
    }
}
