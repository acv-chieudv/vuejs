<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header"> Example Component   <hr>
                        <router-link :to="{ name: 'add',path : '/add',params:  { list_user:list_user } }" class="btn btn-primary"><i class="fa fa-plus-square"></i></router-link> 
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Create at</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="item in list_user" :key="item.id" >
                                    <td>{{ item.name }}</td>
                                    <td>{{ item.email }}</td>
                                    <td>{{ item.created_at }}</td>
                                    <td>
                                        <router-link :to="{ name: 'edit',path : '/edit/'+item.id , params: {id:item.id} }" class="btn btn-primary"><i class="fas fa-edit"></i></router-link>
                                        <a class="btn btn-danger" data-toggle="modal" @click="deleteUser(item.id)" href="#">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <router-view></router-view>
            </div>
        </div>
    </div>

</template>

<script>
    
    export default {
        data(){
            return {
                list_user: []
            }
        },
        created(){
            this.getListUser();
        },
        methods: {
            getListUser(){
                axios.get('vue/listvue').then(response => {
                   this.list_user = response.data
                }).catch(function(e){
                    console.log(e);
                })
            },
            deleteUser(id){
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.value) {

                            axios.post('vue/delvue/'+id).then(response=>{
                                swal(
                                    'Deleted!',
                                    'Item has been deleted.',
                                    'success'
                                )
                            }).catch(response=>{
                                console.log(response);
                            });
                            
                        }
                })
                
            }
        },
        mounted(){
            setInterval(() => {
                this.getListUser()
            }, 2000);
        }
    }
</script>
