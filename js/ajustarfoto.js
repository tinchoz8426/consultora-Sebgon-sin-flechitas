$(function() {
    UniformImages();
    $(window).resize(function(){
        UniformImages();
    });
});
 
function UniformImages(){
    $('.uniform-images li').each(function(){
        ContentBox=$(this);
        PropBox=getProportions(ContentBox);
        $(this).children('img').load(function(){
            ImgtoResize=$(this);
            PropImg=getProportions(ImgtoResize);
            if(PropBox>PropImg){
                ProportionVertical(ImgtoResize);
            }
            else{
                ProportionHorizontal(ImgtoResize);
            }
        });
        ImgtoResize=$(this).children('img');
        PropImg=getProportions(ImgtoResize);
        if(PropBox>PropImg){
            ProportionVertical(ImgtoResize);
        }
        else{
            ProportionHorizontal(ImgtoResize);
            RecalcMargintop(ImgtoResize);
        }
    });
}
 
function getProportions(x){
    Height=x.height();
    Width=x.width();
    var Prop;
    Prop=Width/Height;
    return Prop;
}
 
function ProportionVertical(x){
    x.removeAttr("style");
    x.css({'height':'100%','width':'auto'});
}
 
function ProportionHorizontal(x){
    x.removeAttr("style");
    x.css({'position':'relative','top':'50%','width':'100%','height':'auto'});
    var Himg;
    Himg=x.height();
    var MarginTop;
    MarginTop=Himg/-2;
    x.css({'margin-top':MarginTop});
}
 
function RecalcMargintop(x){
    MarginTopImage=x.height()/-2;
    x.css({'margin-top':MarginTopImage});
}