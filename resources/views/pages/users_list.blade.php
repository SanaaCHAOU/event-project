@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Liste des utilisateurs</h4>
            <p class="card-category"></p>
          </div>
          <div class="card-body">


            <div id="events-list">

            </div>



          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<script>
console.log("events-list.js loaded");

const eventsApi = {
    loadData: (filters) => {
        return [
            {id: 1, name: "MR Badir", establishment: "ENSA TANGER", phone: "0662983213", email: "hb.ensa@gmail.com", role: "ADMIN"},
            {id: 2, name: "MR chakroun", establishment: "ENSA FES", phone: "0661453456", email: "chakroun@gmail.com", role: "ORGANISER"},
            {id: 3, name: "Sanaa Chaou", establishment: "ENSA TANGER", phone: "0636376542", email: "chaou.sanaa.cs@gmail.com", role: "REGISTRED"},
            {id: 4, name: "dachi oumaima", establishment: "ENSA TANGER", phone: "0662983213", email: "dachi@gmail.com", role: "ORGANISER"},
            {id: 5, name: "fatima zahra annassiri", establishment: "ENSA TANGER", phone: "0662983213", email: "annassiri.ensa@gmail.com", role: "REGISTRED"},
            {id: 6, name: "el majdoubi najlae", establishment: "ENSA TANGER", phone: "0662983213", email: "elmajdoubi@gmail.com", role: "REGISTRED"}

        ];
    },
    insertItem: (newItem) => { console.log("Inserting "); console.log(newItem)}
}

$(function() {

    $("#events-list").jsGrid({
        width: "100%",
        height: "auto",

        filtering: true,
        editing: true,
        sorting: true,
        inserting: true,
        paging: true,
        autoload: true,

        pageSize: 15,
        pageButtonCount: 5,

        deleteConfirm: "Do you really want to delete the user ?",

        controller: eventsApi,

        fields: [
            { name: "id", type: "number", title: "ID", align: "center"},
            { name: "name", type: "text", title: "Name" , align: "center"},
            { name: "establishment", type: "text", title: "Establishment" , align: "center"},
            { name: "phone", type: "text", title: "Phone", align: "center" },
            { name: "email", type: "text", title: "Email", align: "center"},
            { name: "role", type: "text", title: "Role", align: "center"},
            { type: "control" }
        ]
    });

});

</script>
@endsection
