<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Laporan - LaporBanjir</title>
    <style>
        :root {
            --success: #6b7280;
            --success-dark: #374151;
            --bg-color: #f3f4f6;
            --card-bg: #ffffff;
            --text-main: #374151;
            --border-color: #e5e7eb;
        }
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        body {
            background-color: var(--bg-color);
            color: var(--text-main);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        .container {
            width: 100%;
            max-width: 500px;
            background: var(--card-bg);
            padding: 30px;
            border-radius: 12px;
            border: 1px solid var(--border-color);
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.05);
            text-align: center;
        }
        .success-icon {
            font-size: 48px;
            margin-bottom: 15px;
        }
        h1 {
            color: var(--success-dark);
            font-size: 22px;
            margin-bottom: 5px;
        }
        p.subtitle {
            font-size: 14px;
            color: #6b7280;
            margin-bottom: 25px;
        }
        .data-card {
            background: #f9fafb;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 15px 20px;
            text-align: left;
            margin-bottom: 25px;
        }
        .data-item {
            margin-bottom: 12px;
            font-size: 14px;
        }
        .data-item:last-child {
            margin-bottom: 0;
        }
        .data-label {
            font-weight: 600;
            color: #6b7280;
            display: block;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .data-value {
            font-size: 15px;
            color: var(--text-main);
            font-weight: 500;
        }
        .btn-back {
            display: inline-block;
            background-color: #4b5563;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 600;
            border-radius: 6px;
            transition: background-color 0.2s;
        }
        .btn-back:hover {
            background-color: #374151;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="success-icon">✅</div>
        <h1>Laporan Berhasil Terkirim</h1>
        <p class="subtitle">Terima kasih, laporan Anda telah diterima sementara oleh sistem prototipe BPBD Kabupaten Bandung.</p>

        <div class="data-card">
            <div class="data-item">
                <span class="data-label">Nama Pelapor</span>
                <span class="data-value">{{ $report['nama'] }}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Lokasi Kejadian</span>
                <span class="data-value">Kec. {{ $report['kecamatan'] }}, Desa/Kel. {{ $report['desa'] }}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Tinggi Genangan Air</span>
                <span class="data-value" style="color: #4b5563; font-weight: 700;">{{ $report['tinggi_genangan'] }} cm</span>
            </div>
            @if(!empty($report['keterangan']))
            <div class="data-item">
                <span class="data-label">Keterangan Tambahan</span>
                <span class="data-value">{{ $report['keterangan'] }}</span>
            </div>
            @endif
        </div>

        <a href="{{ route('flood.create') }}" class="btn-back">← Kirim Laporan Lain</a>
    </div>

</body>
</html>