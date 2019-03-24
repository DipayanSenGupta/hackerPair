@extends('layouts.app')
@section ('content')

<div class="row">
	<div class="col">
		{!! Form::open(
		
		['route' => 'events.store'],
		['class' => 'form']
		
		)!!}
		<div class="form-group">
			{!!
				Form::label('name','Event Name',
				['class' => 'control-label'])
			!!}
			
			{!!
				Form::text('name',null,
				['class' => 'form-control input-lg',
				 'placeholder' => 'PHP Hacking and Pizza'
				])
			!!}
		</div>

		<div class="form-group">
			{!!
				Form::label('max_attendees','Maximum number of Attendees',
				['class' => 'control-label'])
			!!}
			
			{!!
				Form::select('max_attendees',[2,3,4,5],null,
				['class' => 'form-control input-lg',
				 'placeholder' => 'Maximum Number of Attendees'
				])
			!!}
		</div>

		<div class="form-group">
			{!!
				Form::label('published','Want to get this published',
				['class' => 'control-label'])
			!!}
			
			{!!
				Form::select('published',[0,1],null,
				['class' => 'form-control input-lg',
				 'placeholder' => '0 for false, 1 for true'
				])
			!!}
		</div>

		<div class="form-group">
			{!!
				Form::label('description',"Description",
				['class' => 'control-label'])
			!!}
			
			{!!
				Form::textarea('description',null,
				['class' => 'form-control input-lg',
				 'placeholder' => 'Describe the event'
				])
			!!}
		</div>
		
		<div class="form-group">
			{!!
				Form::label('city',"City",
				['class' => 'control-label'])
			!!}
			
			{!!
				Form::text('city',null,
				['class' => 'form-control input-lg',
				 'placeholder' => 'Fotuakali'
				])
			!!}
		</div>
		
		<div class="form-group">
			{!!
				Form::label('venue',"Venue",
				['class' => 'control-label'])
			!!}
			
			{!!
				Form::text('venue',null,
				['class' => 'form-control input-lg',
				 'placeholder' => 'Starbucks'
				])
			!!}
		</div>

				<div class="form-group">
			{!!
				Form::submit('Add Event',
				['class' => 'btn btn-info btn-lg',
				 'style' => 'width: 100%'
				])
			!!}
			</div>
			{!! Form::close() !!}

	</div>
</div>

@endsection