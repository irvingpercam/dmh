@extends('layout')
@section('title', 'Contact')
@section('content')
    <h1>@lang('Contact')</h1>
    @include('partials.session-status')
    <form method="POST" action="{{ route('messages.store') }}">
        @csrf
        <input type="text" name="name" id="name" placeholder="Nombre..." value="{{ old('name') }}"><br>
        {!! $errors->first('name', '<small>:message</small><br>') !!}
        <input type="email" name="email" id="email" placeholder="Email..." value="{{ old('email') }}"><br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}
        <input type="text" name="subject" id="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br>
        {!! $errors->first('subject', '<small>:message</small><br>') !!}
        <textarea name="content" id="content" cols="30" rows="10" placeholder="Mensaje..." value="{{ old('content') }}"></textarea><br>
        {!! $errors->first('content', '<small>:message</small><br>') !!}
        <button>@lang('Send')</button>
    </form>
@endsection