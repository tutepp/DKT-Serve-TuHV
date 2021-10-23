<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all();
        return view('backend.setting',['settings'=>$settings]);
    }

    public function update(Request $request)
    {
        $settings = $request->all();
        foreach ($settings as $key => $setting) {
            if ($key == '_method' || $key == '_token'){
                continue;
            }
            $set = Setting::where('name', $key)->first();
            $set->update(['val' => $setting]);
        }
        return back();
    }
}
