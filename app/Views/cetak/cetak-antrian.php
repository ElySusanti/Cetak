<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak Antrian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="border: 1px solid black; width:250px; margin-left:0px;">
        <form action="">
            <div class="row mt-3" style="text-align:center">
                <div class="col">
                    <h5 class="fw-bolder"><u>RSUD Dr. M.YUNUS</u></h5>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="fw-bolder"><?php echo $json['diantar_oleh']; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="fst-normal"><?php echo $json['visitor_address']; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3 class="align-middle mt-2"><?php echo $json['no_registration']; ?></h3>
                </div>
                <div class="col-md-6">
                    <p class="fst-normal">BPJS<br>KESEHATAN</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="fst-normal">Umur : <?php echo $json['ageyear']; ?>&nbsp;Th&nbsp;<?php echo $json['agemonth']; ?>&nbsp;bl&nbsp;<?php echo $json['ageday']; ?>&nbsp;hr</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <p class="fst-normal"><b>DALAM</b><br><?php echo $json['visit_date']; ?></p>
                </div>
                <div class="col-md-6">
                    <div class="container" style="border: 1px solid black; width:fit-content; height:70px;">
                        <h4 class="fw-bolder align-middle mt-3"><?php echo $json['urutan']; ?></h4>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <style>
        @media print {
            @page {
                margin: 20px;
            }
        }
    </style>
    <script type="text/javascript">
        window.print();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>