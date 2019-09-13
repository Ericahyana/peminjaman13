-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Sep 2019 pada 08.46
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(4) NOT NULL,
  `namabarang` varchar(60) NOT NULL,
  `spec` varchar(60) NOT NULL,
  `qty` varchar(11) NOT NULL,
  `no_lemari` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `namabarang`, `spec`, `qty`, `no_lemari`) VALUES
(32, 'WDM Fast Ethernet Media Converter', 'TP-LINK WDM Fast Ethernet Media Converter TL-MC111CS', '4', 'Lemari 3'),
(39, 'WDM Fast Ethernet Media Converter', 'TP-LINK WDM Fast Ethernet Media Converter TL-MC111CS', '1', 'Lemari 3'),
(40, 'Routerboard', 'MikroTik hAP RB941-2nD-TC, SMIPS, Memory 32 MB, Storage 16 M', '1', 'Lemari 3'),
(41, 'Access Point', 'TP-Link 2.4GHz High Power Wireless Outdoor CPE TL-WA5210G', '1', 'Lemari 3'),
(42, 'Proyektor', 'View Sonic', '2', 'Lemari 4'),
(43, 'Mikrokontroller', 'Arduino Uno R3', '1', 'Lemari 4'),
(44, 'USB to serial cable', 'BAFO Technology USB 12 Mbps with bus power, bidirectional', '3', 'Lemari 1'),
(45, 'Crimping Tool', 'Gold tool Crimpt/Cut/Strip Tools TTK 508', '1', 'Lemari 1'),
(46, 'Crimping Tool', 'Gold tool LAN/Tell Cable Crimping Tools TTK 133C', '2', 'Lemari 1'),
(47, 'Hard Disk', 'Toshiba MQ1ABD100 1 TB', '1', 'Lemari 1'),
(48, 'Hard Disk', 'Seagate Barracuda 7200.12 160 GB SATA', '1', 'Lemari 1'),
(49, 'Hard Disk', 'Seagate Barracuda 7200.10 160 GB SATA', '1', 'Lemari 1'),
(50, 'Hard Disk', 'Seagate Barracuda 7200.9 160 GB SATA', '2', 'Lemari 1'),
(51, 'Hard Disk', 'Seagate Barracuda 7200.12 500 GB SATA', '5', 'Lemari 1'),
(52, 'Kabel SATA', '-', '37', 'Lemari 1'),
(53, 'Optical Drive', 'LG M-Disc Super Multi', '14', 'Lemari 1'),
(54, 'CD OS', 'Win Pro 7 x64 English', '3', 'Lemari 1'),
(55, 'Mouse Genius', 'Genius Netscroll 120 Optical Mouse', '25', 'Lemari 1'),
(56, 'Mouse Logitech', 'Logitech B100 Optical Mouse', '3', 'Lemari 1'),
(57, 'VGA Card', 'Biostar Nvidia Ge Force G120 1 GB DDR 3', '2', 'Lemari 1'),
(58, 'Keyboard Logitech', 'Logitech Classic Desktop mk100', '9', 'Lemari 1'),
(59, 'Keyboard Server', 'HP', '1', 'Lemari 1'),
(60, 'Wireless Adapter', 'TP-Link 54 Mbps Wireless G PCI Adapter TL-WN350GD', '9', 'Lemari 1'),
(61, 'NIC', 'D-Link 10/100 Mbps Fast Ethernet PCI Adapter DFE-520TX', '3', 'Lemari 1'),
(62, 'NIC', 'TP-Link 10/100 Mbps PCI Network Adapter TF-3200', '8', 'Lemari 1'),
(63, 'Wireless Adapter', 'TP-Link 150 Mbps Wireless N PCI Express Adapter TL-WN784ND', '1', 'Lemari 1'),
(64, 'Wireless Adapter', 'TP-Link 150 Mbps Wireless N Adapter TL-WN751ND', '2', 'Lemari 1'),
(65, 'Wireless Adapter', 'TP-Link 54 Mbps Extended Range Wireless G PCI Adapter TL-WN5', '14', 'Lemari 1'),
(66, 'Stabilizer', 'Star X 170-240V/50 Hz, -220V AC/50 Hz 650 VA', '1', 'Lemari 1'),
(67, 'PSU', 'Venom RX Gladias 80+ 500 W', '1', 'Lemari 1'),
(68, 'PSU', 'E-Smile 500 W, 1 x 8 cm', '3', 'Lemari 1'),
(69, 'PSU', 'Simbadda PS 380 W', '5', 'Lemari 1'),
(70, 'Keyboard Logitech', 'Logitech Classic Keyboard K100', '4', 'Lemari 1'),
(71, 'Keyboard Logitech', 'Logitech Classic Keyboard K120', '5', 'Lemari 1'),
(72, 'Keyboard HP', 'HP', '2', 'Lemari 1'),
(73, 'Keyboard Genius', 'Genius KB 110 Value Desktop Keyboard', '2', 'Lemari 1'),
(74, 'Monitor LG', 'LG', '1', 'Lemari 1'),
(75, 'Web Cam', 'Genius KB 110 Value Desktop Keyboard', '12', 'Lemari 2'),
(76, 'Access Point', 'Unifi AP long Range Ubiquiti', '9', 'Lemari 2'),
(77, 'Steker', '3 socket 10A 250VAC uticon', '22', 'Lemari 2'),
(78, 'Stop Kontak', '4 socket 16A 250VAC uticon', '13', 'Lemari 2'),
(79, 'Stop Kontak', '2 socket 10A 250VAC uticon', '2', 'Lemari 2'),
(80, 'Memory', 'kingstone 2 GB PC 3 DDR 3', '5', 'Lemari 2'),
(81, 'Battere', 'size AA ABC', '18', 'Lemari 2'),
(82, 'Remote AC', 'Panasonic', '2', 'Lemari 2'),
(83, 'Kebel VGA', '3m net line', '8', 'Lemari 2'),
(84, 'Kebel VGA', '1,5m', '4', 'Lemari 2'),
(85, 'Kebel VGA', '1m', '7', 'Lemari 2'),
(87, 'Kabel HDMI', 'HDMI to HDMI', '1', 'Lemari 2'),
(88, 'Audio Video Kabel', '-', '1', 'Lemari 2'),
(89, 'VGA Card', 'GigaByte GV-N730 2GI Rev 1.0', '1', 'Lemari 2'),
(90, 'PSU', 'Gladias 500W Venom', '1', 'Lemari 2'),
(91, 'Obeng set', '16 pcs mobil tool', '3', 'Lemari 2'),
(92, 'Ripet', '4,8 x 250mm', '2,5 Pak', 'Lemari 2'),
(93, 'Ripet', '4,8 x 100mm', '5 pak', 'Lemari 2'),
(94, 'Clamp Besar', '-', '4', 'Lemari 2'),
(95, 'Fischer', '5s', '5', 'Lemari 2'),
(96, 'Baud', 'WG 56603', '4', 'Lemari 2'),
(97, 'Baud', '5/8\"', '1', 'Lemari 2'),
(98, 'Baud', '1 1/4\"', '1', 'Lemari 2'),
(99, 'Double tape tebal', 'Kojiko', '7', 'Lemari 2'),
(100, 'Double tape tebal', 'Nippon tape', '6', 'Lemari 2'),
(101, 'Cable Clip', 'd 6mm', '8', 'Lemari 2'),
(102, 'Cable Clip', 'd 12mm', '3', 'Lemari 2'),
(103, 'Adapter', 'LHV 24V/ 5A', '1', 'Lemari 2'),
(104, 'Adapter', 'LG 19V/0.84A', '2', 'Lemari 2'),
(105, 'Adapter', 'ITE 5V/1A', '1', 'Lemari 2'),
(106, 'Adapter', 'D link 5V/ 500mA', '3', 'Lemari 2'),
(107, 'Adapter', 'LEI ITC 9V/0,6A', '2', 'Lemari 2'),
(108, 'Adapter', 'LEI ITC 12V/1A', '2', 'Lemari 2'),
(109, 'Adapter', 'LEI ITC 3,3V/2A', '1', 'Lemari 2'),
(110, 'Adapter', 'Bestee 12V/ 1A', '1', 'Lemari 2'),
(111, 'Adapter', 'STC 12 V/ 500mA', '1', 'Lemari 2'),
(112, 'Switching PSU', '24 V/5A', '1', 'Lemari 2'),
(113, 'Speaker portable', 'advance H23B BT', '1', 'Lemari 2'),
(114, 'Speaker portable', 'Asatron R 107645B', '5', 'Lemari 2'),
(115, 'Wirelles mic', 'Aiwa NA-801VHF', '4', 'Lemari 2'),
(116, 'Wirelles mic', 'Nakata NK 3500', '1', 'Lemari 2'),
(117, 'Adapter', 'NL A 050120 W1U 12v/500mA', '1', 'Lemari 2'),
(118, 'Adapter', 'Samsung 14V/2,14A', '1', 'Lemari 2'),
(119, 'Adapter', 'Dlink 7,5V/1000mA', '1', 'Lemari 2'),
(120, 'Battere', 'size AAA ABC', '12', 'Lemari 2'),
(121, 'WDM Fast Ethernet Media Converter', 'TP-LINK WDM Fast Ethernet Media Converter TL-MC111CS', '8', 'Lemari 3'),
(122, '12 Meters Low-loss Antenna Extension Cable', 'TP-LINK 12 Meters Low-loss Antenna Extension Cable TL-ANT24E', '5', 'Lemari 3'),
(123, '1 Meters Low-loss Antenna Extension Cable', '1 Meters', '6', 'Lemari 3'),
(124, 'Routerboard', 'MikroTik hAP RB941-2nD-TC, SMIPS, Memory 32 MB, Storage 16 M', '20', 'Lemari 3'),
(125, 'Routerboard', 'MikroTik 951 Series RB951Ui-2HND, MIPS-BE Architecture, Main', '12', 'Lemari 3'),
(126, 'RJ-11', '-', '1', 'Lemari 1'),
(127, 'RJ-45', 'P-Mark', '1', 'Lemari 3'),
(128, 'Rj-45', 'Commscope Complies with FCC 68 Subpart f MP-88U-F-2: UNSHLD ', '10', 'Lemari 3'),
(129, 'Kabel FO', '-', '1', 'Lemari 3'),
(130, 'Barel', '-', '15', 'Lemari 3'),
(131, 'Access Point', 'TP-Link 2.4GHz High Power Wireless Outdoor CPE TL-WA5210G', '7', 'Lemari 3'),
(132, 'Access Point', 'Cisco WAP121 Wireless-N  Single Point Setup Cisco-WAP121', '1', 'Lemari 3'),
(133, 'Access Point', 'TP-Link 150Mbps Wireless N TL-WA701ND', '3', 'Lemari 3'),
(134, 'Access Point', 'Tenda 300Mbps Wireless N Tenda-AP4', '3', 'Lemari 3'),
(135, 'Routerboard 433AH', 'Paket RT RW NET RouterBoard RB 433AH', '2', 'Lemari 3'),
(136, 'Routerboard 433AH', 'Paket RT RW NET RouterBoard RB 433AH', '2', 'Lemari 3'),
(137, 'Access Point', 'Linksys by Cisco Wireless-N Broadband Router with Storage Li', '1', 'Lemari 3'),
(138, 'Access Point', 'Ubiquiti Power AP N Ultra Long-Range 802.11n Indoor AP', '1', 'Lemari 3'),
(139, 'Access Point', 'Linksys Compact Wireless-G Broadband Router-WRT54GC ver 2.0', '2', 'Lemari 3'),
(140, 'Access Point', 'Belkin G Wireless Router F7D1401 v4', '2', 'Lemari 3'),
(141, 'Access Point', 'TP-Link 150Mbps Wireless Lite N Router TL-WR740N', '1', 'Lemari 3'),
(142, 'Access Point', 'TP-Link 54 Wireless Access Point TL-WA501G', '1', 'Lemari 3'),
(143, 'Access Point', 'TP-Link 3G/3.75G Wireless N Router TL-MR3420', '1', 'Lemari 3'),
(144, 'Access Point', 'Linksys Wireless-G Broadband Router WRT54G ', '2', 'Lemari 3'),
(145, 'Access Point', 'Linksys Wireless-G Broadband Router WRT5GL', '1', 'Lemari 3'),
(146, 'Access Point', 'Belkin Basic Wireless Modem Router F7d1401 V1', '1', 'Lemari 3'),
(147, 'Switch', 'TP-Link 10/100Mbps Fast Ethernet Switch TL-SF1024', '2', 'Lemari 3'),
(148, 'Switch', 'D-Link 10/100 Fast Ethernet Switch DES-1016D', '2', 'Lemari 3'),
(149, 'Switch', 'D-Link 10/100 Fast Ethernet Switch DES-1024D', '1', 'Lemari 3'),
(150, 'Switch', 'D-Link 10/100 Switch DES-1024D', '1', 'Lemari 3'),
(151, 'Switch', 'TP-Link 16-Port 10/100Mbps Desktop Switch TL-SF1016D', '1', 'Lemari 3'),
(152, 'Switch', 'TP-Link 16-Port 10/100M Desktop Switch TL-SF1016D', '1', 'Lemari 3'),
(153, 'Switch', 'D-Link 10/100 Fast Ethernet Switch DES-1008D', '1', 'Lemari 3'),
(154, 'Switch', 'D-Link 10/100 Fast Ethernet Switch DES-1008A', '7', 'Lemari 3'),
(155, 'PoE Adapter', 'Ubiquiti GP-B240-100', '3', 'Lemari 3'),
(156, 'PoE Adapter', 'Ubiquiti GP-A240-050', '3', 'Lemari 3'),
(157, 'Switch', 'D-Link 5 Port Fast Ethernet Switch TL-SF1005D', '1', 'Lemari 3'),
(158, 'Switch', 'D-Link 5 Port Fast Ethernet Switch TL-SF1005D', '1', 'Lemari 3'),
(159, 'Routerboard', 'Router Cisco  2901/K9', '2', 'Lemari 3'),
(160, 'Switch', 'D-Link 24-Port 10/100 Switch DES-1024A', '1', 'Lemari 3'),
(161, 'Switch', 'D-Link 16-Port 10/100 Desktop Switch DES-1016D', '1', 'Lemari 3'),
(162, 'Switch', 'D-Link 24-Port 10/100Mbps Unmanaged Ethernet Switch DES-1024', '1', 'Lemari 3'),
(163, 'Ethernet Switch', 'D-Link Fast Ethernet Switch 5 Port DES-1005A', '7', 'Lemari 3'),
(164, 'PoE Adapter', 'Tenda PoE Adapter', '2', 'Lemari 3'),
(165, 'Tatakan Solder', '-', '7', 'Lemari 4'),
(166, 'Proyektor', 'View Sonic', '2', 'Lemari 4'),
(167, 'Camera', 'Canon', '1', 'Lemari 4'),
(168, 'Apture', '-', '87', 'Lemari 2'),
(169, 'Kabel UTP', '-', '1', 'Lemari 4'),
(170, 'Laptop Rakitan Komjardar', 'Lenovo V310 - 14ISK, 80SK, Notebook LN V310 - 14ISK I3 4G 1 ', '1', 'Lemari 1'),
(171, 'Laptop Rakitan Komjardar', 'Lenovo Ideapad 320-14ISK, Notebook IP 320 - 14ISK I3 4G 1 TB', '1', 'Lemari 4'),
(172, 'Sensor', 'Photo Transistor', '1', 'Lemari 4'),
(173, 'Sensor', 'Reed switch', '1', 'Lemari 4'),
(174, 'IC', '555', '1', 'Lemari 4'),
(175, 'IC', '7809', '1', 'Lemari 4'),
(176, 'Transistor', 'FIR 10', '1', 'Lemari 4'),
(177, 'LED', 'Super LED', '1', 'Lemari 4'),
(178, 'MIC', 'MIC', '1', 'Lemari 4'),
(179, 'IC', '7400', '1', 'Lemari 4'),
(180, 'IC', '7408', '1', 'Lemari 4'),
(181, 'IC', '7476', '1', 'Lemari 4'),
(182, 'IC', '7403', '1', 'Lemari 4'),
(183, 'Kapasitor non polar', '470 n', '1', 'Lemari 4'),
(184, 'Kapasitor non polar', '2,2 n', '1', 'Lemari 4'),
(185, 'Kapasitor non polar', '10 n', '1', 'Lemari 4'),
(186, 'IC', '7432', '1', 'Lemari 4'),
(187, 'IC', '74193', '1', 'Lemari 4'),
(188, 'IC', '7447', '1', 'Lemari 4'),
(189, 'Kapasitor non polar', '4700 uF/ 25v', '1', 'Lemari 4'),
(190, 'Kapasitor non polar', '1000 uF/ 25v', '1', 'Lemari 4'),
(191, 'Kapasitor non polar', '4,7 uF/ 50v', '1', 'Lemari 4'),
(192, 'Kapasitor non polar', '100 uF/25v', '1', 'Lemari 4'),
(193, 'Kapasitor non polar', '220 uF/ 25v', '1', 'Lemari 4'),
(194, 'Kapasitor non polar', '1 uF/ 25V', '1', 'Lemari 4'),
(195, 'Kapasitor non polar', '1n', '1', 'Lemari 4'),
(196, 'Kapasitor non polar', '100 n', '1', 'Lemari 4'),
(197, 'Transistor', 'MJ 2955', '1', 'Lemari 4'),
(198, 'Relay', 'Relay 12 V', '1', 'Lemari 4'),
(199, 'Switch', 'toggle switch', '1', 'Lemari 4'),
(200, 'IC', '7909', '1', 'Lemari 4'),
(201, 'Dioda', 'Zenner', '1', 'Lemari 4'),
(202, 'Dioda', 'IN 4302', '1', 'Lemari 4'),
(203, 'Dioda', 'IN 4004', '1', 'Lemari 4'),
(204, 'Dioda', 'IN 5399', '1', 'Lemari 4'),
(205, 'Resistor', '1 ohm', '1', 'Lemari 4'),
(206, 'Resistor', '10 ohm', '1', 'Lemari 4'),
(207, 'Resistor', '1,2 ohm', '1', 'Lemari 4'),
(208, 'Resistor', '1,5 ohm', '1', 'Lemari 4'),
(210, 'Resistor', '3,3 ohm', '1', 'Lemari 4'),
(211, 'Resistor', '4,7 ohm', '1', 'Lemari 4'),
(212, 'Resistor', '5,6 ohm', '1', 'Lemari 4'),
(213, 'Resistor', '68 ohm', '1', 'Lemari 4'),
(214, 'Resistor', '8,2 ohm', '1', 'Lemari 4'),
(215, 'Resistor', '47 ohm', '1', 'Lemari 4'),
(216, 'Resistor', '22 ohm', '1', 'Lemari 4'),
(217, 'Resistor', '56 ohm', '1', 'Lemari 4'),
(218, 'Resistor', '100 ohm', '1', 'Lemari 4'),
(219, 'Resistor', '120 ohm', '1', 'Lemari 4'),
(220, 'Resistor', '150 ohm', '1', 'Lemari 4'),
(221, 'Resistor', '330 ohm', '1', 'Lemari 4'),
(222, 'Resistor', '270 ohm', '1', 'Lemari 4'),
(223, 'Resistor', '410 ohm', '1', 'Lemari 4'),
(224, 'Resistor', '82 ohm', '1', 'Lemari 4'),
(225, 'Resistor', '470 ohm', '1', 'Lemari 4'),
(226, 'Resistor', '680 ohm', '1', 'Lemari 4'),
(227, 'Resistor', '820 ohm', '1', 'Lemari 4'),
(228, 'Resistor', '1k', '1', 'Lemari 4'),
(229, 'Resistor', '4k7', '1', 'Lemari 4'),
(230, 'Resistor', '1k5', '1', 'Lemari 4'),
(231, 'Resistor', '2k2', '1', 'Lemari 4'),
(232, 'Resistor', '2k7', '1', 'Lemari 4'),
(233, 'Resistor', '3920', '1', 'Lemari 4'),
(234, 'Resistor', '3290', '1', 'Lemari 4'),
(235, 'Resistor', '3k3', '1', 'Lemari 4'),
(236, 'Resistor', '6k8', '1', 'Lemari 4'),
(237, 'Resistor', '5k6', '1', 'Lemari 4'),
(238, 'Resistor', '10k', '1', 'Lemari 4'),
(239, 'Resistor', '12k', '1', 'Lemari 4'),
(240, 'Resistor', '68k', '1', 'Lemari 4'),
(241, 'Resistor', '22k', '1', 'Lemari 4'),
(242, 'Resistor', '22k', '1', 'Lemari 4'),
(243, 'Resistor', '82k', '1', 'Lemari 4'),
(244, 'Resistor', '74k', '1', 'Lemari 4'),
(245, 'Resistor', '56k', '1', 'Lemari 4'),
(246, 'Resistor', '100k', '1', 'Lemari 4'),
(247, 'Resistor', '120k', '1', 'Lemari 4'),
(248, 'Resistor', '150k', '1', 'Lemari 4'),
(249, 'Resistor', '220k', '1', 'Lemari 4'),
(250, 'testdd', 'sadasd', '90', 'Lemari 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_user` int(2) NOT NULL,
  `namauser` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_user`, `namauser`, `username`, `password`) VALUES
(2, 'Rian Ramadhan', 'Rian', 'admin'),
(3, 'eri', 'eri', 'eri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjam` int(4) NOT NULL,
  `namapeminjam` varchar(30) NOT NULL,
  `kelas` varchar(11) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `peruntukkan` varchar(30) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjam`, `namapeminjam`, `kelas`, `no_tlp`, `id_barang`, `qty`, `peruntukkan`, `tgl_pinjam`, `tgl_kembali`) VALUES
(10, 'Rian', 'X TKJ 1', '08783928372', 39, 2, 'KBM', '2018-09-17', '2018-09-19'),
(12, 'Akbar', 'X RPL 3', '089645366627', 40, 1, 'Pemotretan', '2018-10-02', '2018-10-08'),
(13, 'peminjam', 'XI RPL 1', '098753', 41, 1, 'kbm', '2018-09-17', '2018-09-17'),
(17, 'Asep', 'X TKJ 1', '08986897962', 42, 1, 'Video Conference', '2018-10-13', '0000-00-00'),
(18, 'Rizal', 'XI TKJ 1', '089944332211', 43, 4, 'Crimping kabel', '2018-10-14', '2018-10-16'),
(20, 'Adhi', 'XII TKJ 2', '0865787754345', 44, 1, 'KBM', '2018-10-16', '2018-10-16'),
(30, 'Rama', 'XII TKJ 3', '087654445454', 45, 4, 'Praktek', '2018-10-24', '2018-11-06'),
(31, 'Dani', 'X TKJ 1', '089776655443', 46, 1, 'Praktek', '2018-10-16', '2019-09-07'),
(35, 'Eri', 'X RPL 2', '08986897962', 47, 1, 'KBM', '2018-11-05', '2019-09-13'),
(36, 'Abdul', 'X TKJ 1', '087765334', 48, 2, 'kBM', '2019-09-12', '2019-01-09'),
(39, 'asdas', 'X TKJ 1', '23234', 76, 6, 'sdfsd', '2019-09-07', '2019-09-13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjam`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjam` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
