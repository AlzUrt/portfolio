
@extends('layouts.app')
@section('content')
<div id="fullpage">
	@include('section.section1-'.get_post_type())
    @include('section.section2-'.get_post_type())
    @include('section.section3-'.get_post_type())
</div>
@endsection