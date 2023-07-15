<!-- booking/create.blade.php -->

@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Booking') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('booking.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="ferry_id" class="col-md-4 col-form-label text-md-right">{{ __('Ferry ID') }}</label>

                                <div class="col-md-6">
                                    <input id="ferry_id" type="text" class="form-control @error('ferry_id') is-invalid @enderror" name="ferry_id" value="{{ old('ferry_id') }}" required autofocus>

                                    @error('ferry_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="customer_id" class="col-md-4 col-form-label text-md-right">{{ __('Customer ID') }}</label>

                                <div class="col-md-6">
                                    <input id="customer_id" type="text" class="form-control @error('customer_id') is-invalid @enderror" name="customer_id" value="{{ old('customer_id') }}" required>

                                    @error('customer_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="capacity_booked" class="col-md-4 col-form-label text-md-right">{{ __('Capacity Booked') }}</label>

                                <div class="col-md-6">
                                    <input id="capacity_booked" type="text" class="form-control @error('capacity_booked') is-invalid @enderror" name="capacity_booked" value="{{ old('capacity_booked') }}" required>

                                    @error('capacity_booked')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" style="display: inline-block; padding: 10px 10px; background-color: #337ab7; color: #fff; text-decoration: none; border-radius: 5px;" class="btn btn-primary">
                                        {{ __('Create') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
