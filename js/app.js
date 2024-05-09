const { createApp } = Vue

createApp({
    data() {
        return {
            discs: [],
            disc: null,
            isOpen: false,
        }
    },
    methods: {
        fetchData() {
            axios.get('./server.php').then((res) => {
                this.discs = res.data.results;
            })
        },
        modal(disc) {
            this.disc = disc;
            this.isOpen = true;
            console.log(this.isOpen)
        }
    },
    created() {
        this.fetchData()
    }
}).mount('#app')