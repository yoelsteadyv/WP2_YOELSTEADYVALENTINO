<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Web Prog II | Merancang Template sederhana dengan Codeigniter</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/stylebuku.css') ?>">
</head>
<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>RentalBuku.net</h1>
                <h3>Membuat Template Sederhana dengan CodeIgniter 4</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?= base_url('web') ?>">Home</a></li>
                    <li><a href="<?= base_url('web/about') ?>">About</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>
