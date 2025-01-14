<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIG Riau</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    @include('layouts.navbar')

    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-sm">
                <thead class="align-middle text-center">
                    <th>Nomor</th>
                    <th>Nama Daerah</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Jumlah Puskesmas</th>
                    <th>Jumlah Klinik</th>
                    <th>Jumlah Rumah Sakit</th>
                    <th>Jumlah TK</th>
                    <th>Jumlah SD</th>
                    <th>Jumlah SMP</th>
                    <th>Jumlah SMA</th>
                    <th>Jumlah SMK</th>
                    <th>Jumlah Perguruan Tinggi</th>
                </thead>
                <tbody>
                    @foreach($kabkotas as $kabkota)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $kabkota->name }}</td>
                        <td>{{ $kabkota->latitude }}</td>
                        <td class="text-center">{{ $kabkota->longitude }}</td>
                        <td class="text-center">{{ $kabkota->jumlah_puskesmas }}</td>
                        <td class="text-center">{{ $kabkota->jumlah_klinik }}</td>
                        <td class="text-center">{{ $kabkota->jumlah_rumahsakit }}</td>
                        <td class="text-center">{{ $kabkota->jumlah_tk }}</td>
                        <td class="text-center">{{ $kabkota->jumlah_sd }}</td>
                        <td class="text-center">{{ $kabkota->jumlah_smp }}</td>
                        <td class="text-center">{{ $kabkota->jumlah_sma }}</td>
                        <td class="text-center">{{ $kabkota->jumlah_smk }}</td>
                        <td class="text-center">{{ $kabkota->jumlah_perguruan_tinggi }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>