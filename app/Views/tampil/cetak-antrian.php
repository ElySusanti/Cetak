<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Cetak Antrian</title>
</head>

<body>
    <div class="container">
        <a class="btn btn-outline-primary mt-3" href="/Home" role="button">Back</a>
        <h3 style="text-align:center; margin-top:7px">Cetak Antrian</h3>
        <table class="table table-bordered my-3" style="border: 1px; color: black; width: 100%;">
            <thead>
                <tr style="text-align:center; vertical-align:middle;">
                    <th scope="col">No</th>
                    <th scope="col">No. Registrasi</th>
                    <th scope="col">No. Tiket</th>
                    <th scope="col">Diantar Oleh</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Urutan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($json as $data) : ?>
                    <tr style="vertical-align:middle">
                        <th scope="row" style="text-align:center"><?= $i++; ?></th>
                        <td><?= $data['no_registration']; ?></td>
                        <td><?= $data['ticket_no']; ?></td>
                        <td><?= $data['diantar_oleh']; ?></td>
                        <td><?= $data['visitor_address']; ?></td>
                        <td><?= $data['urutan']; ?></td>
                        <td>
                            <a class="btn btn-primary my-3" href="cetak1" role="button">Cetak</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>