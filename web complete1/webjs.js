	$(document).ready(function(){
        $("#box img").click(function(){
            var n=$(this).attr("id").substr(3);
            $("#bigimg").attr("src","img/bird"+n+".jpg");
        });

    });