@extends('template.master')

@section('h1')
Spp
@endsection
@section('content')
<div>
    <h1>Spp</h1>
    <h3>Tahun: {{$sppsShow->tahun}}</h3>
    <h4>Nominal: {{$sppsShow->nominal}}</h4>
</div>
@endsection