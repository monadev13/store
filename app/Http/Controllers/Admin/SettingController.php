<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function edit(){
        $setting = Setting::first();
        return view('admin.setting.edit',compact('setting'));
    }

    public function update(){
        $validate = Validator::make(request()->all(),[
            'logo'       => 'required',
            'ficon'      => 'required',
            'title_site' => 'required',
            'address'    => 'required',
            'twitter'    => 'required',
            'instagram'  => 'required',
            'facebook'   => 'required',
            'linkedin'   => 'required',
            'youtube'    => 'required',
            'whats-up'   => 'required',
            'email'      => 'required',
            'phone'      => 'required',
            'map'        => 'required'

        ]);
        if($validate->fails()){
            return $validate->getMessageBag();
        }
        $setting = Setting::find(request()->post("id"));

        $setting->update([
            'logo'       => request()->logo,
            'ficon'      => request()->ficon,
            'title_site' => request()->title_site,
            'address'    => request()->address,
            'twitter'    => request()->twitter,
            'instagram'  => request()->instagram,
            'facebook'   => request()->facebook,
            'linkedin'   => request()->linkedin,
            'youtube'    => request()->youtube,
            'whats_up'   => request()->whats_up,
            'email'      => request()->email,
            'phone'      => request()->phone,
            'map'        => request()->map

        ]);
        return redirect()->back()->with('Success','Setting Has Been Updeted Sucessfull');
    }
}
