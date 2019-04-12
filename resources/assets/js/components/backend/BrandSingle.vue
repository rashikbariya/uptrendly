<template>
    <div class="page  has-sidebar-left height-full">
        <!--Change Status-->
        <div class="modal fade" id="changeStatus" data-backdrop="static"
             data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="changeStatus"
             aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content b-0">
                    <div class="modal-header r-0 bg-primary">
                        <h6 class="modal-title text-white">Change Status of Brand</h6>
                        <a href="#" data-dismiss="modal" aria-label="Close" class="paper-nav-toggle paper-nav-white active"><i></i></a>
                    </div>
                    <div class="modal-body">


                        <form>
                            <div class="form-row">

                                <div class="col-md-12 mb-12">
                                    <label for="status">Would you like status of brand? <span class="error">*</span></label>
                                    <select  name="status"
                                            class="form-control" id="status">
                                        <option value="0" selected="selected">Acitve</option>
                                        <option value="1">Inactive or Unverified</option>
                                        <option value="2">Suspended</option>
                                        <option value="3">Verified</option>
                                    </select>
                                    <!--<span class="error" v-if="errors.status">{{errors.status[0]}}</span>-->
                                </div>
                            </div>
                            <a data-dismiss="modal" aria-label="Close" style="margin-top:10px"
                               class="btn btn-danger float-left">Cancel</a>
                            <button style="margin-top:10px" class="btn btn-primary float-right">Change It
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <!--send mail to brand-->
        <div class="modal fade" id="sendMail" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="sendMail" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content b-0">
                    <div class="modal-header r-0 bg-primary">
                        <h6 class="modal-title text-white" id="exampleModalLabel">Send Message to Brand</h6>
                        <a href="#" data-dismiss="modal" aria-label="Close" class="paper-nav-toggle paper-nav-white active"><i></i></a>
                    </div>
                    <div class="modal-body no-p no-b">
                    </div>
                    <form method="post">
                        <div class="form-group col-md-12 focused">
                            <label  class="col-form-label">Subject</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-12 focused">
                            <label  class="col-form-label">Description/Message</label>
                            <textarea rows="4" class="form-control"></textarea>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <a data-dismiss="modal" aria-label="Close" style="margin-top:10px"
                           class="btn btn-danger float-left">Cancel</a>
                        <button style="margin-top:10px" class="btn btn-primary float-right">Send Message </button>
                    </div>
                </div>
            </div>
        </div>


        <!--reset password-->


        <!--view pricing history-->
        <div class="modal fade" id="pricingHistory" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="pricingHistory" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content b-0">
                    <div class="modal-header r-0 bg-primary">
                        <h6 class="modal-title text-white">View Subscription of Brand</h6>
                        <a href="#" data-dismiss="modal" aria-label="Close" class="paper-nav-toggle paper-nav-white active"><i></i></a>
                    </div>
                    <div class="modal-body no-p no-b">

                    </div>

                    <div class="modal-footer">
                        <a data-dismiss="modal" aria-label="Close" style="margin-top:10px"
                           class="btn btn-danger float-left">Cancel</a>
                    </div>
                </div>
            </div>
        </div>




        <header class="blue accent-3 relative">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4 v-for="brandInfo in brandInfoData" v-bind:key="brandInfo.id">
                            <i class="icon-backspace"></i>
                            <a href="#">Brand Information</a> / {{brandInfo.brand_info.brand_name}}
                        </h4>
                    </div>
                </div>
            </div>
        </header>

    <div class="container-fluid ">

        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane show active go" id="v-pills-all" role="tabpanel"
                 aria-labelledby="v-pills-all-tab">
                <div class="row row-eq-height my-3">
                    <!-- Social Widget Start -->
                    <div class="col-lg-4" v-for="brandInfo in brandInfoData" v-bind:key="brandInfo.id">
                        <div class="card">
                            <div class="card-body text-center">
                                <div v-if="brandInfo.available_status==0" style="  border-radius: 50%;
            position: absolute;
            left: 0px;
            margin-left: 10px;
            background-color: #ed5564;
            width: 15px;
            height: 15px;">

                                </div>
                                <div  v-if="brandInfo.available_status==1" style="  border-radius: 50%;
            position: absolute;
            left: 0px;
            margin-left: 10px;
            background-color: green;
            width: 15px;
            height: 15px;">




                                </div>
                                <div v-if="brandInfo.brand_info.new_status==0" class="blink" style="right:  0;background-color: #ff752f;position: absolute;width: 40px;height:  20px;" >
                                    <label style="color:white">New</label>
                                </div>
                                <div class="image m-3">
                                    <img v-if="brandInfo.brand_info.photo_name!=null" style="width: 100px"
                                         class="user_avatar img-thumbnail"
                                         v-bind:src="'/users/upload/brand/thumbnail/'+ brandInfo.brand_info.photo_name"
                                         v-bind:alt="brandInfo.brand_info.brand_name">
                                    <img v-else
                                         class="user_avatar img-thumbnail" style="width: 100px"
                                         v-bind:src="'/img/branddefault.png'"
                                         v-bind:alt="brandInfo.brand_info.brand_name">
                                    <!--<img  src="assets/img/dummy/u1.png" alt="User Image">-->
                                </div>
                                <div style="margin-bottom: 10px">
                                    <h6 class="p-t-10"> {{brandInfo.brand_info.brand_name}}</h6>
                                    {{brandInfo.email}}
                                    <br>
                                    {{brandInfo.brand_info.about_brand}}


                                    <br>

                                    <span v-if="brandInfo.status==1" class="badge badge-success"><span class="">Active</span></span>
                                    <span v-if="brandInfo.status==2" class="badge badge-danger"><span class="blink">Not Verified</span></span>
                                    <span v-if="brandInfo.status==3" class="badge badge-danger "><span class="blink">Suspended</span></span>
                                    <span v-if="brandInfo.status==4" class="badge badge-primary"><span class="">Verified</span></span>
                                </div>

                                <div style="margin-bottom: 10px" class="text-center bg-light b-b p-3">
                                    <h3 class="my-3" v-if="brandInfo.brand_pricing!=null">
                                        Days
                                    </h3>

                                    <h3 class="my-3" v-if="brandInfo.brand_pricing==null">
                                        FREE
                                    </h3>

                                </div>
                                <label v-if="brandInfo.brand_pricing!=null">{{brandInfo.brand_pricing.pricing.pricing_title}} Package
                                    ({{brandInfo.brand_pricing.total_month>1?brandInfo.brand_pricing.total_month+ ' Months': brandInfo.brand_pricing.total_month+ ' Month' }})</label>
                                <label v-if="brandInfo.brand_pricing==null">Basic Package</label> <br>

                                <label v-if="brandInfo.brand_pricing!=null">Start Date: {{brandInfo.brand_pricing.from_date}}</label>
                                <label v-if="brandInfo.brand_pricing==null">Start Date: {{brandInfo.created_at}}</label>
                                <label v-if="brandInfo.brand_pricing!=null">End Date: {{brandInfo.brand_pricing.to_date}}</label>
                                <label v-if="brandInfo.brand_pricing==null">End Date: Null</label>
                            </div>

                            <ul class="list-group list-group-flush">

                                <li v-if="brandInfo.brand_pricing!=null" class="list-group-item">
                                    <i class="icon-history"></i> <a href="#pricingHistory" data-toggle="modal"
                                                                    data-target="#pricingHistory">View Subscription</a>
                                </li>
                                <li class="list-group-item">
                                    <i class="icon-settings2"></i><a href="#changeStatus" data-toggle="modal"
                                                                     data-target="#changeStatus">Change Status of Brand</a>
                                </li>
                                <li class="list-group-item">
                                    <i class="icon-envelope-o"></i> <a href="#sendMail" data-toggle="modal"
                                                                       data-target="#sendMail">Send Message to brand</a>
                                </li>
                                <li class="list-group-item">
                                    <i class="icon-settings2"></i> Reset Password
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">

                        <div class="card no-b">
                            <div class="card-header indigo darken-1 text-white">
                                <h4><i class="icon-message mr-2 mb-5"></i>Campaigns</h4>
                            </div>
                            <div class="card-body no-p">
                                <div class="tab-content" id="v-pills-tabContent2">
                                    <div style="margin-top: 10px;margin-bottom: -20px">
                                        <div class="form-group col-md-12 focused">

                                            <select class="form-control">
                                                <option>All</option>
                                                <option>Pending</option>
                                                <option>Running</option>
                                                <option>Past</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="card-columns pt-3 pb-3" style="padding:12px;column-count:2">
                                        <div class="card">
                                            <img class="card-img-top" src="" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                                    content.</p>
                                                <p class="card-text">
                                                    <small class="text-muted">Last updated 3 mins ago</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                brandInfoData:[],
                brand:{
                    'id':'',
                    'brand_name':'',


                },
                pagination:{},


            }
        },
        created() {
            this.fetchBrandInfo();
        },
        methods: {

            fetchBrandInfo(page_url,type_faqs) {
                fetch('../../api/brand-info/1')
                    .then(res => res.json())
                    .then(
                        res => {
                            console.log(res.data);
                            this.brandInfoData = res.data;
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
