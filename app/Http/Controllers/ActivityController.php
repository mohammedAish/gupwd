<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
class ActivityController extends Controller
{
    //
    public function index()
    {

        $activities = Activity::all();
        return view('admin.activities.index', compact('activities'));
    }

    // عرض صفحة إنشاء مشروع جديد
    public function create()
    {
        return view('admin.activities.create');
    }

    // تخزين مشروع جديد
    public function store(Request $request)
    {
        $request->validate([
        
            'name_ar' => 'required|string|max:255',
            'description_ar' => 'required|string',
            'name_en' => 'required|string|max:255',
            'description_en' => 'required|string',
            'image' => 'required',
            'date' => 'required',
            'type' => 'required',
        ]);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $new_avatar_name = time() . '.' . $request->image->extension();
            $file->move(public_path('assets/images'), $new_avatar_name);
            $image = $new_avatar_name;
            $data['image'] = $image;
        }
      //  dd($data);
        $activities = Activity::create($data);


        return redirect()->route('activities.index')->with('success', 'Activity created successfully.');
    }

    // عرض مشروع معين
    public function show(Activity $Activity)
    {
        return view('admin.activities.show', compact('activities'));
    }

    // تعديل مشروع
    public function edit(Activity $Activity,$id)
    {
       // dd('dd');
        $activity = Activity::findOrFail($id);
        return view('admin.activities.edit', compact('activity'));

    }

    // تحديث مشروع
    public function update(Request $request,$id)
    {
        $Activity = Activity::findOrFail($id);

        $request->validate([
            'name_ar' => 'required|string|max:255',
            'description_ar' => 'required|string',
            'name_en' => 'required|string|max:255',
            'description_en' => 'required|string',
            'image' => 'nullable',
            'date' => 'required',
            'type' => 'required',  
        ]);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $new_avatar_name = time() . '.' . $request->image->extension();
            $file->move(public_path('assets/images'), $new_avatar_name);
            $image = $new_avatar_name;
            $data['image'] = $image;
        }
      //  dd($data);
        $Activity->update($data);


        return redirect()->route('activities.index')->with('success', 'Activity updated successfully.');
    }

    // حذف مشروع
    public function destroy(Activity $Activity)
    {
        $Activity = Activity::findOrFail($id);
        $Activity->delete();

        return redirect()->route('activities.index')->with('success', 'Activity deleted successfully.');
   
}

public function status($id){
    $Activity=Activity::findOrFail($id);
    if($Activity->status == '0'){
      $staus ='1';
    }else
    $staus ='0';
    $Activity = Activity::whereId($id)->update([
     'status' =>$staus,
 ]);
return redirect()->route('activities.index')->with('success' ,__('تم  تعديل الحالة'));

}
}
