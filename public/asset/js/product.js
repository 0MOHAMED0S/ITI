document.addEventListener('DOMContentLoaded', () => {

    // --- Product Images ---
    const mainImage = document.querySelector('.main-image img');
    const thumbnails = document.querySelectorAll('.thumbnails img');

    thumbnails.forEach(thumb => {
        thumb.addEventListener('click', () => {
            // Remove 'active' class from all thumbnails
            thumbnails.forEach(t => t.classList.remove('active'));
            // Add 'active' class to the clicked thumbnail
            thumb.classList.add('active');
            // Change the main image source to the clicked thumbnail's source
            mainImage.src = thumb.src;
        });
    });

    // --- Quantity Control ---
    const decreaseBtn = document.querySelector('.quantity-btn.decrease');
    const increaseBtn = document.querySelector('.quantity-btn.increase');
    const quantityValue = document.querySelector('.quantity-value');

    let currentQuantity = parseInt(quantityValue.textContent);

    decreaseBtn.addEventListener('click', () => {
        if (currentQuantity > 1) {
            currentQuantity--;
            quantityValue.textContent = currentQuantity;
        }
    });

    increaseBtn.addEventListener('click', () => {
        currentQuantity++;
        quantityValue.textContent = currentQuantity;
    });
    
    // --- Color Selection ---
    const colorBoxes = document.querySelectorAll('.color-box');

    colorBoxes.forEach(box => {
        box.addEventListener('click', () => {
            // Remove 'active' class from all color boxes
            colorBoxes.forEach(c => c.classList.remove('active'));
            // Add 'active' class to the clicked color box
            box.classList.add('active');
        });
    });

    // --- Size Selection ---
    const sizeBoxes = document.querySelectorAll('.size-box');

    sizeBoxes.forEach(box => {
        box.addEventListener('click', () => {
            // Remove 'active' class from all size boxes
            sizeBoxes.forEach(s => s.classList.remove('active'));
            // Add 'active' class to the clicked size box
            box.classList.add('active');
        });
    });

});