@extends('layouts.app')

@section('content')
    <div class="container">


        <center>
{{--            <div class="title mb-4">--}}
{{--                <h1>L. S. P</h1>--}}
{{--            </div>--}}

{{--            <hr>--}}
            <div class="title mb-4">
                <h3>Choose Your Plan</h3>
            </div>
        </center>

        <div class="row justify-content-center">

            @if(count($plans) > 0)

                @foreach($plans as $plan)
                    <div class="col-md-12" style="margin-bottom: 20px">
                        <div class="card">
                            <div class="card-header font-weight-bold">{{ $plan->name }}</div>

                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="email" class="col-md-12 col-form-label text-md-left text-capitalize"><span class="font-weight-bold">Type:</span> {{ $plan->type }}</label>
                                    <label for="password" class="col-md-12 col-form-label text-md-left font-weight-bold"><span class="font-weight-bold">Price:</span> $ {{ $plan->price }}</label>
                                    <label for="password" class="col-md-12 col-form-label text-md-left font-weight-bold"><span class="font-weight-bold">Duration:</span> {{ $plan->duration }} / Days</label>
                                    <label for="password" class="col-md-12 col-form-label text-md-left text-justify"><span class="font-weight-bold">Description:</span> {{ $plan->description }}</label>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-12 text-md-left offset-md-0">
                                        <a href="{{ route('user.home') }}">
                                            <button class="btn btn-primary">
                                                {{ __('Get Started') }}
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

{{--            <div class="col-md-8" style="margin-bottom: 20px">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">{{ __('Login') }}</div>--}}

{{--                    <div class="card-body">--}}
{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-12 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>--}}

{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-12 col-form-label text-md-left">{{ __('Password') }}</label>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-12 text-md-left offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--            <div class="col-md-8" style="margin-bottom: 20px">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">{{ __('Login') }}</div>--}}

{{--                    <div class="card-body">--}}
{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-12 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>--}}

{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-12 col-form-label text-md-left">{{ __('Password') }}</label>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-12 text-md-left offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>

        <p>{{ $plans->links() }}</p>

        @else
            <center>
                <p>No Plans available at the moment</p>
            </center>
        @endif

    </div>
@endsection
