<template>
    <div class="card">
        <div class="card-header"> Add Item </div>
        <div class="card-body">

            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="name" placeholder="Username" v-model="user.name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email" v-model="user.email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" v-model="user.password">
            </div>

            <button type="submit" class="btn btn-primary" @click="createUser()">Create</button>
        </div>
    </div>
</template>
<script>
    import listcomponent from '../components/ListComponent.vue';
    export default {
        name: 'Add',
        props: ['list_user'],
        data(){
            return {
                user: {
                    name    : '',
                    email   : '',
                    password: '',
                },
            }
        },
        created(){
            this.list_user = this.$route.params.list_user;
        },
        methods:{
            createUser(){
                axios.post('vue/addvue',{
                    name    : this.user.name,
                    email   : this.user.email,
                    password: this.user.password
                }).then(function(res){

                    swal({
                        position: 'center-center',
                        type: 'success',
                        title: 'Insert success',
                        showConfirmButton: true
                    }); 

                    

                }).catch(res=>{
                    swal(
                        'Nooooo!',
                        'Insert not success',
                        'error'
                    )
                });
            }
        },
        mounted() {
            
           
        }
    }
</script>
