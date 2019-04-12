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
                        <h5>Qus: {{faq_question}}</h5>
                        <span>Note: <strong>You won't be able to revert this!</strong></span> <br>
                        <a style="margin-top:10px;margin-bottom:10px" class="btn btn-outline-success"
                           @click="deleteFaqsData(faq_id)">Yes, delete it</a>
                        <a data-dismiss="modal" aria-label="Close" style="margin-top:10px;margin-bottom:10px"
                           class="btn btn-outline-danger">Cancel</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- add new FAQs modal -->
        <div class="modal fade" id="modalFaqs" data-backdrop="static"
             data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalFaqs"
             style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content b-0">
                    <div class="modal-header r-0 bg-primary" style="background-color:#60b4be !important">
                        <h6 class="modal-title text-white">Add A New Frequently Asked
                            Question</h6>
                        <a @click="closeForm(faqs)" data-dismiss="modal" aria-label="Close"
                           class="paper-nav-toggle paper-nav-white active"><i></i></a>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent="addNewFaqs()">
                            <div class="form-row">

                                <div class="col-md-12 mb-12">
                                    <label for="question">Question <span class="error">*</span></label>
                                    <textarea :style="errors.question?'border-color:red':''" autofocus
                                              class="form-control" v-model="faqs.question" name="question"
                                              id="question"
                                              placeholder="FAQs Question Here...." cols="30" rows="2"></textarea>
                                    <span class="error" v-if="errors.question">{{errors.question[0]}}</span>

                                </div>
                                <div class="col-md-12 mb-12">
                                    <label for="answer">Answer <span class="error">*</span></label>
                                    <textarea :style="errors.answer?'border-color:red':''" class="form-control"
                                              v-model="faqs.answer" name="answer" id="answer"
                                              placeholder="FAQs Answer Here...." cols="30" rows="4"></textarea>
                                    <span class="error" v-if="errors.answer">{{errors.answer[0]}}</span>
                                </div>
                                <div class="col-md-12 mb-12">
                                    <label for="status">Type of FAQ <span class="error">*</span></label>
                                    <select :style="errors.type?'border-color:red':''" name="status"
                                            class="form-control" v-model="faqs.type">
                                        <option value="general-faqs">General</option>
                                        <option value="influencer-faqs">Influencer</option>
                                        <option value="brand-faqs">Brand</option>
                                    </select>
                                    <span class="error" v-if="errors.type">{{errors.type[0]}}</span>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label for="sort_order">Sort Order <span class="error">*</span></label>
                                    <input :style="errors.sort_order?'border-color:red':''" type="number"
                                           name="sort_order" v-model="faqs.sort_order" id="sort_order"
                                           class="form-control">
                                    <span class="error" v-if="errors.sort_order">{{errors.sort_order[0]}}</span>

                                </div>
                                <div class="col-md-6 mb-6">
                                    <label for="status">Would you like to display this FAQ? <span class="error">*</span></label>
                                    <select :style="errors.status?'border-color:red':''" name="status"
                                            class="form-control" id="status" v-model="faqs.status">
                                        <option value="Active" selected="selected">Yes</option>
                                        <option value="Inactive">No</option>
                                    </select>
                                    <span class="error" v-if="errors.status">{{errors.status[0]}}</span>
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
                            Frequently Asked Questions
                        </h4>
                    </div>
                </div>
                <div class="row" v-if="faqsList.length>0 || type_faqs!=''">
                    <ul class="nav responsive-tab nav-material nav-material-white">
                        <li>
                            <a class="nav-link"><i class="icon icon-question"></i>All FAQs</a>
                        </li>

                        <li>
                            <a v-if="type_faqs==''" href="#modalFaqs" data-toggle="modal" data-target="#modalFaqs"
                               style="cursor: pointer" class="nav-link">
                                <i class="icon icon-plus-circle"></i>Add New FAQs
                            </a>
                            <a v-if="type_faqs=='general-faqs'" href="#modalFaqs" data-toggle="modal" data-target="#modalFaqs"
                               style="cursor: pointer" class="nav-link">
                                <i class="icon icon-plus-circle"></i>Add New General FAQs
                            </a>
                            <a v-if="type_faqs=='influencer-faqs'" href="#modalFaqs" data-toggle="modal" data-target="#modalFaqs"
                               style="cursor: pointer" class="nav-link">
                                <i class="icon icon-plus-circle"></i>Add New Influencer FAQs
                            </a>
                            <a v-if="type_faqs=='brand-faqs'" href="#modalFaqs" data-toggle="modal" data-target="#modalFaqs"
                               style="cursor: pointer" class="nav-link">
                                <i class="icon icon-plus-circle"></i>Add New Brand FAQs
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
   <div class="container-fluid my-3">
       <div class="row">
           <div class="col-md-12">
               <div >
                   <button type="button" class="btn btn-outline-secondary btn-xs"
                           v-bind:class="type_faqs==''?'active':'' "@click="fetchAllfaqsList('','')" >All FAQs
                   </button>
                   <button type="button" class="btn btn-outline-secondary btn-xs"
                           v-bind:class="type_faqs=='general-faqs'?'active':'' " @click="fetchAllfaqsList('','general-faqs')">
                       General FAQs
                   </button>
                   <button type="button" class="btn btn-outline-secondary btn-xs"
                           v-bind:class="type_faqs=='influencer-faqs'?'active':''" @click="fetchAllfaqsList('','influencer-faqs')" >Influencer FAQs
                   </button>
                   <button type="button" class="btn btn-outline-secondary btn-xs"
                           v-bind:class="type_faqs=='brand-faqs'?'active':'' " @click="fetchAllfaqsList('','brand-faqs')">Brand FAQs
                   </button>
               </div>
           </div>
       </div>
   </div>
        <div v-if="faqsList.length>0 || type_faqs!=''">
            <div class="container-fluid my-3">

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
                                            <th>Type</th>
                                            <th>Status</th>
                                            <th>Operation</th>
                                        </tr>

                                        <tr v-bind:id="faqs.id" v-for="faqs in faqsList" v-bind:key="faqs.id">
                                            <td> {{faqs.sort_order}}</td>
                                            <td>{{faqs.question | subStr }}</td>
                                            <td>{{faqs.answer | subStr }}</td>
                                            <td v-if="faqs.type=='general-faqs'"><span class="badge badge-primary">General</span>
                                            </td>
                                            <td v-if="faqs.type=='influencer-faqs'"><span class="badge badge-secondary">Influencer</span>
                                            </td>
                                            <td v-if="faqs.type=='brand-faqs'"><span
                                                class="badge badge-dark">Brand</span></td>
                                            <td><span
                                                v-bind:class="[faqs.status=='Active'?'text-success':'text-danger']"
                                                class="icon icon-circle s-12 mr-2 "></span> {{faqs.status}}
                                            </td>
                                            <td>
                                                <a href="#modalFaqs" data-toggle="modal"
                                                   data-target="#modalFaqs" @click="editFaqsData(faqs)"
                                                   class="btn btn-outline-primary btn-xs">
                                                    <i v-bind:class="['icon-edit']"></i></a>
                                                <a href="#deletePop" data-toggle="modal" data-target="#deletePop"
                                                   @click="deletePop(faqs.id,faqs.question)"
                                                   class="btn btn-outline-danger btn-xs">
                                                    <i v-bind:class="['icon-trash']"></i>
                                                </a>
                                            </td>

                                        </tr>

                                        <tr v-if="faqsList.length<1">
                                            <td colspan="6" class="text-center">No record found</td>
                                        </tr>

                                    </table>
                                </div>

                            </div>

                        </div>
                        <div class="box-tools">
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
                                    class="page-item"><a href="#" @click="fetchAllfaqsList(pagination.next_page,type)"
                                                         class="page-link">Next</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div v-if="faqsList.length<1 && type_faqs==''">
            <div class="container-fluid pt-5">
                <div class="text-center p-5">
                    <i class="icon-note-important s-64 text-primary"></i>
                    <h4 class="my-3">No Frequently Asked Questions Found</h4>
                    <p>You have not added any FAQs add first FAQs now</p>
                    <a class="btn btn-primary shadow btn-lg" href="#modalFaqs" data-toggle="modal"
                       data-target="#modalFaqs"><i class="icon-plus-circle mr-2 "></i>Add New FAQs</a>
                </div>
            </div>
        </div>

    </div>

</template>

<script>
    export default {
        data() {
            return {
                faqsList: [],
                faqs: {
                    'id': '',
                    'question': '',
                    'answer': '',
                    'type': '',
                    'sort_order': '',
                    'status': '',
                },
                faq_id: '',
                pagination: {},
                edit: false,
                faq_question: '',
                printer_off: true,
                errors: [],
                type_faqs: '',
                url:'../../api/cms-management/faqs',

            }
        },
        created() {
            this.fetchAllfaqsList('','');
        },
        methods: {

            fetchAllfaqsList(page_url,type_faqs) {
                this.type_faqs = type_faqs;
                console.log(type_faqs);
                let vm = this;
                page_url = page_url || this.url + '?type=' + this.type_faqs
                fetch(page_url)
                    .then(res => res.json())
                    .then(
                        res => {
                           console.log(res.data);
                            this.faqsList = res.data;
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
            deleteFaqsData(id) {

                fetch(`../../api/cms-management/faqs/${id}`, {
                    method: 'delete'
                })
                    .then(res => res.json())
                    .then(data => {

                        $("#deletePop").modal('toggle');
                        this.fetchAllfaqsList('',this.type_faqs);


                    })
                    .catch(err => console.log(err))
            },
            addNewFaqs() {
                this.errors = [];

                if (this.edit == true) {
                    fetch('../../api/cms-management/faqs', {
                        method: 'put',
                        body: JSON.stringify(this.faqs),
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                        .then(res => res.json())
                        .then(data => {
                            this.fetchAllfaqsList('',this.faqs.type);
                            this.closeForm(this.faqs);

                            $('#modalFaqs').modal('toggle');
                        })
                        .catch(err => console.log(err));
                }
                else {
                    //add new

                    axios.post('../../api/cms-management/faqs', {

                        question: this.faqs.question,
                        answer: this.faqs.answer,
                        type: this.faqs.type,
                        sort_order: this.faqs.sort_order,
                        status: this.faqs.status,

                    }).then(response => {
                        console.log(this.type_faqs);
                        this.fetchAllfaqsList('',this.type_faqs);
                        this.closeForm(this.faqs);
                        $('#modalFaqs').modal('toggle');

                    }).catch(error => {
                        if (error.response.status == 422) {
                            this.errors = error.response.data.errors;
                        }
                    })
                }

            },
            editFaqsData(faqs) {
                this.edit = true;
                this.faqs.faq_id = faqs.id;
                this.faqs.id = faqs.id;
                this.faqs.question = faqs.question;
                this.faqs.answer = faqs.answer;
                this.faqs.sort_order = faqs.sort_order;
                this.faqs.status = faqs.status;
            },
            showAlertBox() {
                this.$noty.success("Your profile has been saved!")
            },
            closeForm(faqs) {
                this.edit = false;
                this.errors = [];
                this.faqs.question = '';
                this.faqs.answer = '';
                this.faqs.type = '';
                this.faqs.sort_order = '';
                this.faqs.status = '';

            },
            deletePop(faq_id, faq_question) {
                console.log(faq_question);
                this.faq_id = faq_id;
                this.faq_question = faq_question;
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
