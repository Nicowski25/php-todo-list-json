const { createApp } = Vue
createApp({
    data() {
        return {
            tasks: null,
            api_url: 'getTasks.php',
            api_deleteTask_url: 'deleteTask.php',
            new_task: ''
        }
    },
    methods: {
        add_task() {
            if (this.new_task != '') {

                console.log('adding new task');

                const data = {
                    new_task: this.new_task
                }

                axios
                    .post('storeTasks.php', data, {
                        headers: { 'Content-Type': 'multipart/form-data' }
                    }).then(response => {
                        console.log(response);
                        this.tasks = response.data
                    })
                    .catch(error => {
                        console.error(error.message)
                    })
                this.new_task = ''
            }
        },
        deleteTask(index) {
            const data = {
                "deleteTask": index,
            };

            axios
                .post(
                    this.api_deleteTask_url,
                    data,
                    {
                        headers: { "Content-Type": "multipart/form-data" },
                    })
                .then((response) => {
                    this.tasks = response.data;
                })
                .catch((error) => {
                    console.error(error.message);
                });
        },
    },
    mounted() {
        axios
            .get(this.api_url)
            .then(response => {
                console.log(response);
                this.tasks = response.data
            })
            .catch(error => {
                console.error(error.message);
            })
    }
}).mount('#app')