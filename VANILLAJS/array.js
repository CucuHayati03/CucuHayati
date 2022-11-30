const namaMantan = ["Rendy", "Rayn", "ari"];

// namaMantan.forEach(function(item, index, array) {
//     console.log(item, index);
// });

namaMantan.push("Cinta");

const namaMantanLama = namaMantan.slice();

namaMantan.pop();

// console.log("Nama mantan: ", namaMantan);

// console.log("Nama mantan lama: ", namaMantanLama);

// for (let index = 0; index < namaMantan.length; index++) {
//     const element = namaMantan[index];
//     console.log(element);
// }

// let index = 0
// while (index < namaMantan.length) {
//     const element = namaMantan[index];
//     console.log(element);
//     index++;
// }

console.log(
    namaMantan
    .filter( function(mantan, ke) {
        return mantan == "Rendy";
    })
    .map( function  (mantan, ke) {
        return `$(mantan) adalah mantan ke $(ke + 1)`;
    })
);