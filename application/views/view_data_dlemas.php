<html>

<head>
    <title>D-Lemas</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampilan Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <th>NIS</th>
                <td>:</td>
                <td>
                    <?= $nis; ?>
                </td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>:</td>
                <td>
                    <?= $kls; ?>
                </td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td>
                    <?= $tgllahir; ?>
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td>
                    <?= $alamat; ?>
                </td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td>
                    <?= $Jenkel; ?>
                </td>
            <tr>
                <th>Agama</th>
                <td>:</td>
                <td>
                    <?= $agama; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('dlemas');
                    ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>
