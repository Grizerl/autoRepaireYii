function searchByModel() {
    // Get the search query
    let searchQuery = document.getElementById('car-search').value.toLowerCase();
    
    // Get all car cards
    let carCards = document.querySelectorAll('.shop-car-card-container');

    // Loop through each car card and check the model
    carCards.forEach(function(card) {
        let model = card.querySelector('.car-model').textContent.toLowerCase();
        
        // If the model matches the search query, show the card, otherwise hide it
        if (model.includes(searchQuery)) {
            card.style.display = '';
        } else {
            card.style.display = 'none';
        }
    });
}
