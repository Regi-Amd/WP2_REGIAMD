<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>WEB Prog II | Merancang Template sederhana dengan codeigniter</title>
    <link rel="stylesheet" type="text/css" href="<?php echo 
    base_url() ?><asset/css/stylebuku.css">
</head>
<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>RentalBuku.net</h1>
                <h3>Membuat Template Sederhana dengan CodeIgniter</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo
    base_url().'index.php/web' ?>">Home</a></li>
                    <li><a href="<?php echo
    base_url().'index.php/web/about' ?>">About</a></li>
                </ul>
            </nav>
        </header>
    </div>
</body>
</html>