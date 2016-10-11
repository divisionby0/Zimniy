$(document).ready(function() {

    var fotogalleryView = new FotogalleryView();
    fotogalleryView.init();

    var calendar = new Calendar();
    calendar.init();
    
    BuyOnlinePopup.init();

    $('.buyOnlineButton').each(function(){
        $(this).on('click', function(){
            var costs = new Array($(this).data('partycost'), $(this).data('partysalecost'));
            var image = $(this).data('partyimage');
            var date = $(this).data('partydate');

            var posterData = new Poster();
            posterData.init('', image, costs, date);

            BuyOnlinePopup.setData(posterData);
        });
    });

    /*
    $('.buyOnlineButton').on('click', function(event){
        var costs = new Array($(this).data('partycost'), $(this).data('partysalecost'));
        var image = $(this).data('partyimage');
        var date = $(this).data('partydate');
        
        var posterData = new Poster();
        posterData.init('', image, costs, date);
        
        BuyOnlinePopup.setData(posterData);
    });
    */
});
