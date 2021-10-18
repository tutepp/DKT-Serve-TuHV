<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Brian2694\Toastr\Toastr;
use Illuminate\Support\Facades\Redirect;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::where('parent_id',0)->get();;
        return view ('backend.group',['groups'=>$groups]);
    }
    public function create()
    {
        $groups =Group::where('parent_id',0)->get();
        return view('backend.create-edit-group', ['groups'=>$groups]);
    }
    public function store(Request $request)
    {
        $group =Group::create($request->all());
        $group->save();
        Toastr::success('Bạn đã tạo thành công', 'Thành công', ["positionClass" => "toast-top-right"]);
        return Redirect::back();
    }
    public function edit($id)
    {
        $group = Group::findOrFail($id);
        $groups = Group::where('parent_id',0)->get();
        return view('backend.create-edit-group', ['group'=>$group ,'groups'=>$groups]);
    }
    public function update(Request $request,$id)
    {
        $group = Group::find($id);
        $group->update($request->all());
        Toastr::success('Bạn đã sửa thành công', 'Thành công', ["positionClass" => "toast-top-right"]);
        return redirect()->route('groups.index');
    }
    public function destroy($id)
    {
        $group = Group::findOrFail($id);
        $group->item()->detach();
        $group->delete();
        return response()->json('Đã xoá');
    }



}
