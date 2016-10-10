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
                EventBus.dispatchEvent('DATE_SELECTED', {selectedDate:dateText});
            }});

            //$( "#ui-datepicker-div" ).datepicker({maxDate: 0});

            $( "#calendarMobileInput" ).on('change', function(){
                EventBus.dispatchEvent('DATE_SELECTED', {selectedDate:$(this).val()});
            });
            getCurrentDate();
        }
    }

};
