<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="table-responsive">
        <table id="datatables" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <td align="center">No</td>
                    <td align="center">ID Buku</td>
                    <td align="center">Kode Buku</td>
                    <td align="center">Judul Buku</td>
                    <td align="center">Pengarang</td>
                    <td align="center">Kategori</td>
                </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($data as $index=>$bk)
            <tr>
                <td>{{$no}}</td>
                <td>{{$bk->id_buku}}</td>
                <td>{{$bk->kode_buku}}</td>
                <td>{{$bk->judul}}</td> 
                <td>{{$bk->pengarang}}</td>  
                <td>{{$bk->kategori}}</td>
            </tr>
            <?php $no++; ?>
            @endforeach
        </tbody>
    </table>
</div>


</body>
</html>