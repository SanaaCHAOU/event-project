console.log("events-list.js loaded")

const eventsApi = {
    loadData: (filters) => {
        return [
            {id: 1, title: "Intis", orgnisation: "ENSA TANGER", orgniser: 12, begin_at: Date(2020, 9, 12), end_at: Date(2020, 9, 13)},
            {id: 2, title: "Intis", orgnisation: "ENSA TANGER", orgniser: 15, begin_at: Date(2020, 9, 12), end_at: Date(2020, 9, 13)},
            {id: 3, title: "Intis", orgnisation: "ENSA TANGER", orgniser: 20, begin_at: Date(2020, 9, 12), end_at: Date(2020, 9, 13)},
            {id: 4, title: "Intis", orgnisation: "ENSA TANGER", orgniser: 36, begin_at: Date(2020, 9, 12), end_at: Date(2020, 9, 13)}
        ]
    },
    insertItem: (newItem) => { console.log("Inserting "); console.log(newItem)}
}

$(function() {

    $("#events-list").jsGrid({
        height: "90%",
        width: "100%",

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
            { name: "id", type: "number", width: 150 },
            { name: "title", type: "text", title: "Titre", width: 50 },
            { name: "organisation", type: "text", title: "Organisation", width: 200 },
            { name: "orgniser_id", type: "number", title: "ID Organisateur", width: 100 },
            { name: "begin_at", type: "date", title: "Date début", width: 50},
            { name: "end_at", type: "date", title: "Date fin", width: 50},
            { type: "control" }
        ]
    });

});
