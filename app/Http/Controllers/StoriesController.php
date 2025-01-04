<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stories;

class StoriesController extends Controller
{
    public function index()
    {

        $stories = Stories::all();
        return view('admin.stories.index', compact('stories'));
    }

    // عرض صفحة إنشاء مشروع جديد
    public function create()
    {
        return view('admin.stories.create');
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
        ]);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $new_avatar_name = time() . '.' . $request->image->extension();
            $file->move(public_path('assets/images'), $new_avatar_name);
            $image = $new_avatar_name;
            $data['image'] = $image;
        }
        if ($request->hasFile('video')) {
            $file_video = $request->file('video');
            $new_avatar_name_video = time() . '.' . $request->video->extension();
            $file_video->move(public_path('assets/images'), $new_avatar_name_video);
            $video = $new_avatar_name_video;
            $data['video'] = $video;
        }
      //  dd($data);
        $story = Stories::create($data);


        return redirect()->route('stories.index')->with('success', 'Stories created successfully.');
    }

    // عرض مشروع معين
    public function show(Stories $story)
    {
        return view('admin.stories.show', compact('story'));
    }

    // تعديل مشروع
    public function edit(Stories $story,$id)
    {
       // dd('dd');
        $story = Stories::findOrFail($id);
        return view('admin.stories.edit', compact('story'));

    }

    // تحديث مشروع
    public function update(Request $request,$id)
    {
        $story = Stories::findOrFail($id);

        $request->validate([
            'name_ar' => 'required|string|max:255',
            'description_ar' => 'required|string',
            'name_en' => 'required|string|max:255',
            'description_en' => 'required|string',
            'image' => 'nullable',
            'video' => 'nullable',
        ]);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $new_avatar_name = time() . '.' . $request->image->extension();
            $file->move(public_path('assets/images'), $new_avatar_name);
            $image = $new_avatar_name;
            $data['image'] = $image;
        }
        if ($request->hasFile('video')) {
            $file_video = $request->file('video');
            $new_avatar_name_video = time() . '.' . $request->video->extension();
            $file_video->move(public_path('assets/images'), $new_avatar_name_video);
            $video = $new_avatar_name_video;
            $data['video'] = $video;
        }
      //  dd($data);
        $story->update($data);


        return redirect()->route('stories.index')->with('success', 'Stories updated successfully.');
    }

    // حذف مشروع
    public function destroy(Stories $story)
    {
        $story = Stories::findOrFail($id);
        $story->delete();

        return redirect()->route('stories.index')->with('success', 'Stories deleted successfully.');
   
}

public function status($id){
    $story=Stories::findOrFail($id);
    if($story->status == '0'){
      $staus ='1';
    }else
    $staus ='0';
    $story = Stories::whereId($id)->update([
     'status' =>$staus,
 ]);
return redirect()->route('stories.index')->with('success' ,__('تم  تعديل الحالة'));

}

}
