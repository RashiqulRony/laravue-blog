<style>

</style>
<template>
    <div class="container">
        <div id="vue-wrapper">
            <div class="row">
                <div class="col-12">
                    <a class="btn btn-success">Add New</a>
                    <hr>
                </div>
                <div class="col-12">
                    <table class="table table-borderless" id="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>About</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tr v-for="customer in customers">
                            <td>{{ customer.id }}</td>
                            <td>{{ customer.name }}</td>
                            <td>{{ customer.email }}</td>
                            <td>{{ customer.about }}</td>

                            <td>Edit | Delete</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                customers: [],
                customer: {
                    id: 0,
                    name: '',
                    email: '',
                    about: ''
                }
            }
        },
        mounted: function mounted() {
            this.getCustomer();
        },
        methods: {
            getCustomer(){
                axios.get('/get-customers').then(response => {
                    console.log(response);
                    this.customers = response.data
                });
            }
        }
    }
</script>




