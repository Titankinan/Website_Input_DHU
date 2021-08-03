-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 09:55 AM
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
-- Table structure for table `aktivitas`
--

CREATE TABLE `aktivitas` (
  `id_aktivitas` int(11) NOT NULL,
  `id_laporan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `kondisi_awal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aktivitas`
--

INSERT INTO `aktivitas` (`id_aktivitas`, `id_laporan`, `id_user`, `tanggal`, `activity`, `kondisi_awal`) VALUES
(1, 2, 6, '2021-08-02', 'test', '79/29/22'),
(2, 2, 7, '2021-08-10', 'test kedua', '28/20/20'),
(3, 2, 6, '2021-08-11', 'awda', 'sawd'),
(4, 2, 7, '2021-08-12', '1231', 'afsafw'),
(5, 1, 8, '2021-08-02', 'aktivitas', 'bebas'),
(6, 1, 5, '2021-08-03', 'apa', 'gatau'),
(17, 1, 5, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_stel` varchar(11) NOT NULL,
  `spk` varchar(255) NOT NULL,
  `perangkat` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `noseri` varchar(255) NOT NULL,
  `aksi` varchar(255) NOT NULL,
  `penguji1` int(11) NOT NULL,
  `penguji2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `id_stel`, `spk`, `perangkat`, `merk`, `tipe`, `noseri`, `aksi`, `penguji1`, `penguji2`) VALUES
(1, 'stel_137', '001/101/QA/2021', 'Alat sholat', 'gajahmada duduk', 'lupa gan hmm..', '1', 'mulai', 5, 8),
(2, 'stel_135', '002/102/QA/2021', 'lunak', 'tulang', 'bajigur', '2', 'mulai', 6, 7),
(6, 'stel_136', '123', 'apple', 'iphone', '12', '123', 'cetak', 5, 8),
(7, 'stel_135', '111', 'shamshunk', 'galaksi bima shakti', '2', '22', 'mulai', 5, 6),
(8, 'stel_135', '', '', '', '', '', 'mulai', 5, 7);

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
-- Table structure for table `stel_136`
--

CREATE TABLE `stel_136` (
  `no` varchar(255) NOT NULL,
  `item_uji` varchar(255) NOT NULL,
  `spesifikasi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stel_136`
--

INSERT INTO `stel_136` (`no`, `item_uji`, `spesifikasi`) VALUES
('1', 'Material And Construction', 'Material used shall fulfil the following requirement:\r\na. The equipment is made from strong and solid material.\r\nb. Component equipment is made from high quality material and specifically designed\r\nfor Telecommunication equipment purposes.\r\nThe Equipment Shall fulfill technical and construction design as follows:\r\na. Shall be equipped with reset button (hard reset) to restore the device to factory\r\ndefault setting.\r\nb. Shall be equipped with the power button.\r\nc. The casing may be in a horizontal position (down), or in vertical position (standing).\r\nFigure 2 shows one example of ONT Premium casing with the interface port\r\nposition. The casing may vary depending on each manufacturer.\r\n'),
('2', 'Default Setting Requirements', 'ONT device shall have default factory setting as below:\r\na. ONT shall be able to receive ACS parameter from NMS through OLT using TL1\r\n(mandatory), SNMP or CLI (not through Web GUI nor NMS Client per ONT).\r\nb. Serial number of ONT device shall not be changed (fix).\r\nc. All password ONT device (PPPoE, SIP, WiFi) shall be able to be read by ACS.\r\nd. ONT device shall be able to send to ACS the following information :\r\n1) ONT LAN MAC Address table and ONT WAN MAC Address table.\r\n2) SIP REG: SIP User, SIP reg status.\r\n3) PPPoE: PPPoE WAN, PPPoE connection status, IP address internet.\r\n'),
('3', 'ONT Interface', ''),
('3.1', 'PON Interface', 'a. PON Interface is used as GPON interface that will connect ONT to the OLT\r\nequipment.\r\nb. ONT Premium shall have 1 port PON interface.\r\nc. ONT Premium is ONT GPON: Refer to ITU-T G.984.\r\n'),
('3.1.1', 'GPON Interface', 'a. GPON interface shall be complying with ODN standard follow class B+ standard.\r\nb. GPON interface shall have SC/UPC type optical connector Support WBF function.\r\nc. Support bandwidth upstream 1.25 Gbps and downstream 2.5 Gbps.\r\nd. Loss tolerance for upstream dan downstream is 8%.\r\ne. Support wavelength upstream 1310 nm and downstream 1490 nm.\r\n'),
('3.1.2', 'Optic Parameter GPON', 'a. Mean launched Power MIN. = +0.5 dBm.\r\nb. Mean launched Power MAX. = +5.0 dBm.\r\nc. Minimum Sensitivity = -27.0 dBm.\r\nd. Minimum Overload = -8.0 dBm.\r\ne. Downstream Optical Penalty = 0.5 dB.\r\n'),
('3.10', 'Sample Test', 'For testing, the partners must provide 2 (two) units of ONT Premium.'),
('3.2', 'Subscriber Interface', ''),
('3.2.1', 'Ethernet Interface', 'a. Support 4 port 1000 baseT .\r\nb. Support 100/1000 Mbps auto-sense (default enabled).\r\nc. Support wirespeed 100/1000 Mbps.\r\nd. Support full-duplex (default).\r\n'),
('3.2.2', 'FXS Interface', 'a. 2 port RJ-11/FXS.\r\nb. Support SIP.\r\n'),
('3.2.3', 'WiFi Interface', 'a. Support Layanan Wi-Fi Manage Service (WMS).\r\nb. Support mesh function\r\nc. Support MIMO, minimum 2x2 for 2.4 GHz and 3x3 for 5 GHz.\r\nd. Support IEEE 802.11 b/g/n within band 2,4 GHz (2.4000 - 2.4835 GHz) maximum\r\nbandwidth 40MHz and IEEE 802.11 a/n/ac 5 GHz (5.150 – 5.250 GHz and 5.250 –\r\n5.350 GHz and 5.725 – 5.825 GHz) maximum bandwidth 80 MHz with minimum\r\nThroughput\r\ne. Operating frequency and number of channel:\r\n· Selection of country region for Frequency Slots made fixed and locked\r\n(factory lock)\r\n· Operating frequency of 802.11/b/g/n is within band 2.4 GHz, within 2.4000\r\nGHz – 2.4835 GHz range. Number of operating channels are 13. The 13\r\nchannels should comply to IEEE 802.11/b/g/n with maximum 40 MHz\r\nbandwidth and 5 MHz separation channel 2.4000 – 2.4835 GHz (see Table\r\n1).\r\n· By default, Telkom uses channels 1, 6, and 11 to minimize Co-Channel\r\nInterference but not limited to test the bandwidth/ speed with others channel.\r\n· Operating frequency in band 5 GHz, within 5.150 – 5.250 GHz or 5.250 –\r\n5.350 GHz or 5.725 – 5.825 GHz range. All channels should comply to\r\nIEEE 802.11 a/n/ac with maximum 80 MHz bandwidth (See Table 2).\r\nf. Terms EIRP, Tx Power, and out-of-band emission see Table 3 and Table 4.\r\ng. Support gain antenna minimum 5 dBi (vendor statement letter and visual antenna\r\ncheck).\r\nh. Should provide a test point factory for testing needs (Tx Testing).\r\ni. Antennas should be fixed (un-detachable).\r\nj. Support remote configuration for SSID via TL-1, ACS, and NMS (create SSID,\r\ndelete SSID, rename SSID, read/write from device, enable/disable SSID, create\r\nDHCP option 82, authentication of each SSID, hide SSID from GUI).\r\nk. Support multi SSID, minimum 4 SSID for each frequency (4 SSID 2.4 GHz and 4\r\nSSID for 5.8 GHz) with configure setting via TL-1, ACS and NMS.\r\nl. Support handle minimum 30 users per ONT.\r\nm. Support bridging, routing and multi-routing.\r\nn. Support VLAN ID mapping capability for each SSID.\r\no. Support WPA/WPA2 (Personal & Enterprise) and TKIP/AES.\r\np. Support open authentication using portal.\r\nq. Support WiFi mesh configuration'),
('3.2.4', 'WiFi Mesh System', 'a. ONT support mesh function\r\nb. Support ONT as access point root.\r\nc. Support Multiple Services.\r\nd. Support 802.11k,v seamless standard, auto channeling allocation, and adaptive\r\nbandwidth sync algorithm. Further information about seamless standard: roaming\r\nfunction, synchronization channel and bandwidth, SSID name, SSID Authentication\r\ne. Support Mesh Backhaul (5.8 GHz).\r\nf. Support multi SSID, min 4 SSID 2.4 GHz, 3 SSID for 5.8 GHz, and 1 SSID for 5.8\r\nGHz as controller with setting configuration via TL-1, ACS & NMS\r\n'),
('3.2.5', 'USB Interface', 'a. Minimum 1 port USB.\r\nb. Minimum USB 2.0 (auto detect).\r\nc. Support storage function.\r\n'),
('3.3', 'Operational', ''),
('3.3.1', 'Power Supply', 'a. The equipment shall be powered by input voltage (220 + 15 %) Vac/ 50 Hz as\r\nnormal domestic household voltage.\r\nb. ONT shall be equipped with system protection from unexpected current and voltage\r\nflow.\r\nc. ONT should support battery back-up (separated with direct connection to ONT)\r\nminimum operational 2 hours for specific requirement.\r\n'),
('3.3.2', 'Environment', 'a. Temperature (T): 50°C, 16 hours (Dry Heat Test).\r\nb. Relative Humidity (H): 5%-85%, 4 days.\r\n'),
('3.3.3', 'Electromagnetic Compatibility', 'EMC (Electromagnetic compatibility) according to CISPR 32 & CISPR 35.'),
('3.3.4', 'Total Audible Noise', 'Total Audible Noise level of equipment is 45 dBA, measured at a distance of 1.0 meter\r\nfrom noise source point where the test equipment is 1.5 meters from ground surface.\r\n'),
('3.3.5', 'LED Indicator', 'LED indicator shall different between normal and failure condition. LED indicator shall\r\nconsist of:\r\na. Power.\r\nb. PON.\r\nc. Ethernet1, Ethernet2, Ethernet3, and Ethernet4.\r\nd. 2 Port FXS untuk service VOIP dan Fax/EDC.\r\ne. WiFi.\r\nf. Internet.\r\n'),
('3.4', 'ONT Function', 'a.	ONT shall support MAC address entries for at least 1K MAC address.\r\nb. Support multiple T-CONT minimum 8 T-CONTs.\r\nc. Support VLAN function:\r\n1) VLAN Mapping, tranlate/re-write subsribers VLAN ID to another VLAN ID.\r\n2) Untagged (Transparant) VLAN Mode.\r\n3) Tag VLAN Mode.\r\n4) ONT Premium shall support VLAN stacking QinQ & Dot1Q Tunneling.\r\nd. Support multi VLAN, 4096 VLAN ID.\r\ne. Shall support QoS (Quality of Service) refer to IEEE 802.1p standard as follows:\r\nf. Packet classification with 8 class priority\r\ng. DSCP to 802.1 mapping\r\nh. Support bridge mode and multi route mode simultaneously.\r\ni. Support static routing and transparent for dynamic routing as follows:\r\n1) RIP protocol.\r\n2) BGP protocol.\r\n3) IS-IS protocol.\r\n4) OSPF protocol.\r\n5) EIGRP protocol.\r\nj. Support transparent STP protocol.\r\nk. Gratuitous ARP disabled.\r\nl. Support IP NAT.\r\nm. Support Protocol: ARP, Dual Stack IPv4/IPv6, ICMP, UDP, TCP, HTTP, HTTPS,\r\nDHCP, PPPoE and FTP.\r\nn. Support Dynamic DNS.\r\no. Support Jumbo Frame range 1518 – 2000 bytes.\r\np. ONT shall support activation DHCP relay option 82 for Radius authentication.\r\nq. OLT shall support append Option 82 for DHCP, if ONT Enterprise implement option\r\n82 and OLT also implement option 82, both option 82 information from ONT and OLT shall be detected by DHCP server.\r\n'),
('3.5', 'Security Function', 'a. ONT shall support filtering function follows:\r\n1) Limit MAC Address.\r\n2) MAC address filtering.\r\n3) MAC address filtering for specific port.\r\n4) IP address filtering.\r\n5) Access Control List (ACL) for ACS IP Address.\r\n6) USB ports should not be used for backup configuration functions.\r\nb. ONT shall support encryption mechanism using AES-128.\r\n'),
('3.6', 'System Management', 'a. ONT shall be manageable remotely via OMCI based on ITU-T G.984 and part of as\r\nITU-T G.988. See figure 3.\r\nb. ONT shall support TR-069 (management server), TR-142 (PON remote\r\nmanagement), TR-104 (VoIP) and TR-106 (Data). See Appendix 1.\r\nc. ONT shall support Fault Management, Configuration Management, and Security\r\nManagement & Performance Management.\r\nd. ONT shall support minimum SNMP v3 / TL-1 / XML via NMS.\r\ne. ONT shall prohibit management services from WAN.\r\nf. ONT shall prohibit telnet service from LAN.\r\ng. ONT shall support event log.\r\nh. ONT Shall support dual image for upgrade firmware function.\r\ni. Configuration file does not lost after restart the ONT.\r\n'),
('3.7', 'ONT Services', ''),
('3.7.1', 'Voice Services Functionality', 'a. ONT Premium shall support voice coding, including G.711 and G.729.\r\nb. ONT Premium shall support voice services regarding to SIP protocol follow:\r\n1) Basic Call Service.\r\n2) Facsimile T.30 based on T.30\r\n3) Supplementary Services:\r\ni. HOT LINE:\r\n(1) IMMEDIATELY/INSTANT: ONT able to pass-through the Hotline\r\nservice instantly when customer picked up the phone.\r\n(2) DELAY: ONT able to pass-through hotline service, 5 seconds after\r\ncustomer picked up the phone.\r\nii. CALL WAITING.\r\niii. Three party.\r\niv. Call Hold.\r\nv. Call Transfer.\r\nvi. Hunting.\r\nvii. CLIP.\r\nviii. CLIR.\r\nix. Call Forwarding:\r\n(1) IMMEDIATELY/INSTANT: ONT able to pass-through the call\r\nforwarding service instantly.\r\n(2) NO answer: ONT able to pass-through call forwarding when call\r\nparty doesnot answer\r\n(3) ON Busy: ONT able to pass-through call forwarding when call party\r\non busy.\r\nx. Abreviated Dialing.\r\nxi. Keyword.\r\n'),
('3.7.2', 'IPTV Services', 'a. DHCP IP.\r\nb. Unicast TV (VoD).\r\nc. Multicast TV:\r\n1) Support IGMP minimum ver.2 (according to RFC 2236)\r\n2) Support 256 multicast group channel with UDP traffic.\r\nd. Stability test for live TV (Fixed Channel 24 hours)\r\n'),
('3.7.3', 'Internet Services', 'a. Support PPOE.\r\nb. Support BRIDGE.\r\nc. Support DMZ.\r\nd. Support Dynamic DNS.\r\ne. Support PORT FORWARDING.\r\nf. Support DHCP connection.\r\ng. Support static IP connection.\r\nh. Support EDC (Electronic Data Capture) service.\r\n'),
('3.8', 'Labeling', 'a. The equipment shall be marked minimum with “Premium ONT” label, the\r\nmanufacturer name, brand/type, serial number, and names of facilities/ports/parts\r\nthat are provided by the equipment.\r\nb. The equipment shall also provide QR code label for SN and QR code label for\r\nMAC Address information.\r\nc. Labels shall be official from the manufacturer.\r\nd. Labels shall be high quality direct prints or stickers.\r\ne. All labels shall be readable, understandable, using general/standard terminologies\r\nand symbols, and shall not be easily peeled off, scratched, detached, removed,\r\nfaded, and erased.\r\nf. The equipment shall have service labeling for its Ethernet (Eth or LAN) ports (Exp.\r\nEth1=IPTV2; Eth2= ; Eth3=Internet; Eth4=IPTV1).\r\n'),
('3.9', 'Packing', 'ONT Premium must be packed in a box which is equipped with a user manual and\r\nminimum 1 (one) meter of patch cord cable with the end of connector using SC / UPC.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `stel_137`
--

CREATE TABLE `stel_137` (
  `no` varchar(255) NOT NULL,
  `item_uji` varchar(255) NOT NULL,
  `spesifikasi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stel_137`
--

INSERT INTO `stel_137` (`no`, `item_uji`, `spesifikasi`) VALUES
('1', 'Configuration', 'GPON/XGPON system require configuration and management of optical network terminals\r\n(ONTs) on the GPON/XGPON optical line terminal (OLT) through the ONT Management and\r\nControl Interface (OMCI) and TELKOM’s ACS as illustrated in figure 2.\r\nGPON/XGPON system must support voice, data and IPTV services. GPON/XGPON system\r\nshould support both IPv4 and IPv6 for that services. GPON/XGPON system must provide good\r\nquality of triple play services with configuration in Figure 2.\r\n'),
('2', 'General Requirements', 'a. ONU and OLT must comply with ITU-T G.984.2 (PMD), ITU-T G.984.3 (TC), ITU-T\r\nG.984.4/G.988 (OMCI), BBF TR-156 issue 3 and G.984.4 OMCI Implementer’s Guide version 2.\r\nb. All ONT vendors must have the same format of serial number refer to ITU-T G.984.3.\r\nc. ONT must follow the ME and service flow transaction of the OLT.\r\nd. ONT must be managed dan configured by :\r\ni. The OLT/OMCI for connection establishment function.\r\nii. TELKOM’s ACS for service provisioning, OAM, security management and performance\r\nmanagement.\r\ne. ONT telnet service from LAN is prohibited.\r\nf. VLAN manipulations must comply with the description given in TR-156 (for example, VLAN\r\nmanipulations at the ONT and not at the OLT for N:1 VLAN architecture).\r\ng. ONT and OLT in a pair must handle the Triple Play services (Internet, telephony and IPTV) and\r\nin an OMCI and TR 069 context.\r\nh. ONT and OLT partners must collaborate to customize PHY and TC parameter to make the ONT\r\nworking.\r\ni. Open ONT must be pre-configured based on TELKOM ACS parameter.\r\n'),
('3', 'GPON/XGPON Protocol Requirements', ''),
('3.1', 'GPON/XGPON Protocol Reference Model', 'GPON/XGPON system protocol stack in Figure 3, mainly related to the physical medium (PMD) layer\r\nand GPON/XGPON transmission convergence (TC) layer. TC layer consists of two sub-layers: TC\r\nframing sublayer and TC adaptation sublayer. TC layer should be used GEM package that provides\r\ntwo types of interfaces for its customers layers: GEM client interface and ONU management and\r\ncontrol interface (OMCI).\r\n'),
('3.1.1', 'PMD Sublayer', 'PMD sublayer GPON system must comply with G.984.2 & PMD sublayer XGPON system must\r\ncomply with G.987.2. GPON/XGPON system should be used in accordance with the requirements of\r\nITU-T G.652 single-mode fiber.\r\nGPON system Bidirectional system, uplink and downlink should use different wavelengths, the center\r\nwavelength of the downstream channel is 1490nm and the wavelength range is 1480nm ~ 1500nm.\r\nGPON of PON-side optical interface must support the Class B +, the center wavelength of the\r\nupstream channel is 1310nm, the wavelength range of 1290 ~ 1330nm, the remaining parameters of\r\nthe optical interface should comply with the relevant requirements of G.984.2 Amd1. Recommends\r\nsupport for Class C +, the center wavelength upstream channel is 1310nm, the wavelength range of\r\n1290 ~ 1330nm, the specific parameters of the optical interface should comply with the relevant\r\nrequirements of G.984.2 Amd2.\r\nGPON system should support downlink 2488.32 Mbit/s, upstream 1244.16 Mbit/s transmission bit\r\nrate.\r\nXGPON system Bidirectional system, uplink and downlink should use different wavelengths, the\r\ncenter wavelength of the downstream channel is 1577 nm and the wavelength range is 1575nm ~\r\n1580nm.\r\nXGPON of PON-side optical interface must support the Class N1, the center wavelength of the\r\nupstream channel is 1270 nm, the wavelength range of 1260 ~ 1280 nm, the remaining parameters of\r\nthe optical interface should comply with the relevant requirements of G.987.2.\r\nXGPON system should support downlink 9.95328 Gbit/s, upstream 2.48832 Gbit/s transmission bit\r\nrate.\r\n'),
('3.1.2', 'TC Sublayer', 'TC sublayer GPON system must comply with G.984.3 & TC sublayer XGPON system must comply\r\nwith G.987.3.\r\nONU\'s OMCC channel Alloc-ID should be the same as the value of ONU-ID, and within the range of 0\r\nto 253. ONU should support emergency (O7). When the ONU receives Disable_Serial_Number\r\nmessage should be transferred to the active state and closed state laser O7; if you can not\r\nsuccessfully switch to O7 state, OLT should be reported to the alarm. O7 status in ONU reboot should\r\nremain at O7 state, if not enter O7 state ONU, OLT should be reported to the alarm.\r\nONU reported REI interval The default value is 10s, and after entering the O5 state ONU, OLT\r\nconfiguration by BER Interval message REI reporting interval.\r\n'),
('3.2', 'OMCI Sublayer', 'The specific requirements of GPON/XGPON system OMCI must comply with ITU-T G.984.4, G.988\r\nregulations, G.984.4 Implementer\'s Guide(V2.0). These two basic layer 2 services can be used in\r\nvarious combinations to achieve different overall connectivities.\r\nThere are three major functional styles of layer 2 connectivity, as follow:\r\n· N:1 bridging, where a bridge is used to serve multiple UNI ports from a single ANI service.\r\n· 1:M mapping, where a mapper is used to serve a single UNI with multiple ANI\r\nconnections, based on 802.1p priorities.\r\n· 1:P filtering, where a bridge with filters is used to serve a single UNI with multiple ANI\r\nconnections, based on some VLAN information other than 802.1p priorities.\r\nGiven these three basic possibilities, there are also four more complex combinations as well (N:M\r\nbridge mapping, 1:MP map filtering, N:P bridge filtering and N:MP bridge-map-filtering).\r\n'),
('3.2.1', 'GTC Messages', 'OMCI Message Format\r\nOMCI messages are strictly limited in length and format. Specifically, the length is consistently 53 bytes and\r\nthe length of the OMCI data unit is 48 bytes. Figure 6-6 shows the OMCI message format.\r\nGEM Header: includes GEM payload, GEM port ID, payload type indicator (PTI), and header error control\r\n(HEC).\r\nTransaction Correlation Identifier: The value of this field must be the same in a request and the response to\r\nthis request. The highest order of this field indicates the priority of an OMCI message. Value 0 indicates a\r\nlow priority and value 1 indicates a high priority.\r\nMessage type:\r\n− DB: a destination bit, which is consistently 0.\r\n− AR: an acknowledge request, indicating whether an OMCI message requires the response from the\r\npeer end. Value 0 indicates that the response is not required and value 1 indicates that the response\r\nis required.\r\n− AK: acknowledgement, indicating whether an OMCI message is a response. Value 0 indicates not and\r\nvalue 1 indicates yes.\r\n− MT: message type, which supports up to 32 message types, including Create, Delete, Set, Get, and\r\nMIB upload. In ITU-T Recommendation G.984.4, message types 4 through 28 are used and other\r\nmessage types are reserved.\r\nDevice identifier: The value of this field is consistently 0xA.\r\nMessage Identifier: a 2-byte entity or instance ID.\r\nMessage Contents: packet payload.\r\nOMCI trailer: Two bytes are consistently 0, two bytes are packet length 0x28, and four bytes are CRCs.\r\nOMCI Management\r\nThe OLT controls the ONT using the OMCI. The OMCI protocol allows the OLT to:\r\n· Establish and release connections with the ONT.\r\n· Manage the UNIs on the ONT.\r\n· Request configuration information and performance statistics.\r\n· Autonomously inform the system administrator of events, such as link failures.\r\nThe OMCI protocol runs over a GEM connection between the OLT controller and the ONT controller. The\r\nGEM connection is established during ONT initialization. The OMCI protocol is asynchronous: the OLT\r\ncontroller is the master and the ONT controller is the slave. A single OLT controller using multiple protocol\r\ninstances over separate control channels can control multiple ONTs.\r\nThe OLT manages the ONT using OMCI in the following aspects:\r\n· Configuration management: Controls and identifies the ONT, and collects data from and provides\r\ndata to the ONT.\r\n· Fault management: Supports limited fault management. Most of the operations are limited to failure\r\nindication.\r\n· Performance management: Collects and queries performance statistics.\r\n· Security management: Enables/Disables downstream encryption.\r\n'),
('3.2.2', 'Downstream Message Definition', ''),
('3.2.3', 'Upstream Message Definition', ''),
('3.2.4', 'ONT Activation', 'ONT activation shall comply the seven ONU states is defined as follows:\r\na) Initial state (O1) : The ONU powers up in this state. LOS/LOF is asserted. Once\r\ndownstream traffic is received, LOS and LOF are cleared, the ONU moves to the Standby\r\nstate (O2).\r\nb) Standby state (O2) : Downstream traffic is received by the ONU. The ONU waits for global\r\nnetwork parameters. Once the Upstream_Overhead message is received, the ONU\r\nconfigures these parameters (e.g., delimiter value, power level mode and pre-assigned\r\ndelay) and moves to the Serial Number state (O3).\r\nc) Serial_Number state (O3) : By responding to the serial number requests sent out by the\r\nOLT, the ONU makes itself known to the OLT and allows the OLT to discover the ONU\'s\r\nserial number. Once the ONU has responded to a serial number request, it waits for the\r\nunique ONU-ID assignment from the OLT. The ONU-ID is assigned using the\r\nAssign_ONU-ID message. Once assigned, the ONU moves to the Ranging state (O4).\r\nd) Ranging state (O4) : The upstream transmission from the different ONUs must be\r\nsynchronized with the upstream GTC frame boundaries. In order to make the ONUs\r\nappear to be at an equal distance from the OLT, an equalization delay per ONU is\r\nrequired. This equalization delay is measured when the ONU is in the Ranging state.\r\nOnce the ONU receives the Ranging_Time message, it moves to the Operation state\r\n(O5).\r\ne) Operation state (O5) : Once in this state, the ONU can send upstream data and PLOAM\r\nmessages as directed by the OLT. Additional connections can be established with the\r\nONU as required while in this state. Once the network is ranged, and all the ONUs are\r\nworking with their correct equalization delay, all upstream bursts will be synchronized\r\ntogether between all the ONUs.\r\nf) POPUP state (O6) : The ONU enters this state from the Operation state (O5) following the\r\ndetection of LOS or LOF alarms. When entering the POPUP state (O6), the ONU\r\nimmediately stops upstream transmission. As a result, the OLT will detect an LOS alarm\r\nfor that ONU. In the case of a break in the fibre ODN, there will be multiple ONUs that\r\nenter the POPUP state.\r\ng) Emergency Stop state (O7) : An ONU that receives a Disable_Serial_Number message\r\nwith the \'disable\' option moves to the emergency stop state (O7) and shuts its laser off.\r\nDuring emergency stop, the ONU is prohibited from sending data in the upstream\r\ndirection.\r\nONT activation using SN validated, based on flow diagram of the ONT activation on O3 state OLT\r\nshall allow valid SN format from ONT.\r\nTELKOM will input all ONT’s Vendor ID data on a whitelist at NOSS database. OLT will sync with that\r\ndatabase during ONT activation, OLT shall allow connection from any vendors ONT with valid ONT’s\r\nVendor ID which is listed on the whitelist.\r\n'),
('3.2.5', 'Serial Number', 'Refer to Serial_Number state (O3) By responding to the serial number requests sent out by the OLT,\r\nthe ONU makes itself known to the OLT and allows the OLT to discover the ONU\'s serial number.\r\nOnce the ONU has responded to a serial number request, it waits for the unique ONU-ID assignment\r\nfrom the OLT. The ONU-ID is assigned using the Assign_ONU-ID message. Once assigned, the ONU\r\nmoves to the Ranging state (O4). This process is crucial during ONT activation, for format serial\r\nnumber ONU shall refer to serial number format based on table 1 below.\r\n'),
('3.3', 'ONT MIB Audit And Ranging', 'ONT Ranging process & MIB Audit is separated into two distinct processes: New ONT and Old\r\nONT. The definition of new ONT vs. old ONT is based on the status of the ONT as viewed by the\r\nOLT\r\n'),
('3.3.1', 'OMCI Managed Entities', 'The ONU Management and Control lnterface (OMCI), as specified in G.984.4/G.988, is used to\r\nprovide an information path between OLT and ONT to exchange Operation, Administration, and\r\nMaintenance (OAM) information. This information is conveyed in the form of Managed Entities (MEs)\r\nthat can be classified as standard MEs (standard MEs and standard MEs that are open to\r\ninterpretation) and for proprietary vendor specific MEs shall declare to TELKOM with detail\r\nexplanation.\r\nIn addition to the OMCI Implementation Guide below describing the OMCI standard MEs, the ME\r\ndetail explanation based on grouping to relate TELKOM services are provided in Chapter 3 of this\r\ndocument.\r\nAny supplier must utilize TELKOM MEs for its explicit purpose, for example, no updates should be\r\nmade to any ME attribute except that is explicitly defined in this TELKOM Interoperability\r\nSpecification. The mandatory supported MEs are identified in Table 2.\r\n'),
('3.3.2', 'Remote Management', 'For OAM function based on figure 2, both OMCI & ACS use based on specific function, OMCI for ONT\r\nfunction & ACS for RG function. How to differentiate both function on ONT can refer to diagram block\r\nbelow.\r\n');

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
-- Indexes for table `aktivitas`
--
ALTER TABLE `aktivitas`
  ADD PRIMARY KEY (`id_aktivitas`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `stel_135`
--
ALTER TABLE `stel_135`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `stel_136`
--
ALTER TABLE `stel_136`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `stel_137`
--
ALTER TABLE `stel_137`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktivitas`
--
ALTER TABLE `aktivitas`
  MODIFY `id_aktivitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
