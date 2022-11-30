const Person = {
    firstNama: "Cucu",
    lastName: "Hayati",
    fullName: function() {
        return `${this.firstNama} ${this.lastName}`;
    },
    weight: 65,
    height: 172,
   WeightIdeal: function() {
        const heightMinus100 = this.height - 100
        return heightMinus100- ( heightMinus100 * 10) /100 
    },
    needDiet: function () {
        const WeightIdeal = this.WeightIdeal()
        if(WeightIdeal - 5 > this.weight) 
        return ( 
            "you need more protein, need more " + (WeightIdeal - this.weight) + "kg"
    );
        else if (WeightIdeal + 5 < this.length) 
        return ( 
            "you need a mayo diet, need reduce weight: " + (this.weight - WeightIdeal) + "kg"
        );
        return "you are in a good shape"
    },
};

console.log(Person.fullName());
console.log(Person.WeightIdeal());
console.log(Person.needDiet());

// const countries = {
//     ID: {
//         province: ["Bali", "Jawa Timur", "Jawa Tengah"],
//         city: ["Singaraja", "gianyar", "Negare", "badung"],
//     },
//     My: {},
//     TH: {
//         province: [],
//     },
// };

// console.log(countries?.TH?.province ?? "Not Found");