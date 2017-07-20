<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:97:"D:\wamp64\www\webPrj\vue-prj\my-project\src\api\public/../application/vuepc\view\index\index.html";i:1496676216;s:96:"D:\wamp64\www\webPrj\vue-prj\my-project\src\api\public/../application/vuepc\view\index\head.html";i:1496675897;s:98:"D:\wamp64\www\webPrj\vue-prj\my-project\src\api\public/../application/vuepc\view\index\player.html";i:1496660025;s:96:"D:\wamp64\www\webPrj\vue-prj\my-project\src\api\public/../application/vuepc\view\index\home.html";i:1496392639;s:98:"D:\wamp64\www\webPrj\vue-prj\my-project\src\api\public/../application/vuepc\view\index\singer.html";i:1496676414;s:100:"D:\wamp64\www\webPrj\vue-prj\my-project\src\api\public/../application/vuepc\view\index\personal.html";i:1496711718;s:97:"D:\wamp64\www\webPrj\vue-prj\my-project\src\api\public/../application/vuepc\view\index\lists.html";i:1496676126;s:96:"D:\wamp64\www\webPrj\vue-prj\my-project\src\api\public/../application/vuepc\view\index\foot.html";i:1496677315;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>网易云音乐</title>
	<link rel="stylesheet" type="text/css" href="/public/static/music/css/core.css">
	<link rel="stylesheet" type="text/css" href="/public/static/music/css/pt_frame.css">
	<link rel="stylesheet" type="text/css" href="/public/static/music/css/common.css">
</head>
<body>
	<div id="vue-box">
		<!-- 菜单 -->
			<div id="g-topbar" class="g-topbar" style="width: 1349px; top: 0px;">
		<div class="m-top">
			<div class="wrap">
				<h1 class="logo">
					<router-link to="/">网易云音乐</router-link>
				</h1>
				<ul class="m-nav j-tflag">
					<li class="fst">
						<span>
							<a hidefocus="true" href="/#" data-module="discover" class="z-slt"> <em>发现音乐</em> <sub class="cor">&nbsp;</sub>
							</a>
						</span>
					</li>
					<li>
						<span>
							<a data-res-action="bilog" data-log-action="page" data-log-json="{&quot;type&quot;:&quot;my&quot;}" hidefocus="true" href="/my/" data-module="my"> <em>我的音乐</em> <sub class="cor">&nbsp;</sub>
							</a>
						</span>
					</li>
					<li>
						<span>
							<a hidefocus="true" href="/friend" data-module="friend">
								<em>朋友</em>
								<sub class="cor">&nbsp;</sub> <i class="dot u-icn u-icn-68 f-alpha j-t" style="display:none;"></i>
							</a>
						</span>
					</li>
					<li>
						<span>
							<a hidefocus="true" href="/store/product" target="_blank" data-module="store">
								<em>商城</em>
							</a>
						</span>
					</li>
					<li>
						<span>
							<a hidefocus="true" href="/nmusician/web/recruit" target="_blank" data-module="musician">
								<em>音乐人</em>
							</a>
						</span>
					</li>
					<li class="lst">
						<span>
							<a id="topbar-download-link" data-res-action="bilog" data-log-action="page" data-log-json="{&quot;type&quot;:&quot;downloadapp&quot;}" hidefocus="true" href="/download" data-module="download">
								<em>下载客户端</em>
								<sub class="cor">&nbsp;</sub>
							</a>
						</span> <sup class="hot">&nbsp;</sup>
					</li>
				</ul>
				<div class="m-tophead f-pr j-tflag" id="auto-id-5xpybKI2hl4P8ElX">
					<a hidefocus="true" href="#" class="link" data-action="login">登录</a>
					<div class="m-tlist j-uflag" style="display:none;">
						<div class="inner">
							<ul class="f-cb">
								<li>
									<a hidefocus="true" class="itm-1" href="#" data-action="login" data-type="mobile"> <i class="icn icn-mb"></i>
										<em>手机号登录</em>
									</a>
								</li>
								<li>
									<a hidefocus="true" class="itm-2" href="http://music.163.com/api/sns/authorize?snsType=10&amp;clientType=web2&amp;callbackType=Login&amp;forcelogin=true" target="_blank" data-action="login" data-type="tencent">
										<i class="icn icn-wx"></i>
										<em>微信登录</em>
									</a>
								</li>
								<li>
									<a hidefocus="true" class="itm-2" href="http://music.163.com/api/sns/authorize?snsType=5&amp;clientType=web2&amp;callbackType=Login&amp;forcelogin=true" target="_blank" data-action="login" data-type="tencent">
										<i class="icn icn-qq"></i>
										<em>QQ登录</em>
									</a>
								</li>
								<li>
									<a hidefocus="true" class="itm-2" href="http://music.163.com/api/sns/authorize?snsType=2&amp;clientType=web2&amp;callbackType=Login&amp;forcelogin=true" target="_blank" data-action="login" data-type="sina">
										<i class="icn icn-sn"></i>
										<em>新浪微博登录</em>
									</a>
								</li>
								<li>
									<a hidefocus="true" class="itm-2" href="#" data-action="login" data-type="netease">
										<i class="icn icn-wy"></i>
										<em>网易邮箱帐号登录</em>
									</a>
								</li>
							</ul>
						</div>
						<i class="arr"></i>
					</div>
				</div>
				<a class="m-msg f-pr j-tflag" href="/msg/#/at" style="display:none;"></a>
				<div class="m-srch f-pr j-suggest" id="g_search">
					<div class="srchbg">
						<span class="parent">
							<input class="txt j-flag" value="" id="auto-id-bOS6lNiZqETvp3Qd" style="opacity: 1;" type="text">
							<label class="ph j-flag" id="auto-id-4fGBOyBPPlTvBgxM">单曲/歌手/专辑/歌单/MV/用户</label>
						</span>
					</div>
					<div class="j-showoff u-showoff f-hide">
						<p>现在支持搜索MV啦~</p>
					</div>
					<span class="j-flag" style="display:none;" id="auto-id-b4fdmO3kh8UZ8ZSk">&nbsp;</span>
					<div class="u-lstlay j-flag" style="display:none;" id="auto-id-35T55KZooPxagNBh"></div>
				</div>
			</div>
		</div>
		<div class="m-subnav m-subnav-up f-pr j-tflag f-hide">
			<div class="shadow">&nbsp;</div>
		</div>
		<div id="g_nav2" class="m-subnav j-tflag">
			<div class="wrap f-pr">
				<ul class="nav">
					<li>
						
					<router-link to="/home" active-class="z-slt"><em>首页</em></router-link>

					</li>
					<li>
					 
					<router-link to="/singer" active-class="z-slt"><em>歌手</em></router-link>

					</li>
					<li>
						<a hidefocus="true" data-module="toplist" href="/discover/toplist" class="">
							<em>排行榜</em>
						</a>
					</li>
					<li>
					 
					<router-link to="/lists" active-class="z-slt"><em>歌单</em></router-link>

					</li>
					<li>
						<a hidefocus="true" data-module="djradio" href="/discover/djradio">
							<em>主播电台</em>
						</a>
					</li>
					
					<li>
						<a hidefocus="true" data-module="album" href="/discover/album">
							<em>新碟上架</em>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
		<router-view></router-view>
		<div class="g-btmbar">
	<div class="m-playbar m-playbar-lock" style="top: -53px; visibility: visible;" id="auto-id-hcTHRyImhuXucWBV">
		<div class="updn">
			<div class="left f-fl">
				<a href="javascript:;" class="btn" hidefocus="true" data-action="lock"></a>
			</div>
			<div class="right f-fl"></div>
		</div>
		<div class="bg"></div>
		<div class="hand" title="展开播放条"></div>
		<div class="wrap" id="g_player" style="margin-left: -498.5px;">
			<div class="btns">
				<a href="javascript:;" hidefocus="true" data-action="prev" class="prv" title="上一首(ctrl+←)" @click="nextOrPrev('prev')">上一首</a>
				<a href="javascript:;" onclick="control_audio()" hidefocus="true" data-action="play" class="ply j-flag" id="playBtn" title="播放/暂停(p)">播放/暂停</a>
				<a href="javascript:;" hidefocus="true" data-action="next" class="nxt" title="下一首(ctrl+→)" @click="nextOrPrev('next')">下一首</a>
			</div>
			<div class="head j-flag">
				<img :src="$store.state.music_info.thumb">
				<a href="/song?id=480769052" hidefocus="true" class="mask"></a>
			</div>

			<div class="play">
				<div class="j-flag words">
					<a hidefocus="true" href="/song?id=480769052" class="f-thide name fc1 f-fl" :title="$store.state.music_info.music_name">{{ $store.state.music_info.music_name }} </a>
					<span class="by f-thide f-fl">
						<span :title="$store.state.music_info.singer_name">
							<a class="" onclick="ss()" hidefocus="true">{{ $store.state.music_info.singer_name }}</a>
						</span>
					</span>
					   <!-- <div v-html="$store.state.embed"> {{ $store.state.embed }}</div>  -->
				</div>
				<div class="m-pbar" data-action="noop">

					
	 <audio autoplay :src="$store.state.music_info.music_src" style="width: 100%; height: 26px;" controls id="my_audio"></audio>

	<script type="text/javascript">
	function control_audio () {
		 var my_audio=document.getElementById('my_audio');
		 //如果是暂停
		 if (my_audio.paused) {
		 	document.querySelector("#playBtn").setAttribute("class","ply j-flag pas");
		 	my_audio.play();
		 }else{
		 	// pas
		 	document.querySelector("#playBtn").setAttribute("class","ply j-flag");
			my_audio.pause();
		 }

	}
	

	</script>

				</div>
			</div>
			<div class="oper f-fl">
				<a href="javascript:;" hidefocus="true" data-action="like" class="icn icn-add j-flag" title="收藏">收藏</a>
				<a href="javascript:;" hidefocus="true" data-action="share" class="icn icn-share" title="分享">分享</a>
			</div>
			<div class="ctrl f-fl f-pr j-flag">
				<div class="m-vol" style="visibility:hidden;" id="auto-id-e2lPXF87z0cG0lz5">
					<div class="barbg"></div>
					<div class="vbg j-t" id="auto-id-7m5nZhLfqJVkhIhg">
						<div class="curr j-t" style="height: 74.4px;"></div>
						<span class="btn f-alpha j-t" style="top: 16.2px;"></span>
					</div>
				</div>
				<a href="javascript:;" hidefocus="true" data-action="volume" class="icn icn-vol"></a>
				<a href="javascript:;" hidefocus="true" data-action="mode" class="icn icn-loop" title="循环"></a>
				<span class="add f-pr">
					<span class="tip" style="display: none;">已开始播放</span>
					<a href="javascript:;" title="播放列表" hidefocus="true" data-action="panel" class="icn icn-list s-fc3">3</a>
				</span>
				<div class="tip tip-1" style="display:none;">循环</div>
			</div>
		</div>
	</div>
</div>
	</div>

	<!-- 内容 -->
	<template id="home">
	<div class="g-bd head_content_top">首页</div>
</template>
	<template id="singer">
	<div class="g-bd2 f-cb head_content_top">
		<div class="g-sd2">
			<div class="g-wrap4 n-sgernav" id="singer-cat-nav">
				<h2 class="tit">所有分类</h2>
				<ul class="nav f-cb">
					<li v-for="cate_info in $store.state.cate_list">
						<router-link :to="{path:'singer',query:{id:cate_info.id}}">{{cate_info.tag}}</router-link>	
					</li>
				</ul>
			</div>
		</div>
		<div class="g-mn2">
			<div class="g-mn2c">
				<div class="g-wrap">
					<div class="u-title f-cb">
						<h3>
							<span class="f-ff2">{{ $store.state.cate_name }}</span>
						</h3>
						<a href="/discover/artist/signed/" data-cat="5001" class="more s-fc3">更多 &gt;</a>
					</div>
					<div class="m-sgerlist">
						<ul class="m-cvrlst m-cvrlst-5 f-cb">

							<li v-for="singer_info in $store.state.singer_list">
								<div class="u-cover u-cover-5">
									<img :src="singer_info.head_src">
									<router-link :to="{path:'lists',query:{id:singer_info.id}}" class="msk" :title="singer_info.singer_name+'的音乐'"></router-link>
								</div>
								<p>
									<router-link :to="{path:'lists',query:{id:singer_info.id}}" class="nm nm-icn f-thide s-fc0" :title="singer_info.singer_name+'的音乐'">{{singer_info.singer_name}}</router-link>
									<router-link class="f-tdn" :to="{path:'personal',query:{id:singer_info.id}}" :title="singer_info.singer_name+'的个人主页'">
										<i class="u-icn u-icn-5"></i>
									</router-link>
								</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

</template>	

	<template id="personal">
<div class="g-bd4 f-cb" style="margin-top: 105px;">
  <div class="g-mn4">
    <div class="g-mn4c">
      <div class="g-wrap6">
        <div class="n-artist f-cb">
          
          <div class="singer_info">
            <div class="d_left">
                <div style="overflow: hidden;" class="singer_name">
                <h2 id="artist-name" data-rid="10559" class="sname f-thide sname-max">{{ $store.state.singerInfo.singer_name }}</h2>
                <h3 id="artist-alias" class="salias f-thide">
                {{ $store.state.singerInfo.other_name }}
                </h3>
              </div>
              <div class="desc">{{ $store.state.singerInfo.about}}</div>
            </div>
            <div class="d_right" style="overflow: hidden; ">
                <img :src="$store.state.singerInfo.head_src" style="width:300px" >
            </div>
          </div>
        
          <div class="mask f-alpha"></div>
          <a id="artist-home" href="/user/home?id=29879272" class="btn-rz f-tid">Ta的个人主页</a>
          <a id="artist-sub" href="javascript:void(0)" class="btnfav f-tid">收藏</a>
        </div>
        <!-- <ul id="m_tabs" class="m-tabs f-cb">
          <li class="fst"><a href="/artist?id=10559" class="z-slt"><em>热门50单曲</em></a></li>
          <li><a href="/artist/album?id=10559"><em>所有专辑</em></a></li>
          <li><a href="/artist/mv?id=10559"><em>相关MV</em></a></li>
          <li><a href="/artist/desc?id=10559"><em>歌手介绍</em></a></li>
        </ul> -->
        <div id="artist-top50" class="n-top50">
          <div class="m-info">
            <div id="content-operation" class="btns f-cb" data-rid="10559" data-type="2">
              <a data-res-action="play" data-res-id="10559" data-res-type="2" href="javascript:;"
                 class="u-btn2 u-btn2-2 u-btni-addply f-fl" hidefocus="true" title="播放"><i><em
                class="ply"></em>播放</i></a>
              <a data-res-action="addto" data-res-id="10559" data-res-type="2" href="javascript:;"
                 class="u-btni u-btni-add" hidefocus="true" title="添加到播放列表"></a>
              <a data-res-id="10559" data-res-type="2" data-res-action="fav" href="javascript:;"
                 class="u-btni u-btni-fav" hidefocus="true" data-res-name="张惠妹 热门50单曲"><i>收藏热门</i></a>
            </div>
          </div>
          <div class="f-cb">
            <div id="song-list-pre-cache" data-key="track_artist_top-10559" data-simple="0">
              <div oncopy="return false;" oncut="return false;" ondragstart="return false;"
                   id="auto-id-IiHOMhXAbt3bXU6G">
                <div class="j-flag" id="auto-id-C93NZxm1rRyJGVux">
                  <table class="m-table m-table-1 m-table-4">
                    <tbody>
                    <tr id="3269041496569157977" class="even " v-for="(music_info,index) in $store.state.music_list">
                      <td class="w1">
                        <div class="hd"><span data-res-id="326904" data-res-type="18" data-res-action="play"
                                              data-res-from="2" data-res-data="10559" class="ply ">&nbsp;</span><span
                          class="num">{{index+1}}</span></div>
                      </td>
                      <td class="">
                        <div class="f-cb">
                          <div class="tt">
                            <div class="ttc"><span class="txt"><a><b
                              :title="music_info.music_name" @click="play(music_info)">{{music_info.music_name}}</b></a><span data-res-id="326904" data-res-action="mv" title="播放mv"
                                                                 class="mv">MV</span></span></div>
                          </div>
                        </div>
                      </td>
                      <td class="w2-1 s-fc3"><span class="u-dur ">05:13</span>
                        <div class="opt hshow"><a class="u-icn u-icn-81 icn-add" href="javascript:;" title="添加到播放列表"
                                                  hidefocus="true" data-res-type="18" data-res-id="326904"
                                                  data-res-action="addto" data-res-from="2"
                                                  data-res-data="10559"></a><span data-res-id="326904"
                                                                                  data-res-type="18"
                                                                                  data-res-action="fav"
                                                                                  class="icn icn-fav" title="收藏"></span><span
                          data-res-id="326904" data-res-type="18" data-res-action="share" data-res-name="如果你也听说"
                          data-res-author="张惠妹"
                          data-res-pic="http://p4.music.126.net/X4r7ThHc-uAcxEXvZ4G0mA==/6661940952772237.jpg"
                          class="icn icn-share" title="分享">分享</span><span data-res-id="326904" data-res-type="18"
                                                                          data-res-action="download" class="icn icn-dl"
                                                                          title="下载"></span></div>
                      </td>
                      <td class="w4">
                        <div class="text"><router-link :to="{path:'lists',query:{id:$store.state.singerInfo.id}}">{{ $store.state.singerInfo.singer_name }}</router-link></div>
                      </td>
                      <td class="w5"><span class="hot u-hot"><i style="width:92%"><i></i></i></span></td>
                    </tr>
                    
                    </tbody>
                  </table>
                </div>
                <div class="j-flag"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="g-sd4">
    <div class="g-wrap7">
      <div id="j-music-ad" class="m-sidead" data-has-music-ad="0">
        <div class="j-flag f-hide" id="auto-id-IWSm4k0raPbio7lf"></div>
        <div class="j-flag">
          <ins class="adsbydm" inner-prod="adbid" inner-width="200" inner-height="220"
               inner-src="http://iad.g.163.com/wa/ad?site=netease&amp;affiliate=music&amp;cat=detail&amp;type=logo200x220&amp;location=1"
               check-src="http://iad.g.163.com/wa/ad_check?site=netease&amp;affiliate=music&amp;cat=detail&amp;type=logo200x220&amp;location=1">
            <div>
              <iframe id="ef9f77ccfbc24c79936dbcf346a15f7e" width="200" height="220" prod="adbid" frameborder="0"
                      scrolling="no" border="0"
                      src="http://iad.g.163.com/wa/ad?site=netease&amp;affiliate=music&amp;cat=detail&amp;type=logo200x220&amp;location=1&amp;uuid=ef9f77ccfbc24c79936dbcf346a15f7e"></iframe>
            </div>
          </ins>
        </div>
      </div>
      <h3 class="u-hd3">
        <span class="f-fl">热门歌手</span>
      </h3>
      <ul class="m-hdlist f-cb" id="rec-similar-artists">
        <li data-res-id="9621" data-res-type="2" data-res-action="log"
            data-res-data="recommendclick|0||artist-artist-recommend|10559">
          <div class="hd">
            <a href="/artist?id=9621" title="王菲">
              <img src="http://p4.music.126.net/GKhjgN1ltQYK3eYf9DdJwg==/18727981557622763.jpg?param=50y50">
            </a>
          </div>
          <p>
            <a href="/artist?id=9621" title="王菲" class="nm nm-icn f-ib f-thide">王菲</a>
          </p>
        </li>
        <li data-res-id="7763" data-res-type="2" data-res-action="log"
            data-res-data="recommendclick|1||artist-artist-recommend|10559">
          <div class="hd">
            <a href="/artist?id=7763" title="G.E.M.邓紫棋">
              <img src="http://p3.music.126.net/r7uMnwjWpYMuQI_3ZTg56A==/18528969953189760.jpg?param=50y50">
            </a>
          </div>
          <p>
            <a href="/artist?id=7763" title="G.E.M.邓紫棋" class="nm nm-icn f-ib f-thide">G.E.M.邓紫棋</a>
          </p>
        </li>
        <li data-res-id="7214" data-res-type="2" data-res-action="log"
            data-res-data="recommendclick|2||artist-artist-recommend|10559">
          <div class="hd">
            <a href="/artist?id=7214" title="蔡健雅">
              <img src="http://p4.music.126.net/vZXBm3N-YCW7mokbiL_nGw==/185817465111404.jpg?param=50y50">
            </a>
          </div>
          <p>
            <a href="/artist?id=7214" title="蔡健雅" class="nm nm-icn f-ib f-thide">蔡健雅</a>
          </p>
        </li>
        <li data-res-id="1007170" data-res-type="2" data-res-action="log"
            data-res-data="recommendclick|3||artist-artist-recommend|10559">
          <div class="hd">
            <a href="/artist?id=1007170" title="陈粒">
              <img src="http://p3.music.126.net/Q92YwJrk2f2tsK-7B0VIhQ==/6628955605123612.jpg?param=50y50">
            </a>
          </div>
          <p>
            <a href="/artist?id=1007170" title="陈粒" class="nm nm-icn f-ib f-thide">陈粒</a>
          </p>
        </li>
        <li data-res-id="9272" data-res-type="2" data-res-action="log"
            data-res-data="recommendclick|4||artist-artist-recommend|10559">
          <div class="hd">
            <a href="/artist?id=9272" title="孙燕姿">
              <img src="http://p3.music.126.net/nXF_Faa7-ZisQShLlAqyjw==/18791753231401604.jpg?param=50y50">
            </a>
          </div>
          <p>
            <a href="/artist?id=9272" title="孙燕姿" class="nm nm-icn f-ib f-thide">孙燕姿</a>
          </p>
        </li>
        <li data-res-id="893259" data-res-type="2" data-res-action="log"
            data-res-data="recommendclick|5||artist-artist-recommend|10559">
          <div class="hd">
            <a href="/artist?id=893259" title="金玟岐">
              <img src="http://p4.music.126.net/Kw6Y3MOUnxP4dew8nbz4rw==/2881819978524021.jpg?param=50y50">
            </a>
          </div>
          <p>
            <a href="/artist?id=893259" title="金玟岐" class="nm nm-icn f-ib f-thide">金玟岐</a>
          </p>
        </li>
      </ul>
      <div class="m-multi">
        <h3 class="u-hd3">
          <span class="f-fl">网易云音乐多端下载</span>
        </h3>
        <ul class="bg f-cb">
          <li><a data-res-action="bilog" data-log-action="downloadapp"
                 data-log-json="{&quot;type&quot;:&quot;iPhone&quot;,&quot;source&quot;:&quot;detail&quot;}"
                 href="https://itunes.apple.com/app/id590338362" class="ios" hidefocus="true" target="_blank">iPhone</a>
          </li>
          <li><a data-res-action="bilog" data-log-action="downloadapp"
                 data-log-json="{&quot;type&quot;:&quot;pc&quot;,&quot;source&quot;:&quot;detail&quot;}"
                 href="http://music.163.com/api/pc/download/latest" class="pc" hidefocus="true" target="_blank">PC</a>
          </li>
          <li><a data-res-action="bilog" data-log-action="downloadapp"
                 data-log-json="{&quot;type&quot;:&quot;android&quot;,&quot;source&quot;:&quot;detail&quot;}"
                 href="http://music.163.com/api/android/download/latest2" class="aos" hidefocus="true" target="_blank">Android</a>
          </li>
        </ul>
        <p class="s-fc4">同步歌单，随时畅听320k好音乐</p>
      </div>
    </div>
  </div>
</div>
</template>

	<template id="lists">
	<div class="g-bd head_content_top" id="m-disc-pl-c">
		<div class="g-wrap p-pl f-pr">
			<div class="u-title f-cb">
				<h3>
					<span class="f-ff2 d-flag">全部</span>
					<a href="javascript:;" class="u-btn2 u-btn2-1 menu d-flag" id="cateToggleLink"> <i>选择分类 <em class="u-icn u-icn-38"></em></i> 
					</a>
				</h3>
				<div class="u-btn f-fr u-btn-hot d-flag">
					<a href="/discover/playlist/?order=hot" class="a1" data-order="hot">热门</a>
					<a href="/discover/playlist/?order=new" class="a2" data-order="new">最新</a>
				</div>
			</div>
		 
			 
			<ul class="m-cvrlst f-cb" id="m-pl-container">
				 
				<li v-for="music_info in $store.state.music_list">
					<div class="u-cover u-cover-1">
						<img class="j-flag" :src="music_info.thumb">
						<a :title="music_info.music_name"  @click="play(music_info)" class="msk"></a>
						<div class="bottom">
							<a class="icon-play f-fr" title="播放"   @click="play(music_info)"></a>
							<span class="icon-headset"></span>
							<span class="nb">119万</span>
						</div>
					</div>
					<p class="dec">
						<a :title="music_info.music_name" href="/playlist?id=565780133" class="tit f-thide s-fc0">{{music_info.music_name}}</a>
					</p>
					<p>
						<span class="s-fc4">by</span>
						<a href="/user/home?id=359712350" class="nm nm-icn f-thide s-fc3">
							{{music_info.singer_name}}
						</a>
					</p>
				</li>
			</ul>
			<div id="m-pl-pager">
				<div class="u-page">
					<a href="javascript:void(0)" class="zbtn zprv js-disabled">上一页</a>
					<a href="javascript:void(0)" class="zpgi js-selected">1</a>
					<a href="/discover/playlist/?order=hot&amp;cat=%E5%85%A8%E9%83%A8&amp;limit=35&amp;offset=35" class="zpgi">2</a>
					<a href="/discover/playlist/?order=hot&amp;cat=%E5%85%A8%E9%83%A8&amp;limit=35&amp;offset=70" class="zpgi">3</a>
					<a href="/discover/playlist/?order=hot&amp;cat=%E5%85%A8%E9%83%A8&amp;limit=35&amp;offset=105" class="zpgi">4</a>
					<a href="/discover/playlist/?order=hot&amp;cat=%E5%85%A8%E9%83%A8&amp;limit=35&amp;offset=140" class="zpgi">5</a>
					<a href="/discover/playlist/?order=hot&amp;cat=%E5%85%A8%E9%83%A8&amp;limit=35&amp;offset=175" class="zpgi">6</a>
					<a href="/discover/playlist/?order=hot&amp;cat=%E5%85%A8%E9%83%A8&amp;limit=35&amp;offset=210" class="zpgi">7</a>
					<a href="/discover/playlist/?order=hot&amp;cat=%E5%85%A8%E9%83%A8&amp;limit=35&amp;offset=245" class="zpgi">8</a>
					<span class="zdot">...</span>
					<a href="/discover/playlist/?order=hot&amp;cat=%E5%85%A8%E9%83%A8&amp;limit=35&amp;offset=1365" class="zpgi">40</a>
					<a href="/discover/playlist/?order=hot&amp;cat=%E5%85%A8%E9%83%A8&amp;limit=35&amp;offset=35" class="zbtn znxt">下一页</a>
				</div>
			</div>
		</div>
	</div>

</template>
	

<script type="text/javascript" src="https://cdn.bootcss.com/axios/0.16.1/axios.min.js"></script>

<script src="https://cdn.bootcss.com/vue/2.3.0/vue.min.js"></script>
<script type="text/javascript" src="https://cdn.bootcss.com/vue-router/2.5.3/vue-router.min.js"></script>

<script type="text/javascript" src="https://cdn.bootcss.com/vuex/2.3.1/vuex.min.js"></script>

<script>

	const router = new VueRouter({
		routes:[
			{path:'/',component:{template:'#home'}},
			{path:'/home',component:{template:'#home'}},
			{path:'/singer',component:{template:'#singer'}},
			{path:'/personal',component:{template:'#personal'}},
			{path:'/lists',component:{template:'#lists'}}			
		]
	});

	Vue.prototype.play = function(info){
		console.log(info);
		this.$store.state.music_info = info;
	}

	Vue.prototype.nextOrPrev = function(type){
		let musicIndex;
		if(type=='next'){
			musicIndex = Number(this.$store.state.music_info.index)+1;
			if(musicIndex>=this.$store.state.music_list.length){
				musicIndex = 0;
			}
			
		}else{
			musicIndex = Number(this.$store.state.music_info.index)-1;
			if(musicIndex<0){
				musicIndex = this.$store.state.music_list.length - 1;
			}
		}
		this.$store.state.music_info = this.$store.state.music_list[musicIndex];
	}

	const store = new Vuex.Store({
		state:{
			singer_list: [],
			music_list: [],
			singerInfo: '',
			song: '',
			cate_list: [],
			cate_name: '所有歌手',
			music_info: ''
		},	
		mutations: {
			setSinger(state,list){
				state.singer_list = list;		
			},
			setMusic(state,list){
				state.music_list = list;
			},
			setSingerInfo(state,list){
				state.singerInfo = list;
			},
			setSong (state, name) {
      			state.song = name
    		},
    		setCate(state,list){
				state.cate_list = list;
			}
		}
		

	});



	router.afterEach(function (to) {
		
		if (to.path == '/singer') {
			var urlId="";
			if(to.query.id){
				urlId="/id/"+to.query.id;
			}
			axios.get('/public/vuepc/singer/index' + urlId)
				 .then(rtn => {
					store.commit('setSinger',rtn.data);
					if(to.query.id){
						store.state.cate_name = rtn.data[0].tag;
					}else{
						store.state.cate_name = '所有歌手';
					}
				 })
			axios.get('/public/vuepc/singer/cate')
				 .then(rtn => {
					store.commit('setCate',rtn.data);
				 })
		}else if(to.path == '/personal'){
			axios.get('/public/vuepc/personal/index/id/' + to.query.id)
				 .then(rtn => {
					store.commit('setSingerInfo',rtn.data);
				 })
			axios.get('/public/vuepc/personal/song/id/' + to.query.id)
				 .then(rtn => {
				 	for(var i=0;i<rtn.data.length;i++){
				 		rtn.data[i].index = i;
				 	}
					store.commit('setMusic',rtn.data);
				 })
		}else if(to.path == '/lists'){
			var urlId="";
			if(to.query.id){
				urlId="/id/"+to.query.id;
			}
			axios.get('/public/vuepc/lists/index' + urlId)
				 .then(rtn => {
				 	for(var i=0;i<rtn.data.length;i++){
				 		rtn.data[i].index = i;
				 	}
					store.commit('setMusic',rtn.data);
				 })
		}
	})

	new Vue({
		el:'#vue-box',
		router,
		store
	})

</script>
<div class="g-ft ">
	<div class="m-ft">
		<div class="wrap f-cb">
			<div class="copy">
				<p>
					<a href="//music.163.com/about" target="_blank" class="s-fc4">关于网易</a>
					<span class="line">|</span>
					<a href="//help.163.com/" target="_blank" class="s-fc4">客户服务</a>
					<span class="line">|</span>
					<a href="//music.163.com/html/web2/service.html" target="_blank" class="s-fc4">服务条款</a>
					<span class="line">|</span>
					<a href="//sitemap.163.com/" target="_blank" class="s-fc4">网站导航</a>
					<span class="line">|</span>
					<a id="g_feedback" href="#" class="s-fc4" onclick="nm.x.feedback();return false;" hidefocus="true">意见反馈</a>
					<span class="line">|</span>
					<a id="g_feedback" href="http://localhost:99/public/admin/music/index.html" class="s-fc4" target="_Blank">后台管理</a>
				</p>
				<p class="s-fc3">
					<span class="sep">网易公司版权所有©1997-2017</span>
					杭州乐读科技有限公司运营：
					<a href="http://p1.music.126.net/-DB9zs1FAJq8vg7HOb-yOQ==/3250156395654666.jpg" target="_blank" class="s-fc3">浙网文[2015] 0415-135号</a>
				</p>
			</div>
			<ul class="enter f-fr">
				<li>
					<a class="logo logo-musician f-tid" href="//music.163.com/recruit" target="_blank">独立音乐人</a>
				</li>
				<li>
					<a class="logo logo-topic f-tid" href="//music.163.com/topic/recruit" target="_blank">音乐专栏</a>
				</li>
				<li>
					<a class="logo logo-midea f-tid" href="//music.163.com/topic/selfmedia" target="_blank">自媒体</a>
				</li>
				<li>
					<a class="logo logo-reward f-tid" href="//music.163.com/web/reward" target="_blank">赞赏</a>
				</li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>