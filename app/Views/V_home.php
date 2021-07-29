<head>
<link rel="stylesheet" href="/css/style.css">
</head>
<!-- <head>
<style>
    h1 {
        font-family: Gordita;
        font-weight: medium;
        font-size: 2rem;
        /* text-align: center; */
       
    }

    .container{
        padding: 50px;

    }

    .button {
        background-color: #6935FD;
        border: none;
        color: white;
        padding: 8px 32px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        /* margin: 4px 2px; */
        margin-left: auto;
        display: block;
        transition-duration: 0.4s;
        cursor: pointer;
        font-family: Gordita;
        }

    .button3{
        background-color: #6935FD;
        border: none;
        color: white;
        padding: 8px 32px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        /* margin: 4px 2px; */
        margin-left: auto;
        display: block;
        transition-duration: 0.4s;
        cursor: pointer;
        font-family: Gordita;
        width: 7rem;
        margin-bottom: 3rem;
    }


    .button1 {
        background-color: white; 
        color: black; 
        border: 2px solid #6935FD;
    }

    .button1:hover {
        background-color: #6935FD;
        color: white;
        font-family: Gordita;
    }

    .button2 {
        background-color: rgba(145, 111, 243, 0.1); 
        color: black; 
        border: 2px solid #6935FD;
    }

    .button2:hover {
        background-color: #6935FD;
        color: white;
        font-family: Gordita;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
</style>
</head> -->
        <div class="Container_home">
        <h1 class="h1_home">List Laporan DHU</h1>
        <a class="button1 button3" href="<?php echo base_url('tambahdhu')?>")>Tambah DHU</a>
        <table>
            <tr>
                <th>No</th>
                <th>Nomor SPK</th>
                <th>Laboratorium</th>
                <th>Jenis Pengujian</th>
                <th>Perusahaan</th>
                <th>Device</th>
                <th>Status SPK</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <td>1</td>
                <td>004/101/QA/2021</td>
                <td>Laboratorium Energi</td>
                <td>Quality Assurance</td>
                <td>PT. Kaya Jaya</td>
                <td>Optical Cord Bundle</td>
                <td><img src="/paraf/<?=$user_info['paraf']?>" style="width:50px;height:50px;"></td>
                <td><a class="button_land button1" href="">Mulai Uji</a></td>
            </tr>
        </table>
        </div>
</body>
</html>