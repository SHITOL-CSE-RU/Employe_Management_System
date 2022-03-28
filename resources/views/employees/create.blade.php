@extends('layout')

@section('page-content')
<legend class="text-center text-primary">Create Employee</legend>
<form method="POST" action="{{route('emp.store')}}">
    @csrf
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control " value="" id="name" name="name" placeholder="Title">
            <div class="invalid-feedback">Error message</div>
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="job_title" class="col-sm-2 control-label">Job Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control " value="" id="job_title" name="job_title" placeholder="Title">
            <div class="invalid-feedback">Error message</div>
            @error('job_title')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>


    <div class="form-group">
        <label for="title" class="col-sm-2 control-label">Joining Date</label>
        <div class="col-sm-10">
            <input type="text" id="joining_date" name="joining_date" class="form-control" placeholder="yyyy-MM-dd" data-date-format="Y-m-d" autocomplete="off">
            <div class="invalid-feedback">Error message</div>
            @error('joining_date')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="salary" class="col-sm-2 control-label">Salary</label>
        <div class="col-sm-10">
            <input type="number" class="form-control " value="" id="salary" name="salary" placeholder="Title">
            <div class="invalid-feedback">Error message</div>
            @error('salary')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="text" class="form-control " value="" id="email" name="email" placeholder="Title">
            <div class="invalid-feedback">Error message</div>
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="mobile_no" class="col-sm-2 control-label">mobile No.</label>
        <div class="col-sm-10">
            <input type="text" class="form-control " value="" id="mobile_no" name="mobile_no" placeholder="Title">
            <div class="invalid-feedback">Error message</div>
            @error('mobile_no')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="title" class="col-sm-2 control-label">Address</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="2" name="address" id="address"></textarea>
            <div class="invalid-feedback">Error message</div>
            @error('address')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>



    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

<script>
    //Date picker
    $('#joining_date').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'Y-m_d'
    });
</script>

@endsection