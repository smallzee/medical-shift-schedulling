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


                <form action="{{url('admin/update_shifting_category')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Schedule Name</label>
                        <input type="text" value="{{$shifting_category->name}}" class="form-control" required placeholder="Schedule Name" name="name" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Schedule Time</label>
                        <select name="schedule" required id="" class="form-control">
                            @foreach(array('8:00AM - 2:00PM','2:00PM - 8:00PM','8:00PM - 8:00AM') as $value)
                                <option value="{{$value}}" {{ ($shifting_category->schedule == $value) ? 'selected' : '' }}>{{$value}}</option>
                            @endforeach
                        </select>
                    </div>

                    <input type="hidden" name="id" value="{{$shifting_category->id}}" id="">

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Update" name="" id="">
                    </div>
                </form>

            </div>
        </div>
    </div>


@endpush