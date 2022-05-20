<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Company;

use App\Models\Employee;

class AdminController extends Controller
{
    public function company()
    {
        return view('admin.company');
    }
    public function uploadcompany(Request $request)
    {
        $data=new company;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('companyiamge',$imagename);

        $data->image=$imagename;

        $data->title=$request->title;

        $data->email=$request->email;

        $data->website=$request->website;

        $data->save();

        return redirect()->back()->with('message','Data added successfully');

    }

    public function showcompany()
    {
        $data=company::paginate(10);

        return view('admin.showcompany',compact('data'));
    }
    public function deletecompany($id)

    {
        $data=company::find($id);

        $data->delete();

        return redirect()->back()->with('message','Data delete successfully');
    }

    public function updateview($id)
    {
        $data=company::find($id);

        return view('admin.updateview',compact('data'));
    }
    public function updatecompany(Request $request,$id)
    {
        $data=company::find($id);


        $image=$request->image;

        if($image)

        {

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('companyiamge',$imagename);

        $data->image=$imagename;
        }

        $data->title=$request->title;

        $data->email=$request->email;

        $data->website=$request->website;

        $data->save();

        return redirect()->back()->with('message','Data updated successfully');



    }

    public function employee()
    {
        return view('admin.employee');
    }
    public function uploademployee(Request $request)
    {
        $data=new employee;

        $data->firstname=$request->firstname;

        $data->lastname=$request->lastname;

        $data->company=$request->company;

        $data->email=$request->email;

        $data->phone=$request->phone;

        $data->save();

        return redirect()->back()->with('message','Employee details added successfully');

    }
    public function showemployee()
    {
        $data=employee::paginate(10);

        return view('admin.showemployee',compact('data'));
    }
    public function deleteemployee($id)
    {
        $data=employee::find($id);

        $data->delete();

        return redirect()->back()->with('message','Employee details deleted successfully');
    }
    public function updatevie($id)
    {
        $data=employee::find($id);

        return view('admin.updatevie',compact('data'));
    }
    public function updateemployee(Request $request,$id)
    {
        $data=employee::find($id);

        $data->firstname=$request->firstname;

        $data->lastname=$request->lastname;

        $data->company=$request->company;

        $data->email=$request->email;

        $data->phone=$request->phone;

        $data->save();

        return redirect()->back()->with('message','Employee details updated successfully');
    }
}
