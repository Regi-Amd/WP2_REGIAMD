<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>

<style>
    fieldset{
        width: 40%;
        margin: 20px auto;
        border-radius: 5px;
    }

    select{
        width: 100%;

    }
</style>

<body>
    <fieldset>
        <legend>Output Transaksi</legend>

            <table>
                <tr>
                    <th>Nama Pembeli</th>
                    <td>:</td>
                    <td>
                        <?= $nama; ?>
                    </td>
                </tr>

                <tr>
                    <th>Nomer HP</th>
                    <td>:</td>
                    <td>
                       <?= $nhp ?>
                    </td>
                </tr>

                <tr>
                    <th>Merk Sepatu</th>
                    <td>:</td>
                    <td>
                        <?= $merk; ?>
                    </td>
                </tr>
                <tr>
                    <th>Ukuran Sepatu</th>
                    <td>:</td>
                    <td>
                       <?= $ukuran; ?>  
                    </td>
                </tr>

                <tr>
                    <th>Total Harga</th>
                    <td>:</td>
                    <td>
                       <?= $harga; ?>  
                    </td>
                </tr>


                <tr>
                    <td colspan="3" align="center">
                        <hr>
                        <button href="<?= base_url('review')?>">Kembali</button>
                    </td>
                </tr>
            </table>
    </fieldset>
</body>
</html>