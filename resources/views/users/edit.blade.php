@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-8 offset-md-2">

    <div class="card">
      <div class="card-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> Modifier votre informations personelles
        </h4>
       
      </div>

      <div class="card-body">

        <form action="{{ route('users.update', $user->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
          @csrf

          @include('shared.error')

          <div class="form-group">
            <label for="name-field">Pseudo</label>
            <input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $user->name) }}" />
          </div>
          <div class="form-group">
            <label for="email-field">E-mail</label>
            <input class="form-control" type="text" name="email" id="email-field" value="{{ old('email', $user->email) }}" />
          </div>
          <div class="form-group">
            <label for="introduction-field">Profil</label>
            <textarea name="introduction" id="introduction-field" class="form-control" rows="3">{{ old('introduction', $user->introduction) }}</textarea>
          </div>
          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Enreristrer</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection