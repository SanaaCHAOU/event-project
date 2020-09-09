
Date.prototype.toStr = function(){
	var month = this.getMonth()+1;
	var day = this.getDate();
	var year = this.getYear() + 1900;
	console.log("DEBUG : ");
	console.log(day);
	console.log(month);
	console.log(year);
	console.log("--------------------");

	var strDate = "/"+year;
	strDate = "/" + ((month > 9)? (""+month) : ("0"+month)) + strDate;
	strDate = ((day > 9)? (""+day) : ("0"+day))+strDate;

	return strDate;
}

var DateField = function(config) {
    jsGrid.Field.call(this, config);
};
 
DateField.prototype = new jsGrid.Field({
 
    css: "date-field",            // redefine general property 'css'
    align: "center",              // redefine general property 'align'
  
    sorter: function(date1, date2) {
        return changeDateFormat(date1) - changeDateFormat(date2);
    },
 
    itemTemplate: function(value) {
    	console.log("VALUEEE => "+value);
    	//value = changeDateFormat(value)
        return value;
    },
 
    insertTemplate: function(value) {
        return this._insertPicker = $("<input>").datepicker({ defaultDate: new Date(), dateFormat: "dd/mm/yy"});
    },
 
    editTemplate: function(value) {
        return this._editPicker = $("<input>").datepicker({dateFormat: "dd/mm/yy"}).datepicker("setDate", changeDateFormat(value));
    },
 
    insertValue: function() {
        return this._insertPicker.datepicker("getDate").toStr();
    },
 
    editValue: function() {
        return this._editPicker.datepicker("getDate").toStr();
    },

    filterTemplate: function(value){
    	return  this._filterPicker = $("<input>").datepicker({ defaultDate: value, dateFormat: "dd/mm/yy"});
    },

    filterValue: function(){
    	var d = this._filterPicker.val();//.datepicker("getDate");
    	if(d){
    		return d;//.toStr();
    	}
    	
    	return "";
    }
});

jsGrid.fields.date = DateField;