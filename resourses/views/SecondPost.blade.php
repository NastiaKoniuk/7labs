@extends('layouts.index')

@section('title')
    Second  Page
@endsection

@section('content-SP')
    <form action="{{ route('input-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Enter your name</label>
            <input type="text" name="name" placeholder="Enter your name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="second-name">Enter your second name</label>
            <input type="text" name="second-name" placeholder="Enter your second name" id="second-name" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Enter your message</label>
            <input type="text" name="message" placeholder="Enter your message" id="message" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Enter user ID</label>
            <input type="text" name="user_id" placeholder="Enter User ID" id="user_id" class="form-control">
        </div>

        <button type="submit" class="btn-success">Input</button>
    </form>
@endsection

@section('include-table')
    @parent
    Украина
    @endsection

