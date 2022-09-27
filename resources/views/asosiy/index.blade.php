@extends('layouts.shablon')
@if (session()->has('message'))
    <div class="alert alert-success">{{ session()->get('message') }}</div>
    @endif

@section('d')



@endsection
