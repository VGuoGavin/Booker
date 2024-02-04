<!-- resources/views/meeting-room/create.blade.php -->

@extends('layouts.front.app')

@section('content')
    <h1>预约会议室</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('meeting-room.store') }}" method="post">
        @csrf
        <label for="room_name">会议室名称:</label>
        <input type="text" name="room_name" required>
        <br>
        <label for="user_name">您的姓名:</label>
        <input type="text" name="user_name" required>
        <br>
        <label for="date">日期:</label>
        <input type="date" name="date" required>
        <br>
        <label for="start_time">开始时间:</label>
        <input type="time" name="start_time" required>
        <br>
        <label for="end_time">结束时间:</label>
        <input type="time" name="end_time" required>
        <br>
        <button type="submit">预约</button>
    </form>
@endsection
