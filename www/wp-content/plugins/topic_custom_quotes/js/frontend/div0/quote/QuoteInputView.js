var QuoteInputView = function(){
    var createQuoteButton;
    var quoteTextContainer;
    var quoteNoteInput;
    var container;
    var $;
    var quote;
    var note;

    function getContainer(){
        container = $('#quoteInputElement');
    }
    function getButton(){
        createQuoteButton = $('#createQuoteButton');
    }
    function addButtonListener(){
        createQuoteButton.on('click', function(){
            getNote();
            EventBus.dispatch(SAVE_QUOTE_REQUEST, {quote:quote, note:note});
        });
    }

    function removeButtonListener(){
        createQuoteButton.off('click');
    }

    function getNote(){
        note = quoteNoteInput.val();
    }

    function getQuoteNoteInput(){
        quoteNoteInput = $('#quoteNoteText');
    }

    function getQuoteTextContainer(){
        quoteTextContainer = $('#quoteTextContainer');
    }

    function addQuoteNoteInputListener(){
        quoteNoteInput.on('input propertychange paste', function() {
            onNoteInputChanged();
        });
    }

    function onNoteInputChanged(){
        var noteText = quoteNoteInput.val();
        if(noteText.length < 5){
            hideCreateQuoteButton();
        }
        else{
            showCreateQuoteButton();
        }
    }

    function hide(){
        container.css({display:'none'});
    }
    function show(){
        container.css({display:'block'});
    }

    function onQuoteChanged(text){
        quote = text;
        quoteTextContainer.html(text);
    }
    
    function hideCreateQuoteButton(){
        createQuoteButton.hide();
    }
    function showCreateQuoteButton(){
        createQuoteButton.show();
    }

    return{
        init:function(){
            $ = jQuery.noConflict();
            getContainer();
            getButton();
            addButtonListener();
            getQuoteNoteInput();
            addQuoteNoteInputListener();
            getQuoteTextContainer();
            hide();
        },
        setQuoteHtml:function(text){
            onQuoteChanged(text);
            show();
        },
        clear:function(){
            note = '';
            quote = '';
            quoteTextContainer.html(quote);
            quoteNoteInput.val(note);
            hide();
        }
    }
};
