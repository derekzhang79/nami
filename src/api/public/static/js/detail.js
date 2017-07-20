/**
 * Created by lzx on 2017/6/22.
 */
$(function () {
    var proChoosetwo= $(".page02 .page02-info .main .pro-choose-two ul li");

   proChoosetwo.click( function () { $(this).addClass("active").siblings().removeClass("active");

   });


    var proChooseAlone=$(".page02 .page02-info .main .pro-choose-alone ul li");
    proChooseAlone.click( function () {

            if($(this).hasClass("active") == false){

                $(this).addClass("active")
            }else {

               $(this).removeClass("active");


            }
        });

    /*参数页面*/
    var Select=$(".Js_select p a");
    var Js_selectContent=$(".Js_selectContent");
    var JS_Show=$(".Js_selectContent a");

    Select.click(function () {

        Js_selectContent.show();
    })

    JS_Show.click(function () {
        Js_selectContent.hide();
    })

    /*立即购买隐藏*/


});