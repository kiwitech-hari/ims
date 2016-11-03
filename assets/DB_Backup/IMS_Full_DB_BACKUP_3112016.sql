-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql201.1free-host.com
-- Generation Time: Nov 03, 2016 at 06:39 AM
-- Server version: 5.6.32-78.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `frh1_18918097_ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `asigned_assets`
--

CREATE TABLE IF NOT EXISTS `asigned_assets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `userid` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `asset` varchar(200) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(200) NOT NULL,
  `serial_no` varchar(100) NOT NULL,
  `asign_date` varchar(255) NOT NULL,
  `note` varchar(500) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112 ;

--
-- Dumping data for table `asigned_assets`
--

INSERT INTO `asigned_assets` (`id`, `fullname`, `userid`, `email`, `mobile`, `asset`, `brand`, `model`, `serial_no`, `asign_date`, `note`, `status`) VALUES
(1, 'Anish Ranjan', 'REF-00101', 'anish@reflexsolution.com', '9021480001', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P018668', '10/22/2016 - 12:13 PM', 'ubuntu 64Bit/i3/16GB/500GB HDD', 'Using'),
(2, 'Priyanka Gupta', 'REF-00104', 'priyanka.gupta@reflexsolution.com', '8130269877', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P018337', '08/27/2015', 'Returned on10/22/2016 - 12:22 PM Reason: This System not Getting ON. Current Status : DEAD.', 'Returned'),
(3, 'Sushant Sharma', 'REF-00105', 'sushant.sharma@reflexsolution.com', '9468183018', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P015944', '10/22/2016 - 12:24 PM', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(4, 'Sumit Rajan', 'REF-00106', 'sumit@reflelsolution.com', '7042989359', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P016263', '10/22/2016 - 12:26 PM', 'Returned on10/27/2016 - 2:15 PM Reason: handover to suresh gautam ', 'Returned'),
(5, 'Sumit Kakkar', 'REF-00108', 'sumit.kakkar@reflexsolution.com', '9810108555', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P018463', '09/04/2015', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(6, 'Prasoon Goswami', 'REF-00109', 'prasoon.goswami@reflexsolution.com', '9953497604', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P018575', '09/08/2015', 'Ubuntu 64 Biti316GB500GB', 'Using'),
(7, 'Isha Mehta', 'REF-00110', 'isha.mehta@reflexsolution.com', '9871025537', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P026273', '09/09/2015', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(8, 'Naga Bhavani', 'REF-00111', 'nagabhavani.pasupulati@reflexsolution.com', '8447799107', 'Laptops', 'ASUS', 'ASUS-X553M', 'ASUS-X553M', '09/11/2015', 'Asus Laptops 4GB RAM', 'Using'),
(10, 'Satish Vakkapatla', 'REF-00113', 'satish.vakkapatla@reflexsolution.com', '9573265000', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P026219', '10/16/2015', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(12, 'Anjali Bansal', 'REF-00115', 'anjali.bansal@reflexsolution.com', '9555091927', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3PO18535', '10/05/2015', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(13, 'Abhishek Vashisht', 'REF-00116', 'abhishek.vashisht@reflexsolution.com', '9654915213', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P018340', '10/05/2015', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(14, 'Ravi Mittal', 'REF-00117', 'ravi.mittal@reflexsolution.com', '9717738111', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3032615', '10/19/2015', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(16, 'Rama Sikarwar', 'REF-00112', 'rama.sikarwar@reflexsolution.com', '8856899894', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P018442', '10/12/2015', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(17, 'Rakesh Rana', 'REF-00118', 'rakesh.rana@reflexsolution.com', '8976809817', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P025920', '10/28/2015', 'Ubuntu 64 Biti316GB500GB', 'Using'),
(18, 'Mithlesh Kumar', 'REF-00119', 'mithlesh.kumar@reflexsolution.com', '9910590628', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P033007', '10/26/2015', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(19, 'Nishant Jain', 'REF-00124', 'nishant.jain@reflexsolution.com', '9971586851', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3025178', '10/22/2016 - 9:03 PM', 'Ubuntu 64 Biti316GB500GB', 'Using'),
(20, 'Kashish grover', 'REF-00125', 'kashish.grover@reflexsolution.com', '9818593222', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3PO26112', '11/13/2015', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(21, 'Mukul garg', 'REF-00126', 'mukul.garg@reflexsolution.com', '9896244729', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3026931', '11/23/2015', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(22, 'Anoop Kumar', 'REF-00127', 'anoop.rana@reflexsolution.com', '9990881381', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3017390', '11/23/2015', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(23, 'Arpit saxena', 'REF-00128', 'arpit.saxena@reflexsolution.com', '8192824577', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3032616', '11/24/2015', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(24, 'Juhi Bansal', 'REF-00129', 'juhi.bansal@reflexsolution.com', '8588835187', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3033491', '11/04/2015', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(25, 'Juhi Bansal', 'REF-00129', 'juhi.bansal@reflexsolution.com', '8588835187', 'Laptops', 'Dell', 'Dell ', '8S4HH52', '01/05/2016', 'Dell Windows 7 4GB ', 'Using'),
(27, 'Sumit sharma', 'REF-00130', 'sumit.sharma@reflexsolution.com', '8130999087', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P064237', '12/18/2015', 'ubuntu 64 bit', 'Using'),
(28, 'Prateek saxena', 'REF-00131', 'prateek.saxena@reflexsolution.com', '9650437887', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3032952', '11/30/2015', 'Ubuntu 64 Biti316GB500GB', 'Using'),
(29, 'Vishal Matapurkar', 'REF-00132', 'vishal.matapurkar@reflexsolution.com', '9902247838', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P064979', '10/22/2016 - 9:39 PM', 'Ubuntu 64 Biti316GB500GB', 'Using'),
(30, 'Mugdha Matapurkar', 'REF-00133', 'mugdha.matapurkar@reflexsolution.com', '9741168022', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P066812', '12/28/2015', 'Ubuntu 64 Biti316GB500GB', 'Using'),
(31, 'Kishore Nammi', 'REF-00135', 'kishore.nammi@reflexsolution.com', '9573297192', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P018426', '01/04/2016', 'Ubuntu 64 Biti316GB500GB\r\n', 'Using'),
(32, 'Rahul Bokolia', 'REF-00134', 'rahul.bokolia@reflexsolution.com', '9654356502', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P065128', '01/01/2016', 'Ubuntu 64 Biti316GB500GB', 'Using'),
(33, 'Md Hamid Shaikh', 'REF-00137', 'hamid.shaikh@reflexsolution.com', '9892317288', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P066117', '01/27/2016', 'Ubuntu 64 Biti316GB500GB', 'Using'),
(34, 'Milind Bansal', 'REF-00138', 'milind.bansal@reflexsolution.com', '8171100856', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P065396', '02/01/2016', 'Ubuntu 64 Biti316GB500GB', 'Using'),
(37, 'Anubhav Singh', 'REF-00140', 'anubhav.singh@reflexsolution.com', '8373906403', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3033286', '02/16/2016', 'Ubuntu 64 Biti3', 'Using'),
(38, 'Shailendra Nayak', 'REF-00142', 'shailendra@reflexsolution.com', '9630140209', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P033549', '02/23/2016', 'Ubuntu 64 Biti3', 'Using'),
(39, 'Saurabh Agnihotri', 'REF-00144', 'saurabh.agnihotri@reflexsolution.com', '8882955077', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3064968', '03/07/2016', 'Ubuntu 64 Biti316GB500GB', 'Using'),
(40, 'Satish Kumar Jha', 'REF-00145', 'satish.jha@reflexsolution.com', '9560128291', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3067052', '03/07/2016', 'Ubuntu 64 Biti316GB500GB', 'Using'),
(41, 'Pratap Singh', 'REF-00146', 'pratap.singh@reflexsolution.com', '9411865035', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3O64483', '03/08/2016', 'Ubuntu 64 Biti316GB500GB', 'Using'),
(42, 'Nishant Jain Khatouli', 'REF-00167', 'nishant@reflexsolution.com', '8439143527', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3032994', '07/11/2016', 'Ubuntu 64 Biti316GB500GB', 'Using'),
(43, 'Rishabh Gupta', 'REF-00148', 'rishabh.gupta@reflexsolution.com', '7065903807', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3PO26036', '03/09/2016', 'Ubuntu 64 Biti316GB500GB', 'Using'),
(44, 'Sridhar Avula', 'REF-00149', 'sridhar.avula@reflexsolution.com', '8744909815', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P066351', '03/10/2016', 'Ubuntu 64 Biti316GB500GB', 'Using'),
(45, 'Amit Anand', 'REF-00150', 'amit.anand@reflexsolution.com', '8800582194', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3066395', '03/17/2016', 'Ubuntu 64 Biti316GB500GB', 'Using'),
(46, 'Vipul Sharma', 'REF-00151', 'vipul.sharma@reflexsolution.com', '9717495619', 'Laptops', 'Dell', 'Dell ', 'CWPGH52', '10/22/2016 - 10:08 PM', 'Windows 7 4GB RAM', 'Using'),
(47, 'Romit Chhabra', 'REF-00152', 'romit.chhabra@reflexsolution.com', '7531962963', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P066938', '03/21/2016', 'Ubuntu 64 Biti316GB500GB', 'Using'),
(48, 'Praveen Agrawal', 'REF-00154', 'praveen.agrawal@reflexsolution.com', '9540318855', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3099831', '03/21/2016', 'Ubuntu 64 Biti316GB500GB', 'Using'),
(49, 'Santosh Dhanraj Raut', 'REF-00155', 'santosh.raut@reflexsolution.com', '9881173291', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3PO66911', '04/01/2016', 'Ubuntu 64 Biti316GB500GB', 'Using'),
(50, 'Komal Goel', 'REF-00156', 'komal.goel@reflexsolution.com', '7830335842', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3PO66909', '04/01/2016', '', 'Using'),
(51, 'Sakshi Narang', 'REF-00158', 'sakshi.narang@reflexsolution.com', '9711448755', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P066400', '04/04/2016', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(52, 'Varun Kumar Bansal', 'REF-00159', 'varun.bansal@reflexsolution.com', '8375052450', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P065066', '04/04/2016', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(53, 'Shailendra Nayak', 'REF-00142', 'shailendra@reflexsolution.com', '9630140209', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P066536', '10/22/2016 - 10:19 PM', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(54, 'Hemant Kirar', 'REF-00153', 'hemant.kirar@reflexsolution.com', '7303808101', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P026083', '10/12/2016', 'Ubuntu 64 Biti316GB500GB', 'Using'),
(55, 'Ashwini Kumar Singh', 'xel-0116', 'ashwini.kumar@xeliumtech.com', '8527745606', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P014230', '10/22/2016 - 10:23 PM', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(56, 'Sumit Rajan', 'REF-00106', 'sumit@reflelsolution.com', '7042989359', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P065209', '05/30/2016', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(57, 'Aditya Mittal', 'REF-00163', 'aditya.mittal@reflexsolution.com', '9015245658', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P066781', '06/14/2016', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(58, 'Surya Prakash Yadav', 'REF-00168', 'surya.yadav@reflexsolution.com', '7385766176', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P064413', '07/11/2016', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(59, 'Amulya Kumar Sahu', 'REF-00161', 'amulya.sahu@reflexsolution.com', '9650441440', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P062560', '10/22/2016 - 10:48 PM', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(60, 'Himanshu Bhati', 'REF-00175', 'himanshu.bhati@reflexsolution.com', '9711985059', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P066511', '10/22/2016 - 10:49 PM', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(61, 'K. Sravan Kumar Reddy', 'REF-00166', 'sravan.reddy@reflexsolution.com', '9642288630', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P066512', '10/22/2016 - 10:49 PM', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(62, 'Mugdha Matapurkar', 'REF-00133', 'mugdha.matapurkar@reflexsolution.com', '9741168022', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P033472', '10/22/2016 - 10:49 PM', 'Windows7 64 Biti316GB500GB - Issued to Testing TEAM', 'Using'),
(63, 'Ashok Mareedu', 'REF-00169', 'ashok.mareedu@reflexsolution.com', '9052874459', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P065045', '10/22/2016 - 10:51 PM', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(64, 'Nishant Jain', 'REF-00124', 'nishant.jain@reflexsolution.com', '9971586851', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P066756', '10/22/2016 - 10:51 PM', 'Ubuntu 64 Biti316GB500GB for work from Home', 'Using'),
(65, 'Chintala Venkatesh', 'REF-00170', 'chintala.venkatesh@reflexsolution.com', '9742676701', 'Laptops', 'Fujitsu', ' Fujitsu-A555', 'YM3M093383', '10/22/2016 - 10:53 PM', 'Returned on10/22/2016 - 10:56 PM Reason: He left the office and returned laptop', 'Returned'),
(66, 'Manisha Kumari', 'xel-0112', 'manisha.kumari@xeliumtech.com', '9310667123', 'Laptops', 'Fujitsu', ' Fujitsu-A555', 'YM3M093383', '10/22/2016 - 10:56 PM', 'Ubuntu 64 Biti38GB500GB ', 'Using'),
(67, 'Neha Sharma', 'REF-00172', 'neha.sharma@reflexsolution.com', '9953193775', 'Laptops', 'Fujitsu', ' Fujitsu-A555', 'YM3M093564', '10/22/2016 - 10:57 PM', 'Ubuntu 64 Biti38GB1TB ', 'Using'),
(68, 'Hemant Kirar', 'REF-00153', 'hemant.kirar@reflexsolution.com', '7303808101', 'Laptops', 'Fujitsu', ' Fujitsu-A555', 'YM3M093870', '10/22/2016 - 10:59 PM', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(69, 'Aditya Mittal', 'REF-00163', 'aditya.mittal@reflexsolution.com', '9015245658', 'Laptops', 'Fujitsu', ' Fujitsu-A555', 'YM3MO93918', '10/22/2016 - 11:00 PM', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(70, 'Rahul Bokolia', 'REF-00134', 'rahul.bokolia@reflexsolution.com', '9654356502', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P066340', '10/22/2016 - 11:01 PM', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(71, 'Rakesh Rana', 'REF-00118', 'rakesh.rana@reflexsolution.com', '8976809817', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P032322', '10/22/2016 - 11:01 PM', 'Ubuntu 64 Biti316GB500GB ', 'Using'),
(72, 'Anubhav Singh', 'XEL-0024', 'anubhav@xeliumtech.com', '7503614686', 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FDKT', '10/24/2016 - 3:58 PM', 'Lenovo Think Pad i5/4GB/180GB SSD', 'Using'),
(73, 'Vinay Tanwar', 'xel-0072', 'vinay@xeliumtech.com', '9873215967', 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FAZB', '10/24/2016 - 4:01 PM', 'Lenovo Think Pad i5/4GB/180GB SSD', 'Using'),
(74, 'Smrit Srivastava', 'xel-0117', 'smriti.srivastava@xeliumtech.com', '9597005762', 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FCXT', '10/24/2016 - 4:01 PM', 'TP T430 i5/4GB/180GB SSD', 'Using'),
(75, 'Nitin Saini', 'XEL-0115', 'nitin.saini@xeliumtech.com', '9555722247', 'Laptops', 'LENOVO ', 'ThinkPad T430', 'PB4EYXN', '10/24/2016 - 4:03 PM', 'TP T430 i5/4GB/180GB SSD', 'Using'),
(76, 'Pawan Kumar Singh', 'xel-0046', 'pawan@xeliumtech.com', '9654382735', 'Laptops', 'LENOVO ', 'ThinkPad T430', 'PB4FBAA', '10/24/2016 - 4:06 PM', 'TP T430 i5/4GB/180GB SSD', 'Using'),
(77, 'Rekha Singh', 'xel-0110', 'rekha.singh@xeliumtech.com', '7838383792', 'Laptops', 'LENOVO ', 'ThinkPad T430', 'PB4EDLE', '10/24/2016 - 4:07 PM', 'Returned on10/27/2016 - 9:14 AM Reason: Laptop handover to Umesh Sir,', 'Returned'),
(78, 'Ripu Daman Rana', 'XEL-0004', 'ripu@xeliumtech.com ', '9716074136', 'Laptops', 'LENOVO ', 'ThinkPad T430', 'PB4FDEW', '10/24/2016 - 4:07 PM', 'TP T430 i5/4GB/180GB SSD', 'Using'),
(79, 'Shubhangi Tiwari', 'xel-0108', 'shubhangi.tiwari@xeliumtech.com', '9718621592', 'Laptops', 'LENOVO ', 'ThinkPad T430', 'PB4FAZF', '10/24/2016 - 4:08 PM', 'TP T430 i5/4GB/180GB SSD', 'Using'),
(80, 'Lalit Chaudhary', 'XEL-0014', 'lalit@xeliumtech.com', '9810815822', 'Laptops', 'LENOVO ', 'ThinkPad T430', 'PB4FDGA', '10/24/2016 - 4:08 PM', 'TP T430 i5/4GB/180GB SSD', 'Using'),
(81, 'Sarita', 'xel-0084', 'sarita@xeliumtech.com', '8527104833', 'Laptops', 'LENOVO ', 'ThinkPad T430', 'PB4FDFW', '10/24/2016 - 4:09 PM', 'TP T430 i5/4GB/180GB SSD', 'Using'),
(82, 'Aman Kumar', 'xel-0130', 'aman.kumar@xeliumtech.com', '9716699335', 'Laptops', 'LENOVO ', 'Think pad X230', 'R9X06M7', '10/24/2016 - 4:09 PM', 'TP T430 i5/8GB/180GB SSD', 'Using'),
(83, 'Praveen Agrawal', 'REF-00154', 'praveen.agrawal@reflexsolution.com', '9540318855', 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FDEY', '10/24/2016 - 4:10 PM', 'ThinkPad T430 i5/16GB/180GB SSD', 'Using'),
(84, 'Anmol Seth', 'REF-00157', 'anmol.seth@reflexsolution.com', '9741481550', 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FDHB', '10/24/2016 - 4:11 PM', 'ThinkPad T430 i5/16GB/180GB SSD', 'Using'),
(85, 'Santosh Dhanraj Raut', 'REF-00155', 'santosh.raut@reflexsolution.com', '9881173291', 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FDHH', '10/24/2016 - 4:12 PM', 'Returned on10/24/2016 - 4:14 PM Reason:  handover to Hamid', 'Returned'),
(86, 'Md Hamid Shaikh', 'REF-00137', 'hamid.shaikh@reflexsolution.com', '9892317288', 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FDHH', '10/24/2016 - 4:15 PM', 'ThinkPad T430 i5/16GB/180GB SSD \r\nreceived from Santosh', 'Using'),
(87, 'A.V.S.Krishna Nalla', 'REF-00171', 'krishna.nalla@reflexsolution.com', '9542291319', 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FDGC', '10/24/2016 - 4:16 PM', 'ThinkPad T430 i5/16GB/180GB SSD', 'Using'),
(88, 'Sakshi Narang', 'REF-00158', 'sakshi.narang@reflexsolution.com', '9711448755', 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FDLC', '10/24/2016 - 4:17 PM', 'ThinkPad T430 i5/16GB/180GB SSD', 'Using'),
(89, 'Md Hamid Shaikh', 'REF-00137', 'hamid.shaikh@reflexsolution.com', '9892317288', 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4EZAD', '10/24/2016 - 4:17 PM', 'ThinkPad T430 i5/16GB/180GB SSD', 'Using'),
(90, 'Raviteja Kukkala', 'REF-00143', 'raviteja.kukkala@reflexsolution.com', '9573916224', 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FBBF', '10/24/2016 - 4:18 PM', 'ThinkPad T430 i5/16GB/180GB SSD', 'Using'),
(91, 'Shailendra Nayak', 'REF-00142', 'shailendra@reflexsolution.com', '9630140209', 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FDKD', '10/24/2016 - 4:19 PM', 'ThinkPad T430 i5/16GB/180GB SSD', 'Using'),
(92, 'Priyanka Gupta', 'REF-00104', 'priyanka.gupta@reflexsolution.com', '8130269877', 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FDFY', '10/24/2016 - 4:19 PM', 'ThinkPad T430 i5/16GB/180GB SSD', 'Using'),
(93, 'Pratyush kumar', 'XEL-0002', 'pratyush@xeliumtech.com', '9899556531', 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PBX35VZ', '10/24/2016 - 4:21 PM', 'ThinkPad T430 i5/16GB/180GB SSD', 'Using'),
(94, 'Yash Duggal', 'XEL-0003', 'yash@xeliumtech.com', '9999497279', 'Laptops', 'Fujitsu ', 'Fujitsu A-514', 'YMP3066516', '10/24/2016 - 4:23 PM', 'i38GB500GB', 'Using'),
(95, 'Kuber Singh Bangari', 'xel-0126', 'kuber.singh@xeliumtech.com', '8510826425', 'Laptops', 'Fujitsu ', 'Fujitsu A-514', 'YMP3066352', '10/24/2016 - 4:27 PM', 'i38GB500GB', 'Using'),
(96, 'Abhishek Shrivastav', 'xel-0091', 'abhishek.shrivastva@xeliumtech.com', '9560721247', 'Laptops', 'Fujitsu ', 'Fujitsu A-514', 'YMP3065801', '10/24/2016 - 4:28 PM', 'i38GB500GB', 'Using'),
(97, 'Pirdeep Kumar', 'xel-0088', 'pirdeep@xeliumtech.com', '7042724130', 'Laptops', 'Fujitsu ', 'Fujitsu A-514', 'YMP3065050', '10/24/2016 - 4:28 PM', 'i38GB500GB', 'Using'),
(98, 'Anupama Shree', 'xel-0097', 'anupama.shree@xeliumtech.com', '9891494107', 'Laptops', 'Dell', 'Dell', '254HH52', '10/24/2016 - 4:28 PM', '', 'Using'),
(99, 'Pratyush kumar', 'XEL-0002', 'pratyush@xeliumtech.com', '9899556531', 'Laptops', 'ASUS', 'ASUS - X553MA', 'ECN0CV714930013', '10/24/2016 - 4:30 PM', '', 'Using'),
(100, 'Om Prakash Saini', 'XEL-0005', 'op@xeliumtech.com', '8285865851', 'Laptops', 'ASUS', 'ASUS - X553MA', 'FN0CV113579021', '10/24/2016 - 4:31 PM', '', 'Using'),
(101, 'Rekha Singh', 'xel-0110', 'rekha.singh@xeliumtech.com', '7838383792', 'Mouse', 'HP', 'HP-A3N', '7CH6250HMV', '10/25/2016 - 1:16 PM', 'issued new HP mouse to Rekha', 'Using'),
(102, 'Ayushi Gupta', 'Xel-0136', 'ayushi.gupta@xeliumtech.com', '', 'Laptops', 'Fujitsu', 'FUJITSU-A514', 'YM3P065214', '10/25/2016 - 5:41 PM', 'Ubuntu 64 Bit/8GB/1TB HDD', 'Using'),
(103, 'Ayushi Gupta', 'Xel-0136', 'ayushi.gupta@xeliumtech.com', '', 'Mouse', 'HP', 'A3N', '7CH6250HMG', '10/25/2016 - 6:05 PM', 'New Mouse Issued', 'Using'),
(104, 'Tarun Kumar Sorari', 'Xel-0132', 'tarun.sorari@xeliumtech.com', '9716407588', 'Mouse', 'Dell', 'MS111', 'CN-0X9DCG-71616-54S-04MM', '10/26/2016 - 12:00 PM', 'Dell USB Mouse-04MM', 'Using'),
(105, 'Jitendra Kumar Mishra', 'XEL-0026', 'jitendra@xeliumtech.com', '8130070486', 'Laptops', 'LENOVO ', 'Think pad T420 ', 'R8CP8RH', '10/26/2016 - 2:00 PM', 'Windows 72GB180GB', 'Using'),
(106, 'Umesh Chandra', 'Xel-0128', 'umesh.chandra@xeliumtech.com', '9015761438', 'Laptops', 'LENOVO ', 'ThinkPad T430', 'PB4EDLE', '10/27/2016 - 9:16 AM', 'Windows74GB180GB | Received From rekha', 'Using'),
(107, 'Romit Chhabra', 'REF-00152', 'romit.chhabra@reflexsolution.com', '7531962963', 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FDHW', '10/27/2016 - 1:06 PM', 'ThinkpadT43016GB180GBubuntu', 'Using'),
(108, 'Suresh Gaddam', 'REF-00176', 'suresh.gaddam@reflexsolution.com', '9962922614', 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P016263', '10/27/2016 - 2:23 PM', 'received from sumit ranjan', 'Using');

-- --------------------------------------------------------

--
-- Table structure for table `itsupport`
--

CREATE TABLE IF NOT EXISTS `itsupport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `sysid` varchar(100) NOT NULL,
  `probs` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL,
  `priority` varchar(255) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `solutions` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `itsupport`
--

INSERT INTO `itsupport` (`id`, `date`, `name`, `email`, `userid`, `sysid`, `probs`, `status`, `priority`, `subject`, `solutions`) VALUES
(1, '10/23/2016 - 5:28 PM', 'Sushant Sharma', 'sushant.sharma@reflexsolution.com', 'REF-00105', 'Laptops(YM3P015944)', 'My laptop is cracking... ', 'Closed By Harish Bhatt on 11/02/2016 - 2:05 PM', 'High', 'Other', ' we have checked ... your laptop will be fiexed by Fujtsu..   helo');

-- --------------------------------------------------------

--
-- Table structure for table `it_assets`
--

CREATE TABLE IF NOT EXISTS `it_assets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model_no` varchar(50) NOT NULL,
  `serial_no` varchar(50) NOT NULL,
  `purchase_date` varchar(50) NOT NULL,
  `other_info` varchar(500) NOT NULL,
  `asign_status` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `serial_no` (`serial_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=114 ;

--
-- Dumping data for table `it_assets`
--

INSERT INTO `it_assets` (`id`, `category`, `brand`, `model_no`, `serial_no`, `purchase_date`, `other_info`, `asign_status`) VALUES
(1, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P018668', '', 'ubuntu 64 bit16 GBAnish Ranjan', 'Asigned'),
(2, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P018337', '', 'Hardware Configration:\r\n1. RAM 16GB\r\n2. HDD 500GB\r\n3. adaptor Serial- 1231132564654\r\nwindows key 2132116489463131\r\nuseed by Priyanka\r\n', 'Available'),
(3, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P015944', '', 'ubuntu 64 bit16 GBSushant Sharma', 'Asigned'),
(4, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P016263', '', 'ubuntu 64 bit16 GBSumit Rajan', 'Asigned'),
(5, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P018463', '', 'ubuntu 64 bit16 GBSumit Kakkar', 'Asigned'),
(6, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P018575', '', 'ubuntu 64 bit16 GBPrasoon Goswami', 'Asigned'),
(7, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P026273', '', 'ubuntu 64 bit16 GBIsha Mehta', 'Asigned'),
(8, 'Laptops', 'ASUS', 'ASUS-X553M', 'ASUS-X553M', '', 'window 104  GBNaga Bhavani', 'Asigned'),
(9, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P018442', '', 'ubuntu 64 bit16 GBRama Sikarwar', 'Asigned'),
(10, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P026219', '', 'ubuntu 64 bit16 GBSatish Vakkapatla', 'Asigned'),
(11, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3PO18535', '', 'ubuntu 64 bit16 GBAnjali Bansal', 'Asigned'),
(12, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P018340', '', 'ubuntu 64 bit16 GBAbhishek Vashisht', 'Asigned'),
(13, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3032615', '', 'ubuntu 64 bit16 GBRavi Mittal', 'Asigned'),
(14, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P025920', '', 'ubuntu 64 bit16 GBRakesh Rana', 'Asigned'),
(15, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P033007', '', 'ubuntu 64 bit16 GBMithlesh Kumar', 'Asigned'),
(16, 'Laptops', 'Lenovo', ' ThinkPad T430', 'IBM Machine', '', 'ubuntu 64 bit16 GBAshish Jagga', 'Available'),
(17, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3025178', '', 'ubuntu 64 bit16 GBNishant Jain', 'Asigned'),
(18, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3PO26112', '', 'ubuntu 64 bit16 GBKashish grover', 'Asigned'),
(19, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3026931', '', 'ubuntu 64 bit16 GBMukul garg', 'Asigned'),
(20, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3017390', '', 'ubuntu 64 bit16 GBAnoop rana', 'Asigned'),
(21, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3032616', '', 'ubuntu 64 bit16 GBArpit saxena', 'Asigned'),
(22, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3033491', '', 'window 7 8 GBJuhi Bansal', 'Asigned'),
(23, 'Laptops', 'Dell', 'Dell ', '8S4HH52', '', 'Win74 GBJuhi Bansal', 'Asigned'),
(24, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P064237', '', 'ubuntu 64 bit8 GBSumit sharma', 'Asigned'),
(25, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3032952', '', 'ubuntu 64 bit16 GBPrateek saxena', 'Asigned'),
(26, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P064979', '', 'ubuntu 64 bit16 GBVishal Matapurkar', 'Asigned'),
(27, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P066812', '', 'ubuntu 64 bit16 GBMugdha Matapurkar', 'Asigned'),
(28, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P065128', '', 'ubuntu 64 bit16 GBRahul Bokolia', 'Asigned'),
(29, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P018426', '', 'ubuntu 64 bit16 GBKishore Nammi', 'Asigned'),
(30, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P066117', '', 'ubuntu 64 bit16 GBMd Hamid Shaikh', 'Asigned'),
(31, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P065396', '', 'ubuntu 64 bit16 GBMilind Bansal', 'Asigned'),
(32, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3033286', '', 'ubuntu 64 bit8 GBAnubhav Singh', 'Asigned'),
(33, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P033549', '', 'ubuntu 64 bit8 GBShailendra Nayak', 'Asigned'),
(34, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3064968', '', 'ubuntu 64 bit16 GBSaurabh Agnihotri', 'Asigned'),
(35, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3067052', '', 'ubuntu 64 bit16 GBSatish Kumar Jha', 'Asigned'),
(36, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3O64483', '', 'ubuntu 64 bit16 GBPratap Singh', 'Asigned'),
(37, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3032994', '', 'ubuntu 64 bit16 GBNishant Jain Khatouli', 'Asigned'),
(38, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3PO26036', '', 'ubuntu 64 bit16 GBRishabh Gupta', 'Asigned'),
(39, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P066351', '', 'ubuntu 64 bit16 GBSridhar Avula', 'Asigned'),
(40, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3066395', '', 'ubuntu 64 bit16 GBAmit Anand', 'Asigned'),
(41, 'Laptops', 'Dell', 'Dell ', 'CWPGH52', '', 'window 7 64 bit4 GBVipul Sharma', 'Asigned'),
(42, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P066938', '', 'ubuntu 64 bit16 GBRomit Chhabra', 'Asigned'),
(43, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YMP3099831', '', 'ubuntu 64 bit16 GBPraveen Agrawal', 'Asigned'),
(44, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3PO66911', '', 'ubuntu 64 bit16 GBsontosh', 'Asigned'),
(45, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3PO66909', '', 'ubuntu 64 bit8 GBkomal', 'Asigned'),
(46, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P066400', '', 'ubuntu 64 bit16 GBSakshi Narang', 'Asigned'),
(47, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P065066', '', 'ubuntu 64 bit16 GBVarun Bansal', 'Asigned'),
(48, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P066536', '', 'ubuntu 64 bit16 GBShailendra Nayak', 'Asigned'),
(49, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P026083', '', 'ubuntu 64 bit16 GBHemant Kirar', 'Asigned'),
(50, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P014230', '', 'ubuntu 64 bit16 GBAshwani ', 'Asigned'),
(51, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P065209', '', 'ubuntu 64 bit16 GBSumit Ranjan', 'Asigned'),
(52, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P066781', '', 'ubuntu 64 bit16 GBAditya mittal', 'Asigned'),
(53, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P064413', '', 'ubuntu 64 bit16 GBSurya Reflex', 'Asigned'),
(54, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P062560', '', 'ubuntu 64 bit16 GBAmulya Kumar', 'Asigned'),
(55, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P066511', '', 'ubuntu 64 bit16 GBHimanshu', 'Asigned'),
(56, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P066512', '', 'ubuntu 64 bit16 GBSravan Kumar Reddy', 'Asigned'),
(57, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P033472', '', 'Windwos 716 GBReflex Testing Team', 'Asigned'),
(58, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P065045', '', 'ubuntu 64 bit16 GBAshok Mareedu', 'Asigned'),
(59, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P066756', '', 'ubuntu 64 bit16 GBNishant jain', 'Asigned'),
(60, 'Laptops', 'Fujitsu', ' Fujitsu-A555', 'YM3M093383', '', 'ubuntu 64 bit8 GBChintala Venkatesh', 'Asigned'),
(61, 'Laptops', 'Fujitsu', ' Fujitsu-A555', 'YM3M093564', '', 'Ubuntu 64 bit8 GBNeha Sharma', 'Asigned'),
(62, 'Laptops', 'Fujitsu', ' Fujitsu-A555', 'YM3M093870', '', 'Ubuntu 64 bit16 GBHemant Kirar', 'Asigned'),
(63, 'Laptops', 'Fujitsu', ' Fujitsu-A555', 'YM3MO93918', '', 'ubuntu 64 bit1 6GBAditya mittal', 'Asigned'),
(64, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P066340', '', 'ubuntu 64 bit16 GBRahul Bokolia', 'Asigned'),
(65, 'Laptops', 'Fujitsu', ' Fujitsu-A514', 'YM3P032322', '', 'ubuntu 64 bit16 GBRakesh rana', 'Asigned'),
(66, 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FDKT', '', '83GP8-JRYMW-6GWCG-DJV8G-6X2344GBAnubhav', 'Asigned'),
(67, 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FAZB', '', '24yqk-9jpvk-4ry4g-h7xp7-7q2fj4GBVinay', 'Asigned'),
(68, 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FCXT', '', 'H7T9T-M7Q67-FQ2J9-TFHV7-726PG4GBsmriti', 'Asigned'),
(69, 'Laptops', 'LENOVO ', 'ThinkPad T430', 'PB4EYXN', '', 'hrhrp-c7xff-4V3Q6-WTVRF-CTHR34GBNitin (ui)', 'Asigned'),
(70, 'Laptops', 'LENOVO ', 'ThinkPad T430', 'PB4FBAA', '', 'D9CWR-BCBW9-VQMKY-3V8QH-PTY9H4GBPawan', 'Asigned'),
(71, 'Laptops', 'LENOVO ', 'ThinkPad T430', 'PB4EDLE', '', '9H3KG-FV6GY-47DPJ-PTXHD-RRCJW4GBRekha(PHP)', 'Asigned'),
(72, 'Laptops', 'LENOVO ', 'ThinkPad T430', 'PB4FDEW', '', 'Windows 10 Pro\r\nVK7JG-NPHTM-C97JM-9MPGT-3V66T4 GbRipu', 'Asigned'),
(73, 'Laptops', 'LENOVO ', 'ThinkPad T430', 'PB4FAZF', '', 'C2B49-MPQJM-3XWWB-WXJB8-4F7TP4GBSUBHANGI -HR', 'Asigned'),
(74, 'Laptops', 'LENOVO ', 'ThinkPad T430', 'PB4FDGA', '', 'W38TK-T3RWG-R6XV7-4T3VH-H3H9J4 GBLALIT', 'Asigned'),
(75, 'Laptops', 'LENOVO ', 'ThinkPad T430', 'PB4FDFW', '', '8397T-VVW2B-DX3DJ-W79X8-JR79F4 GBSARITA - HR', 'Asigned'),
(76, 'Laptops', 'LENOVO ', 'Think pad X230', 'R9X06M7', '', '8 GBAMAN (UI)', 'Asigned'),
(77, 'Laptops', 'LENOVO ', 'Think pad X230', 'R9X5EPL', '', '8 GB', 'Available'),
(78, 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FDEY', '', '86rxw-vhxy9-vbcrp-y6q3r-9dfw616GBPraveen Agrawal', 'Asigned'),
(79, 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FDHB', '', '4GVRX-D2WKX-Y3TFH-D7W9Y-Y6M8T16 GBAmol Seti', 'Asigned'),
(80, 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FDHH', '', 'QXH4H-Y9CF2-PX97P-HR396-K4XKP16 GbSantosh', 'Asigned'),
(81, 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FDHW', '', '16 GbRomit Chhabra', 'Asigned'),
(82, 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FDGC', '', '8XF9X-3V662-8T7T9-8RFJ6-7Q7D416 GbKrishna', 'Asigned'),
(83, 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FDLC', '', '9BFGJ-6TCR9-BTDCB-RKVQ7-H6QQR16 GbSakhshi Narang', 'Asigned'),
(84, 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4EZAD', '', 'VWMT8-DYXFW-TJMY6-X7R9T-TRWW216 GbHamid Shaikh', 'Asigned'),
(85, 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FBBF', '', '2MRD8-QMJ4J-GTDYP-FW6QH-7TGMF16 GbK. Ravi Teja', 'Asigned'),
(86, 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FDKD', '', 'BQj3h-cxm88pj337-2k7gh-wkb3j16 GBShailendra', 'Asigned'),
(87, 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FDFY', '', 'CM3GP-WTBDM-37YDV-6FR6G-FBQ9916GBPriyanka Gupta', 'Asigned'),
(88, 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4EZGC', '', 'PR974-2CHCP-84WWK-M24K6-4CHP616GB', 'Available'),
(89, 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FAZG', '', 'yg26W-KMK73-DCMR4-T8R87-QFWFF16GB', 'Available'),
(90, 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PB4FDGM', '', '83877-2tqwg-pm88-3xh9p-hggb816GB', 'Available'),
(91, 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PBH97GF', '', 'P4YJB-96MJG-BTFYB-YWKTM-DV9GB16GB', 'Available'),
(92, 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PBRELFM', '', 'KDQYG-6WDFP-G47GQ-997MP-7JJ4F16GB', 'Available'),
(93, 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PBH97EV', '', '9HY8Q-YQ8VV-D3KMK-743M2-YBVTK16GB', 'Available'),
(94, 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PBX35YD', '', 'J2WBX-TKJ4F-VF8MM-7BGJF-VDKQ816GB', 'Available'),
(95, 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PBX36BC', '', 'Q2TK4-GHD3M-WTWBD-7VYFB-HV49J16GB', 'Available'),
(96, 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PBX35VZ', '', 'KCV49-T9KCX-J4HCK-MTYTY-KRHJQ16GBPratyush Mishra', 'Asigned'),
(97, 'Laptops', 'LENOVO ', 'LENOVO ThinkPad T430', 'PBRECEY', '', '6PCBX-DTBV6-RY9K6-JGC4Q-2KBP16GB', 'Available'),
(98, 'Laptops', 'LENOVO ', 'Lenovo Think pad T430', 'PBENPMX', '', 'Return by sakshi (Ubuntu)8GB', 'Available'),
(99, 'Laptops', 'ASUS', 'ASUS - X553MA', 'ECN0CV535802524', '', 'WindwosMeeting', 'Available'),
(100, 'Laptops', 'ASUS', 'ASUS - X553MA', 'ECN0CV714930013', '', 'WindowsPratyush Kumar', 'Asigned'),
(101, 'Laptops', 'ASUS', 'ASUS - X553MA', 'FN0CV113579021', '', 'WindowsOm Prakash Saini', 'Asigned'),
(102, 'Laptops', 'Fujitsu ', 'Fujitsu A-514', 'YMP3066516', '', 'ubuntu 64 bitl 8 GB500i3 ', 'Asigned'),
(103, 'Laptops', 'Fujitsu ', 'Fujitsu A-514', 'YMP3066352', '', 'UbuntuKuber', 'Asigned'),
(104, 'Laptops', 'Fujitsu ', 'Fujitsu A-514', 'YMP3065801', '', 'UbuntuAbhishek', 'Asigned'),
(105, 'Laptops', 'Fujitsu ', 'Fujitsu A-514', 'YMP3065050', '', 'UbuntuPirdeep Saini', 'Asigned'),
(106, 'Laptops', 'Dell', 'Dell', '254HH52', '', 'windowsAnupma shree', 'Asigned'),
(108, 'Laptops', 'LENOVO ', 'Think pad T420 ', 'R8CP8RH', '', 'Windows 72GBJitendra (BD)', 'Asigned'),
(109, 'Mouse', 'HP', 'HP-A3N', '7CH6250HMV', '10/25/2016', 'New Mouse Added For Rekha', 'Asigned'),
(110, 'Laptops', 'Fujitsu', 'FUJITSU-A514', 'YM3P065214', '10/25/2016', 'I38GB1TB HDD\nScreen Replaced From YM3P018337', 'Asigned'),
(111, 'Mouse', 'HP', 'A3N', '7CH6250HMG', '10/25/2016', 'HP MOuse', 'Asigned'),
(112, 'Mouse', 'Dell', 'MS111', 'CN-0X9DCG-71616-54S-04MM', '10/26/2016', 'Dell Mouse MS111-04MM', 'Asigned');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `userpic` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `userid` (`userid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=107 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `dob`, `userid`, `email`, `mobile`, `password`, `usertype`, `userpic`) VALUES
(1, 'Pratyush kumar', '', 'XEL-0002', 'pratyush@xeliumtech.com', '9899556531', 'e10adc3949ba59abbe56e057f20f883e', 'Designing', ''),
(2, 'Yash Duggal', '', 'XEL-0003', 'yash@xeliumtech.com', '9999497279', 'e10adc3949ba59abbe56e057f20f883e', 'Android', ''),
(3, 'Ripu Daman Rana', '', 'XEL-0004', 'ripu@xeliumtech.com ', '9716074136', 'e10adc3949ba59abbe56e057f20f883e', 'Designing', ''),
(4, 'Om Prakash Saini', '', 'XEL-0005', 'op@xeliumtech.com', '8285865851', 'e10adc3949ba59abbe56e057f20f883e', 'Server', ''),
(5, 'Lalit Chaudhary', '', 'XEL-0014', 'lalit@xeliumtech.com', '9810815822', 'e10adc3949ba59abbe56e057f20f883e', 'Server', ''),
(6, 'Anubhav Singh', '', 'XEL-0024', 'anubhav@xeliumtech.com', '7503614686', 'e10adc3949ba59abbe56e057f20f883e', 'Sales', ''),
(7, 'Jitendra Kumar Mishra', '', 'XEL-0026', 'jitendra@xeliumtech.com', '8130070486', 'e10adc3949ba59abbe56e057f20f883e', 'Sales', ''),
(8, 'Pawan Kumar Singh', '', 'xel-0046', 'pawan@xeliumtech.com', '9654382735', 'e10adc3949ba59abbe56e057f20f883e', 'Quality Checking', ''),
(9, 'Lokesh kumar', '', 'xel-0055', 'lokesh@xeliumtech.com', '9643895408', 'e10adc3949ba59abbe56e057f20f883e', 'IOS', ''),
(10, 'Chandan Singh Bisht', '', 'xel-0063', 'chandanbisht@xeliumtech.com', '9716116787', 'e10adc3949ba59abbe56e057f20f883e', 'Server', 'assets/images/profile/xel-0063.jpg'),
(11, 'Nitin Prakash', '', 'xel-0068', 'nitinprakash@xeliumtech.com', '8285642034', 'e10adc3949ba59abbe56e057f20f883e', 'IOS', ''),
(12, 'Nuruddin Ansari', '', 'xel-0070', 'nuruddin@xeliumtech.com', '9953537714', 'e10adc3949ba59abbe56e057f20f883e', 'Designing', ''),
(13, 'Vinay Tanwar', '', 'xel-0072', 'vinay@xeliumtech.com', '9873215967', 'e10adc3949ba59abbe56e057f20f883e', 'Quality Checking', ''),
(14, 'Narendra Singh Bisht', '', 'xel-0073', 'narendra@xeliumtech.com', '8802493709', 'e10adc3949ba59abbe56e057f20f883e', 'Server', ''),
(15, 'Ujjwal Kumar Singh', '', 'xel-0078', 'ujjwal@xeliumtech.com', '9990678466', 'e10adc3949ba59abbe56e057f20f883e', 'IOS', ''),
(16, 'Sarita', '', 'xel-0084', 'sarita@xeliumtech.com', '8527104833', 'e10adc3949ba59abbe56e057f20f883e', 'HR', 'assets/images/profile/xel-0084.jpg'),
(17, 'Harish Bhatt', '', 'xel-0085', 'Harish@xeliumtech.com', '7042929413', 'e10adc3949ba59abbe56e057f20f883e', 'Administrator', 'assets/images/profile/xel-0085.png'),
(18, 'Pirdeep Kumar', '', 'xel-0088', 'pirdeep@xeliumtech.com', '7042724130', 'e10adc3949ba59abbe56e057f20f883e', 'Android', ''),
(19, 'Abhishek Shrivastav', '', 'xel-0091', 'abhishek.shrivastva@xeliumtech.com', '9560721247', 'e10adc3949ba59abbe56e057f20f883e', 'Android', ''),
(20, 'Nilesh Sahu', '', 'xel-0092', 'nilesh@xeliumtech.com', '9891962726', 'e10adc3949ba59abbe56e057f20f883e', 'Server', ''),
(21, 'Reetu Narang', '', 'xel-0093', 'reetu@xeliumtech.com', '8800104247', 'e10adc3949ba59abbe56e057f20f883e', 'HR', ''),
(22, 'Shashank Goyal', '', 'xel-0095', 'shashank.goyal@xeliumtech.com ', '9953300954', 'e10adc3949ba59abbe56e057f20f883e', 'IOS', ''),
(23, 'Anupama Shree', '', 'xel-0097', 'anupama.shree@xeliumtech.com', '9891494107', 'e10adc3949ba59abbe56e057f20f883e', 'HR', ''),
(24, 'Hari Prasad', '', 'xel-0099', 'hari.prasad@xeliumtech.com', '7503721297', 'd29445cc11b941b8eb67ccbb2b5870b9', 'Administrator', 'assets/images/profile/xel-0099.jpg'),
(25, 'Shubhangi Tiwari', '', 'xel-0108', 'shubhangi.tiwari@xeliumtech.com', '9718621592', 'e10adc3949ba59abbe56e057f20f883e', 'HR', ''),
(26, 'Rekha Singh', '', 'xel-0110', 'rekha.singh@xeliumtech.com', '7838383792', 'e10adc3949ba59abbe56e057f20f883e', 'Server', ''),
(27, 'Manisha Kumari', '', 'xel-0112', 'manisha.kumari@xeliumtech.com', '9310667123', 'e10adc3949ba59abbe56e057f20f883e', 'Android', ''),
(28, 'Ravinder Dahiya', '', 'xel-0113', 'ravinder.dahiya@xeliumtech.com', '9868284822', 'e10adc3949ba59abbe56e057f20f883e', 'Server', ''),
(29, 'Nitin Saini', '', 'XEL-0115', 'nitin.saini@xeliumtech.com', '9555722247', 'e10adc3949ba59abbe56e057f20f883e', 'Designing', ''),
(30, 'Ashwini Kumar Singh', '', 'xel-0116', 'ashwini.kumar@xeliumtech.com', '8527745606', 'e10adc3949ba59abbe56e057f20f883e', 'Android', ''),
(31, 'Smrit Srivastava', '', 'xel-0117', 'smriti.srivastava@xeliumtech.com', '9597005762', 'e10adc3949ba59abbe56e057f20f883e', 'Quality Checking', ''),
(32, 'Ashish Kumar Sharma', '', 'xel-0118', 'ashish.sharma@xeliumtech.com', '9654551658', 'e10adc3949ba59abbe56e057f20f883e', 'Android', ''),
(33, 'Vipin Arora', '', 'xel-0124', 'vipin.arora@xeliumtech.com', '9015064136', 'e10adc3949ba59abbe56e057f20f883e', 'Server', ''),
(34, 'Puneet Grover', '', 'xel-0125', 'puneet.grover@xeliumtech.com', '9034064200', 'e10adc3949ba59abbe56e057f20f883e', 'Android', ''),
(35, 'Kuber Singh Bangari', '', 'xel-0126', 'kuber.singh@xeliumtech.com', '8510826425', 'e10adc3949ba59abbe56e057f20f883e', 'Android', ''),
(36, 'Ayan Das', '', 'xel-0127', 'ayan.das@xeliumtech.com', '9775490253', 'e10adc3949ba59abbe56e057f20f883e', 'Sales', ''),
(37, 'Umesh Chandra', '', 'Xel-0128', 'umesh.chandra@xeliumtech.com', '9015761438', 'e10adc3949ba59abbe56e057f20f883e', 'Server', ''),
(38, 'Manohar Kumar Maurya', '', 'xel-0129', 'manohar.maurya@xeliumtech.com', '9971089668', 'e10adc3949ba59abbe56e057f20f883e', 'Sales', ''),
(39, 'Aman Kumar', '', 'xel-0130', 'aman.kumar@xeliumtech.com', '9716699335', 'e10adc3949ba59abbe56e057f20f883e', 'Designing', ''),
(40, 'Tarun Kumar Sorari', '', 'Xel-0132', 'tarun.sorari@xeliumtech.com', '9716407588', 'e10adc3949ba59abbe56e057f20f883e', 'Quality Checking', ''),
(41, 'Swati Aggarwal', '', 'Xel-0133', 'swati.aggarwal@xeliumteh.com', '7895219220', 'e10adc3949ba59abbe56e057f20f883e', 'Server', ''),
(42, 'Anish Ranjan', '', 'REF-00101', 'anish@reflexsolution.com', '9021480001', 'e10adc3949ba59abbe56e057f20f883e', 'Software Test Engineer', ''),
(43, 'Priyanka Gupta', '', 'REF-00104', 'priyanka.gupta@reflexsolution.com', '8130269877', 'e10adc3949ba59abbe56e057f20f883e', 'Java Development Consultant ', ''),
(44, 'Sushant Sharma', '', 'REF-00105', 'sushant.sharma@reflexsolution.com', '9468183018', 'e10adc3949ba59abbe56e057f20f883e', 'Software Test Engineer', ''),
(45, 'Sumit Rajan', '', 'REF-00106', 'sumit@reflelsolution.com', '7042989359', 'e10adc3949ba59abbe56e057f20f883e', 'Sr. Software Engineer', ''),
(46, 'Sumit Kakkar', '', 'REF-00108', 'sumit.kakkar@reflexsolution.com', '9810108555', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(47, 'Prasoon Goswami', '', 'REF-00109', 'prasoon.goswami@reflexsolution.com', '9953497604', 'e10adc3949ba59abbe56e057f20f883e', ' Software Engineer', ''),
(48, 'Isha Mehta', '', 'REF-00110', 'isha.mehta@reflexsolution.com', '9871025537', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(49, 'Naga Bhavani', '', 'REF-00111', 'nagabhavani.pasupulati@reflexsolution.com', '8447799107', 'e10adc3949ba59abbe56e057f20f883e', 'Sr. Software Engineer', ''),
(50, 'Rama Sikarwar', '', 'REF-00112', 'rama.sikarwar@reflexsolution.com', '8856899894', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(51, 'Satish Vakkapatla', '', 'REF-00113', 'satish.vakkapatla@reflexsolution.com', '9573265000', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(52, 'Anjali Bansal', '', 'REF-00115', 'anjali.bansal@reflexsolution.com', '9555091927', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(53, 'Abhishek Vashisht', '', 'REF-00116', 'abhishek.vashisht@reflexsolution.com', '9654915213', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(54, 'Ravi Mittal', '', 'REF-00117', 'ravi.mittal@reflexsolution.com', '9717738111', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(55, 'Rakesh Rana', '', 'REF-00118', 'rakesh.rana@reflexsolution.com', '8976809817', 'e10adc3949ba59abbe56e057f20f883e', 'Sr. Software Engineer', ''),
(56, 'Mithlesh Kumar', '', 'REF-00119', 'mithlesh.kumar@reflexsolution.com', '9910590628', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(57, 'Ashish Jagga', '', 'REF-00121', 'ashish.jagga@reflexsolution.com', '9740425620', 'e10adc3949ba59abbe56e057f20f883e', 'Sr. Software Engineer', ''),
(58, 'Nishant Jain', '', 'REF-00124', 'nishant.jain@reflexsolution.com', '9971586851', 'e10adc3949ba59abbe56e057f20f883e', 'Sr. Software Engineer', ''),
(59, 'Kashish grover', '', 'REF-00125', 'kashish.grover@reflexsolution.com', '9818593222', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(60, 'Mukul garg', '', 'REF-00126', 'mukul.garg@reflexsolution.com', '9896244729', 'e10adc3949ba59abbe56e057f20f883e', 'Java Development Consultant ', ''),
(61, 'Anoop Kumar', '', 'REF-00127', 'anoop.rana@reflexsolution.com', '9990881381', 'e10adc3949ba59abbe56e057f20f883e', 'Sr. Software Engineer', ''),
(62, 'Arpit saxena', '', 'REF-00128', 'arpit.saxena@reflexsolution.com', '8192824577', 'e10adc3949ba59abbe56e057f20f883e', 'Java Development Consultant ', ''),
(63, 'Juhi Bansal', '', 'REF-00129', 'juhi.bansal@reflexsolution.com', '8588835187', 'e10adc3949ba59abbe56e057f20f883e', 'Manager (Finance and operations)', ''),
(64, 'Sumit sharma', '', 'REF-00130', 'sumit.sharma@reflexsolution.com', '8130999087', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(65, 'Prateek saxena', '', 'REF-00131', 'prateek.saxena@reflexsolution.com', '9650437887', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(66, 'Vishal Matapurkar', '', 'REF-00132', 'vishal.matapurkar@reflexsolution.com', '9902247838', 'e10adc3949ba59abbe56e057f20f883e', 'Vice president', ''),
(67, 'Mugdha Matapurkar', '', 'REF-00133', 'mugdha.matapurkar@reflexsolution.com', '9741168022', 'e10adc3949ba59abbe56e057f20f883e', 'Project Manager', ''),
(68, 'Rahul Bokolia', '', 'REF-00134', 'rahul.bokolia@reflexsolution.com', '9654356502', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(69, 'Kishore Nammi', '', 'REF-00135', 'kishore.nammi@reflexsolution.com', '9573297192', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(70, 'Md Hamid Shaikh', '', 'REF-00137', 'hamid.shaikh@reflexsolution.com', '9892317288', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(71, 'Milind Bansal', '', 'REF-00138', 'milind.bansal@reflexsolution.com', '8171100856', 'e10adc3949ba59abbe56e057f20f883e', 'Graduate engineer trainee', ''),
(72, 'Anubhav Singh', '', 'REF-00140', 'anubhav.singh@reflexsolution.com', '8373906403', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer ', ''),
(73, 'Shailendra Nayak', '', 'REF-00142', 'shailendra@reflexsolution.com', '9630140209', 'e10adc3949ba59abbe56e057f20f883e', 'Sr.software QA engineer', ''),
(74, 'Raviteja Kukkala', '', 'REF-00143', 'raviteja.kukkala@reflexsolution.com', '9573916224', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(75, 'Saurabh Agnihotri', '', 'REF-00144', 'saurabh.agnihotri@reflexsolution.com', '8882955077', 'e10adc3949ba59abbe56e057f20f883e', 'Graduate engineer trainee', ''),
(76, 'Satish Kumar Jha', '', 'REF-00145', 'satish.jha@reflexsolution.com', '9560128291', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(77, 'Pratap Singh', '', 'REF-00146', 'pratap.singh@reflexsolution.com', '9411865035', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(78, 'Rishabh Gupta', '', 'REF-00148', 'rishabh.gupta@reflexsolution.com', '7065903807', 'e10adc3949ba59abbe56e057f20f883e', 'Trainee', ''),
(79, 'Sridhar Avula', '', 'REF-00149', 'sridhar.avula@reflexsolution.com', '8744909815', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(80, 'Amit Anand', '', 'REF-00150', 'amit.anand@reflexsolution.com', '8800582194', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(81, 'Vipul Sharma', '', 'REF-00151', 'vipul.sharma@reflexsolution.com', '9717495619', 'e10adc3949ba59abbe56e057f20f883e', 'Sr. Manager', ''),
(82, 'Romit Chhabra', '', 'REF-00152', 'romit.chhabra@reflexsolution.com', '7531962963', 'e10adc3949ba59abbe56e057f20f883e', 'Senior software engineer', ''),
(83, 'Hemant Kirar', '', 'REF-00153', 'hemant.kirar@reflexsolution.com', '7303808101', 'e10adc3949ba59abbe56e057f20f883e', 'Senior software engineer', ''),
(84, 'Praveen Agrawal', '', 'REF-00154', 'praveen.agrawal@reflexsolution.com', '9540318855', 'e10adc3949ba59abbe56e057f20f883e', 'Sr.software engineer', ''),
(85, 'Santosh Dhanraj Raut', '', 'REF-00155', 'santosh.raut@reflexsolution.com', '9881173291', 'e10adc3949ba59abbe56e057f20f883e', 'Trainee', ''),
(86, 'Komal Goel', '', 'REF-00156', 'komal.goel@reflexsolution.com', '7830335842', 'e10adc3949ba59abbe56e057f20f883e', 'Trainee', ''),
(87, 'Anmol Seth', '', 'REF-00157', 'anmol.seth@reflexsolution.com', '9741481550', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(88, 'Sakshi Narang', '', 'REF-00158', 'sakshi.narang@reflexsolution.com', '9711448755', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(89, 'Varun Kumar Bansal', '', 'REF-00159', 'varun.bansal@reflexsolution.com', '8375052450', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(90, 'Vikram Salwan', '', 'REF-00165', 'vikram@reflexsolution.com', '987654321', 'e10adc3949ba59abbe56e057f20f883e', 'General Manager', ''),
(91, 'Pankaj Gupta', '', 'REF-00001', 'pankaj.gupta@reflexsolution.com', '9972029927', 'e10adc3949ba59abbe56e057f20f883e', 'CEO', ''),
(92, 'Amulya Kumar Sahu', '', 'REF-00161', 'amulya.sahu@reflexsolution.com', '9650441440', 'e10adc3949ba59abbe56e057f20f883e', 'Senior software engineer', ''),
(93, 'Akhil Gupta', '', 'REF-00162', 'akhil.gupta@reflexsolution.com', '8375032629', 'e10adc3949ba59abbe56e057f20f883e', 'Sr. Analyst', ''),
(94, 'Aditya Mittal', '', 'REF-00163', 'aditya.mittal@reflexsolution.com', '9015245658', 'e10adc3949ba59abbe56e057f20f883e', 'Senior software engineer', ''),
(95, 'K. Sravan Kumar Reddy', '', 'REF-00166', 'sravan.reddy@reflexsolution.com', '9642288630', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(96, 'Nishant Jain Khatouli', '', 'REF-00167', 'nishant@reflexsolution.com', '8439143527', 'e10adc3949ba59abbe56e057f20f883e', 'Jr. Software Engineer', ''),
(97, 'Surya Prakash Yadav', '', 'REF-00168', 'surya.yadav@reflexsolution.com', '7385766176', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(98, 'Ashok Mareedu', '', 'REF-00169', 'ashok.mareedu@reflexsolution.com', '9052874459', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(99, 'Chintala Venkatesh', '', 'REF-00170', 'chintala.venkatesh@reflexsolution.com', '9742676701', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(100, 'A.V.S.Krishna Nalla', '', 'REF-00171', 'krishna.nalla@reflexsolution.com', '9542291319', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(101, 'Neha Sharma', '', 'REF-00172', 'neha.sharma@reflexsolution.com', '9953193775', 'e10adc3949ba59abbe56e057f20f883e', 'Senior software engineer', ''),
(102, 'Himanshu Bhati', '', 'REF-00175', 'himanshu.bhati@reflexsolution.com', '9711985059', 'e10adc3949ba59abbe56e057f20f883e', 'Sr. System Engineer ', ''),
(103, 'Suresh Gaddam', '', 'REF-00176', 'suresh.gaddam@reflexsolution.com', '9962922614', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer', ''),
(104, 'Shobhit Kumar', '08/12/1992', 'Xel-0137', 'shobhit.kumar@xeliumtech.com', '9910783228', '077881ad700711c8dca28830e4f12661', 'IT Engineer', ''),
(105, 'Ayushi Gupta', '11/27/1992', 'Xel-0136', 'ayushi.gupta@xeliumtech.com', '', '79b7c049c641f3fc5dc2060632a8492c', 'User', ''),
(106, 'Arti Yadav', '10/22/2016', 'Xel-0135', 'arti.yadav@xeliumtech.com', '9699501205', 'e10adc3949ba59abbe56e057f20f883e', 'User', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
