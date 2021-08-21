@extends('users.layout')

@push('content')

    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd">
            <div class="twt-feed blue-bg">
                <div class="fa fa-user wtt-mark"></div>
                <a href="#">
                    <img alt="" src="{{url('assets/admin/dist/img/avatar.png')}}">
                </a>
                <h1>{{ ucwords(auth()->user()->full_name) }}</h1>
                <p>{{auth()->user()->email_address}}</p>
                <p>Staff Role : {{ \App\Role::where('id',auth()->user()->role_id)->first()->name  }}</p>
            </div>
        </div>
    </div>


    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4> Shifting Scheduling </h4>
                </div>
            </div>
            <div class="panel-body">


                <div class="table-responsive">


                    <table class="table table-bordered">
                        <tr>
                            <td>Duty Name</td>
                            <td>{{ ucwords($duty->shifting->name) }}</td>
                        </tr>
                        <tr>
                            <td>Duty Time</td>
                            <td>{{ $duty->shifting->schedule }}</td>
                        </tr>
                        <tr>
                            <td>Working Days</td>
                            <td>{{ $duty->description }}</td>
                        </tr>
                        <tr>
                            <td>Next Shifting Date</td>
                            <td> {{ $duty->next_shifting_date }}</td>
                        </tr>
                    </table>

                </div>

            </div>
        </div>
    </div>
@endpush