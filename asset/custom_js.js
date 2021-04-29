function cekform(){
	//buat variabel untuk menampung inputan
	var username = document.getElementById('txtusername');
	var password = document.getElementById('txtpassword');

	if(username.value == ''){
		alert('Username tidak boleh kosong');
		username.focus();
		return false;
	}else(password.value == ''){
		alert('Password tidak boleh kosong');
		password.focus();
		return false;
}