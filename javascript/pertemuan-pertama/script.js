console.log('HALLO JUGA BANGSAT');

// alert('HAI KEVIN');
// prompt('Masukan Nama Mu : ');
// confirm('Yakin Jadi Beban Keluarga ?');

alert('Selamat Datang !');

var loop = true;

while (loop == true){

    var nama = prompt('Masukan Nama : ') ;
    alert('Halo '+nama+' ! ');

    loop = confirm('Coba Lagi ?');
    if(!loop){
        continue;
    }
}

alert('Terimakasih Sudah Mencoba !');