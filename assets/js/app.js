const { createApp } = Vue

createApp({
    data() {
        return {
            pageLoad: false
        }
    },
    methods: {
        sameHeight() {
            console.log('Pagina completamente caricata.');
            const cards = document.getElementsByClassName('my_card');
            console.log(cards);
            let maxHeight = 0;

            for (let i = 0; i < cards.length; i++) {
                const cardHeight = cards[i].offsetHeight;
                if (cardHeight > maxHeight) {
                    maxHeight = cardHeight;
                }
            }

            for (let i = 0; i < cards.length; i++) {
                cards[i].style.minHeight = maxHeight + 'px';
            }
        }
    },
    mounted() {


        //     setTimeout(() => {
        //         this.pageLoad = true;
        //         const cards = document.getElementsByClassName('my_card');
        //         let maxHeight = 0;

        //         for (let i = 0; i < cards.length; i++) {
        //             const cardHeight = cards[i].offsetHeight;
        //             if (cardHeight > maxHeight) {
        //                 maxHeight = cardHeight;
        //             }
        //         }

        //         for (let i = 0; i < cards.length; i++) {
        //             cards[i].style.minHeight = maxHeight + 'px';
        //         }
        //     }, 2000); // Simula un ritardo di caricamento di 2 secondi
        // }

        window.addEventListener('load', () => {
            this.pageLoad = true;
            this.sameHeight()


        });

    }
}).mount('#app')







