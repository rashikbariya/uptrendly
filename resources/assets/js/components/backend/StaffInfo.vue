<template>
    <div class="page  has-sidebar-left height-full">


        <div class="modal fade" id="deletePop" data-backdrop="static"
             data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="deletePop"
             aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content b-0">
                    <div class="modal-body text-center">
                        <i class="icon icon-question" style="font-size: 5em;color: #65cadb;"></i>
                        <h4>Are you sure? You want to delete</h4>
                        <h5>Information of {{staff_fullname}} </h5>
                        <span>Note: <strong>You won't be able to revert this!</strong></span> <br>
                        <a style="margin-top:10px;margin-bottom:10px" class="btn btn-outline-success"
                           @click="deleteStaffInfo(staff_id)">Yes, delete it</a>
                        <a data-dismiss="modal" aria-label="Close" style="margin-top:10px;margin-bottom:10px"
                           class="btn btn-outline-danger">Cancel</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="modalStaffInfo" data-backdrop="static"
             data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalStaffInfo"
             style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content b-0">
                    <div class="modal-header r-0 bg-primary" style="background-color:#60b4be !important">
                        <h6 class="modal-title text-white"> {{edit?'Edit':'Add A New'}} Staff Information</h6>
                        <a @click="closeForm(staffInfo)" data-dismiss="modal" aria-label="Close"
                           class="paper-nav-toggle paper-nav-white active"><i></i></a>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent="addNewStaff()">
                            <div class="form-row">

                                <div class="col-md-12 mb-12">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" v-model="staffInfo.fullname"/>

                                </div>
                                <div class="col-md-12 mb-12">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" v-model="staffInfo.email"/>
                                </div>
                                <div class="col-md-6 mb-12">
                                    <label>Mobile Number</label>
                                    <input type="text" class="form-control" v-model="staffInfo.phone_number"/>
                                </div>
                                <div class="col-md-6 mb-12">
                                    <label>Date of Birth</label>
                                    <input type="text" class="form-control" v-model="staffInfo.dob"/>
                                </div>
                                <div class="col-md-12 mb-12">
                                    <label>Designation</label>
                                    <input type="text" class="form-control" v-model="staffInfo.designation"/>
                                </div>
                                <div class="col-md-12 mb-12">
                                    <label>Photo</label>
                                    <input accept=".png, .jpg, .jpeg" type="file" @change="changeImage"
                                           class="form-control">
                                </div>
                                <div class="col-md-12 mb-12">
                                    <label>Linkedin Url</label>
                                    <input type="text" class="form-control" v-model="staffInfo.linkedin_url"/>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label for="sort_order">Sort Order</label>
                                    <input type="number" name="sort_order" v-model="staffInfo.sort_order"
                                           id="sort_order"
                                           class="form-control">

                                </div>
                                <div class="col-md-6 mb-6">
                                    <label for="status">Would you like to display this Staff?</label>
                                    <select name="status" class="form-control" id="status" v-model="staffInfo.status">
                                        <option value="Active" selected="selected">Yes</option>
                                        <option value="Inactive">No</option>
                                    </select>
                                </div>
                            </div>
                            <a data-dismiss="modal" aria-label="Close" style="margin-top:10px"
                               class="btn btn-danger float-left" @click="closeForm(staffInfo)">Cancel</a>
                            <button style="margin-top:10px" class="btn btn-primary float-right">Save
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <header class="blue accent-3 relative">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4>
                            <i class="icon-group"></i>
                            Staff Information
                        </h4>
                    </div>
                </div>
                <div v-if="staffInfoList.length>0" class="row justify-content-between">
                    <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                        <li>
                            <a class="nav-link active show" id="v-pills-all-tab" data-toggle="pill" href="#v-pills-all"
                               role="tab" aria-controls="v-pills-all" aria-selected="true"><i
                                class="icon icon-home2"></i>All Users</a>
                        </li>

                        <li class="float-right">
                            <a href="#modalStaffInfo" data-toggle="modal"
                               data-target="#modalStaffInfo" class="nav-link"><i
                                class="icon icon-plus-circle"></i> Add New Staff</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <div v-if="staffInfoList.length>0" class="container-fluid ">
            <div class="tab-content my-3" id="v-pills-tabContent">
                <div class="tab-pane  active show" id="v-pills-all" role="tabpanel"
                     aria-labelledby="v-pills-all-tab">
                    <div class="row my-3">
                        <div class="col-md-12">
                            <div class="card r-0 shadow">
                                <div class="table-responsive">
                                    <form>
                                        <table class="table table-striped table-hover r-0">
                                            <thead>
                                            <tr class="no-b">
                                                <th>Sort Order</th>
                                                <th></th>
                                                <th>Full Name</th>
                                                <th>Phone(M)</th>
                                                <th>Designation</th>
                                                <th>Hash password</th>
                                                <th>Status</th>

                                                <th>Operator</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr v-bind:key="staffInfo.staff_id" v-for="staffInfo in staffInfoList">

                                                <td>#{{staffInfo.sort_order}}</td>
                                                <td class="w-10">
                                                    <img v-if="staffInfo.photo_path!=null" style="border-radius: 50%;	width: 80%;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.12),
            0 2px 4px 0 rgba(0,0,0,0.08); margin-bottom:10px"
                                                         v-bind:src="'/backend/assets/img/staffs/'+ staffInfo.photo_path"
                                                         v-bind:alt="staffInfo.fullname">
                                                    <img v-else style="border-radius: 50%; width:80%;	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.12),
            0 2px 4px 0 rgba(0,0,0,0.08); margin-bottom:10px"
                                                         v-bind:src="'/frontend/img/LLogo.jpg'"
                                                         v-bind:alt="staffInfo.fullname">
                                                </td>
                                                <td>

                                                    <div>


                                                        <div>
                                                            <strong>{{staffInfo.fullname.toLowerCase().trim()}}</strong>
                                                        </div>
                                                        <small>{{staffInfo.email}}</small>

                                                    </div>
                                                </td>

                                                <td>{{staffInfo.phone_number}}</td>
                                                <td><span
                                                    class="r-3 badge badge-primary ">{{staffInfo.designation}}</span>
                                                </td>
                                                <td><span>{{staffInfo.hash_password}}</span></td>


                                                <td><span class="icon icon-circle s-12  mr-2"
                                                          v-bind:class="staffInfo.status=='Active'?'text-success':'text-danger'"></span>
                                                    {{staffInfo.status}}
                                                </td>


                                                <td>
                                                    <a href="#modalStaffInfo" data-toggle="modal"
                                                       data-target="#modalStaffInfo"
                                                       @click="editStaffInfoData(staffInfo)"
                                                       class="btn btn-outline-primary btn-xs">
                                                        <i v-bind:class="['icon-edit']"></i> Edit</a>
                                                    <a href="#deletePop" data-toggle="modal" data-target="#deletePop"
                                                       @click="deletePop(staffInfo.id,staffInfo.fullname)"
                                                       class="btn btn-outline-danger btn-xs">
                                                        <i v-bind:class="['icon-trash']"></i> Delete
                                                    </a>
                                                </td>
                                            </tr>


                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div v-if="staffInfoList.length<1">
            <div class="container-fluid pt-5">
                <div class="text-center p-5">
                    <i class="icon-note-important s-64 text-primary"></i>
                    <h4 class="my-3">No Staff Information Found</h4>
                    <p>You have not added any staff information add first staff information now</p>
                    <a class="btn btn-primary shadow btn-lg" href="#modalStaffInfo" data-toggle="modal"
                       data-target="#modalStaffInfo"><i class="icon-plus-circle mr-2 "></i>Add New Satff</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                staffInfoList: [],
                staffInfo: {
                    'id': '',
                    'fullname': '',
                    'email': '',
                    'phone_number': '',
                    'dob': '',
                    'designation': '',
                    'photo_path': '',
                    'linkedin_url': '',
                    'status': '',
                    'sort_order': '',
                    'hash_password':''
                },
                photo_path: '',
                staff_id: '',
                edit: false,
                staff_fullname: '',

            }
        },
        created() {
            this.fetchAllStaffInfo();
        },
        methods: {
            changeImage(e) {

                console.log(e.target.files[0]);
                var fileReader = new FileReader();
                fileReader.readAsDataURL(e.target.files[0]);
                fileReader.onload = (e) => {

                    this.staffInfo.photo_path = e.target.result;
                }
                console.log(this.staffInfo);

            },

            fetchAllStaffInfo() {

                fetch('../../api/staff-info')
                    .then(res => res.json())
                    .then(
                        res => {
                            console.log(res.data);
                            this.staffInfoList = res.data;

                        })
                    .catch(err => console.log(err));

            },

            deleteStaffInfo(id) {

                fetch(`../../api/staff-info/${id}`, {
                    method: 'delete'
                })
                    .then(res => res.json())
                    .then(data => {

                        $("#deletePop").modal('toggle');

                        this.fetchAllStaffInfo();


                    })
                    .catch(err => console.log(err))
            },
            addNewStaff() {

                if (this.edit == true) {
                    fetch('../../api/staff-info', {
                        method: 'put',
                        body: JSON.stringify(this.staffInfo),
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                        .then(res => res.json())
                        .then(data => {

                            this.closeForm(this.staffInfo);
                            this.fetchAllStaffInfo();
                            $('#modalStaffInfo').modal('toggle');
                        })
                        .catch(err => console.log(err));
                }
                else {
                    //add new
                    fetch('../../api/staff-info', {
                        method: 'post',
                        body: JSON.stringify(this.staffInfo),
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                        .then(res => res.json())
                        .then(data => {
                            console.log(res => data);

                            this.staffInfo.staff_id = '';
                            this.staffInfo.id = '';
                            this.staffInfo.fullname = '';
                            this.staffInfo.email = '';
                            this.staffInfo.sort_order = '';
                            this.staffInfo.status = '';
                            this.staffInfo.linkedin_url = '';
                            this.staffInfo.designation = '';
                            this.staffInfo.phone_number = '';
                            this.staffInfo.dob = '';
                            this.staffInfo.photo_path='';
                            $('#modalStaffInfo').modal('toggle');
                            this.fetchAllStaffInfo();
                        })
                        .catch(err => console.log(err));
                }

            },
            editStaffInfoData(staffInfo) {
                this.edit = true;
                this.staffInfo.staff_id = staffInfo.id;
                this.staffInfo.id = staffInfo.id;
                this.staffInfo.fullname = staffInfo.fullname;
                this.staffInfo.email = staffInfo.email;
                this.staffInfo.sort_order = staffInfo.sort_order;
                this.staffInfo.phone_number = staffInfo.phone_number;
                this.staffInfo.status = staffInfo.status;
                this.staffInfo.dob = staffInfo.dob;
                this.staffInfo.linkedin_url = staffInfo.linkedin_url;
                this.staffInfo.designation = staffInfo.designation;
                //this.staffInfo.photo_path = staffInfo.photo_path;

            },

            closeForm(staffInfo) {
                this.edit = false;
                this.staffInfo.staff_id = '';
                this.staffInfo.id = '';
                this.staffInfo.fullname = '';
                this.staffInfo.email = '';
                this.staffInfo.sort_order = '';
                this.staffInfo.status = '';
                this.staffInfo.linkedin_url = '';
                this.staffInfo.designation = '';
                this.staffInfo.phone_number = '';
                this.staffInfo.dob = '';
                this.staffInfo.photo_path='';
                //this.staffInfo.photo_path = staffInfo.photo_path;

            },
            deletePop(staff_id, staff_name) {

                this.staff_id = staff_id;
                this.staff_fullname = staff_name;
            }
        },
        filters: {

            subStr: function (string) {
                if (string.length < 30) {
                    return string.substring(0, 25);
                }
                else {
                    return string.substring(0, 25) + '...';
                }
            }

        }

    }
</script>
