<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta htto-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=deviec-width, initial-scale=1.0">
    <title>Detail Laporan</title>
    <style>
        .title{
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        }

        .title
        .tanggal{
            text-align: center;
            font-size: 24px;
            font-family: sans-serif;
        }

        #table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #table td,
        #table th {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 13px;
        }

        #table tr:hover {
            background-color: #ddd;
        }

        #table th{
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: left;
            background-color: #558595;
            color: white;
            font-size: 13px;
        }
    </style>
</head>
<body>
    
        <center>
            <h1>Laporan Barang </h1><h2>Yang Telah Diupload</h2>
        </center><hr>

    <table>
        <tr>
            <td class="tanggal">
                <?= $this->session->userdata('tgl_lelang_awal') ?> <?= $this->session->userdata('tgl_lelang_akhir'); ?>
            </td>
        </tr>
    </table>
<br><br>
    <table id="table">
        <tr>
            <th>Nama Barang</th>
            <th>Keterangan</th>
            <th>Harga Awal</th>
        </tr>
        <?php
        $CI =& get_instance();
        $CI->load->model('M_lelang');
        foreach ($barang as $b) : ?>
           
            <tr>
                <td><?= $b->nama_barang; ?></td>
                <td><?= $b->keterangan; ?></td>
                <td>Rp. <?= number_format($b->harga_awal, 2, ',',',') ?></td>
            </tr>
          
        <?php endforeach; ?>

    </table>
    <table width="100%">
        <tr>
            <td></td>
            <td width="200px">
                <p>Jember, <?= date("d M Y") ?> <br></p><br><br>
                <p>______________________</p>
            </td>
        </tr>
    </table>


</body>
</html>

<script>
    window.print();
</script>