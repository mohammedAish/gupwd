<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;

class PartnersController extends Controller
{
    public function index()
    {

        $partners = Partner::all();
        return view('admin.partners.index', compact('partners'));
    }

    // عرض صفحة إنشاء مشروع جديد
    public function create()
    {
        return view('admin.partners.create');
    }

    // تخزين مشروع جديد
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
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
        $partner = Partner::create($data);


        return redirect()->route('partners.index')->with('success', 'Partner created successfully.');
    }

    // عرض مشروع معين
    public function show(Partner $Partner)
    {
        return view('admin.partners.show', compact('partner'));
    }

    // تعديل مشروع
    public function edit(Partner $Partner,$id)
    {
       // dd('dd');
        $partner = Partner::findOrFail($id);
        return view('admin.partners.edit', compact('partner'));

    }

    // تحديث مشروع
    public function update(Request $request,$id)
    {
        $partner = Partner::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
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
        $partner->update($data);


        return redirect()->route('partners.index')->with('success', 'Partner updated successfully.');
    }

    // حذف مشروع
    public function destroy(Partner $Partner)
    {
        $Partner = Partner::findOrFail($id);
        $Partner->delete();

        return redirect()->route('partners.index')->with('success', 'Partner deleted successfully.');
   
}


}
