<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Slider\CreateSliderRequest;
use App\Http\Requests\Admin\Slider\UpdateSliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Traits;
use App\Traits\ImageTrait;

class SliderController extends Controller
{
    use ImageTrait;

    public function index(){
        $sliders = Slider::all();
        return view('admin.slider.index',compact('sliders'));
    }

    public function create(){
        return view('admin.slider.create');
    }

    public function store(CreateSliderRequest $request){



        if ($request->hasFile('img')) {
            $filename = time() . '_' . 'slider' . '.'. $request->file('img')->getClientOriginalName();
            $file = $this->uploadImage($request->file("img"), $filename, 'slider');
        }

        Slider::create([
            'img' => $filename,
        ]);

        return redirect()->route('slider.index')->with('success','Slider has been created successfully.');

    }
    public function edit($id){
        $slider = Slider::find($id);
        return view('admin.slider.index');
    }

    public function update(UpdateSliderRequest $request){
        if ($request->hasFile('image')) {
            $filename = time() . '_' . 'slider' . '.'. $request->image->extension();
            $this->uploadImage($request->image, $filename, 'slider');

            $slider =Slider::find($request->id);
            $slider->update ([
                'img' => $filename ?? $slider->img,

            ]);
            return redirect()->route('admin.slider.index')->with('success','Slider has been updated successfully.');
        }


    }
    public function destroy($id){
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->route('admin.slider.index')->with('success','Slider has been deleted successfully.');

    }
}
