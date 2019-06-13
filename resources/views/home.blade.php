@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><legend>Dashboard</legend></div>

                <div class="container">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="text-primary">Estas Logueado!</a>
                </div>

 
           </div>
        </div>
    </div>
</div>
@endsection
