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
                        <h5>Qus: {{career_title}}</h5>
                        <span>Note: <strong>You won't be able to revert this!</strong></span> <br>
                        <a style="margin-top:10px;margin-bottom:10px" class="btn btn-outline-success"
                           @click="deleteCareerData(career_id)">Yes, delete it</a>
                        <a data-dismiss="modal" aria-label="Close" style="margin-top:10px;margin-bottom:10px"
                           class="btn btn-outline-danger">Cancel</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- add new FAQs modal -->
        <div class="modal fade" id="modalCareer" data-backdrop="static"
             data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalCareer"
             style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content b-0">
                    <div class="modal-header r-0 bg-primary" style="background-color:#60b4be !important">
                        <h6 class="modal-title text-white">Add A New Career</h6>
                        <a @click="closeForm(careers)" data-dismiss="modal" aria-label="Close"
                           class="paper-nav-toggle paper-nav-white active"><i></i></a>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent="addNewCareer()">
                            <div class="form-row">

                                <div class="col-md-12 mb-12">
                                    <label for="title">Title</label>
                                    <textarea autofocus class="form-control" v-model="careers.title" name="title"
                                              id="title"
                                              placeholder="Title Here" cols="30" rows="1"></textarea>

                                </div>
                                <div class="col-md-12 mb-12">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" v-model="careers.description"
                                              name="description" id="description"></textarea>
                                </div>

                                <div class="col-md-6 mb-6">
                                    <label for="sort_order">Sort Order</label>
                                    <input type="number" name="sort_order" v-model="careers.sort_order" id="sort_order"
                                           class="form-control">

                                </div>
                                <div class="col-md-6 mb-6">
                                    <label for="status">Would you like to display this FAQ?</label>
                                    <select name="status" class="form-control" id="status" v-model="careers.status">
                                        <option value="Active" selected="selected">Yes</option>
                                        <option value="Inactive">No</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mb-12">
                                    <label for="ended_date">Ended Date</label>

                                    <input type="text" id="ended_date" placeholder="yyyy-mm-dd" name="ended_date" v-model="careers.ended_date"
                                           class="form-control"
                                          >

                                </div>
                            </div>
                            <a data-dismiss="modal" aria-label="Close" style="margin-top:10px"
                               class="btn btn-danger float-left" @click="closeForm(faqs)">Cancel</a>
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
                            <i class="icon-question"></i>
                            Career List
                        </h4>
                    </div>
                </div>
                <div class="row" v-if="careerList.length>0">
                    <ul class="nav responsive-tab nav-material nav-material-white">
                        <li>
                            <a class="nav-link"><i class="icon icon-question"></i>All Career</a>
                        </li>

                        <li>
                            <a href="#modalCareer" data-toggle="modal" data-target="#modalCareer"
                               style="cursor: pointer" class="nav-link">
                                <i class="icon icon-plus-circle"></i>Add New Career
                            </a>
                        </li>

                        <li>
                            <a style="cursor: pointer" class="nav-link">
                                <i class="icon icon-print"></i>Print ALL
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <div v-if="careerList.length>0">
            <div class="container-fluid animatedParent animateOnce my-3">
                <div class="animated fadeInUpShort">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card no-b shadow">
                                <div class="card-body p-0">
                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-hover">
                                            <tr>
                                                <th>View Order</th>
                                                <th>Question</th>
                                                <th>Answer</th>
                                                <th>Status</th>
                                                <th>Operation</th>
                                            </tr>

                                            <tr v-bind:id="faqs.id" v-for="faqs in faqsList" v-bind:key="faqs.id">
                                                <td> {{faqs.sort_order}}</td>
                                                <td>{{faqs.question | subStr }}</td>
                                                <td>{{faqs.answer | subStr }}</td>
                                                <td><span
                                                    v-bind:class="[faqs.status=='Active'?'text-success':'text-danger']"
                                                    class="icon icon-circle s-12 mr-2 "></span> {{faqs.status}}
                                                </td>
                                                <td>
                                                    <a href="#modalFaqs" data-toggle="modal"
                                                       data-target="#modalFaqs" @click="editFaqsData(faqs)"
                                                       class="btn btn-outline-primary btn-xs">
                                                        <i v-bind:class="['icon-edit']"></i> Edit</a>
                                                    <a href="#deletePop" data-toggle="modal" data-target="#deletePop"
                                                       @click="deletePop(faqs.id,faqs.question)"
                                                       class="btn btn-outline-danger btn-xs">
                                                        <i v-bind:class="['icon-trash']"></i> Delete
                                                    </a>
                                                </td>

                                            </tr>

                                        </table>
                                    </div>

                                </div>

                            </div>
                            <div class="box-tools" v-if="faqsList.length>10">
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
                                        class="page-item"><a href="#" @click="fetchAllfaqsList(pagination.next_page)"
                                                             class="page-link">Next</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div v-if="careerList.length<1">
            <div class="container-fluid pt-5">
                <div class="text-center p-5">
                    <i class="icon-note-important s-64 text-primary"></i>
                    <h4 class="my-3">No Career Found</h4>
                    <p>You have not added any career add first career now</p>
                    <a class="btn btn-primary shadow btn-lg" href="#modalCareer" data-toggle="modal"
                       data-target="#modalCareer"><i class="icon-plus-circle mr-2 "></i>Add New FAQs</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                careerList: [],
                careers: {
                    'id': '',
                    'title': '',
                    'description': '',
                    'status': '',
                    'sort_order': '',
                    'ended_date': '',
                },
                career_id: '',
                pagination: {},
                edit: false,
                career_title: '',


            }
        },
        created() {
            this.fetchAllCareerData();
        },
        methods: {

            fetchAllCareerData(page_url) {
                let vm = this;
                page_url = page_url || '../../api/career'
                fetch(page_url)
                    .then(res => res.json())
                    .then(
                        res => {
                            //console.log(res.data);
                            this.careerList = res.data;
                            vm.makePagination(res.meta, res.links);

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
            deleteCareerData(id) {

                fetch(`../../api/career/${id}`, {
                    method: 'delete'
                })
                    .then(res => res.json())
                    .then(data => {

                        fetchAllCareerData();


                    })
                    .catch(err => console.log(err))
            },
            addNewCareer() {

                if (this.edit == true) {
                    fetch('../../api/career', {
                        method: 'put',
                        body: JSON.stringify(this.careers),
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                        .then(res => res.json())
                        .then(data => {

                            this.closeForm(this.careers);
                            this.fetchAllCareerData();
                            $('#modalCareer').modal('toggle');
                        })
                        .catch(err => console.log(err));
                }
                else {
                    //add new
                    fetch('../../api/career', {
                        method: 'post',
                        body: JSON.stringify(this.careers),
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                        .then(res => res.json())
                        .then(data => {
                            console.log(res => data);

                            this.careers.title = '';
                            this.careers.description = '';
                            this.careers.sort_order = '';
                            this.careers.status = '';
                            this.careers.ended_date = '';
                            $('#modalCareer').modal('toggle');
                            this.fetchAllCareerData();
                        })
                        .catch(err => console.log(err));
                }

            },
            editCareerData(careers) {
                this.edit = true;
                this.careers.career_id = careers.id;
                this.careers.id = careers.id;
                this.careers.title = careers.title;
                this.careers.description = careers.description;
                this.careers.sort_order = careers.sort_order;
                this.careers.status = careers.status;
                this.careers.ended_date = careers.ended_date;
            },

            closeForm(careers) {
                this.edit = false;
                this.careers.title = '';
                this.careers.description = '';
                this.careers.sort_order = '';
                this.careers.status = '';
                this.careers.ended_date = '';

            },
            deletePop(career_id, career_title) {
                console.log(career_title);
                this.career_id = career_id;
                this.career_title = career_title;
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
