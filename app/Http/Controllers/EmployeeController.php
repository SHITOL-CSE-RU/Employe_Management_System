<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
    public function index()
    {
        $data['employees'] = Employee::simplePaginate(5);
        return view('welcome', $data);
    }
    public function view($id)
    {
        $data['employee'] = Employee::find($id);
        return view('employees.view', $data);
    }
    public function create()
    {
        return view('employees.create');
    }
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'job_title' => 'required|max:100',
            'joining_date' => 'required|date',
            'salary' => 'required|max:5',
            'email' => 'required|email',
            'mobile_no' => 'required|max:11',
            'address' => 'required|max:25'

        ];
        $cm = [
            'name.required' => 'Enter Your Name',
            'name.max' => 'Your name must be less 255 characters',
            'job_title.required' => 'Enter Your job title',
            'job_title.max' => 'Your job_title must lower 100 character',
            'joining_date.required' => 'Enter Your joining_date',
            'joining_date.date' => 'Enter Valid Date',
            'salary.required' => 'Enter Your Salary',
            'salary.max' => 'Your salary must be less than 5 character',
            'email.required' => 'Enter Your Email',
            'email.email' => 'Your email must be a valid email',
            'mobile_no.required' => 'Enter Your Mobile',
            'mobile_no.max' => 'Your mobile must be 11 character',
            'address.required' => 'Enter Your address',
            'address.max' => 'Your address must be 25 character'

        ];
        $this->validate($request, $rules, $cm);

        $data['name'] = $request->name;
        $data['job_title'] = $request->job_title;
        $data['joining_date'] = $request->joining_date;
        $data['salary'] = $request->salary;
        $data['email'] = $request->email;
        $data['mobile_no'] = $request->mobile_no;
        $data['address'] = $request->address;
        DB::table('employee')->insert($data);
        return redirect()->intended('/');
    }

    public function edit($id)
    {
        $data['employee'] = Employee::find($id);
        return view('employees.edit', $data);
    }
    public function update(Request $request)
    {

        $rules = [
            'name' => 'required|max:255',
            'job_title' => 'required|max:100',
            'joining_date' => 'required|date',
            'salary' => 'required|max:5',
            'email' => 'required|email',
            'mobile_no' => 'required|max:11',
            'address' => 'required|max:25'

        ];
        $cm = [
            'name.required' => 'Enter Your Name',
            'name.max' => 'Your name must be less 255 characters',
            'job_title.required' => 'Enter Your job title',
            'job_title.max' => 'Your job_title must lower 100 character',
            'joining_date.required' => 'Enter Your joining_date',
            'joining_date.date' => 'Enter Valid Date',
            'salary.required' => 'Enter Your Salary',
            'salary.max' => 'Your Salary must be less than 5 character',
            'email.required' => 'Enter Your Email',
            'email.email' => 'Your email must be a valid email',
            'mobile_no.required' => 'Enter Your Mobile',
            'mobile_no.max' => 'Your mobile must be 11 character',
            'address.required' => 'Enter Your address',
            'address.max' => 'Your address must be 25 character'

        ];
        $this->validate($request, $rules, $cm);
        $id = $request->id;
        $data['name'] = $request->name;
        $data['job_title'] = $request->job_title;
        $data['joining_date'] = $request->joining_date;
        $data['salary'] = $request->salary;
        $data['email'] = $request->email;
        $data['mobile_no'] = $request->mobile_no;
        $data['address'] = $request->address;
        //        dd($request->all());
        DB::table('employee')->where('id', '=', $id)->update($data);
        return redirect()->intended('/');
    }
    public function destroy($id)
    {
        DB::table('employee')->where('id', '=', $id)->delete();
        return redirect()->intended('/');
    }
}
