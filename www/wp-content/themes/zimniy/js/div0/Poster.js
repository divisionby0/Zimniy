var Poster = function(){

    var label;
    var image;
    var costs;
    var date;
    
    return{
        init:function(_label, _image, _costs, _date){
            label = _label;
            image = _image;
            costs = _costs;
            date = _date;
        },
        getLabel:function(){
            return label;
        },
        getImage:function(){
            return image;
        },
        getCosts:function(){
            return costs;
        },
        getDate:function(){
            return date;
        }
    }
}
