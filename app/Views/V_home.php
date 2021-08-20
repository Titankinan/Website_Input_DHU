<head>
<link rel="stylesheet" href="/css/style.css">
</head>
        <div class="Container_tambah">
        <h1 class="h1_home">List DHU</h1>
        <a class="button1 button3" href="<?php echo base_url('tambahdhu')?>")>Tambah DHU</a>
        
        <div class="container_box">
        <div class="box">
        <table>
            <tr>
                <th>No</th>
                <th>Nomor SPK</th>
                <th>Stel</th>
                <th>Perangkat</th>
                <th>Merek</th>
                <th>Tipe</th>
                <th>Nomor Seri</th>
                <th>Aksi</th>
            </tr>

            <?php
                $i = 1;
                foreach ($laporan as $r) :?>
                    <tr>
                        <td><?=$i?></td>
                        <td><?=$r['spk']?></td>
                        <td><?=$r['id_stel']?></td>
                        <td><?=$r['perangkat']?></td>
                        <td><?=$r['merk']?></td>
                        <td><?=$r['tipe']?></td>
                        <td><?=$r['noseri']?></td>
                        <?php 
                            if ($r['aksi'] == "mulai"){
                                ?>
                                <td><a class="button button2" href="<?php echo base_url('inputdhu/input')."/".$r['id_laporan']?>">Mulai Uji</a></td>
                                <?php
                            }else{
                                ?>
                                <td><a class="button button2" href="<?php echo base_url('cetak/dhu')."/".$r['id_laporan']?>">Cetak DHU</a></td>
                                <?php
                            }
                        ?>
                    </tr>
            <?php 
                $i = $i + 1;
                endforeach;
            ?>

        </table>
        </div>
        </div>
        <!-- <table>
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
        </table> -->
        </div>
</body>
</html>