<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    public function index()
    {

        $reports = Report::all();
        return view('admin.reports.index', compact('reports'));
    }

    // عرض صفحة إنشاء مشروع جديد
    public function create()
    {
        return view('admin.reports.create');
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
            'file' => 'required',
        ]);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $new_avatar_name = time() . '.' . $request->image->extension();
            $file->move(public_path('assets/images'), $new_avatar_name);
            $image = $new_avatar_name;
            $data['image'] = $image;
        }
        if ($request->hasFile('file')) {
            $file_file = $request->file('file');
            $new_avatar_name_file = time() . '.' . $request->file->extension();
            $file_file->move(public_path('assets/images'), $new_avatar_name_file);
            $file = $new_avatar_name_file;
            $data['file'] = $file;
        }
      //  dd($data);
        $report = Report::create($data);


        return redirect()->route('reports.index')->with('success', 'Report created successfully.');
    }

    // عرض مشروع معين
    public function show(Report $report)
    {
        return view('admin.reports.show', compact('report'));
    }

    // تعديل مشروع
    public function edit(Report $report,$id)
    {
       // dd('dd');
        $report = Report::findOrFail($id);
        return view('admin.reports.edit', compact('report'));

    }

    // تحديث مشروع
    public function update(Request $request,$id)
    {
        $report = Report::findOrFail($id);

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
        if ($request->hasFile('file')) {
            $file_file = $request->file('file');
            $new_avatar_name_file = time() . '.' . $request->file->extension();
            $file_file->move(public_path('assets/images'), $new_avatar_name_file);
            $file = $new_avatar_name_file;
            $data['file'] = $file;
        }
      //  dd($data);
        $report->update($data);


        return redirect()->route('reports.index')->with('success', 'Report updated successfully.');
    }

    // حذف مشروع
    public function destroy(Report $report)
    {
        $report = Report::findOrFail($id);
        $report->delete();

        return redirect()->route('reports.index')->with('success', 'Report deleted successfully.');
   
}

public function status($id){
    $report=Report::findOrFail($id);
    if($report->status == '0'){
      $staus ='1';
    }else
    $staus ='0';
    $report = Report::whereId($id)->update([
     'status' =>$staus,
 ]);
return redirect()->route('reports.index')->with('success' ,__('تم  تعديل الحالة'));

}
}
