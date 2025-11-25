<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }

        .sidebar {
            width: 240px;
            height: 100vh;
            position: fixed;
            background: #198754;
            padding: 20px 0;
        }

        .sidebar a {
            color: #fff;
            padding: 12px 20px;
            display: block;
            text-decoration: none;
            font-size: 16px;
        }

        .sidebar a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .content {
            margin-left: 260px;
            padding: 25px;
        }

        .card-custom {
            border-radius: 12px;
        }
    </style>
</head>

<body>

    <!-- SIDEBAR MENU -->
    <div class="sidebar">
        <h4 class="text-center text-white mb-4">USTUDZ APP</h4>

        <a href="/dashboard">🏠 Dashboard</a>
        <a href="/tanah">📌 Data Tanah</a>
        <a href="/bangunan">🏢 Data Bangunan</a>
        <a href="/ruangan">🚪 Data Ruangan</a>
        <a href="/kategori">📂 Kategori</a>
        <a href="/barang">📦 Barang</a>

        <hr class="text-white">

        <a href="/logout">🚪 Logout</a>
    </div>

    <!-- CONTENT -->
    <div class="content">
        <h2 class="mb-4">Selamat Datang di Dashboard</h2>

        <div class="row g-3">

            <!-- Card Tanah -->
            <div class="col-md-3">
                <div class="card bg-success text-white card-custom">
                    <div class="card-body">
                        <h5>Data Tanah</h5>
                        <p class="mb-0">{{ $tanah ?? 0 }} item</p>
                    </div>
                </div>
            </div>

            <!-- Card Bangunan -->
            <div class="col-md-3">
                <div class="card bg-primary text-white card-custom">
                    <div class="card-body">
                        <h5>Data Bangunan</h5>
                        <p class="mb-0">{{ $bangunan ?? 0 }} item</p>
                    </div>
                </div>
            </div>

            <!-- Card Ruangan -->
            <div class="col-md-3">
                <div class="card bg-warning text-dark card-custom">
                    <div class="card-body">
                        <h5>Data Ruangan</h5>
                        <p class="mb-0">{{ $ruangan ?? 0 }} item</p>
                    </div>
                </div>
            </div>

            <!-- Card Barang -->
            <div class="col-md-3">
                <div class="card bg-info text-dark card-custom">
                    <div class="card-body">
                        <h5>Data Barang</h5>
                        <p class="mb-0">{{ $barang ?? 0 }} item</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
