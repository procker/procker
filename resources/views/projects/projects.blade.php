@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
   <h1>Add project</h1>
   <button class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New Project</button>
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Projects - @{{name}}</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
