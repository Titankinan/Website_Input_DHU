<!DOCTYPE html>
<html>
<head>
    <!-- <link rel="stylesheet" href="/css/style.css"> -->
    <script src="https://unpkg.com/pagedjs/dist/paged.polyfill.js"></script>
</head>

<style>
.empty-header, .empty-footer {
    height:100px;
}

.header, .footer {
    position: fixed;
    height:100px;
}

.header{
    top: 0;
}

.footer {
    bottom:0;
}
.empty-header{
    flex: 1;
}

thead{
    position: running(titleRunning);
    border: 1px solid black;
}

.label2 {
    display: inline-block;
    width: 140px;
}

html *{
   font-family: Calibri !important;
}

.act{
    border: 1px solid black;
    border-collapse: collapse;
    width: 100%;
}

.act2{
    border: 1px solid black;
    border-collapse: collapse;
    width: 100%;
    margin-top: 20px;
}

.actrow{
    /* border: 1px solid black; */
    border-right: 1px solid black; 
    border-left: 1px solid black;
    border-collapse: collapse;
}

.actrow2{
    border: 1px solid black;
    border-collapse: collapse;
}

@page {

    size: A4 landscape;

    margin-top: 150px;

    @bottom-left {
        content: 'Hal ' counter(page) ' dari ' counter(pages);
    }

    @bottom-right {
        content: 'TLKM06/F/001 Versi 01';
    }

    @top-left{
        margin-top: 17px;
        content: element(titleRunning);
    }

  

}

</style>

<table>
    <thead>
        <td>
            <div class=“empty-header“>
                <div class="block">
                    <label class="label2">SPK</label>
                    <label class="">: <?= $detail["spk"]; ?></label>
                </div>
                <div class="block">
                    <label class="label2">PERANGKAT</label>
                    <label class="">: <?= $detail["perangkat"]; ?></label>
                </div>
                <div class="block">
                    <label class="label2">MERK</label>
                    <label class="">: <?= $detail["merk"]; ?></label>
                </div>
                <div class="block">
                    <label class="label2">TIPE</label>
                    <label class="">: <?= $detail["tipe"]; ?></label>
                </div>
                <div class="block">
                    <label class="label2">NOMOR SERI</label>
                    <label class="">: <?= $detail["noseri"]; ?></label>
                </div>
            </div>
        </td>
    </thead>

    <tbody>
        <tr>
            <td>
                <div class=“content“>
                
                    <table id="aktifitas" class="act">

                    <tr class="act">
                        <th class="actrow">No</th>
                        <th class="actrow">Tanggal</th>
                        <th class="actrow">Aktivitas</th>
                        <th class="actrow">Suhu/Kelembaban/Tegangan</th>
                        <th class="actrow">Ket</th>
                    </tr>

                    <?php
                    $i = 1;
                    foreach ($aktivitas as $a) : ?>
                        <tr>
                            <td class="actrow"><?= $i ?></td>
                            <td class="actrow"><?= $a['tanggal'] ?></td>
                            <td class="actrow"><?= $a['activity'] ?></td>
                            <td class="actrow"><?= $a['kondisi_awal'] ?></td>
                            <?php
                            if ($a['id_user'] == $penguji1["id_user"]) {
                            ?>
                                <td><?= $penguji1["nama"] ?></td>
                            <?php
                            } else {
                            ?>
                                <td><?= $penguji2["nama"] ?></td>
                            <?php
                            }
                            ?>
                        </tr>
                    <?php
                        $i = $i + 1;
                    endforeach;
                    ?>

                    </table>

                    <table class="act2">

                    <tr>
                        <th class="actrow">No</th>
                        <th class="actrow">Tanggal</th>
                        <th class="actrow">Item Uji</th>
                        <th class="actrow">Spesifikasi</th>
                        <th class="actrow">Hasil Uji</th>
                        <th class="actrow">Ket.</th>
                    </tr>

                    <?php
                    // $variabel = 0;
                    function searchForId($id, $array) {
                        foreach ($array as $key) {
                            if ($key['no'] == $id) {
                                return $key;
                            }
                        }
                        return null;
                    }
                    $j = 1;
                    foreach ($stel as $r) : 
                        $find = searchForId($r['no'], $uji);
                        if ($find != null) :?>
                            <tr>
                                <td class="actrow2"><?= $find['no']; ?></td>
                                <td class="actrow2"><?= $find['tanggal']; ?></td>
                                <td class="actrow2"><?= $r['item_uji'] ?></td>
                                <td class="actrow2"><?= $r['spesifikasi'] ?></td>
                                <!-- <td><input type="text"></td> -->
                                <td class="actrow2"><?= $find['hasil_uji']; ?></td>
                                <?php
                                if ($find['id_user'] == $penguji1["id_user"]) {
                                ?>
                                    <td class="actrow2"><img src="/paraf/<?=$penguji1['paraf']?>" style="width:50px;height:50px;"></td>
                                <?php
                                } else {
                                ?>
                                    <td class="actrow2"><img src="/paraf/<?=$penguji2['paraf']?>" style="width:50px;height:50px;"></td>
                                <?php
                                }
                                ?>
                                
                            </tr>
                        <?php
                        endif;?>
                        
                    <?php endforeach; ?>
                    <!-- echo "<tr>";
                            echo "<td>" . $r['no'] . "</td><td></td><td>" . $r['item_uji'] . "</td><td>" . $r['spesifikasi'] . "</td><td></td><td></td>";
                            echo "</tr>"; -->

                    </table>
                </div>
            </td>
        </tr>
    </tbody>

    <tfoot>
        <div class=”empty-footer”>
            
        </div>
    </tfoot>
</table>

<div class=”header”></div>
<div class=”footer”></div>

<!-- <script src="js/paged.polyfill.js"></script> -->
<script type="text/javascript">
    const sleep = (milliseconds) => {
        return new Promise(resolve => setTimeout(resolve, milliseconds))
    }

    window.onload = function(){ 
        sleep(1000).then(() => {
            window.print();
        })
    }
</script>
</html>