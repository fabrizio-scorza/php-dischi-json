const { createApp } = Vue

createApp({
    data() {
        return {
            discs: []
        }
    },
    methods: {
        fetchData() {
            axios.get('./server.php').then((res) => {
                this.discs = res.data.results;
            })
        }
    },
    created() {
        this.fetchData()
    }
}).mount('#app')