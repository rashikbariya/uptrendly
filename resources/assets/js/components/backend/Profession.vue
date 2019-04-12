<template>
    <div class="page has-sidebar-left">

        <div class="toast" v-if="addSucces==true"
             data-title="Hi, there!"
             data-message="Hope you like paper panel."
             data-type="success"
             data-position-class="toast-bottom-right">
        </div>
        <div class="modal fade" id="deletePop" data-backdrop="static"
             data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="deletePop"
             aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content b-0">
                    <div class="modal-body text-center">
                        <i class="icon icon-question" style="font-size: 5em;color: #65cadb;"></i>
                        <h4>Are you sure? You want to delete</h4>
                        <h5></h5>
                        <span>Note: <strong>You won't be able to revert this!</strong></span> <br>
                        <a style="margin-top:10px;margin-bottom:10px" class="btn btn-outline-success"
                           @click="deleteProfessionData(profession_id)">Yes, delete it</a>
                        <a data-dismiss="modal" aria-label="Close" style="margin-top:10px;margin-bottom:10px"
                           class="btn btn-outline-danger">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- add new profession modal -->
        <div class="modal fade" id="modalProfession" data-backdrop="static"
             data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalProfession"
             style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content b-0">
                    <div class="modal-header r-0 bg-primary" style="background-color:#60b4be !important">
                        <h6 class="modal-title text-white">{{edit==true?'Edit':'Add A New'}} Profession</h6>
                        <a @click="closeForm(profession)" data-dismiss="modal" aria-label="Close"
                           class="paper-nav-toggle paper-nav-white active"><i></i></a>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent="addNewProfession()">
                            <div class="form-row">

                                <div class="col-md-12 mb-12">
                                    <label for="title">Title <span class="error">*</span> </label>
                                    <input :style="errors.title?'border-color:red':''" type="text" autofocus class="form-control" v-model="profession.title"
                                           name="title" id="title"
                                           placeholder="Profession Title Here....">

                                   <span class="error" v-if="errors.title">{{errors.title[0]}}</span>

                                </div>
                                <div class="col-md-12 mb-12">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" v-model="profession.description" name="description"
                                              id="description"
                                              placeholder="Profession Description Here...." cols="30"
                                              rows="3"></textarea>

                                </div>

                                <div class="col-md-12 mb-12">
                                    <label for="status">Would you like to display this Profession?  <span class="error">*</span></label>
                                    <select name="status" class="form-control" id="status" v-model="profession.status">
                                        <option value="Active" selected="selected">Yes</option>
                                        <option value="Inactive">No</option>
                                    </select>
                                    <span class="error" v-if="errors.status">{{errors.status[0]}}</span>
                                </div>
                            </div>
                            <a data-dismiss="modal" aria-label="Close" style="margin-top:10px"
                               class="btn btn-danger float-left" @click="closeForm(profession)">Cancel</a>
                            <button style="margin-top:10px" class="btn btn-primary float-right">Save
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>


        <!-- end profession -->

        <header class="blue accent-3 relative">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4>
                            <i class="icon-package"></i>
                            Profession
                        </h4>
                    </div>
                </div>
                <div class="row" v-if="professionList.length>0">
                    <ul class="nav responsive-tab nav-material nav-material-white">
                        <li>
                            <a class="nav-link" ><i class="icon icon-list"></i>All
                                Profession</a>
                        </li>

                        <li>
                            <a href="#modalProfession" data-toggle="modal" data-target="#modalProfession"
                               style="cursor: pointer" class="nav-link">
                                <i class="icon icon-plus-circle"></i>Add New Profession
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </header>
        <div v-if="professionList.length>0">
            <div class="container-fluid my-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card no-b shadow">
                                <div class="card-body p-0">
                                    <div class="box-body table-responsive no-padding">

                                        <table class="table table-hover">
                                            <tr>

                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Operation</th>
                                            </tr>

                                            <tr  v-for="profession in professionList" v-bind:key="profession.id">

                                                <td>{{profession.title}}</td>
                                                <td>{{profession.description==null ||profession.description=='' ?'No Description':profession.description
                                                    | subStr }}
                                                </td>
                                                <td><span
                                                    v-bind:class="[profession.status=='Active'?'text-success':'text-danger']"
                                                    class="icon icon-circle s-12 mr-2 "></span> {{profession.status}}
                                                </td>
                                                <td>
                                                    <a href="#modalProfession" data-toggle="modal"
                                                       data-target="#modalProfession" @click="editProData(profession)"
                                                       class="btn btn-outline-primary btn-xs">
                                                        <i v-bind:class="['icon-edit']"></i> Edit</a>
                                                    <a href="#deletePop" data-toggle="modal" data-target="#deletePop"
                                                       @click="deletePop(profession.id,profession.title)"
                                                       class="btn btn-outline-danger btn-xs">
                                                        <i v-bind:class="['icon-trash']"></i> Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

            </div>
        </div>
        <div v-else>
            <div class="container-fluid pt-5">
                <div class="text-center p-5">
                    <i class="icon-note-important s-64 text-primary"></i>
                    <h4 class="my-3">No Profession Found</h4>
                    <p>You have not added any profession add first profession now</p>
                    <a class="btn btn-primary shadow btn-lg" href="#modalProfession" data-toggle="modal"
                       data-target="#modalProfession"><i class="icon-plus-circle mr-2 "></i>Add New FAQs</a>
                </div>
            </div>
        </div>


    </div>


</template>

<script>
    export default {
        data() {
            return {
                professionList: [],
                profession: {
                    'id': '',
                    'title': '',
                    'description': '',
                    'status': ''
                },
                profession_id: '',
                edit: false,
                pro_title: '',
                errors:[],
                addSucces:false
            }
        },
        created() {
            this.fetchAllProfessionList();
        },
        methods: {
            fetchAllProfessionList() {
                fetch('../../api/cms-management/profession')
                    .then(res => res.json())
                    .then(
                        res => {

                          this.professionList=(res.data);

                        })
            },

            deleteProfessionData(id) {
                fetch(`../../api/cms-management/profession/${id}`, {
                    method: 'delete'
                })
                    .then(res => res.json())
                    .then(data => {

                        $('#deletePop').modal('toggle');
                            this.fetchAllProfessionList();

                    })
                    .catch(err => console.log(err)
                    )
            },
            deletePop(pro_id, pro_title) {
                this.profession_id = pro_id;
                this.pro_title = pro_title;
            },
            addNewProfession(){
                if(this.edit==true){
                    this.errors=[]
                    axios.put('../../api/cms-management/profession?id='+ this.profession.id,{
                        title:this.profession.title,
                        status: this.profession.status,
                    }).then(response=>{
                        this.closeForm(this.profession);
                        $('#modalProfession').modal('toggle');
                        this.fetchAllProfessionList();

                    }).catch(error=>{
                        if(error.response.status==422){
                            this.errors=error.response.data.errors;
                        }
                    })
                }else{
                    this.errors=[]
                    axios.post('../../api/cms-management/profession',{
                        title:this.profession.title,
                        status: this.profession.status,
                    }).then(response=>{
                            this.closeForm(this.profession);

                            $('#modalProfession').modal('toggle');
                        this.addSucces=true;
                            this.fetchAllProfessionList();



                        }).catch(error=>{
                        if(error.response.status==422){
                            this.errors=error.response.data.errors;
                        }
                    })

                }
            },
            editProData(profession) {

                this.edit = true;
                this.profession.profession_id= profession.id;
                this.profession.id = profession.id;
                this.profession.title = profession.title;
                this.profession.description = profession.description;
                this.profession.status = profession.status;
                console.log(this.profession.id );
            },
            closeForm(profession) {
                this.errors=[];
                this.edit = false;
                this.profession.title = '';
                this.profession.description = '';
                this.profession.status = '';
            },

        },
        filters: {

            subStr: function (string) {
                return string.substring(0, 15) + '...';
            }

        }

    }
</script>



