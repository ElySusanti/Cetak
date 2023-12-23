<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Halaman Dashboard</title>
</head>

<body>
    <div class="container-fluid" style="background-color: #102C57; height: 110px; opacity:90%; color:white;">
        <div class="row">
            <div class="col-md-1 mt-2">
                <img src="/img/logo.png" alt="" style="width: 70px;"> &nbsp;&nbsp;&nbsp;
            </div>
            <div class="col mt-2">
                <h4>RSUD Dr. M Yunus Bengkulu<br>Badan Layanan Umum Daerah<br></h4>
                <h5>Jl. Bhayangkara Bengkulu38229 Tlp. (0736) 52004 - 51111 Fax. (0736) 52007</h5>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
            <div class="col">
                <div class="card border-primary" style="max-width: 20rem; opacity:90%">
                    <div class="card-header">Cetak Antrian</div>
                    <div class="card-body">
                        <h5><a href="Home/tampil1" class="list-group-item list-group-item-action">Cetak Antrian</a></h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-primary" style="max-width: 20rem; opacity:100%">
                    <div class="card-header">Tagihan Pendaftaran</div>
                    <div class="card-body">
                        <h5><a href="Home/tampil2" class="list-group-item list-group-item-action">Tagihan Pendaftaran</a></h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-primary" style="max-width: 20rem; opacity:90%">
                    <div class="card-header">Form Rekam Medis</div>
                    <div class="card-body">
                        <h5><a href="Home/tampil3" class="list-group-item list-group-item-action">Form Rekam Medis</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>