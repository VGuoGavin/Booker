<!-- resources/views/meeting-room/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>会议室预约列表</h1>

    @foreach ($reservations as $reservation)
        <p>{{ $reservation->room_name }} - {{ $reservation->user_name }} - {{ $reservation->date }} - {{ $reservation->start_time }} to {{ $reservation->end_time }}</p>
    @endforeach

    <a href="{{ route('meeting-room.create') }}">预约会议室</a>
@endsection
