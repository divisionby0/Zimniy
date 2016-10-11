var BuyOnlinePopup = (function(){

    var element;
    var imageUrl;

    var $ = jQuery.noConflict();

    function getElement(){
        element = $('#popup-online2');
    }

    function updateImage(){
        console.log("update image: "+imageUrl);
        $('.partyImage').each(function(index){
            console.log('index: '+index+"  element: "+$(this));
            $(this).attr('src', imageUrl);
        });
    }

    return{
        init:function(){
            getElement();
        },
        setData:function(posterData){
            imageUrl = posterData.getImage();
            updateImage();
        }
    }
})();
