// C. Conditional
console.log("C. Conditional");
console.log();

var nama = "John";
var peran = "";

if (nama === "") {
  console.log("Nama harus diisi!");
} else if (peran === "") {
  console.log("Halo " + nama + ", Pilih peranmu untuk memulai game!");
} else {
  console.log("Selamat datang di Dunia Werewolf, " + nama);
  if (peran === "Penyihir") {
    console.log(
      "Halo Penyihir " +
        nama +
        ", kamu dapat melihat siapa yang menjadi werewolf!"
    );
  } else if (peran === "Guard") {
    console.log(
      "Halo Guard " +
        nama +
        ", kamu akan membantu melindungi temanmu dari serangan werewolf."
    );
  } else if (peran === "Werewolf") {
    console.log(
      "Halo Werewolf " + nama + ", Kamu akan memakan mangsa setiap malam!"
    );
  }
}

console.log();