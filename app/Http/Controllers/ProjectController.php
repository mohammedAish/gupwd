<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    //

    public function index()
    {

        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    // عرض صفحة إنشاء مشروع جديد
    public function create()
    {
        return view('admin.projects.create');
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
      //  dd($data);
        $project = Project::create($data);


        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    // عرض مشروع معين
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    // تعديل مشروع
    public function edit(Project $project,$id)
    {
       // dd('dd');
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));

    }

    // تحديث مشروع
    public function update(Request $request,$id)
    {
        $project = Project::findOrFail($id);

        $request->validate([
            'name_ar' => 'required|string|max:255',
            'description_ar' => 'required|string',
            'name_en' => 'required|string|max:255',
            'description_en' => 'required|string',
            'image' => 'nullable',
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
        $project->update($data);


        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    // حذف مشروع
    public function destroy(Project $project)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
   
}

public function status($id){
    $project=Project::findOrFail($id);
    if($project->status == '0'){
      $staus ='1';
    }else
    $staus ='0';
    $project = Project::whereId($id)->update([
     'status' =>$staus,
 ]);
return redirect()->route('projects.index')->with('success' ,__('تم  تعديل الحالة'));

}

}
