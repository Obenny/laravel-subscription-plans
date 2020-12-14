@extends('layouts.app')

@include('patials.table_styles')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List Subscriptions') }}</div>

                <div class="card-body">

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-0">
                            <span>
                                <a href="{{ route('admin.subscriptions.list') }}">
                                    {{ __('Refresh') }}
                                </a>
                            </span>
{{--                            &nbsp;&nbsp;&nbsp;--}}
{{--                            <span>--}}
{{--                                <a href="{{ route('admin.subscriptions.list') }}">--}}
{{--                                    {{ __('Valid Subscriptions') }}--}}
{{--                                </a>--}}
{{--                            </span>--}}
{{--                            &nbsp;&nbsp;&nbsp;--}}
{{--                            <span>--}}
{{--                                <a href="{{ route('admin.subscriptions.list') }}">--}}
{{--                                    {{ __('Expired Subscriptions') }}--}}
{{--                                </a>--}}
{{--                            </span>--}}
                        </div>
                    </div>
                    <hr>

                    <!-- for success or failure message -->
                    @include('alerts.messages')

                    <center>

                        @if(count($subscriptions) > 0)
                            <table>
                                <thead>
                                    <tr>
                                        <th scope="col">User</th>
                                        <th scope="col">Plan</th>
                                        <th scope="col">Expiry Status</th>
                                        <th scope="col">Subscription Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($subscriptions as $subscription)
                                        <tr>
                                            <td data-label="Account">{{ $subscription->SubscriptionToUser->name }}</td>
                                            <td data-label="Due Date">{{ $subscription->SubscriptionToPlan->name }}</td>
{{--                                            <td data-label="Amount" class="text-warning">{{ $check_expiration = \App\Http\Helpers\CheckExpiration::checkExpiration($subscription->expiry_date)  ? "Valid" : "Expired" }}</td>--}}

                                            @if($check_expiration = \App\Http\Helpers\CheckExpiration::checkExpiration($subscription->expiry_date))
                                                <td data-label="Amount" class="bg-success">{{ $expire = 'Valid' }}</td>
                                            @else
                                                <td data-label="Amount" class="bg-warning">{{ $expire = 'Expired' }}</td>
                                            @endif

                                            @if($subscription->status == 'active')
                                                <td data-label="Amount" class="bg-success">{{ $subscription->status }}</td>
                                            @else
                                                <td data-label="Amount" class="bg-warning">{{ $subscription->status }}</td>
                                            @endif

                                            <td data-label="Period">
                                                <span>
                                                      <a class="btn btn-success btn-sm" href="{{route('admin.subscription.show', ['id' => $subscription->id])}}">
                                                          View
                                                      </a>
                                                </span>

{{--                                                <span>--}}
{{--                                                      <a class="btn btn-warning btn-sm" href="{{route('admin.user.edit', ['id' => $user->id])}}">--}}
{{--                                                          Edit--}}
{{--                                                      </a>--}}
{{--                                                </span>--}}

                                                <span style="display: block; margin-bottom: 3px; margin-top: 3px;">
                                                    @if($subscription->status=='active')
                                                        <a href="{{route('admin.subscription.deactivate', ['id' => $subscription->id])}}">
                                                            <button class="btn btn-danger btn-sm text-info" title="Deactivate">Deactivate</button>
                                                        </a>
                                                    @else
                                                        <a href="{{route('admin.subscription.activate', ['id' => $subscription->id])}}">
                                                            <button class="btn btn-danger btn-sm text-primary" title="Activate">Activate</button>
                                                        </a>
                                                    @endif
                                                </span>

                                                <span>
                                                    <form action="{{route('admin.subscription.delete', ['id' => $subscription->id])}}" method="post">
                                                        @csrf
                                                        {{@method_field('delete')}}
                                                        <button class="btn btn-danger btn-sm" title="Delete">Delete</button>
                                                    </form>
                                                </span>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <p>{{ $subscriptions->links() }}</p>

                        @else
                            <p>No Results</p>
                        @endif

                    </center>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
