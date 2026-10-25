<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporBanjir - BPBD Kabupaten Bandung</title>
    <style>
        :root {
            --primary: #6b7280;
            --primary-dark: #374151;
            --bg-color: #f3f4f6;
            --card-bg: #ffffff;
            --text-main: #374151;
            --border-color: #d1d5db;
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
            max-width: 550px;
            background: var(--card-bg);
            padding: 30px;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.05);
        }
        .header {
            text-align: center;
            margin-bottom: 25px;
        }
        .header h1 {
            color: var(--primary-dark);
            font-size: 24px;
            margin-bottom: 5px;
        }
        .header p {
            font-size: 14px;
            color: #6b7280;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: 500;
            margin-bottom: 8px;
            font-size: 14px;
        }
        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            font-size: 14px;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }
        input:focus, textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(107, 114, 128, 0.15);
        }
        .row {
            display: flex;
            gap: 15px;
        }
        .row .form-group {
            flex: 1;
        }
        button {
            width: 100%;
            background-color: #4b5563;
            color: white;
            border: none;
            padding: 12px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        button:hover {
            background-color: #374151;
        }
        .alert-error {
            background-color: #fee2e2;
            border: 1px solid #fecaca;
            color: #b91c1c;
            padding: 10px;
            border-radius: 6px;
            font-size: 13px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <h1>🚨 LaporBanjir</h1>
            <p>BPBD Kabupaten Bandung - Layanan Cepat Tanggap Darurat</p>
        </div>

        @if ($errors->any())
            <div class="alert-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('flood.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Lengkap Pelapor</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Contoh: Budi Santoso" required>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="kecamatan">Kecamatan</label>
                    <input type="text" id="kecamatan" name="kecamatan" value="{{ old('kecamatan') }}" placeholder="Contoh: Baleendah" required>
                </div>
                <div class="form-group">
                    <label for="desa">Desa / Kelurahan</label>
                    <input type="text" id="desa" name="desa" value="{{ old('desa') }}" placeholder="Contoh: Dayeuhkolot" required>
                </div>
            </div>

            <div class="form-group">
                <label for="tinggi_genangan">Tinggi Genangan Air (cm)</label>
                <input type="number" id="tinggi_genangan" name="tinggi_genangan" value="{{ old('tinggi_genangan') }}" placeholder="Contoh: 50" min="1" required>
            </div>

            <div class="form-group">
                <label for="keterangan">Keterangan Tambahan (Opsional)</label>
                <textarea id="keterangan" name="keterangan" rows="3" placeholder="Kondisi terkini, evakuasi, dll...">{{ old('keterangan') }}</textarea>
            </div>

            <button type="submit">Kirim Laporan</button>
        </form>
    </div>

</body>
</html>