function welcome(){
    alert ("Cari Apa Sihh Kawaannn");
}

function checkemail() {
    var emailcek = document.getElementById("cekemail");
    var mailformat = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (emailcek.value.match(mailformat)) {
      alert("Pesan Sukses Dikirim");
    } else {
      alert("Tolong Cek Kembali Email Anda");
    }
  }