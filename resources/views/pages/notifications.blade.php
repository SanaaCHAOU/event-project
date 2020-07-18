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
      <form method="post" action="{{ url('demande') }}" autocomplete="off" class="form-horizontal">
              {{ csrf_field()}}
      <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Category') }}</label>
                  <div class="col-sm-7">
                  <div>
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="nom" />
                     
                    </div>
                    <div>
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="prenom" />
                     
                    </div>
                    <div>
                    <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="email" />
                    </div>
                    <div>
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="category" />
                     
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                  <div class="col-sm-7">
                    <div>
                      <textarea class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="sujet"></textarea>
            
                    </div>
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
