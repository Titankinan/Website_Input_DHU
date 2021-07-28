-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2021 at 01:26 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inputdhu`
--

-- --------------------------------------------------------

--
-- Table structure for table `stel_135`
--

CREATE TABLE `stel_135` (
  `no` varchar(255) NOT NULL,
  `item_uji` varchar(255) NOT NULL,
  `spesifikasi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stel_135`
--

INSERT INTO `stel_135` (`no`, `item_uji`, `spesifikasi`) VALUES
('1', 'Material And Construction', 'Material used shall fulfil the following requirement:\r\na. The equipment is made from strong and solid material.\r\nb. Component equipment is made from high quality material and specifically designed\r\nfor Telecommunication equipment purposes.\r\nThe Equipment Shall fulfill technical and construction design as follows:\r\na. Shall be equipped with reset button (hard reset) to restore the device to factory\r\ndefault setting.\r\nb. Shall be equipped with the power button.\r\nc. The casing may be in a horizontal position (down), or in vertical position (standing).\r\nFigure 2 shows one example of ONT Premium casing with the interface port\r\nposition. The casing may vary depending on each manufacturer.\r\n'),
('2', 'Default Setting Requirements', 'a. ONT shall be able to receive ACS parameter from NMS through OLT using SNMP\r\nor TL1 or CLI (not through Web GUI nor NMS Client per ONT).\r\nb. Serial number of ONT device shall not be changed (fix).\r\nc. All password ONT device (PPPoE, SIP, WiFi) shall be able to be read by ACS.\r\nd. ONT device shall be able to send to ACS the following information :\r\n1) ONT LAN MAC Address table and ONT WAN MAC Address table.\r\n2) SIP REG: SIP User, SIP reg status.\r\n3) PPPoE: PPPoE WAN, PPPoE connection status, IP address internet.\r\n'),
('3', 'ONT Interface', ''),
('3.1', 'PON Interface', 'a. PON Interface is used as GPON interface that will connect ONT to the OLT\r\nequipment.\r\nb. ONT Premium shall have 1 port PON interface.\r\nc. ONT Premium is ONT GPON: Refer to ITU-T G.984.'),
('3.1.1', 'GPON Interface', 'a. GPON interface shall be complying with ODN standard follow class B+ standard.\r\nb. GPON interface shall have SC/UPC type optical connector Support WBF function.\r\nc. Support bandwidth upstream 1.25 Gbps and downstream 2.5 Gbps.\r\nd. Loss tolerance for upstream dan downstream is 8%.\r\ne. Support wavelength upstream 1310 nm and downstream 1490 nm.'),
('3.1.2', 'Optic Parameter GPON', 'a. Mean launched Power MIN. = +0.5 dBm.\r\nb. Mean launched Power MAX. = +5.0 dBm.\r\nc. Minimum Sensitivity = -27.0 dBm.\r\nd. Minimum Overload = -8.0 dBm.\r\ne. Downstream Optical Penalty = 0.5 dB.'),
('3.2', 'Subscriber Interface', ''),
('3.2.1', 'Ethernet Interface', 'a. Support 4 port 1000 baseT .\r\nb. Support 100/1000 Mbps auto-sense (default enabled).\r\nc. Support wirespeed 100/1000 Mbps.\r\nd. Support full-duplex (default).'),
('3.2.2', 'FXS Interface', 'a. 2 port RJ-11/FXS.\r\nb. Support SIP.'),
('3.2.3', 'WiFi Interface', 'a. Support Layanan Wi-Fi Manage Service (WMS).\r\nb. Support MIMO, minimum 2x2 for 2.4 GHz and 3x3 for 5 GHz.\r\nc. Support IEEE 802.11 b/g/n within band 2,4 GHz (2.4000 - 2.4835 GHz) maximum\r\nbandwidth 40MHz and IEEE 802.11 a/n/ac 5 GHz (5.150 – 5.250 GHz or 5.250 – 5.350 GHz or 5.725 – 5.825 GHz) maximum bandwidth 80 MHz with minimum\r\nthroughput.\r\n\r\nd. Operating frequency and number of channel:\r\n· Selection of country region for Frequency Slots made fixed and locked\r\n(factory lock)\r\n· Operating frequency of 802.11/b/g/n is within band 2.4 GHz, within 2.4000\r\nGHz – 2.4835 GHz range. Number of operating channels are 13. The 13\r\nchannels should comply to IEEE 802.11/b/g/n with maximum 40 MHz\r\nbandwidth and 5 MHz separation channel 2.4000 – 2.4835 GHz (see Table\r\n1).\r\n· By default, Telkom uses channels 1, 6, and 11 to minimize Co-Channel\r\nInterference but not limited to test the bandwidth/ speed with others channel.\r\n· Operating frequency in band 5 GHz, within 5.150 – 5.250 GHz or 5.250 –\r\n5.350 GHz or 5.725 – 5.825 GHz range. All channels should comply to\r\nIEEE 802.11 a/n/ac with maximum 80 MHz bandwidth (See Table 2).\r\ne. Terms EIRP, Tx Power, and out-of-band emission see Table 3 and Table 4.\r\nf. Support gain antenna minimum 5 dBi (vendor statement letter and visual antenna\r\ncheck).\r\ng. Should provide a test point factory for testing needs (Tx Testing).\r\nh. Antennas should be fixed (un-detachable).\r\ni. Support remote configuration for SSID via TL-1, ACS, and NMS (create SSID,\r\ndelete SSID, rename SSID, read/write from device, enable/disable SSID, create\r\nDHCP option 82, authentication of each SSID, hide SSID from GUI).\r\nj. Support multi SSID, minimum 4 SSID for each frequency (4 SSID 2.4 GHz and 4\r\nSSID for 5.8 GHz) with configure setting via TL-1, ACS and NMS.\r\nk. Support handle minimum 30 users per ONT.\r\nl. Support bridging, routing and multi-routing.\r\nm. Support VLAN ID mapping capability for each SSID.\r\nn. Support WPA/WPA2 (Personal & Enterprise) and TKIP/AES.\r\no. Support open authentication using portal.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `paraf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `paraf`) VALUES
(5, 'Titan Kinan Salaatsa', 'titankinan@gmail.com', 'test', 'test'),
(6, 'Chody Purba', 'chodyp@gmail.com', 'asd', 'grayscale.jpg'),
(7, 'Muhammad Bobi', 'bob@gmail.com', 'ichiocha', 'ttd.jpg'),
(8, 'Testong', 'testong@gmail.com', 'asoy', '442708.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
