<?php

namespace App\Http\Controllers;
use App\Models\Group;
use App\Models\Item;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ItemController extends Controller
{
    protected $module ="";

    public function __construct(Request $request)
    {
        $this->module = $request->segment(1);
    }
    public function index()
    {   $groups = Group::get(['title','id']);
        $items = Item::with('user')->orderBy('created_at', 'desc')->paginate(10);
        return view('backend.home',['items'=> $items,'groups'=>$groups]);

    }

    public function create()
    {
        $module  = $this->module;
        $groups =Group::all();
        return view('backend.item-create-edit', ['groups'=>$groups, 'module'=>$module]);
    }

    public function store(Request $request)
    {
        $item =Item::create($request->all());
        $item->group()->attach($request->group_id);
        $item->save();
        Toastr::success('Bạn đã tạo thành công', 'Thành công');
        return redirect()->route('home.index');
    }

    public function edit($id)
    {
        $module  = $this->module;
        $item = Item::findOrFail($id);
        $groups = Group::all();
        return view('backend.item-create-edit', ['item'=>$item ,'groups'=>$groups, 'module'=>$module]);
    }

    public function update(Request $request,$id)
    {
        $item = Item::findOrFail($id);
        $item->group()->sync($request->group_id);
        $item->update($request->all());
        Toastr::success('Bạn đã sửa thành công', 'Thành công');
        return redirect()->route('home.index');
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->group()->detach();
        $item->delete();
       return response()->json('Đã xoá');
    }

    public function show()
    {
        $module= $this->module;
        $items = Item::with('user')->where('module',$module)->orderBy('created_at', 'desc');
        return view('backend.home',['items'=> $items, 'module'=>$module]);
    }
    public function search(Request $request)
    {
        $it = Item::query()->with('group');
        $groups = Group::get(['title','id']);
        if($request->title)
        {
            $it->where('title','like','%'.$request->title.'%' );
        }
        if($request->status)
        {
            $it->where('status','=',$request->status);
        }
        if($request->position)
        {
            $it->where('position','like',$request->position);
        }
        if($request->group)
        {
            $it->whereHas('groups', function ($q) use ($request) {
                $q->where('id', '=', $request->group_id);
            });
        }
        if($request->from and $request->to)
        {
            $it->whereBetween('created_at',[$request->from ,$request->to]);
        }

        $items = $it->paginate(10);

        return view('backend.search',['items'=>$items, 'groups'=>$groups]);

    }
}
