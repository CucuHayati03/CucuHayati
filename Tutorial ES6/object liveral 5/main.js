// ambil element
const cart_items = document.getElementById('cart');

// ES5


// ES6
function addProduct(name, category) {
    return {
        name,
        category
    }
}

var getProduct = addProduct("Iphone 11", "Gadget");
cart_items.innerHTML = `Product: ${getProduct.name} category: ${getProduct.category}`;