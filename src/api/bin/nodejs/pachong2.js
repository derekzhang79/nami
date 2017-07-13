var superagent = require('superagent');
var cheerio = require('cheerio');
var fs = require('fs');

var parm = process.argv.splice(2);
if(parm.length==0){
  console.log("请输入参数，例如：node pachong2.js www.baidu.com");
}else{
  var collect_url = parm[0];

superagent.get(collect_url)
        .end(function(err,rtnData){
          //console.log(rtnData.text);
          var $=cheerio.load(rtnData.text);
          var comic_arr=[];
          $('#artist_trends .track_list tr').each(function(index,element){
            var a_tag = $(element).find(".song_name a");
            var music_name =a_tag.text();
            var href = "http://www.xiami.com"+a_tag.attr("href");
            var hot = $(element).find(".song_hot").text();
            var xiami_id = $(element).find(".song_act .song_tel").attr("onclick");
                    comic_arr.push(
                      {
                        hot,
                        music_name,
                        href,
                        xiami_id
                      }
                    );

          });

          var num = 0;
          function getComicInfo(num){
            superagent.get(comic_arr[num]['href'])
                      .end(function(eer,rtnData){
                        var $=cheerio.load(rtnData.text);
                        var lrc = $(".lrc_main").text();
                        var thumb = $("#albumCover img").attr('src');
                        comic_arr[num]['lrc'] = lrc;
                        comic_arr[num]['thumb'] = thumb;

                if(comic_arr.length==num+1){
                  fs.writeFile("music.json",JSON.stringify(comic_arr));

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
