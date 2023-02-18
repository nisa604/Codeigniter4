<?php
/**
 * @Author: Your name
 * @Date:   2023-02-06 14:52:19
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-02-06 15:21:59
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Mahasiswa</title>
</head>
<body>
    <form action="/mahasiswa/save" method="post">
        <p for="">Add Mahasiswa </p>
        <label for="">NIM : </label>
        <input type="text" name="nim">
        <br>
        <br>
        <label for="">Nama : </label>
        <input type="text" name="nama">
        <br>
        <br>
        <label for="">Umur : </label>
        <input type="text" name="umur">
        <br>
        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>