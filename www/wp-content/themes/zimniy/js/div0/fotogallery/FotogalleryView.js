var FotogalleryView = function(){
    
    var sliderElement;
    var selectedDatePostsIDs;
    var imagesCollection;

    var totalPages;
    var columns = 4;
    var rows = 5;

    var startIndex;
    var finishIndex;
    var rowStartIndex;

    function addDateListener(){
        EventBus.addEventListener('DATE_SELECTED', dateSelectedHandler);
    }

    function dateSelectedHandler(event){
        
        var dataQuoteText = {
            action: 'get_ids_by_date',
            selectedDate:event.selectedDate
        };

        $.post(ajaxurl, dataQuoteText, function(response) {
            var idsData = JSON.parse(response);

            selectedDatePostsIDs = new Array();

            clearSlider();

            if(idsData.length!=0){

                if(idsData.length>1){
                    for(var i=0; i<idsData.length; i++){
                        selectedDatePostsIDs.push(idsData[i].post_id);
                    }
                }
                else{
                    selectedDatePostsIDs.push(idsData.post_id);
                }
                getImagesByIDs(response);
            }
            else{
                alert('no images for selected date');
            }
        });
    }
    
    function getImagesByIDs(ids){
        var dataObject = {
            action: 'get_images_by_ids',
            data:ids
        };

        $.post(ajaxurl, dataObject, function(response) {
            var finalChar = response.substring(response.length-1, response.length);

            if(finalChar == '0'){
                response = response.substring(0, response.length-1);
            }

            imagesCollection = JSON.parse(response);
            createContent();
        });
    }

    function createContent(){
        totalPages = Math.ceil(imagesCollection.length/20);
        if(totalPages>0){
            for(var k=0; k<totalPages; k++){

                var page = createPage();

                var startIndex = k*columns*rows;
                var finishIndex = startIndex + columns*rows;

                if(finishIndex > (imagesCollection.length)-1){
                    finishIndex = imagesCollection.length;
                }

                for(var i=startIndex; i<finishIndex; i+=rows-1){
                    rowStartIndex = i;
                    createRow(rowStartIndex, page);
                }
            }

            reloadSlider();
        }
    }



    function createRow(startIndex, pageElement){
        var rowElement = $('<div class="row">').appendTo(pageElement);

        for(var j=startIndex; j<startIndex+columns; j++){

            if(j<imagesCollection.length){
                var imageUrl = imagesCollection[j]['guid'];
                createImageHtml(imageUrl, rowElement);
            }
        }
    }

    function createImageHtml(imageUrl, rowElement){

        var imageContainer1 = $('<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">').appendTo(rowElement);
        var imageContainer2 = $('<div class="slide-item">').appendTo(imageContainer1);
        var imageAnchorElement = $('<a href="'+imageUrl+'" class="modalbox" rel="gallery"></a>').appendTo(imageContainer2);
        var imageElement = $('<img src="'+imageUrl+'" width="160" height="96" alt="">').appendTo(imageAnchorElement);
    }

    function createPage(){
        var pageElement = $('<li>').appendTo(sliderElement);
        return pageElement;
    }

    function clearSlider(){
        sliderElement.empty();
    }
    function reloadSlider(){
        $('.bxslider2').bxSlider({
            pager:false
        });
        var  W = $(window).width();

        if( W <= 760){
            $('.bxslider3').bxSlider({
                minSlides: 1,
                maxSlides: 1,
                pager:false
            });
        } else{
            $('.bxslider3').bxSlider({
                minSlides: 1,
                maxSlides: 3,
                slideWidth: 220,
                slideMargin: 66,
                pager:false
            });
        }
        $('.bxslider').bxSlider({
            minSlides: 1,
            maxSlides: 2,
            slideWidth: 540,
            slideMargin: 30,
            pager: false
        });
    }


    return{
        init:function(){
            sliderElement = $('#gallerySlider');
            addDateListener();
        },
        clear:function(){
            console.log("clear fotogallery...");
            //sliderElement.empty();
        },
        setData:function(data){
            // data is array or Map
            
        }
    }
}
