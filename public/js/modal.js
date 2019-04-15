$('#edit').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var nama_spesialis = button.data('spesialis')
    var id_spesialis = button.data('id')
    var modal = $(this)
    modal.find('.modal-body #nama_spesialis').val(nama_spesialis)
    modal.find('.modal-body #id_spesialis').val(id_spesialis)


})

$('#delete').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var nama_spesialis = button.data('spesialis')
    var id_spesialis = button.data('id_spesialis')
    console.log(id_spesialis)
    var modal = $(this)
    modal.find('.modal-body').html("Apakah yakin anda akan menghapus data Spesialis <b> " + nama_spesialis + "</b>")
    modal.find('.modal-footer #id_spesialis').val(id_spesialis)

})

$('#editGedung').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var nama_gedung = button.data('nama_gedung')
    var id_gedung = button.data('id_gedung')
    console.log(id_gedung)
    var modal = $(this)
    modal.find('.modal-body #nama_gedung').val(nama_gedung)
    modal.find('.modal-body #id_gedung').val(id_gedung)

})
$('#deleteGedung').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var nama_gedung = button.data('nama_gedung')
    var id_gedung = button.data('id_gedung')
    console.log(id_gedung)
    var modal = $(this)
    modal.find('.modal-body').html("Apakah yakin anda akan menghapus data <b> " + nama_gedung + "</b>")
    modal.find('.modal-footer #id_gedung').val(id_gedung)

})


$('#editRuangan').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var nama_gedung = button.data('gedung')
    var id_gedung = button.data('id_gedung')
    var id_ruangan = button.data('id_ruangan')
    var no_ruangan = button.data('no_ruangan')
    var nama_ruangan = button.data('nama_ruangan')
    var harga = button.data('harga')
    console.log(nama_gedung)
    var modal = $(this)
    // modal.find('.modal-body .form-control').attr("<option value = '" + id_gedung + "'>" + nama_gedung + "</option>")
    modal.find('.modal-body #no_ruangan').val(no_ruangan)
    modal.find('.modal-body #nama_ruangan').val(nama_ruangan)
    modal.find('.modal-body #harga').val(harga)
    modal.find('.modal-body #id_ruangan').val(id_ruangan)

})
$('#deleteRuangan').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var nama_ruangan = button.data('nama_ruangan')
    var id_ruangan = button.data('id_ruangan')
    console.log(id_ruangan)
    var modal = $(this)
    modal.find('.modal-body').html("Apakah yakin anda akan menghapus Ruangan <b> " + nama_ruangan + "</b>")
    modal.find('.modal-footer #id_ruangan').val(id_ruangan)

})
