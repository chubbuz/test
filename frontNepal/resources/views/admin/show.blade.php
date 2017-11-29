@extends('layouts.admin_template')
@section('content')
	<h2>News title </h2>
	<h3>{{$news->title}}</h3>
	<div class="row">
    	 		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    	 			<h2>Image</h2><br>
    	 			<img src="/storage/news_images/{{$news->image}}" style="height:30%;width:30%">
    	 		</div>
    	 		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    	 			<strong>Published ON<br>{{$news->updated_at}}</strong>
    	 		</div>
    </div>
    <div>
    <h2>News Description</h2><br>
    {!!$news->description!!}
    </div>
@endsection