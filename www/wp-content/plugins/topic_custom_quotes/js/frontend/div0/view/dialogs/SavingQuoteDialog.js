var SavingQuoteDialog = (function(){

    var $ = jQuery.noConflict();

    var dialog;
    
    return{
        show:function(){
            dialog = $('<div id="msg_dialog"></div>').dialog();
            dialog.dialog({
                modal: true,
                autoOpen: true,
                title: 'Saving quote. Please wait...'
            });
        },
        hide:function(){
            dialog.dialog('close');
        }
    }
})();
