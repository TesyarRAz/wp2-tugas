<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Prog II | Merancang Template Sederhana</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/stylebuku.css') ?>">
</head>
<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>RentalBuku.net</h1>
                <h3>Membuat template sederhana</h3>
            </hgroup>
            <nav>
                <ul>
                    <li>
                        <a href="<?= site_url('web') ?>">Home</a>
                        <a href="<?= site_url('web/about') ?>">About</a>
                    </li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>