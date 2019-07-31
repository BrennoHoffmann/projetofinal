@extends('template')

@section('content')
{{$query->name}}
<img src="{{asset($query->image)}}" alt="" >
{{$query->description}}




@endsection