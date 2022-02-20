<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form>
                <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputBulan">Bulan</label>
                    <select id="inputBulan" class="form-control">
                        <option selected>Pilih...</option>
                        <option>...</option>
                    </select>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputTahun">Tahun</label>
                    <select id="inputTahun" class="form-control">
                        <option selected>Pilih...</option>
                        <option>...</option>
                    </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputDesa">Desa</label>
                    <select id="inputDesa" class="form-control">
                        <option selected>Pilih Desa...</option>
                        <option>...</option>
                    </select>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputPenderita">Jumlah Penderita</label>
                    <input type="text" class="form-control" id="inputPenderita">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputMeninggal">Jumlah Meninggal</label>
                    <input type="text" class="form-control" id="inputMeninggal">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
                </div>
            </div>
</body>
</html>