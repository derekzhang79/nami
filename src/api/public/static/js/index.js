$(document).ready(function () {
    //轮播左盒子列表事件
    function heroHover() {
        var $Hero=$(".hero-list .category-item");
        $Hero.mouseover(function () {
            var index=$(this).index();
            $(this).addClass("category-item-active").siblings().removeClass("category-item-active");
            $(".hero-children").stop().hide();
            $(".hero-children").stop().eq(index).show();
        });
        $Hero.mouseout(function () {
            $(this).removeClass("category-item-active");
            $(".hero-children").stop().hide();
        })
    }

    //轮播事件
    function heroCarousel() {

        var img=$(".hero-carousel li");
        var aBtn=$(".hero-controls-direction ");
        var oBtn=$(".slider-item");
        var num=0;



        function next() {
            aBtn.find("a:last").click(function () {
                num=++num % img.length;
                img.siblings().fadeOut().eq(num).fadeIn();
                oBtn.eq(num).find("a").addClass("s-active");
                oBtn.eq(num).siblings().find("a").removeClass("s-active");
            })
        }


        function prev() {
            aBtn.find("a:first").click(function () {
                num <=0 ? num=img.length :num;
                num--;
                img.siblings().fadeOut().eq(num).fadeIn();
                oBtn.eq(num).find("a").addClass("s-active");
                oBtn.eq(num).siblings().find("a").removeClass("s-active");
            })
        }

        var timer=null;
        var i=0;
        function autoPlay() {
            clearInterval(timer);
            timer=setInterval(function () {
                i++;
                if (i>=img.length){
                    i=0;
                }
                oBtn.siblings().find("a").removeClass("s-active");
                oBtn.eq(i).find("a").addClass("s-active");
                img.eq(i).stop().fadeIn().siblings().stop().fadeOut();
            },3000)
        }
        img.mouseover(function () {
            clearInterval(timer);
        });
        img.mouseout(function () {
            autoPlay();
        });

        oBtn.click(function () {
            var index=$(this).index();
            oBtn.siblings().find("a").removeClass("s-active");
            oBtn.eq(index).find("a").addClass("s-active");
            img.eq(index).fadeIn().siblings().fadeOut();
            i=index;
            autoPlay();
        });

        autoPlay();
        next();
        prev();

    }

    //明星单品轮播事件
    function starCarousel() {
        let $SC=$("#star .star-carousel-list");
        let $cP=$("#star .control-prev");
        let $cN=$("#star .control-next");
        let timer=null;

        function Sclick() {
            $cP.click(function () {
                $cP.addClass("control-none");
                $cN.removeClass("control-none");
                $SC.stop().css({"margin-left":"0"});
            });
            $cN.click(function () {
                $cN.addClass("control-none");
                $cP.removeClass("control-none");
                $SC.stop().css({"margin-left":"-1024px"});
            });
        }

        function Splay() {
            clearInterval(timer);
            timer=setInterval(function () {
                if($SC.css("margin-left")=="0px"){
                    $cN.addClass("control-none");
                    $cP.removeClass("control-none");
                    $SC.css({"margin-left":"-1024px"});
                }
                else if($SC.css("margin-left")=="-1024px"){
                    $cP.addClass("control-none");
                    $cN.removeClass("control-none");
                    $SC.css({"margin-left":"0"});
                }
                else{
                    clearInterval(timer);
                }
            },6000)
        }
        Sclick();
        Splay();
    }

    //内容标签事件
    function tagHover(ele) {
        let $bUl=$(ele).find(".brick-tab-list");
        let $tHover=$(ele).find(".brick-more-list li");
        $tHover.mouseover(function () {
            let index=$(this).index();
            $(this).addClass("brick-active").siblings().removeClass("brick-active");
            $bUl.stop().hide();
            $bUl.stop().eq(index).show();
        });
    }

    //用户评价事件
    function orangeHover(blb) {
        let $oH=$(blb).find(".brick-content .brick-tab ul li");
        $oH.mouseover(function () {
            let index=$(this).index();
            $(this).find(".review-wrapper").stop().css({"opacity":"1","height":"80px"});
            $(this).mouseout(function () {
                $(this).find(".review-wrapper").stop().css({"opacity":"0","height":"0"});
            });
        });
    }

    //多个内容及评价事件
    function allHover() {
        tagHover('#home-ele');
        tagHover('#home-smart');
        tagHover('#home-match');
        tagHover('#home-accessories');
        tagHover('#home-around');
        orangeHover('#home-ele');
        orangeHover('#home-smart');
        orangeHover('#home-match');
        orangeHover('#home-accessories');
        orangeHover('#home-around');
    }

    heroHover();
    heroCarousel();
    starCarousel();
    allHover();
});
