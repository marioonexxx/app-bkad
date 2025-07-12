<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Print Resume</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 11px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td,
        th {
            padding: 8px;
            border: 0px solid #ddd;
            text-align: left;
        }
    </style>
</head>

<body>
    <table width="100%" style="margin-bottom: 20px; border-bottom: 2px solid #000;">
        <tr>
            <td width="15%" style="vertical-align: top;">
                <img src="{{ public_path('bootslander/assets/img/bkad-logo/logo-kabupaten-mbd.png') }}" width="60">
            </td>
            <td width="85%" style="text-align: left; vertical-align: top;">
                <h3 style="margin: 0; font-size: 12px; line-height: 1.5;">
                    {{ $data->opd->nama }}<br>
                    {{ $data->opd->alamat }}<br>
                    Kabupaten Maluku Barat Daya
                </h3>
            </td>
        </tr>
    </table>





    <h4 style="text-align: center; text-decoration: underline; font-weight: bold;">
        RINGKASAN KONTRAK
    </h4>


    <table width="90%" align="center" style="border-collapse: collapse; font-size: 12px; margin-top: 20px;">
        @php
            $styleCell = 'border: 1px solid black; padding: 6px;';
            $labelStyle = 'font-weight: bold; ' . $styleCell;
        @endphp

        <tr>
            <td style="{{ $labelStyle }}" width="35%">No. SPP</td>
            <td style="{{ $styleCell }}" width="65%">: {{ $data->spp_nomor }}</td>
        </tr>
        <tr>
            <td style="{{ $labelStyle }}">Tgl. SPP</td>
            <td style="{{ $styleCell }}">: {{ \Carbon\Carbon::parse($data->spp_tgl)->translatedFormat('d F Y') }}
            </td>
        </tr>
        <tr>
            <td style="{{ $labelStyle }}">No. Kontrak</td>
            <td style="{{ $styleCell }}">: {{ $data->kontrak_nomor }}</td>
        </tr>
        <tr>
            <td style="{{ $labelStyle }}">Tgl. Kontrak</td>
            <td style="{{ $styleCell }}">:
                {{ \Carbon\Carbon::parse($data->kontrak_tgl)->translatedFormat('d F Y') }}</td>
        </tr>
        <tr>
            <td style="{{ $labelStyle }}">No. SPMK</td>
            <td style="{{ $styleCell }}">: {{ $data->spmk_nomor }}</td>
        </tr>
        <tr>
            <td style="{{ $labelStyle }}">Tgl. SPMK</td>
            <td style="{{ $styleCell }}">: {{ \Carbon\Carbon::parse($data->spmk_tgl)->translatedFormat('d F Y') }}
            </td>
        </tr>
        <tr>
            <td style="{{ $labelStyle }}">No. SPPBJ</td>
            <td style="{{ $styleCell }}">: {{ $data->sppbj_nomor }}</td>
        </tr>
        <tr>
            <td style="{{ $labelStyle }}">Tgl. SPPBJ</td>
            <td style="{{ $styleCell }}">: {{ \Carbon\Carbon::parse($data->sppbj_tgl)->translatedFormat('d F Y') }}
            </td>
        </tr>
        <tr>
            <td style="{{ $labelStyle }}">Nama Perusahaan</td>
            <td style="{{ $styleCell }}">: {{ $data->perusahaan_nama }}</td>
        </tr>
        <tr>
            <td style="{{ $labelStyle }}">Alamat Perusahaan</td>
            <td style="{{ $styleCell }}">: {{ $data->perusahaan_alamat }}</td>
        </tr>
        <tr>
            <td style="{{ $labelStyle }}">Nama Bank</td>
            <td style="{{ $styleCell }}">: {{ $data->perusahaan_bank }}</td>
        </tr>
        <tr>
            <td style="{{ $labelStyle }}">Rekening</td>
            <td style="{{ $styleCell }}">: {{ $data->perusahaan_rekening }}</td>
        </tr>
        <tr>
            <td style="{{ $labelStyle }}">Nilai Kontrak</td>
            <td style="{{ $styleCell }}">: Rp{{ number_format($data->kontrak_nilai, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <td style="{{ $labelStyle }}">Keterangan</td>
            <td style="{{ $styleCell }}">: {{ $data->keterangan }}</td>
        </tr>
        <tr>
            <td style="{{ $labelStyle }}">Waktu Penyelesaian</td>
            <td style="{{ $styleCell }}">: {{ $data->waktu_pelaksanaan }} hari</td>
        </tr>
        <tr>
            <td style="{{ $labelStyle }}">Tgl. Penyelesaian</td>
            <td style="{{ $styleCell }}">:
                {{ \Carbon\Carbon::parse($data->tgl_penyelesaian)->translatedFormat('d F Y') }}</td>
        </tr>
    </table>



    <table width="100%" style="margin-top: 50px; font-size: 12px;">
        <tr>
            <td width="50%"></td>
            <td style="text-align: center;">
                {{ strtoupper('TIAKUR') }}, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}<br>
                <strong>{{ strtoupper('Kepala Dinas ' . $data->opd->nama ?? 'Nama Dinas') }}</strong><br><br><br><br><br>
                <u><strong>{{ $kepala_dinas ?? 'Nama Kepala Dinas' }}</strong></u><br>
                NIP. {{ $nip_kepala_dinas ?? '1234567890' }}
            </td>
        </tr>
    </table>





</body>

</html>
