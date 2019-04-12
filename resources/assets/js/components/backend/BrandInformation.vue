<template>

    <div class="container-fluid " >
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane show active go" id="v-pills-all" role="tabpanel"
                 aria-labelledby="v-pills-all-tab">
                <div class="row row-eq-height my-3">
                    <!-- Social Widget Start -->
                    <div class="col-lg-4 col-md-4 " v-for="brandInfo in brandInfoData" v-bind:key="brandInfo.id">
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
                                    {{brandInfo.email}}<br>

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

                            <div class="card-footer white">
                                <a  href="brand-info/1" class="btn btn-outline-primary btn-xs">View Brand</a>
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
                fetch('../../api/brand-info')
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
