@extends('admin.layout')

@push('content')

    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>{{ $page_title }}</h4>
                </div>
            </div>
            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-bordered" id="example1">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>Gender</th>
                            <th>Staff Role</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>SN</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>Gender</th>
                            <th>Staff Role</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php($sn =1)
                        @foreach(\App\User::where('role_id','>',1)->get() as $value)
                            <tr>
                                <td>{{$sn++}}</td>
                                <td>{{$value->email_address}}</td>
                                <td>{{$value->phone_number}}</td>
                                <td>{{$value->gender}}</td>
                                <td>{{$value->role_id}}</td>
                                <td>{{$value->created_at}}</td>
                                <td><a href="{{url('admin/edit-staff/'.$value->id)}}" class="btn btn-primary btn-sm">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>


@endpush