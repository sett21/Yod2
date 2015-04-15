var imageX;
var imageY;
var imageWidth;
var imageHeight;
var jcrop_api;
var currentImage = 1;

function cropImage(objName, realwidth, realheight, curImg){
    currentImage = curImg;
    $('#imgOptions' + currentImage).hide();
    $('#imgCropCancel' + currentImage).show();
    $('#'+objName).animate({
        //width: realwidth,
        //height: realheight,
    }, 300, function() {
        jcrop_api = $.Jcrop('#' + objName);
        jcrop_api.setOptions({
            onChange: setCoords,
            onSelect: setCoords,
            trueSize: [realwidth,realheight],
        }, function(){
            // Use the API to get the real image size
            var bounds = this.getBounds();
            boundx = bounds[0];
            boundy = bounds[0.75];
            // Store the API in the jcrop_api variable
            jcrop_api = this;
        });
    });     
}

function setCoords(c)
{
    $('#imgCropOption' + currentImage).show();
    // variables can be accessed here as
    // c.x, c.y, c.x2, c.y2, c.w, c.h
    imageX = c.x;
    imageY = c.y;
    imageWidth = c.w;
    imageHeight = c.h;

    $('#imgW' + currentImage).text(c.w);
    $('#imgH' + currentImage).text(c.h);
};

function saveCrop(module, src, objName){
    $.post( "/admin/" + module + "/imageedit/", { action: "crop", src: src, x: imageX, y: imageY, w: imageWidth, h: imageHeight })
      .done(function( data ) {
        var size = JSON.parse(data);

        jcrop_api.destroy();

        $("#cropLink" + currentImage).attr('href', 'javascript:  cropImage(\'mainImg\', ' + size[0] + ', ' + size[1] + ')');

        d = new Date();
        $("#"+objName).attr("src", src+'?'+d.getTime());
        $('#'+objName).css('height', '150'); 
        $('#'+objName).css('width', 'auto'); 
        $('#imgCropOption' + currentImage).hide();     
        $('#imgCropCancel' + currentImage).hide();
        $('#imgOptions' + currentImage).show();
    });    
}

function cancelCrop(objName){
    $('#'+objName).css('height', '150'); 
    $('#'+objName).css('width', 'auto'); 
    jcrop_api.destroy();
    $('#imgCropOption' + currentImage).hide();        
    $('#imgCropCancel' + currentImage).hide();
    $('#imgOptions' + currentImage).show();
}