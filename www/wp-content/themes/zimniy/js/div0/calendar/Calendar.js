var Calendar = function(){

    var currentDate;

    function getCurrentDate(){
        var d = new Date();
        var curr_date = d.getDate();
        var curr_month = d.getMonth() + 1;
        var curr_year = d.getFullYear();
        currentDate = curr_date+"."+curr_month+"."+curr_year;
    }


    return{
        init:function(){
            $( "#calendarNormal" ).datepicker({onSelect: function(dateText) {
                console.log("Selected date: " + dateText + "; input's current value: " + this.value);
                EventBus.dispatchEvent('DATE_SELECTED', {selectedDate:dateText});
            }});
            getCurrentDate();
        }
    }

};
