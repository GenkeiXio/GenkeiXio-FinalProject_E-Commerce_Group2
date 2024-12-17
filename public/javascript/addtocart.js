document.addEventListener('DOMContentLoaded', () => {
    const cartButtons = document.querySelectorAll('.add-to-cart');
    const cartBtn = document.getElementById('cart-btn');
    const shoppingCart = document.querySelector('.shopping-cart');

    cartButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            event.preventDefault();

            const itemId = button.getAttribute('data-id');
            const itemName = button.getAttribute('data-name');
            const itemPrice = button.getAttribute('data-price');

            fetch('/cart/add', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify({ id: itemId, name: itemName, price: itemPrice }),
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
                updateCartUI(data.cart); // Update the cart UI
            })
            .catch(error => console.error('Error:', error));
        });
    });

    // Update Cart UI
    function updateCartUI(cart) {
        const cartBox = document.querySelector('.shopping-cart .cart-content');
        cartBox.innerHTML = ''; // Clear the cart before updating

        if (Object.keys(cart).length === 0) {
            cartBox.innerHTML = '<p>Your cart is empty.</p>';
        } else {
            // Loop through the cart and display each item
            Object.values(cart).forEach(item => {
                const div = document.createElement('div');
                div.classList.add('box');
                div.innerHTML = `
                    <p>${item.name} - ${item.quantity} x ${item.price}</p>
                    <i class="fa-solid fa-trash" data-id="${item.id}"></i>
                `;
                cartBox.appendChild(div);
            });
        }
    }

    // Toggle shopping cart visibility
    cartBtn.addEventListener('click', () => {
        shoppingCart.classList.toggle('active');
    });
});
