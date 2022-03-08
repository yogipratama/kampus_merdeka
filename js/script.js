class Gempa {
    constructor(lokasi, skala){
        this.lokasi = lokasi;
        this.skala = skala;
    }
    dampak(){
        let ket;
        if (this.skala >= 0 && this.skala <= 2) {
            ket = "Tidak terasa";
        } else if (this.skala > 2 && this.skala <= 4) {
            ket = "Bangunan retak-retak";
        } else if (this.skala > 4 && this.skala <= 6) {
            ket = "Bangunan Roboh";
        } else if (this.skala > 6) {
            ket = "Bangunan roboh dan berpotensi tsunami" ;
        } else {
            ket = "Anda salah input!";
        }    
        
        document.write(`<tr>
                            <td>${this.lokasi}</td>
                            <td align='right'>${this.skala} SR</td>
                            <td>${ket}</td>
                        </tr>`);
    }
}    
let lok1 = new Gempa("Palembang", 3);
lok1.dampak();

let lok2 = new Gempa("Jakarta", 6);
lok2.dampak();

let lok3 = new Gempa("Medan", 1);
lok3.dampak();

let lok4 = new Gempa("Bogor", 4);
lok4.dampak();

let lok5 = new Gempa("Palu", 8);
lok5.dampak();

let lok6 = new Gempa("Surabaya", 2);
lok6.dampak();

let lok7 = new Gempa("Bekasi", 5);
lok7.dampak();

let lok8 = new Gempa("Lampung", 1);
lok8.dampak();

let lok9 = new Gempa("Batam", 4);
lok9.dampak();

let lok10 = new Gempa("Muko-muko", 1);
lok10.dampak();