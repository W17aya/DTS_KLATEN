function cekform() {
    //buat variabel untuk menampung inputan
    nama = document.getElementById('txtnama');
    olahraga = documen.getElementById('olahraga');
    if (nama.value == '') {
        alert('nama tidak boleh kosong');
        nama.focus();
        return false;
    } else if (nama.value.length <= 3) {
        alert('nama minimal 3 karakter');

        nama.focus();
        return false;
    } else if (olahraga.value == '') {
        alert('olahraga belum dipilih');
        olahraga.focus();
        return false;
    } else {
        alert('terima kasih telah mengisi form');
        return true;
    }
}