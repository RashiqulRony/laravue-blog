
<template>
    <div class="container">
        <div id="vue-wrapper">
            <div class="row">
                <div class="col-12">
                    <a class="btn btn-success">Back</a>
                    <hr>
                </div>
                <div class="col-12">
                   <form action="create-customer" method="post">
                       <div class="form-group">
                           <label for="name">Name:</label>
                           <input type="text" class="form-control" id="name" name="name" v-model="name" required  placeholder=" Enter some name">
                       </div>

                       <div class="form-group">
                           <label for="email">Email:</label>
                           <input type="number" class="form-control" id="email" v-model="email" name="email" required  placeholder=" Enter your email">
                       </div>

                       <div class="form-group">
                           <label for="about">Email:</label>
                           <textarea class="form-control" id="about" name="about" required v-model="about"  placeholder=" Enter your email"></textarea>
                       </div>

                       <div class="form-group">
                           <button>Save</button>
                       </div>
                   </form>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                name: '',
                email: '',
                about: ''
            }
        }
    }
</script>




