<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    .text {
        border: 1;
        border-radius: 10px;
        width: 65%;
        background-color: #f1f1f1;
        margin: 50px auto 20px;
        padding: 30px 0;
        /* height: 200px; */
    }

    .content {
        margin: 0 auto 100px !important;
        text-align: center;
        border: 1;
        border-radius: 10px;
        width: 65%;
        background-color: #f1f1f1;
        padding: 50px;
    }

    h1,
    p {
        text-align: center;
    }

    p {
        margin-top: 20px;
    }

    input[type=number] {
        margin: 20px auto 0;
        width: 50%;
    }

    input[type=submit] {
        box-sizing: border-box;
        margin-top: 30px;
    }
</style>

<body>

    <div class="text">
        <h1>Anda Telah Berhasil Login</h1>
    </div>

    <div class="content">
        <form method="get">
            <h3>Cek Indikator nilai</h3>
            <input type="number" placeholder="Nilai" name="nilai" class="form-control">
            <br>
            <input type="submit" class="btn btn-success px-5" value="Cek Nilai">

            <?php

            if (isset($_GET["nilai"])) {
                $nilai = $_GET["nilai"];
                hitungNilai($nilai);
            } else {
                $nilai = "Nilai belum diset di Method GET";
            }

            function hitungNilai($nilai)
            {

                if ($nilai < 60) {
                    echo "<p>Anda tidak lulus</p>";
                } else if ($nilai > 100) {
                    echo "<p>Nilai tidak valid</p>";
                } else if ($nilai >= 90) {
                    echo "<p>Nilai terpuji</p>";
                } else if ($nilai >= 80) {
                    echo "<p>Nilai sangat memuaskan</p>";
                } else {
                    echo "<p>Nilai memuaskan</p>";
                }
            }

            ?>
        </form>

    </div>

</body>

</html>