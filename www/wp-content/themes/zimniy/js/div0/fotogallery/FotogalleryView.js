var FotogalleryView = function(){
    
    var sliderElement;
    
    return{
        init:function(){
            sliderElement = $('#gallerySlider');
            console.log("sliderElement="+sliderElement);
            this.clear();
        },
        clear:function(){
            console.log("clear fotogallery...");
            sliderElement.clear();
        },
        setData:function(data){
            // data is array or Map
            
        }
    }
}
