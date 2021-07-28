<head>
<style>
    h1 {
        font-family: Gordita;
        font-weight: medium;
        font-size: 2rem;
        /* text-align: center; */
        padding-top: 50px;
        padding-left: 50px
    }

    .button {
        background-color: #6935FD;
        border: none;
        color: white;
        padding: 8px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        /* margin: 4px 2px; */
        margin-left: auto;
        display: block;
        margin-top: 4px;
        margin-right: 5rem;
        transition-duration: 0.4s;
        cursor: pointer;
        font-family: Gordita;
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
</head>
        <h1>Tambah DHU</h1>
        <form action="/action_page.php">
            <label>Pilih STEL</label>
            <select name="stel" id="stel" onchange="changeFormat()">
                <option value="STEL Q-084-2019">STEL Q-084-2019</option>
                <option value="STEL Q-091-2020">STEL Q-091-2020</option>
                <option value="STD F-025-2018">STD F-025-2018</option>
            </select>
            <br><br>

            <label>Penguji ke-1</label>
            <select name="penguji1">
            <?php foreach($penguji as $l){ ?>
                <option value="<?= $l['nama']; ?>"><?= $l['nama']; ?></option>
            <?php } ?>
            </select>
            <br><br>

            <label>Penguji ke-2</label>
            <select name="penguji1">
            <?php foreach($penguji as $l){ ?>
                <option value="<?= $l['nama']; ?>"><?= $l['nama']; ?></option>
            <?php } ?>
            </select>
            <br><br>

            <p>Pratinjau DHU</p>
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
                foreach ($stel as $r) {
                    echo "<tr>";
                    echo "<td>" . $r['no'] . "</td><td></td><td>" . $r['item_uji'] . "</td><td>" . $r['spesifikasi'] . "</td><td></td><td></td>";
                    echo "</tr>";
                }
                ?>
            </table>

            <input type="submit" value="Submit">
        </form>
    </div>

<script>
    function changeFormat() {
        var x = document.getElementById("stel").value;
        document.getElementById("pratinjau").innerHTML = x;
    }
</script>
</body>
</html>