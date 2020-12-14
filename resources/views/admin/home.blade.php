
@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                        <hr>

                        <br>
                        <center>
                            <div class="container">
                                <a href="{{ route('admin.users.list') }}">
                                    <button class="btn btn-outline-primary" style="width:140px; height:140px; display:inline-block">
                                        <span>{{ $users }}</span>
                                        <br>
                                        <span>Users</span>
                                    </button>
                                </a>

                                &nbsp;&nbsp;&nbsp;&nbsp;

                                <a href="{{ route('admin.subscriptions.list') }}">
                                    <button class="btn btn-outline-secondary" style="width:140px; height:140px;">
                                        <span>{{ $subscriptions }}</span>
                                        <br>
                                        <span>Subscriptions</span>
                                    </button>
                                </a>
                            </div>

                            <br/>

                            <div class="container">
                                <a href="{{ route('admin.plans.list') }}">
                                    <button class="btn btn-outline-primary" style="width:140px; height:140px; display:inline-block">
                                        <span>{{ $plans }}</span>
                                        <br>
                                        <span>Plans</span>
                                    </button>
                                </a>

{{--                                &nbsp;&nbsp;&nbsp;&nbsp;--}}

{{--                                <a href="{{ route('admin.subscriptions.list') }}">--}}
{{--                                    <button class="btn btn-outline-secondary" style="width:140px; height:140px;">--}}
{{--                                        <span>{{ 0 }}</span>--}}
{{--                                        <br>--}}
{{--                                        <span>Others</span>--}}
{{--                                    </button>--}}
{{--                                </a>--}}
                            </div>
                        </center>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
