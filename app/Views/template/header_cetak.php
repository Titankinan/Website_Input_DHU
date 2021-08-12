<!DOCTYPE html>
<html lang="en">
<head>

<style>
/* Styles go here */

.page-header, .page-header-space {
  height: 100px;
}

.page-footer, .page-footer-space {
  height: 50px;

}

.page-footer {
  position: fixed;
  bottom: 0;
  width: 100%;
  border-top: 1px solid black; /* for demo */
  background: yellow; /* for demo */
}

.page-header {
  /* position: fixed; */
  top: 0mm;
  width: 100%;
  border-bottom: 1px solid black; /* for demo */
}

.page {
  page-break-after: always;
}

@page {
  margin: 20mm
}

@media print {
   thead {display: table-header-group;} 
   tfoot {display: table-footer-group;}
   
   button {display: none;}
   
   body {margin: 0;}
}
</style>

    <link rel="stylesheet" href="/css/style.css">
    <div class="page-header">
        <div class="block">
            <label class="">SPK</label>
            <label class=""><?= $detail["spk"]; ?></label>
        </div>
        <div class="block">
            <label class="">PERANGKAT</label>
            <label class=""><?= $detail["perangkat"]; ?></label>
        </div>
        <div class="block">
            <label class="">MERK</label>
            <label class=""><?= $detail["merk"]; ?></label>
        </div>
        <div class="block">
            <label class="">TIPE</label>
            <label class=""><?= $detail["tipe"]; ?></label>
        </div>
        <div class="block">
            <label class="">NOMOR SERI</label>
            <label class=""><?= $detail["noseri"]; ?></label>
        </div>
    </div>

</head>