const {createApp} = Vue
createApp({
    data() {
        return {
            tasks: null,
            api_url: 'getTasks.php'
        }
    },
    mounted() {
        axios
        .get(this.api_url)
        .then(response => {
            console.log(response);
        })
        .catch(error => {
            console.error(error.message);
        })

    }
}).mount('#app')