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
                            <th>Name</th>
                            <th>Schedule Time</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Schedule Time</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php($sn =1)
                        @foreach(\App\ShiftingCategory::get() as $value)
                            <tr>
                                <td>{{$sn++}}</td>
                                <td>{{ ucwords($value->name) }}</td>
                                <td>{{$value->schedule}}</td>
                                <td><a href="{{url('admin/edit-shifting-category/'.$value->id)}}" class="btn btn-primary btn-sm">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>

@endpush