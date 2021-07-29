<head>
<link rel="stylesheet" href="/css/style.css">
</head>
    <div class="Container_tambah"> <h1 class="h1_tambah">Input DHU</h1>
        <form method="POST" action="<?php echo base_url('inputdhu/save')?>">
            <div class="container_box">
                <div class="box">
                    <input class="button_tambah button1" type="submit" name="action" value="Save">
                    <input class="button_tambah button1" type="submit" name="action" value="Submit">
                    <input type="text" style="display:none;" name="id_laporan" value="<?=$id_laporan;?>">
                    <!-- <label ><?=$id_laporan;?></label> -->
                    <label>SPK</label>
                    <input type="text" class="" name="spk" value="<?=$detail["spk"];?>"><br>
                    <label>PERANGKAT</label>
                    <input type="text" class="" name="perangkat" value="<?=$detail["perangkat"];?>"><br>
                    <label>MERK</label>
                    <input type="text" class="" name="merk" value="<?=$detail["merk"];?>"><br>
                    <label>TIPE</label>
                    <input type="text" class="" name="tipe" value="<?=$detail["tipe"];?>"><br>
                    <label>NOMOR SERI</label>
                    <input type="text" class="" name="noseri" value="<?=$detail["noseri"];?>"><br>
                </div>  

            </div>
    </div>
            <hr style="width:85%">
    <div class="Container_tambah">
            <div class="container_box">
                <table>

                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Aktivitas</th>
                        <th>Suhu/Kelembaban/Tegangan</th>
                        <th>Ket</th>
                    </tr>

                    <tr>
                        <th></th>
                        <th><input type="date" class="intable" name="tanggal" value=""></th>
                        <th><input type="text" class="intable" name="activity" value=""></th>
                        <th><input type="text" class="intable" name="kondisi_awal" value=""></th>
                        <th><select name="penguji1">
                            <option value="<?= $detail["penguji1"]; ?>"><?= $penguji1["nama"]; ?></option>
                            <option value="<?= $detail["penguji2"]; ?>"><?= $penguji2['nama']; ?></option>
                            </select>
                        </th>
                    </tr>

                </table>
            </div>
    </div>
            <!-- <div class="container_box">
                <div class="box">
                <label>Pilih STEL</label>
            <select name="stel" id="stel" onchange="changeFormat()">
                <option value="stel_135">STEL Q-084-2019</option>
                <option value="stel_136">STEL Q-091-2020</option>
                <option value="stel_137">STD F-025-2018</option>
            </select>
            <br><br>
                </div>
                <div class="box">
                <label>Penguji ke-1</label>
            <select name="penguji1">
            <option value="test">test</option>
            </select>
            <br><br>

            <label>Penguji ke-2</label>
            <select name="penguji1">
            <option value="test2">test2</option>
            </select>
            <br><br>
                </div>
            </div>

           <div class="container_button">
                <input class="button_tambah button1" type="submit" value="Submit">
           </div> -->
        </form>
    </div>

</body>
</html>