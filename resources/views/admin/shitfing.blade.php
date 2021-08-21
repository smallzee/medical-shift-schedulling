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

                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Shifting Category</label>
                        <select name="" required id="" class="form-control">
                            <option value="" disabled selected>Select</option>
                            @foreach(\App\ShiftingCategory::get() as $value)
                                <option value="{{$value->id}}"> {{ ucwords($value->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Staff</label>
                        <select name="" id="" class="form-control">
                            <option value="" disabled selected>Select</option>
                            @foreach(\App\User::where('role_id','>','1')->get() as $value)
                                <option value="{{$value->id}}"> {{ ucwords($value->full_name) }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>

            </div>
        </div>
    </div>


@endpush