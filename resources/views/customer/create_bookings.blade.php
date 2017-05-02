@extends('layouts.master')

@section('content')
	<div class="block request">
		@include('shared.error_message')
		@if (!App\Activity::first())
			@include('shared.error_message_custom', [
				'title' => 'Activities do not exist',
				'message' => 'Please contact a site administrator.',
				'type' => 'danger'
			])
		@endif
		<form class="request" method="POST" action="/bookings">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="input_activity">Activity <span class="request__validate">(Name - Duration)</span></label>
				<select name="activity_id" id="input_activity" class="form-control request__input">
					@foreach (App\Activity::all()->sortBy('duration')->sortBy('name') as $activity)
						<option value="{{ $activity->id }}">{{ $activity->name . ' - ' . $activity->duration }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="input_start_time">Start Time <span class="request__validate">(24 hour format)</span></label>
				<input name="start_time" type="time" id="input_start_time" class="form-control request__input" value="{{ old('start_time') ? old('start_time') : '09:00' }}" autofocus>
			</div>
			<div class="form-group">
				<label for="input_date">Date <span class="request__validate">(dd/mm/yyyy format)</span></label>
				<input name="date" type="date" id="input_date" class="form-control request__input" value="{{ old('date') ? old('date') : Carbon\Carbon::now('Australia/Melbourne')->addMonth()->startOfMonth()->format('Y-m-d') }}" autofocus>
			</div>
			<button class="btn btn-lg btn-primary btn-block btn--margin-top">Add Booking</button>
		</form>
	</div>
@endsection