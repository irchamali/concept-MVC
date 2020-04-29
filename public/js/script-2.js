// console.log('Ok');

$(function(){

    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel').html('Tambah Data Criteria');
        $('.modal-footer button[type=submit').html('Tambah Data');
            $('#criteria').val('');
            $('#code').val('');
            $('#weight').val('');
            $('#id_criteria').val('');
        
    })

    $('.tampilModalUbah').on('click', function(){
        // console.log('Yeay');
        $('#formModalLabel').html('Ubah Data Criteria');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/dssmvc/public/criteria/ubah');

        const id = $(this).data('id');
        // console.log(id);
        $.ajax({
            url:'http://localhost/dssmvc/public/criteria/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){  
                // console.log(data);
                $('#criteria').val(data.criteria);
                $('#code').val(data.code);
                $('#weight').val(data.weight);
                $('#id_criteria').val(data.id_criteria);

            }
            //id yg kiri adalah data yg dikirimkan, yg kanan isi datanya
        });
    });

});