@extends('backend.layouts.app')

@section('page-title', trans('app.add_happyhour'))
@section('page-heading', trans('app.add_happyhour'))

@section('content')

<section class="content-header">
	@include('backend.partials.messages')
</section>

<section class="content">
	<class class="box box-default">
		<form action="{{ route('backend.happyhour.store') }}" method="POST">
			@csrf
			<div class="box-header with-border">
				<h3 class="box-title">@lang('app.add_happyhour')</h3>
			</div>

			<div class="box-body">
				<div class="row">
					@include('backend.happyhours.partials.base', ['edit' => false])
				</div>
			</div>

			<div class="box-footer">
				<button type="submit" class="btn btn-primary">
					@lang('app.add_happyhour')
				</button>
			</div>
		</form>
		</div>
</section>

@stop