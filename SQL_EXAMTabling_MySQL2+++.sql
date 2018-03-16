-- 
-- ฐานข้อมูล: `randomfinal`
-- 
CREATE DATABASE `randomfinal` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `randomfinal`;

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `counttime`
-- 

CREATE TABLE `counttime` (
  `timetno` int(11) NOT NULL,
  `Tname1` varchar(50) NOT NULL,
  `Tname2` varchar(50) default NULL,
  `CountTime` float default NULL,
  PRIMARY KEY  (`timetno`,`Tname1`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `counttime`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `curriculum`
-- 

CREATE TABLE `curriculum` (
  `Curno` int(11) NOT NULL,
  `Curname` varchar(60) default NULL,
  PRIMARY KEY  (`Curno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `curriculum`
-- 

INSERT INTO `curriculum` (`Curno`, `Curname`) VALUES 
(1, 'ประถมศึกษา'),
(2, 'มัธยมศึกษาตอนต้น'),
(3, 'มัธยมศึกษาตอนปลาย'),
(4, 'ทดลองหลักสูตร');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `dateexam_prim`
-- 

CREATE TABLE `dateexam_prim` (
  `timetno` int(11) NOT NULL,
  `edate` date NOT NULL,
  PRIMARY KEY  (`timetno`,`edate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `dateexam_prim`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `dateexam_sec`
-- 

CREATE TABLE `dateexam_sec` (
  `timetno` int(11) NOT NULL,
  `edate` date NOT NULL,
  PRIMARY KEY  (`timetno`,`edate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `dateexam_sec`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `examination`
-- 

CREATE TABLE `examination` (
  `eno` int(11) NOT NULL,
  `educyear` smallint(6) default NULL,
  `sem` smallint(6) default NULL,
  `tdate` date default NULL,
  `ttime` varchar(50) default NULL,
  `subjectname` varchar(50) default NULL,
  `tname1` varchar(50) default NULL,
  `tname2` varchar(50) default NULL,
  `timetno` int(11) default NULL,
  `roomno` int(11) default NULL,
  `rname` varchar(50) default NULL,
  `tno` smallint(6) default NULL,
  `ino` int(11) default NULL,
  PRIMARY KEY  (`eno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `examination`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `invigilator`
-- 

CREATE TABLE `invigilator` (
  `ino` int(11) NOT NULL,
  `Tno1` int(11) default NULL,
  `Tno2` int(11) default NULL,
  PRIMARY KEY  (`ino`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `invigilator`
-- 

INSERT INTO `invigilator` (`ino`, `Tno1`, `Tno2`) VALUES 
(0, 231, 117),
(1, 67, 125),
(2, 39, 104),
(3, 186, 247),
(4, 123, 182),
(5, 235, 95),
(6, 225, 238),
(7, 44, 132),
(8, 169, 223),
(9, 214, 49),
(10, 71, 74),
(11, 151, 164),
(12, 86, 228),
(13, 103, 179),
(14, 37, 194),
(15, 162, 180),
(16, 224, 183),
(17, 188, 66),
(18, 154, 161),
(19, 203, 34),
(20, 144, 153),
(21, 131, 177),
(22, 2, 168),
(23, 246, 61),
(24, 79, 242),
(25, 42, 62),
(26, 47, 28),
(27, 4, 190),
(28, 107, 206),
(29, 11, 98),
(30, 184, 134),
(31, 64, 102),
(32, 59, 15),
(33, 111, 229),
(34, 136, 205),
(35, 41, 76),
(36, 108, 5),
(37, 126, 29),
(38, 55, 89),
(39, 143, 94),
(40, 191, 81),
(41, 18, 78),
(42, 243, 236),
(43, 202, 145),
(44, 208, 99),
(45, 230, 147),
(46, 124, 58),
(47, 165, 232),
(48, 189, 33),
(49, 32, 10),
(50, 178, 176),
(51, 244, 101),
(52, 38, 155),
(53, 56, 77),
(54, 80, 3),
(55, 142, 138),
(56, 70, 21),
(57, 87, 175),
(58, 19, 185),
(59, 137, 53),
(60, 221, 127),
(61, 96, 217),
(62, 209, 40),
(63, 152, 133),
(64, 92, 141),
(65, 84, 97),
(66, 12, 222),
(67, 239, 54),
(68, 1, 181),
(69, 82, 119),
(70, 122, 106),
(71, 156, 199),
(72, 26, 46),
(73, 90, 146),
(74, 88, 7),
(75, 219, 170),
(76, 163, 36),
(77, 149, 121),
(78, 110, 14),
(79, 135, 72),
(80, 196, 22),
(81, 48, 35),
(82, 85, 73),
(83, 130, 45),
(84, 174, 215),
(85, 20, 112),
(86, 211, 245),
(87, 105, 52),
(88, 27, 128),
(89, 93, 159),
(90, 241, 9),
(91, 120, 63),
(92, 234, 100),
(93, 197, 65),
(94, 193, 25),
(95, 51, 212),
(96, 6, 140),
(97, 173, 158),
(98, 192, 172),
(99, 204, 198),
(100, 167, 24),
(101, 57, 17),
(102, 201, 160),
(103, 195, 69),
(104, 216, 113),
(105, 129, 187),
(106, 50, 157),
(107, 148, 218),
(108, 68, 226),
(109, 23, 13),
(110, 240, 118),
(111, 200, 237),
(112, 43, 91),
(113, 60, 114),
(114, 210, 30),
(115, 16, 220),
(116, 139, 150),
(117, 31, 75),
(118, 109, 171),
(119, 83, 227),
(120, 116, 115),
(121, 166, 207),
(122, 213, 8),
(123, 233, 248);

-- --------------------------------------------------------


CREATE TABLE `learning` (
  `lno` int(11) NOT NULL,
  `sno` int(11) NOT NULL,
  PRIMARY KEY  (`lno`,`sno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `learning`
-- 

INSERT INTO `learning` (`lno`, `sno`) VALUES 
-- ป.1
(0, 1),(0, 2),(0, 3),(0, 4),(0, 5),(0, 6),(0, 7),(0, 8),(0, 9),
-- ป.2
(1, 10),(1, 11),(1, 12),(1, 13),(1, 14),(1, 15),(1, 16),(1, 17),(1, 18),
-- ป.3
(2, 19),(2, 20),(2, 21),(2, 22),(2, 23),(2, 24),(2, 25),(2, 26),(2, 27),(2, 28),
-- ป.4
(3, 29),(3, 30),(3, 31),(3, 32),(3, 33),(3, 34),(3, 35),(3, 36),(3, 37),(3, 38),(3, 39),(3, 40),
-- ป.5
(4, 41),(4, 42),(4, 43),(4, 44),(4, 45),(4, 46),(4, 47),(4, 48),(4, 49),(4, 50),(4, 51),(4, 52),
-- ป.6
(5, 53),(5, 54),(5, 55),(5, 56),(5, 57),(5, 58),(5, 59),(5, 60),
-- ม.1
(6, 61),(6, 62),(6, 63),(6, 64),(6, 65),(6, 66),(6, 67),(6, 68),(6, 69),(6, 70),(6, 71),(6, 72),(6, 73),
(6, 74),(6, 75),(6, 76),(6, 77),
-- ม.2
(7, 78),(7, 79),(7, 80),(7, 81),(7, 82),(7, 83),(7, 84),(7, 85),(7, 86),(7, 87),(7, 88),(7, 89),(7, 90),(7, 91),
-- ม.3
(8, 92),(8, 93),(8, 94),(8, 95),(8, 96),(8, 97),(8, 98),(8, 99),(8, 100),(8, 101),(8, 102),(8, 103),
-- ม.4 แผน 1
(9, 104),(9, 105),(9, 106),(9, 107),(9, 108),(9, 109),(9, 110),(9, 111),(9, 112),(9, 113),(9, 114),
(9, 115),(9, 116),(9, 117),
-- ม.4 แผน 0
(9, 118),(9, 119),(9, 120),(9, 121),(9, 122),(9, 123),(9, 124),(9, 125),(9, 126),(9, 127),(9, 128),(9, 129),
(9, 130),(9, 131),(9, 132),(9, 133),
-- ม.5 แผน 1
(10, 134),(10, 135),(10, 136),(10, 137),(10, 138),(10, 139),(10, 140),(10, 141),(10, 142),(10, 143),
(10, 144),(10, 145),(10, 146),(10, 147),
-- ม.5 แผน 0
(10, 148),(10, 149),(10, 150),(10, 151),(10, 152),(10, 153),(10, 154),(10, 155),(10, 156),(10, 157),(10, 158),(10, 159),
(10, 160),(10, 161),(10, 162),
-- ม.6 แผน 1
(11, 163),(11, 164),(11, 165),(11, 166),(11, 167),(11, 168),(11, 169),(11, 170),(11, 171),(11, 172),(11, 173),
(11, 174),(11, 175),(11, 176),
-- ม.6 แผน 0
(11, 177),(11, 178),(11, 179),(11, 180),(11, 181),(11, 182),(11, 183),(11, 184),(11, 185),(11, 186),(11, 187),
(11, 188),(11, 189),(11, 190),(11, 191),(11, 192);

-- -------------------------------------------------------------------------------

CREATE TABLE `learning_plan` (
  `lno` int(11) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `levelno` SMALLINT(11) NOT NULL,
  `majorno` SMALLINT(11) NOT NULL,
  `nroom` SMALLINT(11) NOT NULL,
  PRIMARY KEY  (`lno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `learning_plan`
-- 

INSERT INTO `learning_plan` (`lno`,`lname`,`levelno`,`majorno`,`nroom`) VALUES 
(0, 'ประถมศึกษาปีที่ 1 แผน 1', 0, 1, 8),
(1, 'ประถมศึกษาปีที่ 2 แผน 1', 1, 1, 8),
(2, 'ประถมศึกษาปีที่ 3 แผน 1', 2, 1, 9),
(3, 'ประถมศึกษาปีที่ 4 แผน 1', 3, 1, 8),
(4, 'ประถมศึกษาปีที่ 5 แผน 1', 4, 1, 8),
(5, 'ประถมศึกษาปีที่ 6 แผน 1', 5, 1, 8),
(6, 'มัธยมศึกษาปีที่ 1 แผน 1', 6, 1, 8),
(7, 'มัธยมศึกษาปีที่ 2 แผน 1', 7, 1, 8),
(8, 'มัธยมศึกษาปีที่ 3 แผน 1', 8, 1, 8),
(9, 'มัธยมศึกษาปีที่ 4 แผน 1', 9, 1, 1),
(10, 'มัธยมศึกษาปีที่ 4 แผน 0', 9, 2, 1),
(11, 'มัธยมศึกษาปีที่ 5 แผน 1', 10, 1, 1),
(12, 'มัธยมศึกษาปีที่ 5 แผน 0', 10, 2, 1),
(13, 'มัธยมศึกษาปีที่ 6 แผน 1', 11, 1, 1),
(14, 'มัธยมศึกษาปีที่ 6 แผน 0', 11, 2, 1);

-- -----------------------------------------------------------------------------------
-- โครงสร้างตาราง `room`----

CREATE TABLE `room` (
  `rno` int(11) NOT NULL,
  `rname` varchar(50) default NULL,
  `classno` smallint(6) default NULL,
  `Educyear` smallint(6) default NULL,
  `levelno` smallint(6) default NULL,
  `Majorno` smallint(6) default NULL,
  `Roomno` smallint(6) default NULL,
  PRIMARY KEY  (`rno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `room`
-- 

INSERT INTO `room` (`rno`, `rname`, `classno`, `Educyear`, `levelno`, `Majorno`, `Roomno`) VALUES 
(1, 'ป 1/1', 1, 2559, 0, 1, 101),
(2, 'ป 1/2', 2, 2559, 0, 1, 102),
(3, 'ป 1/3', 3, 2559, 0, 1, 103),
(4, 'ป 1/4', 4, 2559, 0, 1, 104),
(5, 'ป 1/5', 5, 2559, 0, 1, 105),
(6, 'ป 1/6', 6, 2559, 0, 1, 106),
(7, 'ป 1/7', 7, 2559, 0, 1, 107),
(8, 'ป 1/8', 8, 2559, 0, 1, 108),
(9, 'ป 2/1', 1, 2559, 1, 1, 111),
(10, 'ป 2/2', 2, 2559, 1, 1, 112),
(11, 'ป 2/3', 3, 2559, 1, 1, 113),
(12, 'ป 2/4', 4, 2559, 1, 1, 114),
(13., 'ป 2/5', 5, 2559, 1, 1, 115),
(14, 'ป 2/6', 6, 2559, 1, 1, 116),
(15, 'ป 2/7', 7, 2559, 1, 1, 117),
(16, 'ป 2/8', 8, 2559, 1, 1, 118),
(17, 'ป 3/1', 1, 2559, 2, 1, 121),
(18, 'ป 3/2', 2, 2559, 2, 1, 122),
(19, 'ป 3/3', 3, 2559, 2, 1, 123),
(20, 'ป 3/4', 4, 2559, 2, 1, 124),
(21, 'ป 3/5', 5, 2559, 2, 1, 125),
(22, 'ป 3/6', 6, 2559, 2, 1, 126),
(23, 'ป 3/7', 7, 2559, 2, 1, 127),
(24, 'ป 3/8', 8, 2559, 2, 1, 128),
(25, 'ป 3/9', 9, 2559, 2, 1, 129),
(26, 'ป 4/1', 1, 2559, 3, 1, 201),
(27, 'ป 4/2', 2, 2559, 3, 1, 202),
(28, 'ป 4/3', 3, 2559, 3, 1, 203),
(29, 'ป 4/4', 4, 2559, 3, 1, 204),
(30, 'ป 4/5', 5, 2559, 3, 1, 205),
(31, 'ป 4/6', 6, 2559, 3, 1, 206),
(32, 'ป 4/7', 7, 2559, 3, 1, 207),
(33, 'ป 4/8', 8, 2559, 3, 1, 208),
(34, 'ป 5/1', 1, 2559, 4, 1, 211),
(35, 'ป 5/2', 2, 2559, 4, 1, 212),
(36, 'ป 5/3', 3, 2559, 4, 1, 213),
(37, 'ป 5/4', 4, 2559, 4, 1, 214),
(38, 'ป 5/5', 5, 2559, 4, 1, 215),
(39, 'ป 5/6', 6, 2559, 4, 1, 216),
(40, 'ป 5/7', 7, 2559, 4, 1, 217),
(41, 'ป 5/8', 8, 2559, 4, 1, 218),
(42, 'ป 6/1', 1, 2559, 5, 1, 221),
(43, 'ป 6/2', 2, 2559, 5, 1, 222),
(44, 'ป 6/3', 3, 2559, 5, 1, 223),
(45, 'ป 6/4', 4, 2559, 5, 1, 224),
(46, 'ป 6/5', 5, 2559, 5, 1, 225),
(47, 'ป 6/6', 6, 2559, 5, 1, 226),
(48, 'ป 6/7', 7, 2559, 5, 1, 227),
(49, 'ป 6/8', 8, 2559, 5, 1, 228),
(50, 'ม 1/1', 1, 2559, 6, 1, 301),
(51, 'ม 1/2', 2, 2559, 6, 1, 302),
(52, 'ม 1/3', 3, 2559, 6, 1, 303),
(53, 'ม 1/4', 4, 2559, 6, 1, 304),
(54, 'ม 1/5', 5, 2559, 6, 1, 305),
(55, 'ม 1/6', 6, 2559, 6, 1, 306),
(56, 'ม 1/7', 7, 2559, 6, 1, 307),
(57, 'ม 1/8', 8, 2559, 6, 1, 308),
(58, 'ม 2/1', 1, 2559, 7, 1, 311),
(59, 'ม 2/2', 2, 2559, 7, 1, 312),
(60, 'ม 2/3', 3, 2559, 7, 1, 313),
(61, 'ม 2/4', 4, 2559, 7, 1, 314),
(62, 'ม 2/5', 5, 2559, 7, 1, 315),
(63, 'ม 2/6', 6, 2559, 7, 1, 316),
(64, 'ม 2/7', 7, 2559, 7, 1, 317),
(65, 'ม 2/8', 8, 2559, 7, 1, 318),
(66, 'ม 3/1', 1, 2559, 8, 1, 321),
(67, 'ม 3/2', 2, 2559, 8, 1, 322),
(68, 'ม 3/3', 3, 2559, 8, 1, 323),
(69, 'ม 3/4', 4, 2559, 8, 1, 324),
(70, 'ม 3/5', 5, 2559, 8, 1, 325),
(71, 'ม 3/6', 6, 2559, 8, 1, 326),
(72, 'ม 3/7', 7, 2559, 8, 1, 327),
(73, 'ม 3/8', 8, 2559, 8, 1, 328),
(74, 'ม 4/1', 1, 2559, 9, 1, 401),
(75, 'ม 4/2', 2, 2559, 10, 2, 402),
(76, 'ม 5/1', 1, 2559, 11, 1, 403),
(77, 'ม 5/2', 2, 2559, 12, 2, 404),
(78, 'ม 6/1', 1, 2559, 13, 1, 405),
(79, 'ม 6/2', 2, 2559, 14, 2, 406);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `savetable`
-- 

CREATE TABLE `savetable` (
  `eno` int(11) NOT NULL,
  `educyear` smallint(6) default NULL,
  `sem` smallint(6) default NULL,
  `dno` date default NULL,
  `tno` smallint(6) default NULL,
  `sno` int(11) default NULL,
  `ino` int(11) default NULL,
  `timetno` int(11) default NULL,
  `rno` int(11) default NULL,
  PRIMARY KEY  (`eno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `savetable`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `student`
-- 

CREATE TABLE `student` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `Sname` varchar(50) default NULL,
  `Slname` varchar(50) default NULL,
  `rno` int(11) default NULL,
  `Educyear` smallint(6) default NULL,
  PRIMARY KEY  (`Sno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `student`
-- 

INSERT INTO `student` (`Sno`, `Sname`, `Slname`, `rno`, `Educyear`) VALUES 
(1, 'เด็กชายชวณัฏฐ์', 'เปลี่ยนสี', 0, 2559),
(2, 'เด็กชายชินดนัย', 'รักยิ้ม', 0, 2559),
(3, 'เด็กชายณัฏฐ์คุณ', 'โชคเฉลิมวงศ์', 0, 2559),
(4, 'เด็กชายธีทัต', 'เกษมสุขไพศาล', 0, 2559),
(5, 'เด็กชายนรภัทร', 'จิ๋วใยใส', 1, 2559),
(6, 'เด็กชายนิภัทร์', 'จันทรเทศ', 1, 2559),
(7, 'เด็กชายพลกฤต', 'สาธิตวุฒิ', 1, 2559),
(8, 'เด็กชายภชรพล', 'ไร่นาดี', 1, 2559),
(9, 'เด็กชายวัชรพล', 'ปทุมล่องทอง', 2, 2559),
(10, 'เด็กชายสราวุธ', 'ไทยอุดมทรัพย์', 2, 2559),
(11, 'เด็กชายอัษฎา', 'แก้วสะอาด', 2, 2559),
(12, 'เด็กชายเอกณัฐ', 'โสภณวัฒนาสิงห์', 2, 2559),
(13, 'เด็กหญิงกันตา', 'เกิดผล', 3, 2559),
(14, 'เด็กหญิงกันยารัตน์', 'กังวล', 3, 2559),
(15, 'เด็กหญิงณัฐธิดา', 'กิจเถกิง', 3, 2559),
(16, 'เด็กหญิงธนานันท์', 'วงศ์รักกิจ', 3, 2559),
(17, 'เด็กหญิงนันทวัน', 'อิ่มจิต', 4, 2559),
(18, 'เด็กหญิงนิชนันท์', 'ปุกไธสง', 4, 2559),
(19, 'เด็กหญิงพิมพ์ชนก', 'ตั้งวิชัย', 4, 2559),
(20, 'เด็กหญิงพิมพ์ลภัส', 'วงษ์คงคำ', 4, 2559),
(21, 'เด็กหญิงรัชนีวรรณ', 'แสงศิริสุทธิสาร', 5, 2559),
(22, 'เด็กหญิงสุพัตรา', 'ประเสริฐชัย', 5, 2559),
(23, 'เด็กหญิงอรปรียา', 'เอี่ยมสอาด', 5, 2559),
(24, 'เด็กหญิงอาธิติญา', 'นิลบรรพ์', 5, 2559),
(25, 'เด็กหญิงอารีญา', 'พูลหนองรี', 6, 2559),
(26, 'เด็กหญิงธัญสมร', 'มาปัด', 6, 2559),
(27, 'เด็กชายกวีวัฒน์', 'มณีธรรม', 6, 2559),
(28, 'เด็กชายชินกฤต', 'กิจเถกิง', 6, 2559),
(29, 'เด็กชายณัฐภัทร', 'แพทย์พินิจ', 7, 2559),
(30, 'เด็กชายธนพล', 'อ้อเนียม', 7, 2559),
(31, 'เด็กชายธนาธิป', 'รักษา', 7, 2559),
(32, 'เด็กชายนทีธร', 'สีสังข์', 7, 2559),
(33, 'เด็กชายนิธิ', 'สุกิจปาณีนิจ', 8, 2559),
(34, 'เด็กชายปวริศร', 'โรจน์เจริญทรัพย์', 8, 2559),
(35, 'เด็กชายพงศกร', 'เซี่ยงหย็อง', 8, 2559),
(36, 'เด็กชายศิรวิชญ์', 'ศรีสวัสดิ์', 8, 2559),
(37, 'เด็กชายศิลา', 'เชื้อชาติ', 9, 2559),
(38, 'เด็กชายสุทธิชัย', 'สำเภาอินทร์', 9, 2559),
(39, 'เด็กชายอภิปรัชญ์', 'ชินสงคราม', 9, 2559),
(40, 'เด็กชายเอกภพ', 'อาจภักดี', 9, 2559),
(41, 'เด็กหญิงกัญญาภัค', 'พรยิ่ง', 10, 2559),
(42, 'เด็กหญิงกัลย์สุดา', 'ม่วงมั่งมี', 10, 2559),
(43, 'เด็กหญิงกิตติมา', 'รักวัฒนศิริกุล', 10, 2559),
(44, 'เด็กหญิงเกตุแก้ว', 'ศักดาเดชฤทธิ์', 10, 2559),
(45, 'เด็กหญิงเกวลิน', 'เผือกผุด', 11, 2559),
(46, 'เด็กหญิงชนนิกานต์', 'ทับแก้ว', 11, 2559),
(47, 'เด็กหญิงฐิติรัตน์', 'จันทร์ชูกลิ่น', 11, 2559),
(48, 'เด็กหญิงณัฏฐา', 'บุญเกิด', 11, 2559),
(49, 'เด็กหญิงธารินี', 'สมนึก', 12, 2559),
(50, 'เด็กหญิงปภาดา', 'คงอภิรักษ์', 12, 2559),
(51, 'เด็กหญิงกมลลักษณ์', 'ปิ่นเกตุ', 12, 2559),
(52, 'เด็กหญิงปิยะมน', 'ประดิษฐ์ผล', 12, 2559),
(53, 'เด็กหญิงพงศ์พัชรา', 'สงวนจิตร์', 13, 2559),
(54, 'เด็กหญิงพรรณพษา', 'เพิ่มพูล', 13, 2559),
(55, 'เด็กหญิงภัทราภรณ์', 'คุ้มมัน', 13, 2559),
(56, 'เด็กหญิงมฤษฎา', 'เพิ่มพูล', 13, 2559),
(57, 'เด็กหญิงมุขรินทร์', 'วิชชุตเวส', 14, 2559),
(58, 'เด็กหญิงวรรณา', 'พลับใหญ่', 14, 2559),
(59, 'เด็กหญิงวิมินตรา', 'ธนพิสิษฐ์กุล', 14, 2559),
(60, 'เด็กหญิงศโรชา', 'ขำจริง', 14, 2559),
(61, 'เด็กหญิงสวรส', 'โตเต็ม', 15, 2559),
(62, 'เด็กหญิงสุกัญญภัทร', 'เมืองเกลี้ยง', 15, 2559),
(63, 'เด็กหญิงเสาวภา', 'จันทร์หอม', 15, 2559),
(64, 'เด็กหญิงอรุณี', 'ธรรมประภาพร', 15, 2559),
(65, 'เด็กหญิงลักษณาวดี', 'พวงเพ็ชร', 16, 2559),
(66, 'เด็กชายเขมวัฒน์', 'พรมเชื้อ', 16, 2559),
(67, 'เด็กชายจเด็จ', 'สีขาว', 16, 2559),
(68, 'เด็กชายจิรายุ', 'นีระกุล', 16, 2559),
(69, 'เด็กชายณัฐวัฒน์', 'สุวัฒนะสถาพร', 17, 2559),
(70, 'เด็กชายธนาคม', 'วิงวอน', 17, 2559),
(71, 'เด็กชายนภัส', 'นาคเทศ', 17, 2559),
(72, 'เด็กชายนรากร', 'พวงมาลัย', 17, 2559),
(73, 'เด็กชายพงศธร', 'พลาพงษ์', 18, 2559),
(74, 'เด็กชายภากร', 'ศรีอินทร์', 18, 2559),
(75, 'เด็กชายภานุวัฒน์', 'มูลทองชุน', 18, 2559),
(76, 'เด็กชายวรเมธ', 'เพ็ชรเทศ', 18, 2559),
(77, 'เด็กชายศิริวัชร์', 'เพียรพร้อม', 19, 2559),
(78, 'เด็กชายสรวิชญ์', 'พูลน้อย', 19, 2559),
(79, 'เด็กชายสรศักดิ์', 'อิ่มอาบ', 19, 2559),
(80, 'เด็กชายอภิสิทธิ์', 'อภิลักษณชิต', 19, 2559),
(81, 'เด็กชายอานุภาพ', 'พึ่งโพธิ์', 20, 2559),
(82, 'เด็กหญิงกมลชนก', 'เชื้อชาติ', 20, 2559),
(83, 'เด็กหญิงกัลย์สุดา', 'เนตรสน', 20, 2559),
(84, 'เด็กหญิงกุลภรณ์', 'บุญเกิด', 20, 2559),
(85, 'เด็กหญิงจริยาภา', 'ผลอินหอม', 21, 2559),
(86, 'เด็กหญิงจัญญกาญ', 'ศรีสุระ', 21, 2559),
(87, 'เด็กหญิงจารุวรรณ', 'เปลี่ยนปราณ', 21, 2559),
(88, 'เด็กหญิงชนนิกานต์', 'ยิ้มใหญ่', 21, 2559),
(89, 'เด็กหญิงชวัลกร', 'ผู้ผึ้ง', 22, 2559),
(90, 'เด็กหญิงณัฐพร', 'เกลี้ยงกลม', 22, 2559),
(91, 'เด็กหญิงณัฐวดี', 'หุ่นงาม', 22, 2559),
(92, 'เด็กหญิงธิดารัตน์', 'พุ่มมั่น', 22, 2559),
(93, 'เด็กหญิงนฤมล', 'แป้นเหมือน', 23, 2559),
(94, 'เด็กหญิงปิยธิดา', 'ดวงวิเชียร', 23, 2559),
(95, 'เด็กหญิงปุณยวีร์', 'ศรีชมภู', 23, 2559),
(96, 'เด็กหญิงพิมพ์นิภา', 'จันทร์ชูกลิ่น', 23, 2559),
(97, 'เด็กหญิงภาสินี', 'นิ่มนวล', 24, 2559),
(98, 'เด็กหญิงภูษนิศา', 'เพชรประดับ', 24, 2559),
(99, 'เด็กหญิงมนัญญา', 'เกตุเตี้ย', 24, 2559),
(100, 'เด็กหญิงวิชุกร', 'ทับเอี่ยม', 24, 2559),
(101, 'เด็กหญิงศิริลักษณ์', 'อินทร์บำรุง', 25, 2559);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `subject`
-- 

CREATE TABLE `subject` (
  `sno` int(11) NOT NULL AUTO_INCREMENT ,
  `sids` varchar(30) default NULL,
  `sname` varchar(50) default NULL,
  `times` smallint(6) default NULL,
  `stype` smallint(6) default NULL,
  PRIMARY KEY  (`sno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `subject`
-- 

INSERT INTO `subject` (`sno`, `sids`, `sname`, `times`, `stype`) VALUES 
(1, 'ท11101', 'ภาษาไทย', 60, 0),
(2, 'ค11101', 'คณิตศาสตร์', 60,  0),
(3, 'ว11101', 'วิทยาศาสตร์', 60,  0),
(4, 'ส11101', 'สังคมศึกษา', 60,  0),
(5, 'ส11102', 'ประวัติศาสตร์', 60,  1),
(6, 'พ11101', 'สุขศึกษาและพลศึกษา', 60, 1),
(7, 'ศ11101', 'ศิลปะ', 60, 1),
(8, 'ง11101', 'การงานอาชีพ', 60, 1),
(9, 'อ11101', 'ภาษาอังกฤษ', 60, 0),
(10, 'ท12101', 'ภาษาไทย ', 60, 0),
(11, 'ค12101', 'คณิตศาสตร์', 60, 0),
(12, 'ว12101', 'วิทยาศาสตร์', 60, 0),
(13, 'ส12101', 'สังคมศึกษาศาสนาและวัฒนธรรม', 60, 1),
(14, 'ส12102', 'ประวัติศาสตร์', 60, 1),
(15, 'พ12101', 'สุขศึกษาและพลศึกษา', 60, 1),
(16, 'ศ12101', 'ศิลปะ', 60, 1),
(17, 'ง12101', 'การงานอาชีพและเทคโนโลยี', 60, 1),
(18, 'อ12101', 'ภาษาอังกฤษ', 60, 0),
(19, 'ท13101', 'ภาษาไทย ', 60, 0),
(20, 'ค13101', 'คณิตศาสตร์', 60, 0),
(21, 'ว13101', 'วิทยาศาสตร์', 60, 0),
(22, 'ส13101', 'สังคมศึกษา', 60, 0),
(23, 'ส13102', 'ประวัติศาสตร์', 60, 1),
(24, 'พ13101', 'สุขศึกษาและพลศึกษา', 60, 1),
(25, 'ศ13101', 'ศิลปะ', 60, 1),
(26, 'ง13101', 'การงานอาชีพ', 60, 1),
(27, 'อ13101', 'ภาษาอังกฤษ', 60, 0),
(28, 'ส13201', 'หน้าที่พลเมือง', 60, 1),
(29, 'ท14101', 'ภาษาไทย', 60, 0),
(30, 'ค14201', 'คณิตศาสตร์IEP', 60, 1),
(31, 'ค14201', 'วิทยาศาสตร์IEP ', 60, 1),
(32, 'ส14101', 'สังคมศึกษา', 60, 0),
(33, 'ว14101', 'วิทยาศาสตร์', 60, 0),
(34, 'พ14101', 'สุขศึกษาและพลศึกษา', 60, 1),
(35, 'ส14201', 'หน้าที่พลเมือง', 60, 1),
(36, 'ง14101', 'การงานอาชีพและเทคโนโลยี', 60, 1),
(37, 'อ14101', 'ภาษาอังกฤษพื้นฐาน', 60, 0),
(38, 'อ14201', 'ภาษาอังกฤษเพิ่มเติม', 60, 0),
(39, 'ศ14101', 'ศิลปะ', 60, 1),
(40, 'ส14201', 'ประวัติศาสตร์', 60, 1),
(41, 'ท15101', 'ภาษาไทยฉบับที่ 1 ', 60, 0),
(42, 'ท15102', 'ภาษาไทยฉบับที่ 2', 60, 0),
(43, 'ค15101', 'คณิตศาสตร์ฉบับที่ 1', 60, 0),
(44, 'ค15102', 'คณิตศาสตร์ฉบับที่ 2', 60, 0),
(45, 'ว15101', 'วิทยาศาสตร์', 60, 0),
(46, 'ส15101', 'สังคมศึกษา', 60, 0),
(47, 'ส15101', 'หน้าที่พลเมือง', 60, 1),
(48, 'ส15102', 'ประวัติศาสตร์', 60, 1),
(49, 'พ15101', 'สุขศึกษาและพลศึกษา', 60, 1),
(50, 'ศ15102', 'ดนตรี ศิลปะ นาฏศิลป์', 60, 1),
(51, 'ง15101', 'การงานอาชีพและเทคโนโลยี', 60, 1),
(52, 'อ15101', 'ภาษาอังกฤษพื้นฐาน', 60, 0),
(53, 'ท16101', 'ภาษาไทยฉบับที่ 1 ', 60, 0),
(54, 'ท16102', 'ภาษาไทยฉบับที่ 2', 60, 0),
(55, 'ค16101', 'คณิตศาสตร์ฉบับที่ 1', 60, 0),
(56, 'ค16102', 'คณิตศาสตร์ฉบับที่ 2', 60, 0),
(57, 'ว16101', 'วิทยาศาสตร์', 60, 0),
(58, 'ส16101', 'สังคมศึกษา', 60, 0),
(59, 'ส16102', 'ประวัติศาสตร์', 60, 1),
(60, 'อ16101', ' ภาษาอังกฤษ', 60, 0),
(61, 'ท20101', 'ภาษาไทยพื้นฐาน', 90, 0),
(62, 'ค20201', 'คณิตศาสตร์เพิ่มเติม', 90, 0),
(63, 'ค20101', 'คณิตศาสตร์พื้นฐาน', 90, 0),
(64, 'ว20101', 'วิทยาศาสตร์พื้นฐาน', 90, 0),
(65, 'ว20201', 'วิทยาศาสตร์เพิ่มเติม', 90, 0),
(66, 'ส20101', 'สังคมศึกษา', 90, 0),
(67, 'ส20101', 'หน้าที่พลเมือง', 90, 1),
(68, 'ส20101', 'ประวัติศาสตร์', 90, 1),
(69, 'พ20101', 'สุขศึกษา', 90, 1),
(70, 'พ20101', 'พลศึกษา', 90, 1),
(71, 'ศ20102', 'ดนตรี-นาฏศิลป์', 90, 1),
(72, 'ศ20101', 'ทัศนศิลป์', 90, 1),
(73, 'ง20101', 'การงานอาชีพ', 90, 1),
(74, 'ง20101', 'เทคโนโลยีสารสนเทศ', 90, 1),
(75, 'อ20101', 'ภาษาอังกฤษพื้นฐาน', 90, 0),
(76, 'อ20201', 'ภาษาอังกฤษเพิ่มเติม', 90, 0),
(77, 'ง20201', 'งานเลือก', 90, 1),
(78, 'ท21101', 'ภาษาไทยพื้นฐาน', 90, 0),
(79, 'ค21101', 'คณิตศาสตร์พื้นฐาน', 90, 0),
(80, 'ค21202', 'คณิตศาสตร์เพิ่มเติม', 90, 0),
(81, 'ว21101', 'วิทยาศาสตร์พื้นฐาน', 90, 0),
(82, 'ว21201', 'วิทยาศาสตร์เพิ่มเติม', 90, 0),
(83, 'ส21104', 'สังคมศึกษาศาสนาและวัฒนธรรม', 90, 1),
(84, 'ส21102', 'ประวัติศาสตร์', 90, 1),
(85, 'พ21101', 'สุขศึกษา', 90, 1),
(86, 'พ21102', 'พลศึกษา', 90, 1),
(87, 'ศ21102', 'ดนตรี-นาฏศิลป์', 90, 1),
(88, 'ง21101', 'การงานอาชีพ', 90, 1),
(89, 'อ21101', 'ภาษาอังกฤษพื้นฐาน', 90, 0),
(90, 'ง21102', 'คอมพิวเตอร์', 90, 1),
(91, 'ศ21102', 'ศิลปศึกษา', 90, 1),
(92, 'ท22101', 'ภาษาไทยพื้นฐาน', 90, 0),
(93, 'ค2201', 'คณิตศาสตร์พื้นฐาน', 90, 0),
(94, 'ค22201', 'คณิตศาสตร์เพิ่มเติม', 90, 0),
(95, 'ว22101', 'วิทยาศาสตร์พื้นฐาน', 90, 0),
(96, 'ส22104', 'สังคมศึกษาศาสนาและวัฒนธรรม', 90, 1),
(97, 'ส22102', 'ประวัติศาสตร์', 90, 1),
(98, 'พ22101', 'สุขศึกษา', 90, 1),
(99, 'ศ22102', 'ดนตรี-นาฏศิลป์', 90, 1),
(100, 'ง22101', 'การงานอาชีพ', 90, 1),
(101, 'อ22101', 'ภาษาอังกฤษพื้นฐาน', 90, 0),
(102, 'อ22201', 'ภาษาอังกฤษเพิ่มเติม', 90, 0),
(103, 'ศ22102', 'ศิลปศึกษา', 90, 1),
(104, 'ค23101', 'คณิตศาสตร์', 90, 0),
(105, 'พ23101', 'สุขศึกษา', 90, 1),
(106, 'พ23101', 'พลศึกษา', 90, 1),
(107, 'ศ23102', 'นาฏศิลป์2', 90, 1),
(108, 'ง23101', 'การงานอาชีพ2', 90, 1),
(109, 'ท23101', 'ภาษาไทย', 90, 0),
(110, 'ส23102', 'ประวัติศาสตร์ไทย', 90, 1),
(111, 'อ23201', 'ภาษาอังกฤษ(การฟัง-พูด)', 90, 0),
(112, 'ส23101', 'สังคมศึกษา', 90, 0),
(113, 'ส23101', 'หน้าที่พลเมือง ', 90, 1),
(114, 'ค23201', 'คณิตศาสตร์เพิ่มเติม', 90, 2),
(115, 'ว23202', 'ฟิสิกส์', 90, 2),
(116, 'ว23121', 'เคมี', 90, 2),
(117, 'ว23141', 'ชีววิทยา ', 90, 2),
(118, 'ค23101', 'คณิตศาสตร์', 90, 0),
(119, 'พ23101', 'สุขศึกษา', 90, 1),
(120, 'พ23101', 'พลศึกษา', 90, 1),
(121, 'ศ23101', 'นาฏศิลป์2', 90, 1),
(122, 'ง23101', 'การงานอาชีพ2', 90, 1),
(123, 'ท23101', 'ภาษาไทย', 90, 0),
(124, 'ส23102', 'ประวัติศาสตร์ไทย', 90, 1),
(125, 'อ23101', 'ภาษาอังกฤษ(การฟัง-พูด)', 90, 0),
(126, 'ส23101', 'สังคมศึกษา', 90, 0),
(127, 'ส23101', 'หน้าที่พลเมือง ', 90, 1),
(128, 'ส23101', 'ภูมิศาสตร์ไทย', 90, 2),
(129, 'อ224', 'การแปลอังกฤษ2 ', 90, 2),
(130, 'ง23103', 'คอมพิวเตอร์2', 90, 2),
(131, 'ว23102', 'พันธุกรรมกับสิ่งแวดล้อม', 90, 2),
(132, 'ท23202', 'การพูดในที่ชุมชน', 90, 2),
(133, 'จ31201', 'ภาษาจีน2', 90, 2),
(134, 'ค31101', 'คณิตศาสตร์', 90, 0),
(135, 'พ31101', 'สุขศึกษา', 90, 1),
(136, 'พ31102', 'พลศึกษา', 90, 1),
(137, 'ศ31101', 'ทัศนศิลป์', 90, 1),
(138, 'ง31101', 'การงานอาชีพ2', 90, 1),
(139, 'ท31101', 'ภาษาไทย', 90, 0),
(140, 'ส31102', 'ประวัติศาสตร์สากล', 90, 1),
(141, 'อ31101', 'ภาษาอังกฤษ(อ่าน-เขียน)', 90, 0),
(142, 'ส31101', 'สังคมศึกษา', 90, 0),
(143, 'ส31101', 'หน้าที่พลเมือง2 ', 90, 1),
(144, 'ค31102', 'คณิตศาสตร์เพิ่มเติม', 90, 2),
(145, 'ว31202', 'ฟิสิกส์', 90, 2),
(146, 'ว31102', 'เคมี', 90, 2),
(147, 'ว31242', 'ชีววิทยา ', 90, 2),
(148, 'ค32101', 'คณิตศาสตร์', 90, 0),
(149, 'พ32101', 'สุขศึกษา', 90, 1),
(150, 'พ32101', 'พลศึกษา', 90, 1),
(151, 'ศ32101', 'ทัศนศิลป์', 90, 1),
(152, 'ง32101', 'การงานอาชีพ2', 90, 1),
(153, 'ท32101', 'ภาษาไทย', 90, 0),
(154, 'ส32101', 'ประวัติศาสตร์สากล', 90, 1),
(155, 'อ32101', 'ภาษาอังกฤษ(อ่าน-เขียน)', 90, 0),
(156, 'ส32101', 'สังคมศึกษา', 90, 0),
(157, 'ส32101', 'หน้าที่พลเมือง2 ', 90, 1),
(158, 'อ32101', 'ภาษาอังกฤษธุรกิจ2 ', 90, 2),
(159, 'ง32103', 'คอมพิวเตอร์4', 90, 2),
(160, 'ท32101', 'การอ่านวรรณกรรม', 90, 2),
(161, 'ท32101', 'สารและสมบัติของสาร', 90, 2),
(162, 'อ32101', 'ภาษาจีน4', 90, 2),
(163, 'ค33101', 'คณิตศาสตร์', 90, 0),
(164, 'พ33101', 'สุขศึกษา', 90, 1),
(165, 'พ33102', 'พลศึกษา', 90, 1),
(166, 'ท33101', 'ภาษาไทย', 90, 0),
(167, 'ง33101', 'การงานอาชีพ6', 90, 1),
(168, 'อ33101', 'ภาษาอังกฤษ', 90, 0),
(169, 'อ33104', 'ภาษาอังกฤษ(อ่าน-เขียน4)', 90, 0),
(170, 'ส33101', 'สังคมศึกษา', 90, 0),
(171, 'ส33101', 'หน้าที่พลเมือง2', 90, 1),
(172, 'ศ33101', 'ดนตรี ', 90, 1),
(173, 'ค33201', 'คณิตศาสตร์เพิ่มเติม', 90, 2),
(174, 'ว33201', 'ฟิสิกส์', 90, 2),
(175, 'ว33102', 'เคมี', 90, 2),
(176, 'ว33242', 'ชีววิทยา ', 90, 2),
(177, 'ค33101', 'คณิตศาสตร์', 90, 0),
(178, 'พ33101', 'สุขศึกษา', 90, 1),
(179, 'พ33102', 'พลศึกษา', 90, 1),
(180, 'ท33101', 'ภาษาไทย', 90, 0),
(181, 'ง33101', 'การงานอาชีพ6', 90, 1),
(182, 'อ33101', 'ภาษาอังกฤษ', 90, 0),
(183, 'อ33104', 'ภาษาอังกฤษ(อ่าน-เขียน4)', 90, 0),
(184, 'ส33101', 'สังคมศึกษา', 90, 0),
(185, 'ส33101', 'หน้าที่พลเมือง2', 90, 1),
(186, 'ศ33101', 'ดนตรี ', 90, 1),
(187, 'ท33102', 'หลักภาษาไทย', 90, 2),
(188, 'อ33101', 'ภาษาจีน', 90, 2),
(189, 'ว33104', 'ดวงดาวและโลกของเรา', 90, 2),
(190, 'ง33106', 'คอมพิวเตอร์6', 90, 2),
(191, 'ง33102', 'ออกแบบ2', 90, 2),
(192, 'อ33102', 'ภาษาอังกฤษสื่อสาร', 90, 2);
-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `teacher`
-- 

CREATE TABLE `teacher` (
  `tno` int(11) NOT NULL AUTO_INCREMENT ,
  `username` varchar(10) default NULL,
  `passwords` varchar(10) default NULL,
  `tname` varchar(50) default NULL,
  `section` varchar(20) default NULL,
  `detail` varchar(50) default NULL,
  `status` varchar(1) default NULL,
  PRIMARY KEY  (`tno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `teacher`
-- 

INSERT INTO `teacher` (`tno`, `username`, `passwords`, `tname`, `section`, `detail`, `status`) VALUES 
(1, 'Rec001', 'pass001', 'นายสุรพล  สุขประเสริฐ', 'ฝ่ายทะเบียน', 'สวย','1'),
(2, 'Rec002', 'pass002', 'นายบุญเลิศ  นิกร', 'ฝ่ายทะเบียน', '','1'),
(3, 'Rec003', 'pass003', 'นายยรรยง พรหมสาขา ณ สกลนคร', 'ฝ่ายทะเบียน', '','1'),
(4, 'Rec004', 'pass004', 'นายเจียระนัย ไชยนา', 'ฝ่ายทะเบียน', '','1'),
(5, 'Rec005', 'pass005', 'นางเพ็ญศรี  เลิงภูบัง', 'ฝ่ายทะเบียน', '','1'),
(6, 'Rec006', 'pass006', 'นางวราภรณ์  ธนะเวช', 'ฝ่ายทะเบียน', '','1'),
(7, 'Rec007', 'pass007', 'นางนงนภัส  ศรีลุนช่าง', 'ฝ่ายทะเบียน', '','1'),
(8, 'Rec008', 'pass008', 'นางณัฐกฤตา  กาสีใส', 'ฝ่ายทะเบียน', '','1'),
(9, 'Rec009', 'pass009', 'นางเขมจิรา  เงินศรี', 'ฝ่ายทะเบียน', '','1'),
(10, 'Rec010', 'pass010', 'นางนิตยาภรณ์  ภัทรฤดีพงศ์', 'ฝ่ายทะเบียน', '','1'),
(11, 'Learn001', 'pass011', 'นางสายฝน  สิงห์เชิดชูวงศ์', 'ฝ่ายการเรียนการสอน', '','2'),
(12, 'Learn002', 'pass012', 'น.ส.พิมพ์พิสุทธิ์  วิรัน', 'ฝ่ายการเรียนการสอน', '','2'),
(13, 'Learn003', 'pass013', 'นางเลิศลักษณ์  สุวรรณน้อย', 'ฝ่ายการเรียนการสอน', '','2'),
(14, 'Learn004', 'pass014', 'น.ส.พรนาคา  วงษ์เจริญ', 'ฝ่ายการเรียนการสอน', '','2'),
(15, 'Learn005', 'pass015', 'นางวนิดา  แก่นนาคำ', 'ฝ่ายการเรียนการสอน', '','2'),
(16, 'Learn006', 'pass016', 'นางพาณี  พิมพ์โสดา', 'ฝ่ายการเรียนการสอน', '','2'),
(17, 'Learn007', 'pass017', 'นางวนิดา  ประเสริฐสุด', 'ฝ่ายการเรียนการสอน', '','2'),
(18, 'Learn008', 'pass018', 'นางวิมล  คำมุกชิก', 'ฝ่ายการเรียนการสอน', '','2'),
(19, 'Learn009', 'pass019', 'น.ส.รัชนี  ทวีเชาว์รุ่งเรือง', 'ฝ่ายการเรียนการสอน', '','2'),
(20, 'Learn010', 'pass020', 'นางนงลักษณ์  ไชยสิทธิ์', 'ฝ่ายการเรียนการสอน', '','2'),
(21, 'Cur001', 'pass021', 'นางสุภารัตน์  คีรีวงก์', 'ฝ่ายหลักสูตร', '','3'),
(22, 'Cur002', 'pass022', 'น.ส.กมลรัตน์  ศุภวิจิตรพันธ์', 'ฝ่ายหลักสูตร', '','3'),
(23, 'Cur003', 'pass023', 'นางเปรมปรีดิ์  ทองเจริญ', 'ฝ่ายหลักสูตร', '','3'),
(24, 'Cur004', 'pass024', 'นางจิราภรณ์ เรืองดิษฐ์ กาลนิล', 'ฝ่ายหลักสูตร', '','3'),
(25, 'Cur005', 'pass025', 'นายพิเชษฐา โมรา', 'ฝ่ายหลักสูตร', '','3'),
(26, 'Teach001', 'pass026', 'นางจิณัฐตา  อารามพระ', 'คุณครู', '','4'),
(27, 'Teach002', 'pass027', 'นางอรุณรัสมิ์  บำรุงจิตร', 'คุณครู', '','4'),
(28, 'Teach003', 'pass028', 'นางศรัญญา  อัตปัญญา', 'คุณครู', '','4'),
(29, 'Teach004', 'pass029', 'นางอรทัย  ไชยทะเศรษฐ์', 'คุณครู', '','4'),
(30, 'Teach005', 'pass030', 'นางพัทธวรรณ  เกิดสมนึก', 'คุณครู', '','4'),
(31, 'Teach006', 'pass031', 'นางอภิรดี  พรหมพันใจ', 'คุณครู', '','4'),
(32, 'Teach007', 'pass032', 'นางอัญชลี  พันชะโก', 'คุณครู', '','4'),
(33, 'Teach008', 'pass033', 'นางรัตนลักษณ์  อภิรัตน์วรากุล', 'คุณครู', '','4'),
(34, 'Teach009', 'pass034', 'นางบุญรักษ์  ปานวงษ์', 'คุณครู', '','4'),
(35, 'Teach010', 'pass035', 'นางชญากาณฑ์  พิพัฒนสุข', 'คุณครู', '','4'),
(36, 'Teach011', 'pass036', 'นายวัฒนา  อุ่ยตระกูล', 'คุณครู', '','4'),
(37, 'Teach012', 'pass037', 'นางนันทนา  วันเพ็ญ', 'คุณครู', '','4'),
(38, 'Teach013', 'pass038', 'นางอัมพา  ใหญ่ธนายศ', 'คุณครู', '','4'),
(39, 'Teach014', 'pass039', 'นางพิกุลทอง  เสือหล้า', 'คุณครู', '','4'),
(40, 'Teach015', 'pass040', 'นางณิชกาญจน์  ธนะภักดิ์', 'คุณครู', '','4'),
(41, 'Teach016', 'pass041', 'นางจิราภรณ์  รัตนะเจริญธรรม', 'คุณครู', '','4'),
(42, 'Teach017', 'pass042', 'นางสิริรัตน์  ตะราษี', 'คุณครู', '','4'),
(43, 'Teach018', 'pass043', 'นางอารีรักษ์  ซื่อตรง', 'คุณครู', '','4'),
(44, 'Teach019', 'pass044', 'นางลดารัตน์  รัตนะ', 'คุณครู', '','4'),
(45, 'Teach020', 'pass045', 'นางดอกไม้  บัวคำภู', 'คุณครู', '','4'),
(46, 'Teach021', 'pass046', 'นางพะเยาว์  จิตรโก', 'คุณครู', '','4'),
(47, 'Teach022', 'pass047', 'นางเจียมใจ  ศรีสะอาด', 'คุณครู', '','4'),
(48, 'Teach023', 'pass048', 'นางสุรพิศ  โคตรสี', 'คุณครู', '','4'),
(49, 'Teach024', 'pass049', 'นางอัญมณี  ทองดี', 'คุณครู', '','4'),
(50, 'Teach025', 'pass050', 'นางนุชรี  ดวงมณี', 'คุณครู', '','4'),
(51, 'Teach026', 'pass051', 'นางนภาศิริ  ถึงใจ', 'คุณครู', '','4'),
(52, 'Teach027', 'pass052', 'นางอมร  ตรีวรเวทย์', 'คุณครู', '','4'),
(53, 'Teach028', 'pass053', 'นางวิลาวรรณ  เหง้าพรหมมินทร์', 'คุณครู', '','4'),
(54, 'Teach029', 'pass054', 'นางบุญศรี  หิรัญรักษ์', 'คุณครู', '','4'),
(55, 'Teach030', 'pass055', 'นางไมตรีจิต  โคตรทอง', 'คุณครู', '','4'),
(56, 'Teach031', 'pass056', 'นางโฉมยงค์  รอดแพง', 'คุณครู', '','4'),
(57, 'Teach032', 'pass057', 'นางอุบลรัตน์  จงรักษ์', 'คุณครู', '','4'),
(58, 'Teach033', 'pass058', 'นางยุพวัลย์  พันธุเพ็ง', 'คุณครู', '','4'),
(59, 'Teach034', 'pass059', 'นางสุณีย์พร  อุบลชัย', 'คุณครู', '','4'),
(60, 'Teach035', 'pass060', 'น.ส.ศินีบูรณ์  อาคมศิลป์', 'คุณครู', '','4'),
(61, 'Teach036', 'pass061', 'นางนริณี  ศรีเงิน', 'คุณครู', '','4'),
(62, 'Teach037', 'pass062', 'นางพัธญ์ธมน  สฤษดิ์วรเสฐ', 'คุณครู', '','4'),
(63, 'Teach038', 'pass063', 'น.ส.ประไพจิตร  อัสสา', 'คุณครู', '','4'),
(64, 'Teach039', 'pass064', 'นางสิริกร  สุขเกษม', 'คุณครู', '','4'),
(65, 'Teach040', 'pass065', 'นางกัณศญา  สันทัดสำรวจการณ์', 'คุณครู', '','4'),
(66, 'Teach041', 'pass066', 'นางกัญญาภัค  ลุนชัยภา', 'คุณครู', '','4'),
(67, 'Teach042', 'pass067', 'นายวิทยา  การธนะภักดี', 'คุณครู', '','4'),
(68, 'Teach043', 'pass068', 'นายสวัสดิ์  สิทธิมาตย์', 'คุณครู', '','4'),
(69, 'Teach044', 'pass069', 'นางจารุวรรณ  ไชยเชียงพิณ', 'คุณครู', '','4'),
(70, 'Teach045', 'pass070', 'นางจาษุดา  ศิริสถิตย์', 'คุณครู', '','4'),
(71, 'Teach046', 'pass071', 'นางปุณณิศา  เทศผล', 'คุณครู', '','4'),
(72, 'Teach047', 'pass072', 'นางอนงค์นาถ  พิลึก', 'คุณครู', '','4'),
(73, 'Teach048', 'pass073', 'นางบานเย็น  ปิยานนท์', 'คุณครู', '','4'),
(74, 'Teach049', 'pass074', 'นางพรทิพย์  โกดี', 'คุณครู', '','4'),
(75, 'Teach050', 'pass075', 'น.ส.ศศิธร  จันทร์ศิริ', 'คุณครู', '','4'),
(76, 'Teach051', 'pass076', 'นางอนุรักษ์  ศรีระโส', 'คุณครู', '','4'),
(77, 'Teach052', 'pass077', 'นางสายสวาท   มูลอามาตย์', 'คุณครู', '','4'),
(78, 'Teach053', 'pass078', 'นางสมปรารถนา บุญปก', 'คุณครู', '','4'),
(79, 'Teach054', 'pass079', 'นางอุทัยวรรณ  ตังสมบูรณ์', 'คุณครู', '','4'),
(80, 'Teach055', 'pass080', 'นางวรรณภา  กิ่งแก้ว', 'คุณครู', '','4'),
(81, 'Teach056', 'pass081', 'นายมงคล  โทอึ้น', 'คุณครู', '','4'),
(82, 'Teach057', 'pass082', 'นางพัชรา  ไตรเสนีย์', 'คุณครู', '','4'),
(83, 'Teach058', 'pass083', 'ว่าที่ ร.อ.อดิศักดิ์  สาคมิตร', 'คุณครู', '','4'),
(84, 'Teach059', 'pass084', 'นางพัชนี  จำปี', 'คุณครู', '','4'),
(85, 'Teach060', 'pass085', 'น.ส.อรรถยา  โกกิลานันท์', 'คุณครู', '','4'),
(86, 'Teach061', 'pass086', 'นางศิริลักษณ์  ศรียศ', 'คุณครู', '','4'),
(87, 'Teach062', 'pass087', 'นางประมวล  ใคร่นุ่นกา', 'คุณครู', '','4'),
(88, 'Teach063', 'pass088', 'นางวนิดา  หาญตระกูล', 'คุณครู', '','4'),
(89, 'Teach064', 'pass089', 'นางสุภัทรา  ศรีโคตร', 'คุณครู', '','4'),
(90, 'Teach065', 'pass090', 'นางกฤษฏิญา  เฉลยพิตร', 'คุณครู', '','4');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `time_prim`
-- 

CREATE TABLE `time_prim` (
  `tno` int(11) NOT NULL,
  `etime` time default NULL,
  PRIMARY KEY  (`tno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `time_prim`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `time_sec`
-- 

CREATE TABLE `time_sec` (
  `tno` int(11) NOT NULL,
  `etime` time default NULL,
  PRIMARY KEY  (`tno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `time_sec`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `timetable`
-- 

CREATE TABLE `timetable` (
  `timetno` int(11) NOT NULL,
  `ttdate` date default NULL,
  `educyear` smallint(6) default NULL,
  `sem` smallint(6) default NULL,
  `STDEV` float default NULL,
  PRIMARY KEY  (`timetno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `timetable`
-- 
