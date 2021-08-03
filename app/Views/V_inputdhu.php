<head>
<link rel="stylesheet" href="/css/style.css">
</head>
    <div class="Container_tambah"> <h1 class="h1_tambah">Input DHU</h1>
        <form method="POST" action="<?php echo base_url('inputdhu/saveDet')?>">
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
        </form>
    </div>

    <hr style="width:85%">

    <div class="Container_tambah">
        <?php $x = 0;?>
        <form method="POST" action="<?php echo base_url('inputdhu/saveAct')?>">
            <input type="text" style="display:none;" id="row" name="row" value="asd">
            <input class="button_tambah button1" type="submit" name="action" value="Save">
                <div class="container_box">

                <input type="text" style="display:none;" name="id_laporan" value="<?=$id_laporan;?>">

                    <table id="aktifitas">

                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Aktivitas</th>
                            <th>Suhu/Kelembaban/Tegangan</th>
                            <th>Ket</th>
                            <th>Delete</th>
                        </tr>

                        <?php
                            $i = 1;
                            foreach ($aktivitas as $a) :?>
                                <tr>
                                    <td><?=$i?></td>
                                    <td><?=$a['tanggal']?></td>
                                    <td><?=$a['activity']?></td>
                                    <td><?=$a['kondisi_awal']?></td>
                                    <?php 
                                        if ($a['id_user'] == $penguji1["id_user"]){
                                            ?>
                                            <td><?=$penguji1["nama"]?></td>
                                            <?php
                                        }else{
                                            ?>
                                            <td><?=$penguji2["nama"]?></td>
                                            <?php
                                        }
                                    ?>
                                    <td><a class="button_tambah button1" href="<?php echo base_url('inputdhu/delete')."/".$a['id_aktivitas']?>">Delete</a></td>
                                </tr>
                        <?php 
                            $i = $i + 1;
                            endforeach;
                        ?>
                        <!-- <tr>
                            <td>1</td>
                            <td><input type="date" class="intable" name="tanggal" value=""></td>
                            <td><input type="text" class="intable" name="activity" value=""></td>
                            <td><input type="text" class="intable" name="kondisi_awal" value=""></td>
                            <td><select name="penguji1">
                                <option value="<?= $detail["penguji1"]; ?>"><?= $penguji1["nama"]; ?></option>
                                <option value="<?= $detail["penguji2"]; ?>"><?= $penguji2["nama"]; ?></option>
                                </select>
                            </td>
                        </tr> -->

                    </table>

                </div>
            <a class="button_tambah button1" onclick="myCreateFunction()">+</a>
        </form>

    </div>

    <hr style="width:85%">

    <div class="Container_tambah">
        <table>

            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Item Uji</th>
                <th>Spesifikasi</th>
                <th>Hasil Uji</th>
                <th>Ket.</th>
            </tr>

            <?php
                foreach ($stel as $r) :?>
                    <tr>
                        <td><?=$r['no']?></td>
                        <td><input type="date"></td>
                        <td><?=$r['item_uji']?></td>
                        <td><?=$r['spesifikasi']?></td>
                        <td><input type="text"></td>
                        <td><select name="penguji1">
                            <option value="<?= $detail["penguji1"]; ?>"><?= $penguji1["nama"]; ?></option>
                            <option value="<?= $detail["penguji2"]; ?>"><?= $penguji2["nama"]; ?></option>
                            </select>
                        </td>
                    </tr>

            <?php endforeach; ?>
                <!-- echo "<tr>";
                echo "<td>" . $r['no'] . "</td><td></td><td>" . $r['item_uji'] . "</td><td>" . $r['spesifikasi'] . "</td><td></td><td></td>";
                echo "</tr>"; -->

        </table>
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
        
    </div>

<script>
    var i = 0;
    var no = <?=$i - 1;?>;
    function myCreateFunction() {
                   
        no = no + 1;
        i = i + 1;
        var input = document.getElementById("row");
        input.value = i;
        var table = document.getElementById("aktifitas");
        var row = table.insertRow(-1);

        // var cell1 = row.insertCell(-1);
        // var div = document.createElement("input");
        // div.innerHTML = "Replace with description.";
        // cell1.appendChild(div);
        // let input1 = cell1.createElement("input");
        var cell1 = row.insertCell(0);
        cell1.innerHTML = no;

        var cell2 = row.insertCell(1);
        var div2 = document.createElement("input");
        div2.type = 'date';
        div2.name = 'tanggal'+i;
        cell2.appendChild(div2);

        var cell3 = row.insertCell(2);
        var div3 = document.createElement("input");
        div3.name = 'activity'+i;
        cell3.appendChild(div3);

        var cell4 = row.insertCell(3);
        var div4 = document.createElement("input");
        div4.name = 'kondisi_awal'+i;
        cell4.appendChild(div4);

        var cell5 = row.insertCell(4);
        var div5 = document.createElement("select");
        var option1 = document.createElement("option");
        var option2 = document.createElement("option");

        option1.value = '<?= $detail["penguji1"]; ?>';
        option1.text = '<?= $penguji1["nama"]; ?>';
        option2.value = '<?= $detail["penguji2"]; ?>';
        option2.text = '<?= $penguji2["nama"]; ?>';

        div5.appendChild(option1);
        div5.appendChild(option2);
        div5.name = 'id_user'+i;
        cell5.appendChild(div5);

        // cell2
        // var element = document.createElement("input");
        // element.appendChild(document.createTextNode('The man who mistook his wife for a hat'));
        // document.getElementById('lc').appendChild(element);
    }
</script>

</body>
</html>