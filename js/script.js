function hitung() {
  let getForm = document.getElementById('formulir');
  let angka1 = getForm.a1.value;
  let angka2 = getForm.a2.value;

  if(isNaN(angka1) || angka1 == '' || isNaN(angka2) || angka2 == '') {
    alert('Harap isi data berupa angka');
  }
  
    this.tambah = function() {
      let hasilTambah = getForm.tambah.value;
      hasilTambah = parseInt(angka1) + parseInt(angka2);
      getForm.hasil.value = hasilTambah;
    }

    this.kurang = function() {
      let hasilKurang = getForm.kurang.value;
      hasilKurang = parseInt(angka1) - parseInt(angka2);
      getForm.hasil.value = hasilKurang;
    }

    this.kali = function() {
      let hasilKali = getForm.kurang.value;
      hasilKali = parseInt(angka1) * parseInt(angka2);
      getForm.hasil.value = hasilKali;
    }

    this.bagi = function() {
      let hasilBagi = getForm.kurang.value;
      hasilBagi = parseInt(angka1) / parseInt(angka2);
      getForm.hasil.value = hasilBagi;
    }

    this.pangkat = function() {
      let hasilPangkat = getForm.kurang.value;
      hasilPangkat = parseInt(angka1) ** parseInt(angka2);
      getForm.hasil.value = hasilPangkat;
    }

    this.kosong = function() {
      getForm.a1.value = "";
      getForm.a2.value = "";
      getForm.hasil.value = "";
    }

    
}