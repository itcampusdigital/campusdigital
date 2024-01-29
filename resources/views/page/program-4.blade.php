@extends('template.main')
@section('title', 'Praktek Kerja Industri (PRAKERIN Online) | ')
@section('content')

@php
$path=explode('/',Request::path());
@endphp

<div id="{{ end($path) }}">
@include('front.program._header')
</div>

@endsection

@section('js-extra')
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script type="text/javascript" src="{{asset('assets/js/app.js')}}"></script>
@endsection