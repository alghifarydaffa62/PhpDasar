var keyword = document.getElementById('keyword');
var search = document.getElementById('Search!');
var container = document.getElementById('container');

// tambahkan event saat keyword ditulis
keyword.addEventListener('keyup', function() {
    // BUAT OBJECT ajax
    var xhr = new XMLHttpRequest();

    // mengecek kesiapan ajax
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            container.innerHTML = xhr.responseText;
        }
    }

    // eksekusi ajax
    xhr.open('GET', 'ajax/siswa.php?keyword=' + keyword.value, true);
    xhr.send();

});