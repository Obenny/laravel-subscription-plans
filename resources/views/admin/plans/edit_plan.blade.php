@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Plan') }}</div>

                    <div class="card-body">

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-0">
                                <span>
                                    <a href="{{ route('admin.plan.edit', ['id' => $plan->id]) }}">
                                        {{ __('Refresh') }}
                                    </a>
                                </span>
                                &nbsp;&nbsp;&nbsp;
                                <span>
                                    <a href="{{ route('admin.plan.create') }}">
                                        {{ __('Create Plan') }}
                                    </a>
                                </span>
                                &nbsp;&nbsp;&nbsp;
                                <span>
                                    <a href="{{ route('admin.plans.list') }}">
                                        {{ __('View Plans') }}
                                    </a>
                                </span>

                            </div>
                        </div>
                        <hr>

                        <!-- for success or failure message -->
                        @include('alerts.messages')

                        @if(count(array($plan)) > 0)
                            <form method="POST" action="{{ route('admin.plan.update', $plan->id) }}">
                                @csrf
                                @method('PUT')

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" value="{{$plan->name}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Select Type') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" name="type">
                                            <option value="trial">Trial</option>
                                            <option value="normal">Normal</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                                    <div class="col-md-6">
                                        <input id="phone" type="text" value="{{$plan->price}}" class="form-control @error('price') is-invalid @enderror" name="price" minlength="1" maxlength="3" required>

                                        @error('price')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Duration') }}</label>

                                    <div class="col-md-6">
                                        <input id="phone" type="text" value="{{$plan->duration}}" class="form-control @error('duration') is-invalid @enderror" name="duration" minlength="1" maxlength="3" required>

                                        @error('duration')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                    <div class="col-md-6">
                                        {{--                                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" required>--}}
                                        <textarea id="description" rows="3" cols="100"  class="form-control @error('description') is-invalid @enderror" name="description" minlength="20" maxlength="200" required>{{$plan->description}}
                                        </textarea>

                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        @else
                            <p class="mt-5 mb-5">No Results</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
