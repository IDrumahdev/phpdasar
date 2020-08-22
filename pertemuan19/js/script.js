// Ambil elemen - element yang di butuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// Tambahkan Even ketika keywordnya di tulis
keyword.addEventListener('keyup',function(){
    // buat object ajax
    var xhr = new XMLHttpRequest()

    // cek untuk kesiapan AJAX nya
    xhr.onreadystatechange = function() {
        if ( xhr.readyState == 4 && xhr.status == 200 ){
            container.innerHTML = xhr.responseText;
        }
    }

    // eksekusi ajax
    xhr.open('GET','ajax/wakif.php?keyword=' + keyword.value, true);
    xhr.send();
});