<template>
    <div>
        <section class="content"> 
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title pt-1">Perfil</h3>
                    <button type="button" class="btn btn-secondary float-right" v-on:click.prevent="editprofile(profile)">Editar</button>
                </div> <!-- /.card-body -->
                
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 img">
                            <img v-bind:src="profile.photo"  alt="" width="250px" class="img-rounded">
                        </div>
                        <div class="col-md-6 details">
                            <blockquote>
                                <h5>{{ profile.name}} {{ profile.surname}}</h5>
                                <small><cite title="Source Title">Chicago, United States of America  <i class="icon-map-marker"></i></cite></small>
                            </blockquote>
                        <p>
                            Email: {{ profile.email}} <br>
                            telf. o cell.: {{ profile.phone}} <br>
                        </p>
                        </div>
                    </div>
                </div>           
            </div><!-- /.container-fluid -->       
        </section> 
        
        <!-- /.Modal profile edit-->
        <div class="modal" tabindex="-1" role="dialog" id="edit">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" v-on:submit.prevent="updateprofile(fillprofile.id)" enctype="multipart/form-data">
                        <div class="modal-body">      
                            <label for="profile">prefil</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Nombre(s):</span>
                                    </div>
                                    <input type="text" class="form-control" v-model="fillprofile.name">
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Apellido(s):</span>
                                    </div>
                                    <input type="text" class="form-control" v-model="fillprofile.surname">
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Email   :</span>
                                    </div>
                                     <input type="email" class="form-control" v-model="fillprofile.email">
                                </div>
                                
                                <div class="input-group mb-2" >
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">telf. o cell.:</span>
                                    </div>
                                    <input type="text" class="form-control" v-model="fillprofile.phone">
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <label for="">Foto de perfil : </label>
                                    </div>
                                    <input type="file" accept="image/*" @change="obtenerimagen"> 
                                </div>                             
                        </div>
                        <figure>
                            <center>
                                <img width="200" :src="imagen" alt="foto">
                            </center>    
                        </figure>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="actualizar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.End modal profile edit-->
    </div>    
</template>
 <style>
    .container{
        padding:5%;
    }
    .container .img{
        text-align:center;
    }
    .container .details{
        border-left:3px solid #ded4da;
    }
    .container .details p{
        font-size:15px;
        font-weight:bold;
    }
</style>
<script>
    import axios from 'axios'
    export default ({
        data () {
            return {
                imgmini: '',
                profile: [],
                fillprofile: {
                    'id':'',
                    'name':'',
                    'surname':'',
                    'email':'',
                    'phone':'',
                    'photo':''
                    }
            }
        },
        created: function() {
            this.getprofile();
        },
        methods: {
            getprofile: function() {
                var urlprofile = 'getuser';
                axios.get(urlprofile).then(response => {
                    this.profile = response.data
                });
            },
            editprofile: function(profile) {      
                this.fillprofile.id = profile.id;
                this.fillprofile.name = profile.name;
                this.fillprofile.surname = profile.surname;
                this.fillprofile.email = profile.email;
                this.fillprofile.phone = profile.phone;
                
                $('#edit').modal('show');
            },
            updateprofile: function(id) {
                var url = 'user/' + id;
                axios.put(url, this.fillprofile).then(response =>{
                    console.log(response.data)
                    this.getprofile();
                    this.fillprofile = {'id':'','name':'','surname':'','email':'','phone':'','photo':''};
                    $('#edit').modal('hide');
                    
                });
            },
          
            // cargar imagen y renderizar en el modal
            obtenerimagen(e){
                let file = e.target.files[0];
                this.cargarimagen(file);     
            },
            cargarimagen(file){
                let reader = new FileReader();
                reader.onload = (e) => {
                    this.imgmini = e.target.result;
                    this.fillprofile.photo = this.imgmini;
                }
                reader.readAsDataURL(file);
            }  
        },
        computed: {
                imagen(){
                    return this.imgmini;
                }
            }
    })
</script>
