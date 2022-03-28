@extends('layout')

@section('page-content')
<br>
<br>
<h1 class="text-center text-primary">Welcome to Employee information System</h1>

<div class="text-center">
    <a href="{{route('emp.create')}}"><button class="btn btn-primary mt-5 mb-5 ">Add Employe</button></a>
</div>
<form class="form-inline float-right">
    <div class="form-group mb-2">
        <input type="text" readonly class="form-control-plaintext border bg-dark text-white" id="staticEmail2" placeholder="Search Here">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Search</button>
</form>
<div class="Container">
    <table class="table table-striped table-bordered mt-5" style="width:100%">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Job Title</th>
                <th>Joining Date</th>
                <th>Salary</th>
                <th>Email</th>
                <th>Mobile No</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @if(!empty($employees))
            @foreach($employees as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->job_title}}</td>
                <td>{{$data->joining_date}}</td>
                <td>{{$data->salary}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->mobile_no}}</td>
                <td>{{$data->address}}</td>
                <td>
                    <a href="{{route('emp.edit',$data->id)}}" class="btn btn-success">Update</a>
                    <a href="{{route('emp.destroy',$data->id)}}" onclick="return confirm('Are you sure you want to Delete ?')" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
            @endif

        </tbody>

    </table>
    {{ $employees->links() }}
</div>
@endsection