@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Les Demandes</h4>
              <p class="card-category"> toutes les Demandes qui ne sont pas encore acceptés sont affichés sur le tableau ci-dessous</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <tr><th>
                        NOM
                    </th>
                    <th>
                      Prenom
                    </th>
                    <th>
                      Email
                    </th>
                    <th >
                      Category
                    </th>
                    <th >
                      Sujet
                    </th>
                    <th class="text-right">
                      
                    </th>
                    <th class="text-right">
                      
                    </th>
                  </tr></thead>
                  <tbody>
                  @foreach($liste as $list)
                    <tr>
                        <td>
                          {{$list->nom}}
                        </td>
                        <td>
                        {{$list->prenom}}
                        </td>
                        <td>
                        {{$list->email}}
                        </td>
                        <td>
                        {{$list->category}}
                        </td>
                        <td>
                        {{$list->sujet}}
                        </td>
                        <td>
                        <a href="{{ url('send-mail/'.$list->id)}}" class= "btn btn-primary" name="oui">Oui</a>
                        </td>
                        <td>
                        <a href="" class= "btn btn-danger" name="non">Non</a></td>
                        </td>
                        
                      </tr>
                      @endforeach
                                        </tbody>
                </table>
              </div>
            </div>
          </div>


@endsection



