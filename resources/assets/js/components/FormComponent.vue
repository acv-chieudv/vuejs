<template>
    <div>
        <ul>
            <li v-for="e in error" :key="e">{{ e }}</li>
        </ul>
        <div class="form-group">
            <input type="text" class="form-control" name="name" v-model="user.name" placeholder="Username">
        </div>
    
        <div class="form-group">
            <input type="email" class="form-control" name="email" v-model="user.email" placeholder="Email">
        </div>
    
        <div class="form-group">
            <input type="password" class="form-control" name="password" v-model="user.password" placeholder="Password">
        </div>


        <button type="submit" class="btn btn-primary" @click="createUser()"  >Submit</button>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                user: {
                    name    : '',
                    email   : '',
                    password:  ''
                },
                error: []
                
            }
        },
        methods: {
            createUser() {
                axios.post('vue/addvue',{
                    name    : this.user.name,
                    email   : this.user.email,
                    password: this.user.password
                }).then(response=>{
                    alert('insert success');
                }).catch(function(res){
                    
                    console.log(res)
                })
            }
        },
        mounted() {
            //console.log('Component mounted.')
        }
    }
</script>