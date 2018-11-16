<template>
    <div class="card">
        <div class="card-header"> Update Item </div>
        <div class="card-body">

            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="name" placeholder="Username" v-model="user.name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email" v-model="user.email">
            </div>

            <button type="submit" class="btn btn-primary" @click="updateUser()">Update</button>
        </div>
    </div>
</template>
<script>
export default {
    name:'Edit',
    props:['id'],
    data(){
        return {
            user: {
                name:'',
                email:''
            }
        }
    },
    created(){

        this.id = this.$route.params.id;
        this.loadUser();

    },

    methods: {
        loadUser(){
            axios.get('vue/geteditvue/'+this.id).then(res=>{
                this.user = res.data;
            });
        },
        updateUser(){
            axios.post('vue/editvue/'+this.id,{
                name : this.user.name,
                email: this.user.email
            }).then(res=>{

                swal({
                    position: 'center-center',
                    type: 'success',
                    title: 'Edit success',
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

    mounted(){

    }

}
</script>
