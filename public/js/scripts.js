$(function () {
  $(".buttonAdd").on("click", function () {
    $("#formModalLabel").html("Tambah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $("#nik").val("");
    $("#nama").val("");
    $("#umur").val("");
    $("#dept").val("");
    $("#jabatan").val("");
    $("#alamat").val("");
    $("#tanggal_masuk").val("");
    $("#id").val("");
  });

  $(".tampilModalUbah").on("click", function () {
    $("#formModalLabel").html("Ubah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr("action", "http://localhost/SIKMVC/public/Karyawan/edit");

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/SIKMVC/public/karyawan/getedit",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nik").val(data.nik);
        $("#nama").val(data.nama);
        $("#umur").val(data.umur);
        $("#dept").val(data.dept);
        $("#jabatan").val(data.jabatan);
        $("#alamat").val(data.alamat);
        $("#tanggal_masuk").val(data.tanggal_masuk);
        $("#id").val(data.id);
      },
    });
  });
});

var selector = 'ul#Menu li a.active';

$(selector).on('click', function(){
    $(selector).removeClass('active');
    $(this).addClass('active');
});
