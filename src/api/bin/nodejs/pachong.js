var superagent = require('superagent');
var cheerio = require('cheerio');
var fs = require('fs');

var parm = process.argv.splice(2);
if(parm.length==0){
  console.log("请输入参数，例如：node pachong.js www.baidu.com");
}else{
  var collect_url = parm[0];

superagent.post(collect_url)
        .end(function(err,rtnData){
          //console.log(rtnData.text);
          var $=cheerio.load(rtnData.text);
          var comic_arr=[];
          $('#artists .artist').each(function(index,element){
            var head_src = $(element).find(".image img").attr("src");
            var a_tag = $(element).find(".info a");

            var name = a_tag.text();
            var href = "http://www.xiami.com"+a_tag.attr("href");
            // var author = $(element).find(".nick-name").text();
                    comic_arr.push(
                      {
                        head_src,
                        name,
                        href
                      }
                    );

          });


          var num = 0;
          function getComicInfo(num){
            superagent.get(comic_arr[num]['href'])
                      .end(function(eer,rtnData){
                        var $=cheerio.load(rtnData.text);
                        var description = $("#artist_info .record").text();
                        
                        comic_arr[num]['description'] = description;

                if(comic_arr.length==num+1){
                  fs.writeFile("singer.json",JSON.stringify(comic_arr));

                }else{
                  num++;
                  if(num<comic_arr.length){
                    getComicInfo(num);
                  }
                }
              });
          }
          getComicInfo(num);

        });
      }
