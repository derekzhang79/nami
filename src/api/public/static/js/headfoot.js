$(function(){
    var $navLi=$(".pro_left li"),$li_detail=$(".pro_detailed");
    var $search_text=$(".search-text.search_hot_text"),$search_btn=$(".search-btn.btn");
    var $input_text=$("input[type='search']"),$input_btn=$("input[type='submit']");
    var $search_keyword=$(".key_word"),
        $customer_show=$(".customer_show"),
        $customer_detail=$(".customer_detail");


    function Product_detailed(data,search_data){
        this.data=data;
        this.search_data=search_data;
        this.doms={
            pro_detailed:$(".pro_detailed"),
            pro_ul:$(".pro_detailed_ul"),
            search_input:$("input[type='search']"),
            search_hotText:$(".search_keyword")
        };
    }
    Product_detailed.prototype={
        // 获取product数据
        getData_pro:function(index){
            var str='';
            this.doms.pro_ul.html("");
            var products =this.data[index];
            if(!products){
                return;
            }
            for(var i=0;i<products.length;i++){
                //console.log(products[i]);
                str+=this.creat_proLi(products[i]);
            }
            this.doms.pro_ul.append(str);

        },
        // 获取search的数据
        getData_hotText:function(){
            var str='';
            for(var i=0;i<this.search_data.length;i++){
                str+=this.creat_search_keyword_li(i);
            }
            this.doms.search_hotText.append(str);
        },
        // 创建product_li
        creat_proLi:function(obj){
            var str_product='<li class="text_center">'+
                '<span class="text_box">'+obj.pro_new+'</span>'+
                '<img src="'+obj.pro_img+'" alt="">'+
                '<p>'+obj.pro_name+'</p>'+
                '<span class="text_color">'+obj.pro_price+'</span>'+
                '</li>';
            return str_product;
        },
        // 创建search_keyword_li
        creat_search_keyword_li:function(index){
            this.doms.search_hotText.html("");
            var str_keyword='<li>'+
                '<a href="javascript:;">'+
                '<span class="key_word_text">'+this.search_data[index].keyword_text+'</span>'+
                '<span class="pro_piece right">'+this.search_data[index].product_piece+'</span>'+
                '</a>'+
                '</li>';
            return str_keyword;
        }
    };
    //search的数据
    var data=[{
        keyword_text:"小米6",
        product_piece:"约有7件"
    },{
        keyword_text:"小米5s Plus",
        product_piece:"约有6件"
    },{
        keyword_text:"小米MIX",
        product_piece:"约有1件"
    },{
        keyword_text:"手环",
        product_piece:"约有6件"
    },{
        keyword_text:"小米Note 4x",
        product_piece:"约有7件"
    },{
        keyword_text:"路由器",
        product_piece:"约有14件"
    }];
    // product的数据
    var data1=[[{
        pro_new:"新品",
        pro_img:"__PUBLIC__static/images/headfoot/xm6_320.png",
        pro_name:"小米6",
        pro_price:"2499元起"
    },{
        pro_new:"新品",
        pro_img:"__PUBLIC__static/images/headfoot/xm6_320.png",
        pro_name:"小米6",
        pro_price:"2499元起"
    },{
        pro_new:"新品",
        pro_img:"__PUBLIC__static/images/headfoot/xm6_320.png",
        pro_name:"小米6",
        pro_price:"2499元起"
    }],[{
        pro_new:"新品",
        pro_img:"__PUBLIC__static/images/headfoot/hm4a320.png",
        pro_name:"小米6",
        pro_price:"2499元起"
    },{
        pro_new:"新品",
        pro_img:"__PUBLIC__static/images/headfoot/hm4a320.png",
        pro_name:"小米6",
        pro_price:"2499元起"
    }]]

    var p=new Product_detailed(data1,data);

    // 搜索栏位
    $search_text.on("click",function(){
        $(this).hide();
        $search_btn.hide();
        $input_text.focus().addClass('box_border');
        $input_btn.addClass('box_border');
        $search_keyword.show().addClass('box_border border_top_none');
        p.getData_hotText();
        $input_text.blur(function(){
            $search_keyword.hide().removeClass('box_border border_top_none');
            $input_btn.removeClass('box_border');
            $search_btn.show();
            $search_text.show();
            $(this).removeClass('box_border');
        })
    });

    function hover_event(obj){
        obj.hover(function(){
            $(this).stop().slideDown(300);
        },function(){
            $(this).stop().slideUp(300);
        });
    }
    // 鼠标经过时，出现产品详细列表
    $navLi.hover(function(){
        var index=$navLi.index(this);
        p.getData_pro(index);
        $li_detail.stop().slideDown(300);
    },function(){
        $li_detail.stop().slideUp(300);
    });
    // 鼠标在详细列表的盒子移动不隐藏
    hover_event($li_detail);

    // 用户信息下拉框显示
    $customer_show.hover(function(){
        $customer_detail.stop().slideDown(300);
        $(this).css({
            background: 'white',
        });;
    },function(){
        $customer_detail.stop().slideUp(300);
        $(this).css({
            background: '#333',
        });;
    });
    // 鼠标在详细列表的盒子移动不隐藏
    hover_event($customer_detail);

});

