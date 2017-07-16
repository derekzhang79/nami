/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1_3306
Source Server Version : 50714
Source Host           : 127.0.0.1:3306
Source Database       : nami

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-07-17 07:11:17
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `xm_advert`
-- ----------------------------
DROP TABLE IF EXISTS `xm_advert`;
CREATE TABLE `xm_advert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xm_advert
-- ----------------------------
INSERT INTO `xm_advert` VALUES ('1', 'static/images/banner01.png');
INSERT INTO `xm_advert` VALUES ('2', 'static/images/banner02.png');
INSERT INTO `xm_advert` VALUES ('3', 'static/images/banner03.png');

-- ----------------------------
-- Table structure for `xm_cart`
-- ----------------------------
DROP TABLE IF EXISTS `xm_cart`;
CREATE TABLE `xm_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `goods_id` int(11) DEFAULT NULL,
  `goods_thumb` varchar(255) DEFAULT NULL,
  `goods_name` varchar(255) DEFAULT NULL,
  `num` int(11) DEFAULT '1',
  `goods_attr2` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL COMMENT '商品其他备注',
  `goods_price` decimal(11,0) DEFAULT NULL,
  `goods_attr1` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=140 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xm_cart
-- ----------------------------
INSERT INTO `xm_cart` VALUES ('52', '3', '2', null, '平板电脑', '1', '磨砂黑', null, '1999', '全网通版 4GB+128GB ');
INSERT INTO `xm_cart` VALUES ('5', '1', null, 'api/public/static/images/recom.png', '小米MAZ EEE', '3', '金色', '', '2999', '');
INSERT INTO `xm_cart` VALUES ('1', null, null, null, '小米6', '1', '金色', null, '1699', '全网通版 4GB+64GB ');
INSERT INTO `xm_cart` VALUES ('51', '3', '2', null, '平板电脑', '2', '金色', null, '1999', '全网通版 4GB+128GB ');
INSERT INTO `xm_cart` VALUES ('53', '3', '3', null, 'mi5', '1', '金色', null, '1999', '全网通版 4GB+128GB ');
INSERT INTO `xm_cart` VALUES ('49', '1', '1', null, '小米6', '2', '樱花粉', null, '1999', '全网通版 4GB+128GB ');
INSERT INTO `xm_cart` VALUES ('54', '3', '1', null, '小米6', '1', '亮蓝色', null, '2899', '全网通版6GB+128GB');
INSERT INTO `xm_cart` VALUES ('136', '2', '2', 'http://localhost/nami/src/api/public//uploads/20170707\\1f66e93b2fde37fd16a84950775d55a0.jpg', '纳米note2', '1', '冰川银', null, '2799', '64GB');
INSERT INTO `xm_cart` VALUES ('138', '16', '6', 'http://localhost/nami/src/api/public//uploads/20170707\\f879108c13fa0492391d810c6b954109.png', '纳米音响', '3', '灰色', null, '1999', '主机');
INSERT INTO `xm_cart` VALUES ('139', '16', '1', 'http://localhost/nami/src/api/public//uploads/20170707\\4626699d8456bb1a3315715245b0a6ce.png', '纳米 MAX2', '1', '亮黑色', null, '2899', '全网通版6GB+128GB');
INSERT INTO `xm_cart` VALUES ('135', '2', '14', 'http://localhost/nami/src/api/public//uploads/20170713\\a04530dc9955689b3eddd5299307b0b3.jpg', '小米笔记本Air 12.5英寸', '2', '金色', null, '3549', '12.5英寸 M3 4G 128G');

-- ----------------------------
-- Table structure for `xm_cate`
-- ----------------------------
DROP TABLE IF EXISTS `xm_cate`;
CREATE TABLE `xm_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(254) DEFAULT NULL,
  `parent_id` varchar(254) DEFAULT '0',
  `cate_thumb` varchar(254) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xm_cate
-- ----------------------------
INSERT INTO `xm_cate` VALUES ('1', '新品', '0', '../../../static/cate-images/catethumb1.jpg', '1');
INSERT INTO `xm_cate` VALUES ('2', '手机', '0', '../../../static/cate-images/miphone.jpg', '1');
INSERT INTO `xm_cate` VALUES ('3', '电视', '0', '../../../static/cate-images/catethumb2.jpg', '1');
INSERT INTO `xm_cate` VALUES ('4', '电脑', '0', '../../../static/cate-images/milaptop.jpg', '1');
INSERT INTO `xm_cate` VALUES ('5', '家电', '0', '../../../static/cate-images/catethumb3.jpg', '1');
INSERT INTO `xm_cate` VALUES ('6', '路由', '0', '../../../static/cate-images/mirouter.jpg', '1');
INSERT INTO `xm_cate` VALUES ('7', '智能', '0', '../../../static/cate-images/mitech.jpg', '1');
INSERT INTO `xm_cate` VALUES ('8', '电源', '0', '../../../static/cate-images/micharge.jpg', '1');
INSERT INTO `xm_cate` VALUES ('9', '耳机', '0', '../../../static/cate-images/miheadphone.jpg', '1');
INSERT INTO `xm_cate` VALUES ('10', '音箱', '0', '../../../static/cate-images/mihifi.jpg', '1');
INSERT INTO `xm_cate` VALUES ('11', '礼品', '0', '../../../static/cate-images/migift.jpg', '1');
INSERT INTO `xm_cate` VALUES ('12', '生活', '0', '../../../static/cate-images/mitechlife.jpg', '1');
INSERT INTO `xm_cate` VALUES ('13', '米粉卡', '0', '../../../static/cate-images/milife.jpg', '1');
INSERT INTO `xm_cate` VALUES ('14', '零售店', '0', '../../../static/cate-images/miservice.jpg', '1');
INSERT INTO `xm_cate` VALUES ('15', '纳米手机', '2', '', '0');
INSERT INTO `xm_cate` VALUES ('16', '红米手机', '2', '', '0');
INSERT INTO `xm_cate` VALUES ('17', '电脑', '4', '', '0');
INSERT INTO `xm_cate` VALUES ('18', '家电', '5', '', '0');
INSERT INTO `xm_cate` VALUES ('19', '电视', '3', '', '0');
INSERT INTO `xm_cate` VALUES ('20', '其他及配件', '4', '', '0');
INSERT INTO `xm_cate` VALUES ('21', '音箱', '3', '', '0');
INSERT INTO `xm_cate` VALUES ('22', '盒子', '3', '', '0');
INSERT INTO `xm_cate` VALUES ('25', '路由', '6', null, '0');
INSERT INTO `xm_cate` VALUES ('26', '智能', '7', null, '0');
INSERT INTO `xm_cate` VALUES ('27', '电源', '8', null, '0');
INSERT INTO `xm_cate` VALUES ('28', '耳机', '9', null, '0');
INSERT INTO `xm_cate` VALUES ('29', '音箱', '10', null, '0');
INSERT INTO `xm_cate` VALUES ('30', '礼品', '11', null, '0');
INSERT INTO `xm_cate` VALUES ('31', '生活', '12', null, '0');
INSERT INTO `xm_cate` VALUES ('32', '电话卡', '13', null, '0');
INSERT INTO `xm_cate` VALUES ('33', '零售店', '14', null, '0');
INSERT INTO `xm_cate` VALUES ('34', '新品', '1', null, '0');
INSERT INTO `xm_cate` VALUES ('35', ' 电器', '0', '/uploads/20170708\\31fa8651a3e8377afba184c599d13e61.png', '0');

-- ----------------------------
-- Table structure for `xm_color`
-- ----------------------------
DROP TABLE IF EXISTS `xm_color`;
CREATE TABLE `xm_color` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_color` varchar(255) DEFAULT NULL,
  `goods_id` int(11) DEFAULT NULL,
  `attr_id` int(11) DEFAULT NULL,
  `store` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1' COMMENT '0:缺货 1：有货',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xm_color
-- ----------------------------
INSERT INTO `xm_color` VALUES ('1', '亮黑色', '1', '1', '200', '1');
INSERT INTO `xm_color` VALUES ('2', '亮黑色', '1', '2', '300', '1');
INSERT INTO `xm_color` VALUES ('3', '亮蓝色', '1', '2', '100', '1');
INSERT INTO `xm_color` VALUES ('4', '陶瓷黑色', '1', '4', '100', '1');
INSERT INTO `xm_color` VALUES ('5', '亮银黑', '2', '5', '300', '1');
INSERT INTO `xm_color` VALUES ('6', '冰川银', '2', '5', '234', '1');
INSERT INTO `xm_color` VALUES ('7', '亮黑色', '2', '5', '555', '1');
INSERT INTO `xm_color` VALUES ('8', '黑色', '3', '6', '234', '1');
INSERT INTO `xm_color` VALUES ('9', '白色', '3', '6', '455', '1');
INSERT INTO `xm_color` VALUES ('10', '黑色', '3', '7', '23', '1');
INSERT INTO `xm_color` VALUES ('11', '白色', '3', '7', '0', '1');
INSERT INTO `xm_color` VALUES ('12', '黑色', '4', '8', '123', '1');
INSERT INTO `xm_color` VALUES ('13', '红色', '4', '8', '333', '1');
INSERT INTO `xm_color` VALUES ('14', '黑色', '4', '9', '222', '1');
INSERT INTO `xm_color` VALUES ('15', '红色', '4', '9', '110', '1');
INSERT INTO `xm_color` VALUES ('16', '红色', '5', '10', '50', '1');
INSERT INTO `xm_color` VALUES ('17', '灰色', '6', '11', '50', '1');
INSERT INTO `xm_color` VALUES ('18', '灰色', '6', '12', '30', '1');
INSERT INTO `xm_color` VALUES ('19', '黑色', '8', '13', '300', '1');
INSERT INTO `xm_color` VALUES ('20', '银色', '9', '14', '100', '1');
INSERT INTO `xm_color` VALUES ('21', '银色', '9', '15', '200', '1');
INSERT INTO `xm_color` VALUES ('22', '星空灰', '12', '16', '200', '1');
INSERT INTO `xm_color` VALUES ('23', '银色', '14', '17', '99', '1');
INSERT INTO `xm_color` VALUES ('24', '金色', '14', '17', '99', '1');
INSERT INTO `xm_color` VALUES ('25', '银色', '14', '18', '99', '1');
INSERT INTO `xm_color` VALUES ('26', '金色', '14', '18', '99', '1');
INSERT INTO `xm_color` VALUES ('27', '银色', '14', '19', '99', '1');
INSERT INTO `xm_color` VALUES ('28', '金色', '14', '19', '99', '1');

-- ----------------------------
-- Table structure for `xm_consignee`
-- ----------------------------
DROP TABLE IF EXISTS `xm_consignee`;
CREATE TABLE `xm_consignee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `consignee` varchar(255) DEFAULT NULL,
  `address` text,
  `phone_num` bigint(13) DEFAULT NULL,
  `ps` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xm_consignee
-- ----------------------------
INSERT INTO `xm_consignee` VALUES ('1', '1', 'Johnny', '广州番禺广州番禺广州', '15815815668', '家');
INSERT INTO `xm_consignee` VALUES ('6', '14', '黎仲立', '广州', '11010101', '家');
INSERT INTO `xm_consignee` VALUES ('3', '1', 'Ken', '广东佛山佛山', '1235443446', '公司');
INSERT INTO `xm_consignee` VALUES ('5', '1', '贤哥', '广州源酷有限公司', '13802030439', '公司');
INSERT INTO `xm_consignee` VALUES ('7', '2', '覃坤荣', '广东广州', '13107498645', '岳麓');

-- ----------------------------
-- Table structure for `xm_daily`
-- ----------------------------
DROP TABLE IF EXISTS `xm_daily`;
CREATE TABLE `xm_daily` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `daily_title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xm_daily
-- ----------------------------
INSERT INTO `xm_daily` VALUES ('1', '小米5c直降200，抢购吧......');
INSERT INTO `xm_daily` VALUES ('2', '红米5A直降200，抢购吧......');
INSERT INTO `xm_daily` VALUES ('3', '多款手机特惠 本周好价好物推荐');

-- ----------------------------
-- Table structure for `xm_detail_format`
-- ----------------------------
DROP TABLE IF EXISTS `xm_detail_format`;
CREATE TABLE `xm_detail_format` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_id` int(11) DEFAULT NULL,
  `goods_image` varchar(254) DEFAULT NULL,
  `pic_1` varchar(254) DEFAULT NULL,
  `pic_2` varchar(254) DEFAULT NULL,
  `pic_3` varchar(254) DEFAULT NULL,
  `goods_name` varchar(254) DEFAULT NULL,
  `goods_deta` text,
  `goods_price` int(11) DEFAULT NULL,
  `coupon` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xm_detail_format
-- ----------------------------
INSERT INTO `xm_detail_format` VALUES ('1', '15', '/uploads/20170707\\4626699d8456bb1a3315715245b0a6ce.png', '/uploads/20170707\\99b64c2ece476a569181297927166d9f.jpg', '/uploads/20170707\\2fec9e11f06b5ad2f6717522e82daeb5.jpg', '/uploads/20170707\\2cf0064beee4dbc48460e2a8c1c175a6.png', '纳米 MAX2', '6.44\'\'大屏 / 5300mAh 充电宝级的大电量 / 大像素相机 / 轻薄全金属 / ​4GB 大内存 / 骁龙八核处理器', '2999', '');
INSERT INTO `xm_detail_format` VALUES ('2', '34', '/uploads/20170707\\1f66e93b2fde37fd16a84950775d55a0.jpg', '/uploads/20170707\\b1591e9265dcea9d5128a95b4cf42e74.jpg', '/uploads/20170707\\600e8ee0eb23b27a07f752115b142329.png', '/uploads/20170707\\25ff5d573a2549f7e0039f705d28cb62.jpg', '纳米note2', '5.7\" 双曲面柔性屏 / 3D曲面玻璃 / 骁龙 821 性能版 / 2256万超高像素相机 / 4070mAh 超长续航', '3999', '');
INSERT INTO `xm_detail_format` VALUES ('3', '15', '/uploads/20170707\\610ef44cce2a9357e8dbb50d0635f61b.jpg', '', '', '', 'mi5', '“暗夜之眼”超感光相机 / 无孔式超声波指纹识别 / 骁龙 821 旗舰处理器 / 全金属一体化机身', '1800', null);
INSERT INTO `xm_detail_format` VALUES ('4', '16', '/uploads/20170707\\7ead9a668158f6ece536b4956b94d512.jpg', '', '', '', '红米4X', '4100mAh 超长续航 / 5\'\'舒适单手握感 / 骁龙 8 核处理器', '899', null);
INSERT INTO `xm_detail_format` VALUES ('5', '19', '/uploads/20170707\\75d014e26914e4ca401b010cbd8d67c5.png', '', '', '', '纳米电视4', '4.9mm 极超薄机身 / 无边框式设计 / 3GB+32GB超大内存', '9999', null);
INSERT INTO `xm_detail_format` VALUES ('6', '21', '/uploads/20170707\\f879108c13fa0492391d810c6b954109.png', '/uploads/20170707\\b089005feca4d82e528c28a794956917.png', '', '', '纳米音响', '环绕立体声人工智能家庭影院 / 360° 立体环绕声 / 内置海量影视内容 / 人工智能系统 PatchWall / 适用于带有 HDMI 接口的电视 ', '1999', null);
INSERT INTO `xm_detail_format` VALUES ('9', '17', '/uploads/20170707\\9a0ba8d1a2171eaf20c38e3fd947f824.jpg', '/uploads/20170707\\5afb594c56b019c488efb284425bc561.jpg', '', '', '笔记本air', '轻薄金属机身 / 超长续航，支持1C快充 / intel酷睿i5处理器 / 8GB内存+256GB SSD / FHD 全贴合屏幕', '4999', null);
INSERT INTO `xm_detail_format` VALUES ('8', '22', '/uploads/20170707\\2a53932ba4764a62c9edba9497471341.png', '/uploads/20170707\\e5a672cae2b022cf5c1cfce3b1828515.png', '', '', '纳米盒子3s', '4K HDR 人工智能机顶盒 / PatchWall人工智能系统 / 内容暴增1.8倍/64位处理器支持HDR / MiTouch触控遥控器 / 2GB+8GB大存储 / 解码速度快如闪电', '299', null);
INSERT INTO `xm_detail_format` VALUES ('10', '20', '/uploads/20170707\\cee16984400d2ac491a752068d096325.png', '', '', '', 'VR眼镜', '', '99', null);
INSERT INTO `xm_detail_format` VALUES ('11', '18', '/uploads/20170707\\4d3f1c5f498d3e927166fab3134ac914.jpg', '', '', '', '纳米电饭煲', '', '320', null);
INSERT INTO `xm_detail_format` VALUES ('12', '25', '/uploads/20170707\\94d7d19f3dc72e00432d6af53592d540.png', '/uploads/20170707\\6ea6bf4ee2c93114724ab29b09c1371b.png', '/uploads/20170707\\f88e7b7c76d60a38a8f3a953955066ef.png', '/uploads/20170707\\ea0d8065447bb73f9ba57d378998f869.png', '纳米路由器Pro', '全新金属机身设计 / AC 2600双频 / 4X4全向性天线 / 802.11ac wave2 / 支持MU-MIMO', '499', null);
INSERT INTO `xm_detail_format` VALUES ('13', '26', '/uploads/20170707\\3b292ce8c49fdefa8a3d702d15230444.png', '/uploads/20170707\\cd572e2d0f3f029d075a8650902543da.png', '', '', '纳米手环2', '', '170', null);
INSERT INTO `xm_detail_format` VALUES ('14', '17', '/uploads/20170713\\a04530dc9955689b3eddd5299307b0b3.jpg', '', '', '', '小米笔记本Air 12.5英寸', '【7月12日-7月13日 12.5\"小米笔记本最高立减100元 还享小米分期6期免息】轻薄全金属机身 / 超长续航，支持1C快充 / FHD 全贴合屏幕 / 高能量密度电池', '4899', null);

-- ----------------------------
-- Table structure for `xm_goods_attr`
-- ----------------------------
DROP TABLE IF EXISTS `xm_goods_attr`;
CREATE TABLE `xm_goods_attr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) DEFAULT NULL,
  `goods_ver` varchar(255) DEFAULT NULL,
  `goods_price` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1' COMMENT '0:没货，1：有货',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xm_goods_attr
-- ----------------------------
INSERT INTO `xm_goods_attr` VALUES ('1', '1', '全网通版6GB+64GB', '2499', '1');
INSERT INTO `xm_goods_attr` VALUES ('2', '1', '全网通版6GB+128GB', '2899', '1');
INSERT INTO `xm_goods_attr` VALUES ('5', '2', '64GB', '2799', '1');
INSERT INTO `xm_goods_attr` VALUES ('4', '1', '陶瓷尊享版128GB', '2999', '1');
INSERT INTO `xm_goods_attr` VALUES ('6', '3', '16GB', '1200', '1');
INSERT INTO `xm_goods_attr` VALUES ('7', '3', '32GB', '1500', '1');
INSERT INTO `xm_goods_attr` VALUES ('8', '4', '16GB', '899', '1');
INSERT INTO `xm_goods_attr` VALUES ('9', '4', '32GB', '1099', '1');
INSERT INTO `xm_goods_attr` VALUES ('10', '5', '65寸', '9999', '1');
INSERT INTO `xm_goods_attr` VALUES ('11', '6', '主机', '1999', '1');
INSERT INTO `xm_goods_attr` VALUES ('12', '6', '套装', '2999', '1');
INSERT INTO `xm_goods_attr` VALUES ('13', '8', '通用', '299', '1');
INSERT INTO `xm_goods_attr` VALUES ('14', '9', '12.5\'\'', '4999', '1');
INSERT INTO `xm_goods_attr` VALUES ('15', '9', '13.5\'\'', '5999', '1');
INSERT INTO `xm_goods_attr` VALUES ('16', '12', '通用', '499', '1');
INSERT INTO `xm_goods_attr` VALUES ('17', '14', '12.5英寸 M3 4G 128G', '3549', '1');
INSERT INTO `xm_goods_attr` VALUES ('18', '14', '12.5英寸 M3 4G 256G', '3949', '1');
INSERT INTO `xm_goods_attr` VALUES ('19', '14', '12.5英寸 i5 8G 256G', '3899', '1');

-- ----------------------------
-- Table structure for `xm_newadd`
-- ----------------------------
DROP TABLE IF EXISTS `xm_newadd`;
CREATE TABLE `xm_newadd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `newadd_img` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xm_newadd
-- ----------------------------
INSERT INTO `xm_newadd` VALUES ('1', 'static/images/ad04.png');
INSERT INTO `xm_newadd` VALUES ('2', 'static/images/ad05.png');

-- ----------------------------
-- Table structure for `xm_order`
-- ----------------------------
DROP TABLE IF EXISTS `xm_order`;
CREATE TABLE `xm_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `sn` bigint(20) DEFAULT NULL,
  `goods_num` bigint(20) DEFAULT NULL,
  `carry_price` decimal(10,2) DEFAULT NULL,
  `goods_price` decimal(10,2) DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `consignee` varchar(255) DEFAULT NULL,
  `phone_num` bigint(13) DEFAULT NULL,
  `address` text,
  `date` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0' COMMENT '0:待付款 1：待收货 2：已收货 3:已完成',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xm_order
-- ----------------------------
INSERT INTO `xm_order` VALUES ('1', '1', '20170705291', '2', '0.00', '5998.00', '5998.00', 'Ken', '1235443446', '广东佛山佛山', '1499223762', '1');
INSERT INTO `xm_order` VALUES ('2', '1', '20170705948', '1', '0.00', '2999.00', '2999.00', 'Ken', '1235443446', '广东佛山佛山', '1499234052', '1');
INSERT INTO `xm_order` VALUES ('3', '1', '2017070561', '1', '0.00', '2899.00', '2899.00', 'Ken', '1235443446', '广东佛山佛山', '1499234095', '2');
INSERT INTO `xm_order` VALUES ('4', '1', '20170705554', '2', '0.00', '5698.00', '5698.00', 'Ken', '1235443446', '广东佛山佛山', '1499239346', '1');
INSERT INTO `xm_order` VALUES ('5', '1', '20170705422', '2', '0.00', '5898.00', '5898.00', 'Johnny', '15815815668', '广州番禺广州番禺广州', '1499248136', '2');
INSERT INTO `xm_order` VALUES ('6', '1', '20170706987', '2', '0.00', '5798.00', '5798.00', '贤哥', '13802030439', '广州源酷有限公司', '1499333623', '1');
INSERT INTO `xm_order` VALUES ('12', '3', '14994115335826', '3', '10.00', '5997.00', '5987.00', '郑弘祎', '185556909', '广东广州市天河区车陂地铁站C出口', '1499411533', '3');
INSERT INTO `xm_order` VALUES ('13', '1', '20170707432', '1', '0.00', '1200.00', '1200.00', 'Ken', '1235443446', '广东佛山佛山', '1499417603', '2');
INSERT INTO `xm_order` VALUES ('14', '1', '20170707338', '2', '0.00', '3298.00', '3298.00', 'Johnny', '15815815668', '广州番禺广州番禺广州', '1499432191', '1');
INSERT INTO `xm_order` VALUES ('15', '3', '14994327368902', '5', '10.00', '4095.00', '4085.00', '覃坤荣', '13107498645', '广东省广州市越秀区岳麓区', '1499432736', '0');
INSERT INTO `xm_order` VALUES ('11', '1', '14993994127300', '2', '10.00', '3998.00', '3988.00', '郑弘祎', '185556909', '广东广州市天河区车陂地铁站C出口', '1499399412', '3');
INSERT INTO `xm_order` VALUES ('16', '2', '14994759129016', '5', '10.00', '14195.00', '14185.00', '覃坤荣', '13107498645', '广东省广州市越秀区岳麓区', '1499475912', '1');
INSERT INTO `xm_order` VALUES ('17', '2', '14994760583450', '3', '10.00', '8697.00', '8687.00', '覃坤荣', '13107498645', '广东省广州市越秀区岳麓区', '1499476058', '2');
INSERT INTO `xm_order` VALUES ('18', '2', '14994761474523', '1', '10.00', '1200.00', '1190.00', '覃坤荣', '13107498645', '广东省广州市越秀区岳麓区', '1499476147', '0');
INSERT INTO `xm_order` VALUES ('19', '2', '14994775806565', '1', '10.00', '2499.00', '2489.00', '覃坤荣', '13107498645', '广东省广州市越秀区岳麓区', '1499477580', '3');
INSERT INTO `xm_order` VALUES ('20', '2', '14994817382703', '4', '10.00', '11196.00', '11186.00', '覃坤荣', '13107498645', '广东省广州市越秀区岳麓区', '1499481738', '0');
INSERT INTO `xm_order` VALUES ('21', '14', '20170708293', '2', '0.00', '5798.00', '5798.00', '黎仲立', '11010101', '广州', '1499482525', '2');
INSERT INTO `xm_order` VALUES ('22', '2', '14994865434865', '2', '10.00', '5298.00', '5288.00', '覃坤荣', '13107498645', '广东省广州市越秀区岳麓区', '1499486543', '0');
INSERT INTO `xm_order` VALUES ('23', '2', '1499788208320', '1', '10.00', '2499.00', '2489.00', '覃坤荣', '13107498645', '广东省广州市越秀区岳麓区', '1499788208', '0');
INSERT INTO `xm_order` VALUES ('24', '2', '14998546769530', '3', '10.00', '8097.00', '8087.00', '覃坤荣', '13107498645', '广东省广州市越秀区岳麓区', '1499854676', '0');
INSERT INTO `xm_order` VALUES ('25', '15', '14999476518850', '3', '10.00', '7497.00', '7487.00', '覃坤荣', '13107498645', '广东省广州市越秀区岳麓区', '1499947651', '0');
INSERT INTO `xm_order` VALUES ('26', '15', '14999498775866', '3', '10.00', '7497.00', '7487.00', '覃坤荣', '13107498645', '广东省广州市越秀区岳麓区', '1499949877', '0');
INSERT INTO `xm_order` VALUES ('27', '2', '14999530516703', '3', '10.00', '10647.00', '10637.00', '覃坤荣', '13107498645', '广东省广州市越秀区岳麓区', '1499953051', '1');
INSERT INTO `xm_order` VALUES ('28', '16', '14999714505835', '3', '10.00', '5997.00', '5987.00', '覃坤荣', '13107498645', '广东省广州市越秀区岳麓区', '1499971450', '0');
INSERT INTO `xm_order` VALUES ('29', '2', '20170714392', '1', '0.00', '1200.00', '1200.00', '覃坤荣', '13107498645', '广东广州', '1499971817', '1');

-- ----------------------------
-- Table structure for `xm_order_goods`
-- ----------------------------
DROP TABLE IF EXISTS `xm_order_goods`;
CREATE TABLE `xm_order_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) DEFAULT NULL,
  `goods_name` varchar(255) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `goods_price` decimal(10,2) DEFAULT NULL,
  `goods_image` varchar(255) DEFAULT NULL,
  `goods_ver` varchar(255) DEFAULT NULL,
  `goods_color` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xm_order_goods
-- ----------------------------
INSERT INTO `xm_order_goods` VALUES ('1', '1', '纳米6', '1', '2', '2999.00', '../../../static/buycar-images/xm6_320.png', '陶瓷尊享版128GB', '陶瓷黑色');
INSERT INTO `xm_order_goods` VALUES ('2', '1', '纳米6', '2', '1', '2999.00', '../../../static/buycar-images/xm6_320.png', '陶瓷尊享版128GB', '陶瓷黑色');
INSERT INTO `xm_order_goods` VALUES ('3', '1', '纳米6', '3', '1', '2899.00', '../../../static/buycar-images/xm6_320.png', '全网通版6GB+128GB', '亮蓝色');
INSERT INTO `xm_order_goods` VALUES ('4', '2', '平板电脑', '4', '1', '2799.00', '../../../static/buycar-images/xiaomiNote2.jpg', '64GB', '亮黑色');
INSERT INTO `xm_order_goods` VALUES ('5', '1', '纳米6', '4', '1', '2899.00', '../../../static/buycar-images/xm6_320.png', '全网通版6GB+128GB', '亮黑色');
INSERT INTO `xm_order_goods` VALUES ('6', '1', '纳米6', '5', '1', '2899.00', '../../../static/buycar-images/xm6_320.png', '全网通版6GB+128GB', '亮黑色');
INSERT INTO `xm_order_goods` VALUES ('7', '1', '纳米6', '5', '1', '2999.00', '../../../static/buycar-images/xm6_320.png', '陶瓷尊享版128GB', '陶瓷黑色');
INSERT INTO `xm_order_goods` VALUES ('8', '1', '纳米6', '6', '2', '2899.00', '../../../static/buycar-images/xm6_320.png', '全网通版6GB+128GB', '亮黑色');
INSERT INTO `xm_order_goods` VALUES ('9', '3', 'mi5', '13', '1', '1200.00', '/uploads/20170707\\68e968a0d35d363f5d4068633c984980.png', '16GB', '黑色');
INSERT INTO `xm_order_goods` VALUES ('10', '8', '纳米盒子3s', '14', '1', '299.00', '/uploads/20170707\\2a53932ba4764a62c9edba9497471341.png', '通用', '黑色');
INSERT INTO `xm_order_goods` VALUES ('11', '1', '纳米6', '14', '1', '2999.00', '/uploads/20170707\\4626699d8456bb1a3315715245b0a6ce.png', '陶瓷尊享版128GB', '陶瓷黑色');
INSERT INTO `xm_order_goods` VALUES ('12', '1', '纳米 MAX2', '21', '2', '2899.00', '/uploads/20170707\\4626699d8456bb1a3315715245b0a6ce.png', '全网通版6GB+128GB', '亮黑色');
INSERT INTO `xm_order_goods` VALUES ('13', '3', 'mi5', '29', '1', '1200.00', '/uploads/20170707\\610ef44cce2a9357e8dbb50d0635f61b.jpg', '16GB', '白色');

-- ----------------------------
-- Table structure for `xm_theme`
-- ----------------------------
DROP TABLE IF EXISTS `xm_theme`;
CREATE TABLE `xm_theme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_img` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xm_theme
-- ----------------------------
INSERT INTO `xm_theme` VALUES ('1', 'static/images/ad09.png');
INSERT INTO `xm_theme` VALUES ('2', 'static/images/add11.png');

-- ----------------------------
-- Table structure for `xm_user`
-- ----------------------------
DROP TABLE IF EXISTS `xm_user`;
CREATE TABLE `xm_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `birth` bigint(20) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xm_user
-- ----------------------------
INSERT INTO `xm_user` VALUES ('1', '15858585858', '1234567', '789926400000', 'female', '1497449675');
INSERT INTO `xm_user` VALUES ('2', '13107498645', '123456', null, null, '1499401004');
INSERT INTO `xm_user` VALUES ('3', '131074986456', '123456', null, null, '1499401672');
INSERT INTO `xm_user` VALUES ('4', '13104986459', '123456', null, null, '1499405085');
INSERT INTO `xm_user` VALUES ('10', '131074986452', '123456', null, null, '1499475564');
INSERT INTO `xm_user` VALUES ('11', '131074986454545', '123456', null, null, '1499479901');
INSERT INTO `xm_user` VALUES ('12', '1310749864588', '123456', null, null, '1499480677');
INSERT INTO `xm_user` VALUES ('13', '131074986488', '123456', null, null, '1499481271');
INSERT INTO `xm_user` VALUES ('14', '15858585859', '123456', '660499200000', 'male', '1499482416');
INSERT INTO `xm_user` VALUES ('15', '15552422222', '123465', null, null, '1499947611');
INSERT INTO `xm_user` VALUES ('16', '15526645545', '123456', null, null, '1499971376');
