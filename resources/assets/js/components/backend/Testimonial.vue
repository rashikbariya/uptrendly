<template>
    <div class="page has-sidebar-left">


        <div class="modal fade" id="deletePop" data-backdrop="static"
             data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="deletePop"
             aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content b-0">
                    <div class="modal-body text-center">
                        <i class="icon icon-question" style="font-size: 5em;color: #65cadb;"></i>
                        <h4>Are you sure? You want to delete</h4>
                        <h5>Testimonial of {{testi_fullname}} </h5>
                        <span>Note: <strong>You won't be able to revert this!</strong></span> <br>
                        <a style="margin-top:10px;margin-bottom:10px" class="btn btn-outline-success"
                           @click="deleteTestimonialData(testi_id)">Yes, delete it</a>
                        <a data-dismiss="modal" aria-label="Close" style="margin-top:10px;margin-bottom:10px"
                           class="btn btn-outline-danger">Cancel</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- add new testimonial modal -->
        <div class="modal fade" id="modalTestimonial" data-backdrop="static"
             data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalTestimonial"
             style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content b-0">
                    <div class="modal-header r-0 bg-primary" style="background-color:#60b4be !important">
                        <h6 class="modal-title text-white"> {{edit?'Edit':'Add A New'}} testimonial</h6>
                        <a @click="closeForm(testimonials)" data-dismiss="modal" aria-label="Close"
                           class="paper-nav-toggle paper-nav-white active"><i></i></a>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent="addNewTestimonial()">
                            <div class="form-row">

                                <div class="col-md-12 mb-12">
                                    <label for="fullname">Full Name</label>
                                    <input type="text"  autofocus class="form-control" v-model="testimonials.fullname" name="fullname" id="fullname"
                                           placeholder="Fullname Here...."/>
                                    <span class="error" v-if="errors.fullname" >{{errors.fullname[0]}}</span>

                                </div>
                                <div class="col-md-12 mb-12">
                                    <label for="description">Decription</label>
                                    <textarea class="form-control" v-model="testimonials.description" name="description" id="description"
                                              placeholder="Description Here...." cols="30" rows="4"></textarea>
                                    <span class="error" v-if="errors.description" >{{errors.description[0]}}</span>
                                </div>
                                <div class="col-md-12 mb-12">
                                    <label>Profession Title</label>
                                    <select class="form-control"  v-model="testimonials.profession_id">
                                        <option v-for="pro in professionList" v-bind:value="pro.id" >
                                            {{pro.title}}
                                        </option>
                                    </select>
                                    <span class="error" v-if="errors.profession_id" >{{errors.profession_id[0]}}</span>
                                </div>
                                <div class="col-md-12 mb-12">
                                    <label >Photo (304 x 319 pixel only)</label>
                                    <input accept=".png, .jpg, .jpeg"  type="file"  @change="changeImage" class="form-control">
                                    <span class="error" v-if="errors.photo_path" >{{errors.photo_path[0]}}</span>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label for="sort_order">Sort Order</label>
                                    <input type="number" name="sort_order" v-model="testimonials.sort_order" id="sort_order"
                                           class="form-control">
                                    <span class="error" v-if="errors.sort_order" >{{errors.sort_order[0]}}</span>

                                </div>
                                <div class="col-md-6 mb-6">
                                    <label >Would you like to display this FAQ?</label>
                                    <select  class="form-control" id="status" v-model="testimonials.status">
                                        <option value="Active" >Yes</option>
                                        <option value="Inactive">No</option>
                                    </select>
                                    <span class="error" v-if="errors.status" >{{errors.status[0]}}</span>
                                </div>
                            </div>
                            <a data-dismiss="modal" aria-label="Close" style="margin-top:10px"
                               class="btn btn-danger float-left" @click="closeForm(testimonials)">Cancel</a>
                            <button style="margin-top:10px" class="btn btn-primary float-right">Save
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- end modal -->


        <header class="blue accent-3 relative">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4>
                            <i class="icon-package"></i>
                            Testimonials
                        </h4>
                    </div>
                </div>
                <div class="row" v-if="testimonialList.length>0">
                    <ul class="nav responsive-tab nav-material nav-material-white">
                        <li>
                            <a class="nav-link"><i class="icon icon-package"></i>All Testimonials</a>
                        </li>

                        <li>
                            <a href="#modalTestimonial" data-toggle="modal" data-target="#modalTestimonial"
                               style="cursor: pointer" class="nav-link">
                                <i class="icon icon-plus-circle"></i>Add New Testimonials
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
        </header>
        <div v-if="testimonialList.length>0">
            <div class="container-fluid my-3">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card no-b shadow">
                                <div class="card-body p-0">
                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-hover ">
                                            <tbody>
                                            <tr  s>
                                                <td class="w-10">
                                                    <img style="border-radius: 50%" v-bind:src="'/backend/assets/img/testimonials/'+ testimonial.photo_path"  v-bind:alt="testimonial.fullname">
                                                </td>

                                                <td>
                                                    <h6>{{testimonial.fullname}}</h6>
                                                    <span class="badge badge-secondary">{{testimonial.profession.title}}</span>
                                                </td>

                                                <td>
                                                    <span>{{testimonial.description | subStr}}</span>
                                                </td>
                                                <td><span class="icon icon-circle s-12  mr-2" v-bind:class="testimonial.status=='Active'?'text-success':'text-danger'"></span> {{testimonial.status}} </td>

                                                <td>
                                                    <a href="#modalTestimonial" data-toggle="modal"
                                                       data-target="#modalTestimonial" @click="editTestiData(testimonial)"
                                                       class="btn btn-outline-primary btn-xs">
                                                        <i v-bind:class="['icon-edit']"></i> Edit</a>
                                                    <a href="#deletePop" data-toggle="modal" data-target="#deletePop"
                                                       @click="deletePop(testimonial.id,testimonial.fullname)"
                                                       class="btn btn-outline-danger btn-xs">
                                                        <i v-bind:class="['icon-trash']"></i> Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                            <div class="box-tools" v-if="testimonialList.length>10">
                                <ul class="pagination pagination-sm no-margin float-right">
                                    <li v-bind:class=[{disabled:!pagination.prev_page_url}]
                                        class="page-item"><a href="#"
                                                             @click="fetchAllfaqsList(pagination.prev_page_url)"
                                                             class="page-link">Preview</a>
                                    </li>
                                    <li class="page-item disabled"><a href="#" class="page-link">page
                                        {{pagination.current_page}} of {{pagination.last_page}}</a>
                                    </li>
                                    <!-- <li class="page-item"><a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item active"><a href="#" class="page-link">3</a>
                                    </li> -->

                                    <li v-bind:class=[{disabled:!pagination.next_page}]
                                        class="page-item"><a href="#" @click="fetchTestimonialData(pagination.next_page)"
                                                             class="page-link">Next</a>
                                    </li>
                                </ul>

                            </div>

                        </div>
                    </div>

            </div>

        </div>

        <div v-if="testimonialList.length<1">
            <div class="container-fluid pt-5">
                <div class="text-center p-5">
                    <i class="icon-note-important s-64 text-primary"></i>
                    <h4 class="my-3">No Testimonial Found</h4>
                    <p>You have not added any testimonials add first testimonial now</p>
                    <a class="btn btn-primary shadow btn-lg" href="#modalTestimonial" data-toggle="modal"
                       data-target="#modalTestimonial"><i class="icon-plus-circle mr-2 "></i>Add New FAQs</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                testimonialList:[],
                professionList:[],
                testimonials: {
                    'id': '',
                    'fullname': '',
                    'description': '',
                    'profession_id': '',
                    'photo_path': '',
                    'sort_order': '',
                    'status': '',
                },
                profession: {
                    'id': '',
                    'title': '',

                },
                testi_id: '',
                pagination: {},
                edit: false,
                testi_fullname: '',
                errors:[],

            }
        },
        created() {

           this.fetchTestimonialData();
           this.fetchActiveProfessionList();
        },
        methods: {
            changeImage(e){


                    var fileReader = new FileReader();
                    fileReader.readAsDataURL(e.target.files[0]);
                    fileReader.onload = (e) => {
                        this.testimonials.photo_path = e.target.result;
                    }
                console.log(this.testimonials);

            },
            showModel() {
                this.showAddFaqModal = true;
            },
            fetchTestimonialData(page_url) {
                let vm = this;
                page_url = page_url || '../../api/cms-management/testimonials'
                fetch(page_url)
                    .then(res => res.json())
                    .then(
                        res => {

                            this.testimonialList = res.data;
                            vm.makePagination(res.meta, res.links);

                        })
                    .catch(err => console.log(err));

            },
            fetchActiveProfessionList(){
                fetch('../../api/cms-management/profession/active')
                    .then(res => res.json())
                    .then(
                        res => {
                           // console.log(res.data);
                            this.professionList = res.data;


                        })
                    .catch(err => console.log(err));
            },
            makePagination(meta, links) {
                let pagination = {
                    current_page: meta.current_page,
                    last_page: meta.last_page,
                    next_page: links.next,
                    prev_page_url: links.prev,
                    total: meta.total,
                    from: meta.from,
                }
                this.pagination = pagination;
            },
            deleteTestimonialData(id) {

                fetch(`../../api/cms-management/testimonials/${id}`, {
                    method: 'delete'
                })
                    .then(res => res.json())
                    .then(data => {

                        $("#deletePop").modal('toggle');


                        this.fetchTestimonialData();


                    })
                    .catch(err => console.log(err))
            },
            addNewTestimonial() {

                if (this.edit == true) {
                    fetch('../../api/cms-management/testimonial', {
                        method: 'put',
                        body: JSON.stringify(this.testimonials),
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                        .then(res => res.json())
                        .then(data => {

                            this.closeForm(this.testimonials);
                            this.fetchTestimonialData();
                            $('#modalTestimonial').modal('toggle');
                        })
                        .catch(err => console.log(err));
                }
                else {

                    axios.post('../../api/cms-management/testimonial',{
                        fullname:this.testimonials.fullname,
                        description:this.testimonials.description,
                        profession_id:this.testimonials.profession_id,
                        photo_path:this.testimonials.photo_path,
                        sort_order:this.testimonials.sort_order,
                        status:this.testimonials.status,
                    }).then(response=>{
                        console.log(res => data);
                        this.closeForm(this.testimonials);
                        $('#modalTestimonial').modal('toggle');
                        this.fetchTestimonialData();
                    }).catch(error=>{
                        if (error.response.status == 422) {
                            this.errors = error.response.data.errors;
                        }
                    });

                }

            },
            editTestiData(testi) {
                this.edit = true;
                console.log(testi);
                this.testimonials.testi_id = testi.id;
                this.testimonials.id = testi.id;
                this.testimonials.fullname = testi.fullname;
                this.testimonials.description = testi.description;
                this.testimonials.sort_order = testi.sort_order;
                this.testimonials.status = testi.status;
            },
            showAlertBox() {
                this.$noty.success("Your profile has been saved!")
            },
            closeForm(testimonials) {
                this.errors=[];
                this.edit = false;
                this.testimonials.fullname = '';
                this.testimonials.description = '';
                this.testimonials.sort_order = '';
                this.testimonials.status='';
                this.testimonials.profession_id='';
                this.testimonials.photo_path='';

            },
            deletePop(testi_id, testi_fullname) {

                this.testi_id = testi_id;
                this.testi_fullname = testi_fullname;
            }
        },
        filters: {

            subStr: function (string) {
                if (string.length < 45) {
                    return string.substring(0, 45);
                }
                else {
                    return string.substring(0, 25) + '...';
                }
            }

        }

    }
</script>
