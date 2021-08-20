<head>
<link rel="stylesheet" href="/css/style.css">
</head>
    <div class="Container_tambah"> <h1 class="h1_tambah">Tambah DHU</h1>
        <form method="POST" action="<?php echo base_url('tambahdhu/insertdhu')?>">
            <div class="container_box">
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
            <?php foreach($penguji as $l){ ?>
            <option value="<?= $l['id_user']; ?>"><?= $l['nama']; ?></option>
            <?php } ?>
            </select>
            <br><br>

            <label>Penguji ke-2</label>
            <select name="penguji2">
            <?php foreach($penguji as $l){ ?>
            <option value="<?= $l['id_user']; ?>"><?= $l['nama']; ?></option>
            <?php } ?>
            </select>
            <br><br>
                </div>
            </div>

            

            <h2 class="h2_tambah">Pratinjau DHU</h2></div>
            <div name="stel_135" id="stel_135" class="pratinjau">
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
                    foreach ($stel_135 as $r) {
                        echo "<tr>";
                        echo "<td>" . $r['no'] . "</td><td></td><td>" . $r['item_uji'] . "</td><td>" . $r['spesifikasi'] . "</td><td></td><td></td>";
                        echo "</tr>";
                    }
                    ?>

                </table>
            </div>

            <div name="stel_136" id="stel_136" class="pratinjau">
                <table>

                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Item Uji</th>
                        <th>Spesifikasi</th>
                        <th>Hasil Uji</th>
                        <th>Ketidakpastian</th>
                    </tr>

                    <?php
                    foreach ($stel_136 as $r) {
                        echo "<tr>";
                        echo "<td>" . $r['no'] . "</td><td></td><td>" . $r['item_uji'] . "</td><td>" . $r['spesifikasi'] . "</td><td></td><td></td>";
                        echo "</tr>";
                    }
                    ?>

                </table>
            </div>

            <div name="stel_137" id="stel_137" class="pratinjau">
                <table>

                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Item Uji</th>
                        <th>Spesifikasi</th>
                        <th>Hasil Uji</th>
                        <th>Ketidakpastian</th>
                    </tr>

                    <?php
                    foreach ($stel_137 as $r) {
                        echo "<tr>";
                        echo "<td>" . $r['no'] . "</td><td></td><td>" . $r['item_uji'] . "</td><td>" . $r['spesifikasi'] . "</td><td></td><td></td>";
                        echo "</tr>";
                    }
                    ?>

                </table>
            </div>

           <div class="container_button">
                <input class="button_tambah button1" type="submit" value="Submit">
           </div>
        </form>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

    $(document).ready(function(){
        $("#stel").on('change', function(){
            // alert($(this).val());
            $(".pratinjau").hide();
            $("#" + $(this).val()).fadeIn(800);
        }).change();
    });

    // function changeFormat() {
    //     var x = document.getElementById("stel").value;
    //     if (x == "STEL Q-084-2019") {
    //         document.getElementById("pratinjau").style.visibility = "visible";
    //         // document.getElementById("pratinjau").innerHTML = '<?php
    //         //     foreach ($stel_135 as $r) {
    //         //         echo "<tr>";
    //         //         echo "<td>" . $r['no'] . "</td><td></td><td>" . $r['item_uji'] . "</td><td>" . $r['spesifikasi'] . "</td><td></td><td></td>";
    //         //         echo "</tr>";
    //         //     }
    //         //     ?>';
    //         document.write('<?php
    //             foreach ($stel_135 as $r) {
    //                 echo "<tr>";
    //                 echo "<td>" . $r['no'] . "</td><td></td><td>" . $r['item_uji'] . "</td><td>" . $r['spesifikasi'] . "</td><td></td><td></td>";
    //                 echo "</tr>";
    //             }
    //             ?>');
    //     } else if (x == "STEL Q-091-2020"){
    //         document.getElementById("pratinjau").style.visibility = "visible";
    //         document.write('<?php
    //             foreach ($stel_136 as $r) {
    //                 echo "<tr>";
    //                 echo "<td>" . $r['no'] . "</td><td></td><td>" . $r['item_uji'] . "</td><td>" . $r['spesifikasi'] . "</td><td></td><td></td>";
    //                 echo "</tr>";
    //             }
    //             ?>');
    //     } else {
    //         document.getElementById("pratinjau").style.visibility = "visible";
    //         document.getElementById("pratinjau").innerHTML = '<?php
    //             foreach ($stel_137 as $r) {
    //                 echo "<tr>";
    //                 echo "<td>" . $r['no'] . "</td><td></td><td>" . $r['item_uji'] . "</td><td>" . $r['spesifikasi'] . "</td><td></td><td></td>";
    //                 echo "</tr>";
    //             }
    //             ?>';
    //     }
        
    // }
</script>
</body>
</html>