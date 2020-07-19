@extends('layouts.app', ['activePage' => 'notifications', 'titlePage' => __('Notifications')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h3 class="card-title">Notifications</h3>
        <p class="card-category">Handcrafted by our friend
          <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. Please checkout the
          <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">full documentation.</a>
        </p>
      </div>
      <form method="get" action="{{ url('/send-mail/delete/'.$dmd->id) }}" autocomplete="off" class="form-horizontal">
              {{ csrf_field()}}
           <div class="row">

                  <div class="col-sm-7">
                    <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                              <i class="material-icons">face</i>
                          </span>
                        </div>
                        <input type="text" name="nom" class="form-control"  value="{{ $dmd->nom}}" required>
                      </div>
                      @if ($errors->has('name'))
                        <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                          <strong>{{ $errors->first('name') }}</strong>
                        </div>
                      @endif
                    </div>
                    <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                              <i class="material-icons">face</i>
                          </span>
                        </div>
                        <input type="text" name="prenom" class="form-control"  value="{{ $dmd->prenom }}" required>
                      </div>
                      @if ($errors->has('name'))
                        <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                          <strong>{{ $errors->first('name') }}</strong>
                        </div>
                      @endif
                    </div>
                    <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-3">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">email</i>
                          </span>
                        </div>
                        <input type="email" name="email" class="form-control"  value="{{ $dmd->email }}" required>
                      </div>
                      @if ($errors->has('email'))
                        <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                          <strong>{{ $errors->first('email') }}</strong>
                        </div>
                      @endif
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="material-icons">assignment_turned_in</i>
                        </span>
                      </div>
                      <input type="text" name="category" class="form-control"  value="{{ $dmd->category}}" required>
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="material-icons">subject</i>
                        </span>
                      </div>
                      <textarea type="text" name="sujet" class="form-control"required > {{ $dmd->sujet }} </textarea>
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="material-icons">subject</i>
                        </span>
                      </div>
                      <textarea type="text" name="cause" class="form-control" required > </textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-7">

                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>
@endsection
