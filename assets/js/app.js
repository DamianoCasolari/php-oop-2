const { createApp } = Vue

createApp({
    data() {
        return {

        }
    },
    methods: {

    },
    mounted() {

    },

}).mount('#app')



window.addEventListener('load', function () {
    var cards = document.getElementsByClassName('my_card');
    var maxHeight = 0;


    for (let i = 0; i < cards.length; i++) {
        let cardHeight = cards[i].offsetHeight;
        if (cardHeight > maxHeight) {
            maxHeight = cardHeight;
        }
    }


    for (let i = 0; i < cards.length; i++) {
        cards[i].style.minHeight = maxHeight + 'px';
    }
});



