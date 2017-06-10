@extends('layout.master')

@section('title','JOB DESCRIPTIONS')

@section('content')						
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="panel panel-inverse">
					<div class="panel-heading">Add JOB DESCRIPTIONS:</div>
					<div class="panel-body">

						<form method="POST" action="{{ url('jobdesc/create') }}">

						{{ csrf_field() }}

						 <div class="form-group">
                            <label for="title" class="col-md-4 control-label">JOB TITLE:</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" required autofocus>
                        	</div>
						</div>
						<div class="form-group">
                            <label for="description" class="col-md-4 control-label">Descriptions:</label>
                            <div class="col-md-6">
                            	<TEXTAREA id="description" type="text" class="form-control" name="description" required autofocus></TEXTAREA>
                        	</div>
						</div>
                   			<button type="submit" class="btn btn-success">SAVE</button>
                   			    <a href="{{url('projects/create')}}" class="btn btn-success" role="button">NEXT</a>
						</div>
							</form>
							
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection