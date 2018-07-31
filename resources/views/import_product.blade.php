@extends('welcome')
@section('content')
	
<div class="features_items"><!--features_items-->
@if(Session::has('flash_message'))
<p class="alert alert-info">{{ Session::get('flash_message') }}</p>
@endif
<h2 class="title text-center">Import Products</h2>
<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form action="{{url('products/import')}}" enctype="multipart/form-data" id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="/">
				            <div class="form-group col-md-12">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
				                <input type="file" name="importProcess" class="form-control">
				            </div>
				                              
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Import">
				            </div>
				        </form>
	    			</div>
	    		</div>
</div>
@endsection
