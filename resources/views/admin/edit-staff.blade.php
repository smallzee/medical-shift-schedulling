@extends('admin.layout')

@push('content')

    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>{{$page_title}}</h4>
                </div>
            </div>
            <div class="panel-body">


                <form action="{{url('admin/update_staff')}}" method="post">
                    @csrf

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Email Address</label>
                                <input type="email" disabled="" value="{{ $user->email_address }}" name="email_address" class="form-control" required placeholder="Email Address" id="">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Full Name</label>
                                <input type="text" value="{{ $user->full_name }}" name="full_name" required placeholder="Full Name" class="form-control" id="">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Phone Number</label>
                                <input type="text" value="{{ $user->phone_number }}" class="form-control" required placeholder="Phone Number" name="phone_number" id="">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Gender</label>
                                <select name="gender" id="" required class="form-control">
                                    @foreach(array('male','female') as $value)
                                        <option value="{{ $value }}" {{ ($value == $user->gender) ? 'selected' : ''}}>{{ ucwords($value) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Staff Role</label>
                                <select name="role" id="" required class="form-control">
                                    <option value="" disabled selected>Select</option>
                                    @foreach(\App\Role::where('id','>',1)->get() as $value)
                                        <option value="{{$value->id}}" {{ ($user->role_id == $value->id) ? 'Selected' : '' }}>{{ucwords($value->name)}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <input type="hidden" name="id" value="{{ $user->id }}" id="">

                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Update" name="" id="">
                    </div>
                </form>

            </div>
        </div>
    </div>

@endpush