@extends('layouts.app')

@section('title')
	Bewerk {{ $project->name }}
@endsection

@section('content')
<div style="align: center">
{!! Form::model($project, ['route' => ['project.update', $project->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}

<div class="form-group">
	<div class="form-group">
		<div class="col-sm-6">
			{!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Projectnaam']) !!}
		</div>
	</div>

	<div class="form-group">
		<div class="form-group">
			<div class="col-sm-6">
				{!! Form::label('projectnumber', 'Projectnumber', ['class' => 'control-label']) !!}
				{!! Form::text('projectnumber', null, ['class' => 'form-control', 'placeholder' => 'Projectnummer']) !!}
			</div>
		</div>

		<div class="form-group">
			<div class="form-group">
				<div class="col-sm-6">
					{!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
					{!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Project beschrijving']) !!}
				</div>
			</div>

	<div class="form-group">
		<div class="col-sm-12">
			<button type="submit" class="btn btn-primary">
				Opslaan
			</button>
		</div>
	</div>
</div>
{!! Form::close() !!}

@endsection
