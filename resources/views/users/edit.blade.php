<!-- Modal -->
@extends('layouts.app', ['title' => __('User Management')])

@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <form method="post" action="{{ route('user.update', $user) }}" autocomplete="off">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <h6 class="heading-small text-muted mb-4">{{ __('Editar Usuario') }}</h6>
                    <div class="pl-lg-4">
                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-name">{{ __('Nombre') }}</label>
                            <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('Nombre') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre') }}" value="{{ $user->name}}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-email">{{ __('Correo') }}</label>
                            <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ $user->email}}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                            @endif
                        </div>




                        <div class="form-group{{ $errors->has('role') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-name">{{ __('Rol') }}</label> <br>

                         <select name= "role_id">
                       @foreach($role as $roles)
                       <option value="{{$roles -> id}}">{{$roles -> name}}</option>
                       @endforeach
                         </select>


                            @if ($errors->has('role'))
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('role') }}</strong>
                                        </span>
                            @endif
                        </div> 

                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
                <button type="submit" class="btn btn-primary">{{ __('GUARDAR') }}</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection
























