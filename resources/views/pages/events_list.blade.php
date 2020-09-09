@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Liste des événements</h4>
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
            {id: 1, title: "Intis", organisation: "ENSA TANGER", organiser_id: 12, begin_at: Date(2020, 9, 12), end_at: '2020-09-13'},
            {id: 2, title: "Intis", organisation: "ENSA TANGER", organiser_id: 15, begin_at: Date(2020, 9, 12), end_at: '2020-09-13'},
            {id: 3, title: "Intis", organisation: "ENSA TANGER", organiser_id: 20, begin_at: Date(2020, 9, 12), end_at: '2020-09-13'},
            {id: 4, title: "Intis", organisation: "ENSA TANGER", organiser_id: 36, begin_at: Date(2020, 9, 12), end_at: '2020-09-13'}
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

        deleteConfirm: "Do you really want to delete the event?",

        controller: eventsApi,

        fields: [
            { name: "id", type: "number", title: "ID", align: "center"},
            { name: "title", type: "text", title: "Titre" , align: "center"},
            { name: "organisation", type: "text", title: "Organisation" , align: "center"},
            { name: "organiser_id", type: "number", title: "ID Organisateur", align: "center" },
            { name: "begin_at", type: "date", title: "Date début", align: "center"},
            { name: "end_at", type: "date", title: "Date fin", align: "center"},
            { type: "control" }
        ]
    });

});

</script>
@endsection
