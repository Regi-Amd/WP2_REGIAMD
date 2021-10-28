<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
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
        <legend>Input Transaksi</legend>

        <form method="post">
            <table>
                <tr>
                    <th>Nama Pembeli</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                        <?= form_error('nama', '<br><span style="color:red;
                        ">','</span>'); ?>
                    </td>
                </tr>

                <tr>
                    <th>Nomer HP</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nhp" id="nhp">
                        <?= form_error('nhp', '<br><span style="color:red;
                        ">','</span>'); ?>
                    </td>
                </tr>

                <tr>
                    <th>Merk Sepatu</th>
                    <td>:</td>
                    <td>
                        <select name="merk" id="merk">
                            <option>--PILIH--</option>
                            <option value="Nike">Nike</option>
                            <option value="Adidas">Adidas</option>
                            <option value="Kicker">Kicker</option>
                            <option value="Eiger">Eiger</option>
                            <option value="Bucherri">Bucherri</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Ukuran Sepatu</th>
                    <td>:</td>
                    <td>
                        <select name="ukuran" id="ukuran">
                            <option>--PILIH--</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan="3" align="center">
                        <hr>
                        <button type="submit">Simpan</button>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>