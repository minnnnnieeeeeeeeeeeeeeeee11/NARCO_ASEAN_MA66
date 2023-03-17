$(document).ready(function() {
    $("#decrease").click(function() {
        $("div,a,p,button,ol,ul,li,h1,h2,h3,h4,h5,h6,form,input,label,iframe,table,tr,td,span")
            .children().each(function() {
                var fontsize = parseInt($(this).css("font-size"));
                font = fontsize - 1 + "px";
                $(this).css({
                    'font-size': font
                });
            }
        );
    });
});

$(document).ready(function() {
    $("#normal").click(function() {
        $("div,a,p,button,ol,ul,li,h1,h2,h3,h4,h5,h6,form,input,label,iframe,table,tr,td,span")
            .children().each(function() {
                var fontsize = parseInt($(this).css("font-size"));
                font = "";
                $(this).css({
                    'font-size': font
                });
            }
        );
    });
});

$(document).ready(function() {
    $("#increase").click(function() {
        $("div,a,p,button,ol,ul,li,h1,h2,h3,h4,h5,h6,form,input,label,iframe,table,tr,td,span")
            .children().each(function() {
                var fontsize = parseInt($(this).css("font-size"));
                font = fontsize + 1 + "px";
                $(this).css({
                    'font-size': font
                });
            }
        );
    });
});