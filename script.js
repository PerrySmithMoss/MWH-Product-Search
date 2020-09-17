const productTable = document.getElementById('productTable');
const searchBar = document.getElementById('searchBar');
const totalProducts = document.getElementById('num-of-products');

// Creates a reference for the products 
let products = [];

searchBar.addEventListener('keyup', (e) => {
    const searchInput = e.target.value.toLowerCase();

    // Filter through the products array based on the user's input 
    const filteredProducts = products.filter(product => {
        return (
            // Check if the search input matches any data
            product.id.toLowerCase().includes(searchInput) ||
            product.code.toLowerCase().includes(searchInput) || 
            product.description.toLowerCase().includes(searchInput) || 
            product.stock.toLowerCase().includes(searchInput) || 
            product.packaging.toLowerCase().includes(searchInput) || 
            product.printed.toLowerCase().includes(searchInput) || 
            product.brand.toLowerCase().includes(searchInput) 
        );
    });
    // Display the products which match the user's input 
    displayProducts(filteredProducts);
});

// Calls the product API, then passes that data to displayProducts()
const loadProducts = async () => {
    try {
        const res = await fetch('https://dev.meadowvalefoods.co.uk/example/perry/api');
        products = await res.json();
        displayProducts(products);
    } catch (err) {
        console.error(err);
    }
};

// Takes the list of product objects and converts each product object into a template string
const displayProducts = (products) => {
    const htmlString = products
        .map((product) => {
            return `
                    <tr>
                    <td>${product.id}</td>
                    <td>${product.code}</td>
                    <td>${product.description}</td>
                    <td>${product.stock}</td>
                    <td>${product.packaging}</td>
                    <td>${product.printed}</td>
                    <td>${product.brand}</td>
                    </tr>
                    `;
        })
        .join('');
    // Each time this function is called it calculates the total number of objects
    productTable.innerHTML = htmlString;
    totalProducts.innerHTML = Object.keys(products).length + " Results";
};

loadProducts();
