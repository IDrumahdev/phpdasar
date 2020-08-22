$(document).ready(function(){

    // menghilangkan tombol cari
    $('#tombol-cari').hide();

    // membuat event ketika keyword di tulis
    $('#keyword').on('keyup', function() {
        // munculkan icon loading
        $('.loader').show();


        // ini adalah ajax menggunakan load. 
        // $('#container').load('ajax/wakif?keyword=' + $('#keyword').val());

        // $.get()
        $.get('ajax/wakif.php?keyword=' + $('#keyword').val(), function(data){
            $('#container').html(data);
            $('.loader').hide();
        });
    });


});