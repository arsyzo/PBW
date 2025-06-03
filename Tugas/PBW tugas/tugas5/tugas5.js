function rentang_Nilai(){
    let nilai = document.getElementById("nilai").value;
    let nilaiAngka;
    if (nilai >=80 && nilai <=100){
        nilaiAngka = "A";
    }else if (nilai >=70 && nilai<=79){
        nilaiAngka="B";
    }else if (nilai >=60 && nilai <= 69){
        nilaiAngka="C";
    }else if(nilai >=50 && nilai<=59){
        nilaiAngka="D";
    }else if(nilai >=0 && nilai<=49){
        nilaiAngka="E";
    }else if(nilai <0){
        nilaiAngka="ERROR!"
    }
    let hasil=document.getElementById("hasil").innerText = nilaiAngka;
}