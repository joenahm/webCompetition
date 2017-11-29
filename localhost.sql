-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8888
-- Generation Time: Nov 29, 2017 at 01:00 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jianlegezhi`
--
CREATE DATABASE IF NOT EXISTS `jianlegezhi` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `jianlegezhi`;

-- --------------------------------------------------------

--
-- Table structure for table `jlgz_business`
--

CREATE TABLE `jlgz_business` (
  `id` int(11) NOT NULL COMMENT '商家id',
  `username` varchar(25) NOT NULL COMMENT '商家户名',
  `password` varchar(25) NOT NULL COMMENT '商家密码',
  `phone` int(25) NOT NULL COMMENT '联系方式',
  `buser` varchar(25) NOT NULL COMMENT '商户名',
  `address` varchar(25) NOT NULL COMMENT '商家地址',
  `introduce` text NOT NULL COMMENT '商家简介',
  `credit` int(11) NOT NULL DEFAULT '0' COMMENT '商家积分',
  `photo` varchar(50) NOT NULL COMMENT '商家图片地址',
  `usertype` varchar(25) NOT NULL COMMENT '类型'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jlgz_business`
--

INSERT INTO `jlgz_business` (`id`, `username`, `password`, `phone`, `buser`, `address`, `introduce`, `credit`, `photo`, `usertype`) VALUES
(1, '金沙滩管理中心', '123456', 183542767, '后山', '长江中路22号', '一家美味的黄焖鸡店', 5, 'P1.jpg', ''),
(2, '沂蒙人家', '123456', 1835467116, '春乡黄焖鸡', '长江路中断', '招收服务员，限制女，18-25岁，五官端正', 10, 'P2.jpg', ''),
(3, '利群管理中心', '122456', 1568911389, '私人家教', '南港小区', '长期招收中小学家教，时间灵活', 6, 'P3.jpg', ''),
(4, '过桥米线', '55555', 0, '英才教育', '嘉陵江东路长江商厦', '一家专业的培训机构', 67, 'P5.jpg', ''),
(37, 'liyingqing', '1244565', 1234546, '', '', '', 0, '', ''),
(38, 'werwer', 'af7614beb734197937ed5f361', 23423423, '', '', '', 0, '', ''),
(39, 'liyingqing', '5cb6b4c4c40ecca3d76e63bdb', 2147483647, '', '', '', 0, '', ''),
(40, '23132132', '12312312', 2312312, '', '', '', 0, '', ''),
(41, 'mack', '1', 1231231, '', '', '', 0, '', ''),
(42, '213123123', '123123', 321312312, '', '', '', 0, '', ''),
(43, 'web', '123456', 1234567, '', '', '', 0, '', ''),
(44, 'zhounan', '123456', 1231243, '', '', '', 0, '', ''),
(45, '123123', '12312', 1231233123, '', '', '', 0, '', ''),
(46, 'web', '123456', 1234567, '', '', '', 0, '', ''),
(47, 'web', '123', 251735172, '', '', '', 0, '', ''),
(48, 'web', '123', 251735172, '', '', '', 0, '', ''),
(49, 'weba', '123456', 213123123, '', '', '', 0, '', ''),
(50, 'webaaa', 'wqeqweq', 1234567, '', '', '', 0, '', ''),
(51, '12312312', '21312312', 1231231, '', '', '', 0, '', ''),
(52, 'webliyingqing', '12312312', 3212312, '', '', '', 0, '', ''),
(53, 'wqeqwe', 'qweqweq', 23423423, '', '', '', 0, '', ''),
(54, 'eqweweb', '12345', 31231231, '', '', '', 0, '', ''),
(55, '231312312', '3123131', 312312312, '', '', '', 0, '', 'merchant'),
(56, '3112313', '3123', 3123123, '', '', '', 0, '', 'merchant'),
(57, 'webaaaa', '123456', 21312312, '', '', '', 0, '', 'merchant'),
(58, 'webaaaaa', '123456', 123456423, '', '', '', 0, '', 'merchant'),
(59, 'webq123123', '123456', 2147483647, '', '', '', 0, '', 'merchant'),
(60, 'jack', '123456', 123456123, '', '', '', 0, '', 'merchant'),
(61, 'MACKJSON', '123456', 123456123, '', '', '', 0, '', 'merchant'),
(62, 'br', '123456', 2147483647, '', '', '', 0, '', 'merchant');

-- --------------------------------------------------------

--
-- Table structure for table `jlgz_cate`
--

CREATE TABLE `jlgz_cate` (
  `id` int(25) NOT NULL COMMENT '类目id',
  `parentname` varchar(25) NOT NULL COMMENT '父级目录'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jlgz_cate`
--

INSERT INTO `jlgz_cate` (`id`, `parentname`) VALUES
(1, '家教'),
(2, '服务员'),
(3, '促销导购'),
(4, '校园代理'),
(5, '问卷调查'),
(6, '外卖派送');

-- --------------------------------------------------------

--
-- Table structure for table `jlgz_cateson`
--

CREATE TABLE `jlgz_cateson` (
  `id` int(25) NOT NULL COMMENT '父级目录id',
  `soncate` varchar(25) CHARACTER SET utf32 NOT NULL COMMENT '子目录名称'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jlgz_cateson`
--

INSERT INTO `jlgz_cateson` (`id`, `soncate`) VALUES
(1, '小学家教'),
(1, '中学家教');

-- --------------------------------------------------------

--
-- Table structure for table `jlgz_information`
--

CREATE TABLE `jlgz_information` (
  `id` int(25) NOT NULL COMMENT '兼职信息id',
  `title` varchar(25) NOT NULL COMMENT '兼职信息标题',
  `salary` varchar(11) NOT NULL COMMENT '薪水情况',
  `details` text NOT NULL COMMENT '兼职详情',
  `username` varchar(11) NOT NULL COMMENT '商户名称',
  `cate` varchar(11) NOT NULL COMMENT '兼职信息分类',
  `insurgent` varchar(5) NOT NULL COMMENT '是否加急',
  `number_r` int(11) NOT NULL COMMENT '兼职所需人数',
  `number_a` int(11) NOT NULL COMMENT '申请兼职人数',
  `timestamp` int(11) DEFAULT NULL COMMENT '发布时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jlgz_information`
--

INSERT INTO `jlgz_information` (`id`, `title`, `salary`, `details`, `username`, `cate`, `insurgent`, `number_r`, `number_a`, `timestamp`) VALUES
(1, '金沙滩传单发送', '10元/小时', '下午两点到八点', '金沙滩管理中心', '传单发送', 'false', 10, 0, 1511809404),
(2, '利群销售员', '15元/小时', '下午四点到晚上八点', '利群管理中心', '销售员', 'false', 20, 0, 1511823804),
(3, '外卖派送', '1元/单', '负责校园外卖的派送', '沂蒙人家', '校园兼职', 'ture', 0, 0, 1511766204),
(22, '星级酒店小时工', '10元／小时', '酒店服务员，工作内容包括：看桌，传菜。\n要求听从安排。最好是黑裤子黑鞋子。', 'web', '服务员', 'ture', 0, 0, 1511917068),
(23, '招聘寒假工校园代理', '160元／天', '工厂生产，组装笔记本以及电脑配件，数字，数码产品加工（带薪培训）\n工作时间：8小时，包食宿', 'jack', '校园代理', 'false', 0, 0, 1511918361),
(24, 'ZAZR店员导购', '18元／小时', '销售顾问／营业员／导购／店员\n1.接待顾客的咨询，了解顾客的需求\n2.熟悉品类／质地／颜色／尺码\n\n收银员\n在收银主管的直接领导下，做好客户的收费结算工作', 'jack', '促销导购', 'false', 0, 0, 1511918667),
(27, '在线做调查', '50元／小时', 'GTM调研社区是全球一家知名在线问卷调查网站，现急招多名调查会员，只要您会上网，年龄14岁以上，有电子邮箱，就可以注册成为我们的会员，随时随地参与调查赚现金。\n\n你只需以下步骤：\n1.点击下面的链接，打开进行会员注册。注册完全免费。（如果无法直接打开，请复制到浏览器打开，点击此链接是唯一报名方式）\nhttps://cn.globaltestmarket.com/join.php?p=doumicn3&lang=CHM&CONTACT_COUNTRY=CHN&CID=jianzhiQingdao&gatest=1\n\n\n2. 通过注册电子邮箱接收GTM调查邀请并参与调查。\n\n3. 完成调查，获得积分。', 'jack', '问卷调查', 'true', 0, 0, 1511919072),
(28, '南岗小区家教', '20元／小时', '诚招小学，中学课后辅导\n每周周一至周五，晚7点-9点\n负责辅导孩子的课后作业', 'MACKJSON', '家教', 'true', 0, 0, 1511919950),
(29, '托管', '20元／小时', '南岗校区小学生作业辅导', 'jack', '家教', 'true', 0, 0, 1511920732);

-- --------------------------------------------------------

--
-- Table structure for table `jlgz_record`
--

CREATE TABLE `jlgz_record` (
  `id` int(11) NOT NULL COMMENT '记录id',
  `username` varchar(25) NOT NULL COMMENT '兼职学生姓名',
  `information` text NOT NULL COMMENT '兼职信息',
  `merchant` varchar(25) NOT NULL COMMENT '商家名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jlgz_record`
--

INSERT INTO `jlgz_record` (`id`, `username`, `information`, `merchant`) VALUES
(3, 'admin', '1970/1/18 下午7:58:40', 'jack'),
(7, 'zhang', '1511920732', 'jack');

-- --------------------------------------------------------

--
-- Table structure for table `jlgz_student`
--

CREATE TABLE `jlgz_student` (
  `id` int(25) NOT NULL COMMENT '学生用户id',
  `username` varchar(25) NOT NULL COMMENT '学生姓名',
  `password` varchar(25) NOT NULL COMMENT '密码',
  `info` text NOT NULL COMMENT '0:男  1：女',
  `phone` varchar(25) NOT NULL COMMENT '联系方式',
  `usertype` varchar(25) NOT NULL COMMENT '类型'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jlgz_student`
--

INSERT INTO `jlgz_student` (`id`, `username`, `password`, `info`, `phone`, `usertype`) VALUES
(1, 'liyingqing', '0e9212587d373ca58e9bada0c', '0', '2342343', '0'),
(2, '1234123', '0e9212587d373ca58e9bada0c', '0', '2342323423', '0'),
(3, 'xiaozhang', 'aed64f8d4369e545db01a7361', '0', '12312343', '0'),
(5, '2qweqw', '4297f44b13955235245b24973', '0', '423424234', '0'),
(6, 'wqeq', 'e04f6feb447402d2e5465c7f1', '0', '1231221312', '0'),
(7, 'wqeqw', '6c14da109e294d1e8155be8aa', '0', '2312312312', '0'),
(8, 'werwerw', '460842bef7378762b435b2349', '0', '34223423', '0'),
(9, '123123123', '0f3af81302cdc7b09edf1cd0b', '0', '1231231231', '0'),
(10, '123213123', 'fb3abd4119c8639a97c5cd14c', '0', '213123123', '0'),
(12, '2312312', 'cfcff1ee31340929aac0f48b0', '0', '23131231123', '0'),
(13, '2131231', 'd1c07866d71dc3a09b3b692d0', '0', '21312321', '0'),
(14, '4234324', '5468310f8c1acbb7d3c3fac23', '0', '234234234', '0'),
(15, '1qweqwe', '76d80224611fc919a5d54f0ff', '0', '1111111111', '0'),
(16, 'zhang', '123456', '姓名：张不帅<br>\r\n学校：青岛理工大学<br>\r\n性别：男\r\n', '15689138000', '0'),
(17, 'liyingqingqqq', '123456', '0', '12312312312', '0'),
(18, '21312', '3123123', '0', '12312312', '0'),
(19, '312312', '21312', '0', '2131231', '0'),
(20, 'web', '123456', '0', '123123123', '0'),
(23, 'liyingqing123', '12312', '0', '1231231231', '0'),
(25, 'adminqweqw', '12321312', '0', '23412412', '0'),
(26, '12312312', '12312312', '0', '21312312', '0'),
(27, 'qweqwe', 'wqeqweeqwe', '0', '23123123', '0'),
(28, '231312312', '3123131', '0', '312312312', 'student'),
(29, 'webbbb', 'qweqweqwe', '0', '21431231', 'student'),
(30, 'wang', '123456', '', '123132435', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jlgz_business`
--
ALTER TABLE `jlgz_business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jlgz_cate`
--
ALTER TABLE `jlgz_cate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jlgz_information`
--
ALTER TABLE `jlgz_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jlgz_record`
--
ALTER TABLE `jlgz_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jlgz_student`
--
ALTER TABLE `jlgz_student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `username_2` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jlgz_business`
--
ALTER TABLE `jlgz_business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商家id', AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `jlgz_cate`
--
ALTER TABLE `jlgz_cate`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT COMMENT '类目id', AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jlgz_information`
--
ALTER TABLE `jlgz_information`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT COMMENT '兼职信息id', AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `jlgz_record`
--
ALTER TABLE `jlgz_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '记录id', AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jlgz_student`
--
ALTER TABLE `jlgz_student`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT COMMENT '学生用户id', AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
