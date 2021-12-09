const app = new Vue({
    el: '#app',
    data: {
        dischi: null,
    },
    mounted() {
        axios
            .get('./api/dischi.php')
            .then(response => {
                console.log(response);
                this.dischi = response.data
            }).catch(error => {
                console.log(error);
            })
    }
})