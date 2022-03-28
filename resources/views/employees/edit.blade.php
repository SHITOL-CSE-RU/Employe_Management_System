@extends('layout')

@section('page-content')
    <legend>Create Employee</legend>
    <form method="POST" action="{{route('emp.update')}}">
        @csrf
        <input type="hidden" name="id" value="{{$employee->id}}">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="{{$employee->name}}" id="name" name="name"
                       placeholder="name">
                <div class="invalid-feedback">Error message</div>
            </div>
        </div>
        <div class="form-group">
            <label for="job_title" class="col-sm-2 control-label">Job Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="{{$employee->job_title}}" id="job_title" name="job_title"
                       placeholder="job_title">
                <div class="invalid-feedback">Error message</div>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Joining Date</label>
            <div class="col-sm-10">
                <input type="text" id="joining_date" name="joining_date" class="form-control" value="{{$employee->joining_date}}" placeholder="yyyy-MM-dd"  data-date-format="Y-m-d" autocomplete="off">
                <div class="invalid-feedback">Error message</div>
            </div>
        </div>
        <div class="form-group">
            <label for="salary" class="col-sm-2 control-label">Salary</label>
            <div class="col-sm-10">
                <input type="number" class="form-control is-invalid " value="{{$employee->salary}}" id="salary" name="salary"
                       placeholder="Title">
                <div class="invalid-feedback">Error message</div>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="{{$employee->email}}" id="email" name="email"
                       placeholder="Title">
                <div class="invalid-feedback">Error message</div>
            </div>
        </div>
        <div class="form-group">
            <label for="mobile_no" class="col-sm-2 control-label">mobile No.</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="{{$employee->mobile_no}}" id="mobile_no" name="mobile_no"
                       placeholder="Title">
                <div class="invalid-feedback">Error message</div>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="2" name="address" id="address">{{$employee->address}}</textarea>
                <div class="invalid-feedback">Error message</div>
            </div>
        </div>



        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection


