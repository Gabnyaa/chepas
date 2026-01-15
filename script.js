// Search form submission
document.getElementById('search-form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Recherche impossible : Vous n\'êtes pas sur Le Bon Coin !');
});

// Random reminders
setInterval(function() {
    const reminders = [
        'Rappel : Le Mauvais Coin n\'est pas Le Bon Coin !',
        'Attention : Toutes les annonces sont fictives !',
        'Vous perdez votre temps ici !',
        'Allez sur Le Bon Coin pour de vraies annonces !'
    ];
    const randomReminder = reminders[Math.floor(Math.random() * reminders.length)];
    console.log(randomReminder); // Or show in a notification
}, 10000); // Every 10 seconds

// Hover effects
document.querySelectorAll('.ad').forEach(ad => {
    ad.addEventListener('mouseenter', () => {
        alert('⚠️ Cette annonce n\'est pas réelle !');
    });
});