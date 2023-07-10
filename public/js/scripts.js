$(function(){

    $('.buttonAdd').on('click', function(){
        $('#formModalLabel').html('Tambah Data Karyawan');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nik').val('');
        $('#nama').val('');
        $('#umur').val('');
        $('#dept').val('');
        $('#jabatan').val('');
        $('#alamat').val('');
        $('#tanggal_masuk').val('');
        $('#id_karyawan').val('');
    })
    $('.buttonEdit').on('click', function(){
        $('#formModalLabel').html('Ubah Data Karyawan');
        $('.modal-footer button[type=submit]').html('Ubah Data');

    })

});