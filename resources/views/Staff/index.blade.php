@extends('layouts.custom-StaffApp')

@section('custom-title')
- Welcome {{Auth::user()->firstName}} {{Auth::user()->lastName}}@endsection

@section('content')
<div class="container">
{{Auth::user()->firstName}}
</div>
@endsection