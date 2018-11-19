<template>
   <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary" @click="createUser()">Login</button>
            </div>
        </div>
    </div> 
</template>
<script>
export default {

};
</script>
