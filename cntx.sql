/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.5.53 : Database - cntx
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`cntx` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;

USE `cntx`;

/*Table structure for table `address` */

DROP TABLE IF EXISTS `address`;

CREATE TABLE `address` (
  `ar_id` int(11) NOT NULL AUTO_INCREMENT,
  `ar_user_id` int(11) NOT NULL,
  `ar_name` varchar(20) NOT NULL,
  `ar_phone` varchar(20) NOT NULL,
  `ar_address` varchar(200) NOT NULL,
  `ar_code` varchar(20) NOT NULL,
  PRIMARY KEY (`ar_id`),
  KEY `ar_user_id` (`ar_user_id`),
  CONSTRAINT `address_ibfk_1` FOREIGN KEY (`ar_user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

/*Data for the table `address` */

insert  into `address`(`ar_id`,`ar_user_id`,`ar_name`,`ar_phone`,`ar_address`,`ar_code`) values (2,1,'张三','18435186212','山西省太原市尖草坪区学院路3号中北大学','030800'),(11,1,'王五','18435186212','山西省太原市尖草坪区学院路3号中北大学','030800'),(12,2,'张三','110','山西','001000'),(13,4,'陈思炜','123123123','1123123123','123123');

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_name` varchar(20) NOT NULL,
  `ad_password` char(32) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `admin` */

insert  into `admin`(`ad_id`,`ad_name`,`ad_password`) values (1,'admin','21232f297a57a5a743894a0e4a801fc3'),(2,'test','098f6bcd4621d373cade4e832627b4f6');

/*Table structure for table `advice` */

DROP TABLE IF EXISTS `advice`;

CREATE TABLE `advice` (
  `ai_id` int(11) NOT NULL AUTO_INCREMENT,
  `ai_name` varchar(20) NOT NULL,
  `ai_email` varchar(20) NOT NULL,
  `ai_phone` varchar(20) NOT NULL,
  `ai_advice` text NOT NULL,
  `ai_time` datetime DEFAULT NULL,
  PRIMARY KEY (`ai_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `advice` */

/*Table structure for table `cart` */

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
  `ct_id` int(11) NOT NULL AUTO_INCREMENT,
  `ct_user_id` int(11) NOT NULL,
  `ct_good_id` int(11) NOT NULL,
  `ct_buy_count` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ct_id`),
  KEY `ct_user_id` (`ct_user_id`),
  KEY `ct_good_id` (`ct_good_id`),
  CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`ct_user_id`) REFERENCES `user` (`user_id`),
  CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`ct_good_id`) REFERENCES `goods` (`gd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `cart` */

/*Table structure for table `favorite` */

DROP TABLE IF EXISTS `favorite`;

CREATE TABLE `favorite` (
  `ft_id` int(11) NOT NULL AUTO_INCREMENT,
  `ft_user_id` int(11) NOT NULL,
  `ft_good_id` int(11) NOT NULL,
  PRIMARY KEY (`ft_id`),
  KEY `ft_user_id` (`ft_user_id`),
  KEY `ft_good_id` (`ft_good_id`),
  CONSTRAINT `favorite_ibfk_1` FOREIGN KEY (`ft_user_id`) REFERENCES `user` (`user_id`),
  CONSTRAINT `favorite_ibfk_2` FOREIGN KEY (`ft_good_id`) REFERENCES `goods` (`gd_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `favorite` */

insert  into `favorite`(`ft_id`,`ft_user_id`,`ft_good_id`) values (2,1,2),(3,4,1);

/*Table structure for table `goods` */

DROP TABLE IF EXISTS `goods`;

CREATE TABLE `goods` (
  `gd_id` int(11) NOT NULL AUTO_INCREMENT,
  `gd_name` varchar(30) NOT NULL,
  `gd_type` varchar(20) NOT NULL,
  `gd_price_self` double NOT NULL,
  `gd_price_other` double NOT NULL,
  `gd_num` int(10) unsigned NOT NULL,
  `gd_weight` float NOT NULL,
  `gd_date` date NOT NULL,
  `gd_click_num` int(11) NOT NULL,
  `gd_from` varchar(20) NOT NULL,
  `gd_img` varchar(50) NOT NULL,
  PRIMARY KEY (`gd_id`),
  KEY `gd_type` (`gd_type`),
  CONSTRAINT `goods_ibfk_1` FOREIGN KEY (`gd_type`) REFERENCES `type` (`tp_name`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

/*Data for the table `goods` */

insert  into `goods`(`gd_id`,`gd_name`,`gd_type`,`gd_price_self`,`gd_price_other`,`gd_num`,`gd_weight`,`gd_date`,`gd_click_num`,`gd_from`,`gd_img`) values (1,'黑措虫草蕨麻猪','肉类精选',151.2,181.44,91,500,'2016-10-24',282,'西藏','/Public/images/good_img/1.png'),(2,'板鸭礼盒','肉类精选',47.5,62.5,181,500,'2016-10-24',100,'湖北','/Public/images/good_img/2.png'),(3,'洪湖一野鸭','肉类精选',66.8,79.6,274,400,'2016-10-24',236,'湖北','/Public/images/good_img/3.png'),(4,'武昌鱼','肉类精选',62.2,76.5,289,700,'2016-10-24',300,'湖北','/Public/images/good_img/4.png'),(5,'华鹏铜鹅礼包','肉类精选',64.8,77.7,298,200,'2016-10-24',300,'湖南','/Public/images/good_img/5.png'),(6,'蕨麻猪排','肉类精选',117.6,136.9,94,300,'2016-10-24',432,'西藏','/Public/images/good_img/6.png'),(7,'人参肉','肉类精选',186.2,200.5,250,300,'2016-10-25',254,'西藏','/Public/images/good_img/7.png'),(8,'扬州特色盐水鸭','肉类精选',61.5,79.9,146,300,'2016-10-25',255,'江苏','/Public/images/good_img/8.png'),(9,'普洱砖茶','名茶名酒',150.2,160.4,187,100,'2016-10-25',311,'云南','/Public/images/good_img/9.png'),(10,'七子饼茶','名茶名酒',80.2,90,198,100,'2016-10-25',155,'云南','/Public/images/good_img/10.png'),(11,'精装耗牛肉','肉类精选',165.2,180,200,350,'2016-10-26',322,'云南','/Public/images/good_img/11.png'),(12,'精装梯田米','粮油米面',60,70,149,500,'2016-10-26',253,'云南','/Public/images/good_img/12.png'),(13,'高原蜂蜜','滋补保健',110,130,247,200,'2016-10-26',300,'云南','/Public/images/good_img/13.png'),(14,'细皮天麻','滋补保健',205.8,220.3,198,236,'2016-10-27',200,'云南','/Public/images/good_img/14.png'),(31,'肉肉','肉类精选',12.2,0,111,11,'2017-12-27',100,'云南','/Public/images/good_img/face2.jpg'),(32,'鸡肉','肉类精选',12.2,0,10,10,'2017-12-27',100,'福建','/Public/images/good_img/nails6.jpg'),(33,'水','水产极品',12,0,2,2,'2017-12-27',100,'东三省','/Public/images/good_img/lips2.jpg'),(34,'1111','水产极品',2,2,2,2,'2017-12-27',100,'云南','/Public/images/good_img/f.jpg');

/*Table structure for table `info` */

DROP TABLE IF EXISTS `info`;

CREATE TABLE `info` (
  `if_id` int(11) NOT NULL AUTO_INCREMENT,
  `if_ad_id` int(11) NOT NULL,
  `if_gd_id` int(11) NOT NULL,
  `if_gd_name` varchar(20) NOT NULL,
  `if_name` varchar(20) NOT NULL,
  `if_time` datetime NOT NULL,
  `if_information` text NOT NULL,
  PRIMARY KEY (`if_id`),
  KEY `if_ad_id` (`if_ad_id`),
  KEY `if_gd_id` (`if_gd_id`),
  CONSTRAINT `info_ibfk_1` FOREIGN KEY (`if_ad_id`) REFERENCES `admin` (`ad_id`),
  CONSTRAINT `info_ibfk_2` FOREIGN KEY (`if_gd_id`) REFERENCES `goods` (`gd_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `info` */

insert  into `info`(`if_id`,`if_ad_id`,`if_gd_id`,`if_gd_name`,`if_name`,`if_time`,`if_information`) values (1,1,1,'黑措虫草蕨麻猪','admin','2016-12-06 15:33:59','蕨麻猪因在草原上拱食地底下生长的蕨麻、贝母、冬虫夏草等当地盛产的野生名贵中草药而得名。当地藏民传统就叫它“人参猪”、“蕨麻猪”、“虫草蕨麻猪”。虫草蕨麻猪完全野生野长在蛮荒的雪域高原上，藏民根本不会用猪圈来圈养它，它的奔跑速度比狗还要快，一人高的土墙它一跃就过去了，三头蕨麻猪就可以抵挡高原狼和雪豹的攻击。蕨麻猪品种珍贵稀缺。虫草蕨麻猪是我国最原始也是最独特的一种猪，属藏系里最小型的瘦肉猪，因为千百年来它生长在高原上蛮荒恶劣的环境里，所以种群一直没有被外界所干扰，种群数量非常稀少、珍贵，近年来国家有关部门已经意识到如再不加以保护，这种猪就将面临灭绝，所以2006年根据中华人民共和国公告，蕨麻猪被定为“国家级畜禽遗传保护品种”。实用价值:在一些古藏文中就记载着蕨麻猪在吐蕃王朝时就是古代藏族土蕃王及土司等王室贵族享用的贡品，土蕃王松赞干布向唐朝请婚时的贡品中就有蕨麻猪，唐太宗许嫁文成公主，文成公主进藏后对高原上粗糙的食物很是不惯，惟独对“火烧蕨麻猪”大为青睐，好食此肉，并美誉其为“人参猪”，这也是后来藏民一直叫它“人参肉”的由来。建国后国家领导人邓小平胡耀邦去甘肃藏区考察就专门要了一道“烤蕨麻猪”，食后更是大为赞赏。'),(2,1,2,'板鸭礼盒','admin','2016-12-06 15:47:26',' 鸭脖子肉质细腻，容易煮烂，因此控制火候非常关键，“精武鸭脖”火候掌握得恰到好处，让其充分入味。卤料的投放也大有学问，须把卤料按比例、先后顺序分几次投放，大火烹，小火煮，卤汁才会渗入到鸭脖。这就是“精武鸭脖”香气浓郁，诱人食欲的原因，这也是十余年来，“可可精武鸭脖”吸引众多食客的奥秘。\r\n\r\n       现在武汉精武鸭脖已成为风靡全国的特色小吃，更是武汉江城的一大特产。可以说，到武汉游客无不“一品为快，吃了，还兜着走”的；也是武汉的主人馈赠外地友人的畅销佳品。\r\n\r\n     “可可精武鸭脖”一律选取瘦肉型鸭脖为原料，其制熟过程采用的是工厂化生产和标准控制，独特的中药配方及卤制工艺，在同行业里，率先通过QS（产品质量安全）认证，是目前国内沃尔玛、家乐福、易初莲花等国际连锁超市的合作伙伴。\r\n\r\n     “精武鸭脖”起源于一九九三年，位于闻名全国的汉口精武路，是“可可”精武鸭脖师傅凭自己多年厨艺、十年坚持不懈研究中药特性，积极开发湖北地方特色的传统美食小吃的成果，其博采众长，并精研我国传统中医学、药膳食谱，历经十余年的潜心研究和实验，“精武鸭脖”才有了今天独特的中药配方及卤制工艺，其口味香辣纯正、肉质细腻且富有弹性、久吃不腻、回味无穷。'),(3,1,3,'洪湖一野鸭','admin','2016-12-06 15:48:38','洪湖野鸭是第二代野鸭在湖区散养鱼虾养成。经传统工艺加工而成。口感好，肉质细腻。有野生的味道，是家养鸭没有的，不可比性。是送礼之佳品'),(4,1,4,'武昌鱼','admin','2016-12-06 15:49:36','梁子湖是当今世界上大型淡水湖泊之一，湖区资源极其丰富，武昌鱼是生长在梁子湖里的优质鱼种。武昌鱼又名鳊鱼、团头鲂，因其肉质细腻，骨酥味长及毛主席的著名诗词《水调歌头·游泳》“才饮长沙水，又食武昌鱼”而闻名于世。\r\n\r\n本产品以梁子湖的武昌鱼为原料，添加多种佐料，采用科学配方，经真空包装和高温杀菌技术精制而成，实为家宴待客、旅游休闲、馈赠友人之佳品。'),(5,1,5,'华鹏铜鹅礼包','admin','2016-12-06 15:50:13',' 公司主导产品分为：豆制品、卤制品、无公害铜鹅卤制品三大类。豆制品包括熟食包装和生食菜篮子工程；卤制品包括卤牛肉、牛肚、鸭掌、鸭翅、鱼等；无公害铜鹅卤制品包括休闲包装鹅肉、鹅肫、鹅掌、鹅翅等，其原料为武冈特产之“铜鹅”，其肉细嫩、营养丰富，为历代贡品。');

/*Table structure for table `notice` */

DROP TABLE IF EXISTS `notice`;

CREATE TABLE `notice` (
  `nc_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nc_ad_id` int(11) NOT NULL,
  `nc_title` varchar(255) COLLATE utf8_bin NOT NULL,
  `nc_info` text COLLATE utf8_bin NOT NULL,
  `nc_time` datetime NOT NULL,
  PRIMARY KEY (`nc_id`),
  KEY `FK_notice` (`nc_ad_id`),
  CONSTRAINT `FK_notice` FOREIGN KEY (`nc_ad_id`) REFERENCES `admin` (`ad_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `notice` */

insert  into `notice`(`nc_id`,`nc_ad_id`,`nc_title`,`nc_info`,`nc_time`) values (1,1,'新一批商品上架啦，欢迎新老顾客前来shopping~~~','本次上架的商品有四种，分别是大盘鸡、大盘鸡、大盘鸡、大盘鸡。商品详情可于商品详情页面查看','2017-05-27 14:31:22'),(2,1,'5.1-5.18特价商品打折，欢迎购买','本次打折促销的商品有5种，分别为大盘鸡、大盘鸡、大盘鸡、大盘鸡、大盘鸡。具体商品详情请于商品详情页面查看。','2017-05-27 14:34:52'),(3,1,'测试','测试','2017-05-27 15:42:41'),(4,1,'测试','测试','2017-05-27 15:43:17'),(6,1,'测试','测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试','2017-05-27 16:07:56'),(7,1,'我试试','你好','2017-12-27 00:26:04');

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `od_id` int(11) NOT NULL AUTO_INCREMENT,
  `od_user_id` int(11) NOT NULL,
  `od_good_id` varchar(30) NOT NULL,
  `od_buy_count` varchar(30) NOT NULL,
  `od_price` varchar(30) DEFAULT NULL,
  `od_addr_id` int(11) NOT NULL,
  `od_time` datetime DEFAULT NULL,
  PRIMARY KEY (`od_id`),
  KEY `od_user_id` (`od_user_id`),
  KEY `od_good_id` (`od_good_id`),
  KEY `od_addr_id` (`od_addr_id`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`od_user_id`) REFERENCES `user` (`user_id`),
  CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`od_addr_id`) REFERENCES `address` (`ar_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `orders` */

insert  into `orders`(`od_id`,`od_user_id`,`od_good_id`,`od_buy_count`,`od_price`,`od_addr_id`,`od_time`) values (1,1,'2|4|9|1','4|3|1|1','678',2,'2017-05-19 11:17:58'),(2,1,'10|14','1|1','286',11,'2017-05-19 11:28:17'),(3,1,'3|4','1|1','129',2,'2017-05-19 16:12:06'),(4,2,'9|6','2|1','418',12,'2017-05-26 12:17:49'),(5,2,'9|2','1|1','197.7',12,'2017-05-26 12:18:20'),(6,2,'9|2','1|1','197.7',12,'2017-05-26 12:18:20'),(7,4,'2','1','47.5',13,'2017-12-26 21:10:49'),(8,4,'1','1','151.2',13,'2017-12-27 00:27:38'),(9,4,'1','2','302.4',13,'2017-12-27 00:33:52');

/*Table structure for table `reviews` */

DROP TABLE IF EXISTS `reviews`;

CREATE TABLE `reviews` (
  `rw_id` int(11) NOT NULL AUTO_INCREMENT,
  `rw_user_id` int(11) NOT NULL,
  `rw_good_id` int(11) DEFAULT NULL,
  `rw_text` text NOT NULL,
  `rw_date` datetime NOT NULL,
  PRIMARY KEY (`rw_id`),
  KEY `rw_user_id` (`rw_user_id`),
  KEY `FK_reviews` (`rw_good_id`),
  CONSTRAINT `FK_reviews` FOREIGN KEY (`rw_good_id`) REFERENCES `goods` (`gd_id`),
  CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`rw_user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `reviews` */

insert  into `reviews`(`rw_id`,`rw_user_id`,`rw_good_id`,`rw_text`,`rw_date`) values (1,1,6,'很好吃，不错','2017-05-16 16:06:52'),(2,1,6,'很好吃，不错','2017-05-16 16:13:14'),(3,1,6,'很好吃，不错','2017-05-16 16:14:27'),(4,1,6,'很好吃，不错','2017-05-16 16:14:57'),(5,1,6,'很好吃，不错','2017-05-16 16:15:40'),(6,1,9,' 不错','2017-05-29 14:45:56'),(7,1,10,'bucuo ','2017-05-29 14:48:35'),(8,1,10,'不错','2017-05-29 14:49:08'),(9,4,1,'123','2017-12-27 00:34:12');

/*Table structure for table `type` */

DROP TABLE IF EXISTS `type`;

CREATE TABLE `type` (
  `tp_id` int(11) NOT NULL AUTO_INCREMENT,
  `tp_name` varchar(20) NOT NULL,
  PRIMARY KEY (`tp_id`),
  KEY `tp_name` (`tp_name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `type` */

insert  into `type`(`tp_id`,`tp_name`) values (5,'名茶名酒'),(8,'工艺礼品'),(7,'果蔬副食'),(2,'水产极品'),(6,'滋补保健'),(3,'粮油米面'),(1,'肉类精选'),(4,'野生特产');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `user_password` char(32) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_question` smallint(6) NOT NULL,
  `user_answer` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `NewIndex1` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`user_id`,`user_name`,`user_password`,`user_email`,`user_phone`,`user_question`,`user_answer`) values (1,'dxy','202cb962ac59075b964b07152d234b70','563474094@qq.com','13467186453',3,'中北大学'),(2,'user','202cb962ac59075b964b07152d234b70','916346615@qq.com','13467186453',1,'八中'),(3,'zhangsan','202cb962ac59075b964b07152d234b70','916346615@qq.com','13467186453',2,'八号zong'),(4,'shady','4297f44b13955235245b2497399d7a93','123','123',1,'123');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
