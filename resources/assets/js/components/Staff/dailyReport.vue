<template>
    <div class="content-wrapper animatedParent animateOnce" style="min-height: 613px;">
        <div class="container">
            <form @submit.prevent="addDailyReport()">
            <div class="row" style="margin-bottom: 10px">


                <div class="col-md-6">
                    <div class="card ">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="icon icon-date_range text-primary"></i><strong class="s-12">Date</strong> <span class="float-right s-12">{{getDate()}}</span></li>
                        </ul>
                     <div class="card-body">

                         <div class="table-responsive">
                             <table class="table table-hover table-bordered">
                                 <thead>
                                 <tr>
                                     <th>Time</th>
                                     <th>Start</th>
                                     <th>End</th>
                                     <th>Duration</th>
                                 </tr>
                                 </thead>
                                 <tbody>
                                 <tr>
                                     <td>Office</td>
                                     <td><input type="text" v-model="dReportTime.o_start_time" class="date-time-picker form-control"  data-options="{&quot;datepicker&quot;:false, &quot;format&quot;:&quot;H:i&quot;}"></td>
                                     <td><input type="text" v-model="dReportTime.o_end_time"  class="date-time-picker form-control"  data-options="{&quot;datepicker&quot;:false, &quot;format&quot;:&quot;H:i&quot;}"></td>
                                     <td><span></span></td>
                                 </tr>
                                 <tr>
                                     <td>Lunch</td>
                                     <td><input type="text" v-model="dReportTime.l_start_time" class="date-time-picker form-control"  data-options="{&quot;datepicker&quot;:false, &quot;format&quot;:&quot;H:i&quot;}"></td>
                                     <td><input type="text" v-model="dReportTime.l_end_time"  class="date-time-picker form-control"  data-options="{&quot;datepicker&quot;:false, &quot;format&quot;:&quot;H:i&quot;}"></td>
                                     <td><span></span></td>
                                 </tr>

                                 </tbody>
                             </table>
                         </div>
                     </div>
                    </div>
                </div>
            </div>
            <section class="paper-card">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                        <tr>
                                            <th width="1%">#</th>
                                            <th>Task</th>
                                            <th>Details</th>

                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        <tr v-for="(dailyReport,index) in dReports">
                                            <td>{{index + 1}}</td>
                                            <td><textarea v-model="dailyReport.task" class="form-control" rows="2"></textarea>
                                            </td>
                                            <td>
                                                <textarea v-model="dailyReport.details" class="form-control" rows="2"></textarea>
                                            </td>


                                            <td width="1%">
                                                <a  v-bind:class="index==0?'disabled':''" @click="deleteAddedForm(index)" class="btn btn-danger btn-sm">
                                                    <i class="icon icon-close"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td colspan="4">
                                                <button type="button" @click="addNewField" class="btn btn-sm btn-outline-primary pull-left">
                                                    <i class="icon icon-add"></i>Add new task
                                                </button>
                                                <button class="btn btn-outline-danger" type="submit">Add New</button>
                                            </td>

                                        </tr>
                                        </tfoot>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.box -->

                    </div>
                </div>


                <!-- /.row -->

            </section>
            </form>
        </div>
    </div>

</template>

<script>
    export default {
        data() {
            return {
                dReportList:[],
                dReports: [
                    {
                        task: '',
                        details: '',
                    },

                ],
                dReportTime:{
                    o_start_time:'',
                    o_end_time:'',
                    l_start_time:'',
                    l_end_time:'',
                },
                o_start_time:'',
                o_end_time:'',
                l_start_time:'',
                l_end_time:'',
                o_duration:'',
                l_duration:'',
                errors:[],
            }
        },
        created() {

        },
        methods: {



            addNewField(){
                this.dReports.push({
                    task: '',
                    details: '',
                });
            },
            deleteAddedForm(index){
                this.dReports.splice(index,1);
            },
            getDate () {
                const toTwoDigits = num => num < 10 ? '0' + num : num;
                let today = new Date();
                let year = today.getFullYear();
                let month = toTwoDigits(today.getMonth() + 1);
                let day = toTwoDigits(today.getDate());
                return `${year}-${month}-${day}`;
            },
            addDailyReport(){

                this.errors=[];
                axios.post('../../api/daily-report', this.dReports).then(response => {
                    console.log(response);
                }).catch(error => {
                    if (error.response.status == 422) {
                        this.errors = error.response.data.errors;
                    }
                })

                // //add new
                // fetch('../../api/daily-report', {
                //     method: 'post',
                //     body: JSON.stringify(this.dReports),
                //     headers: {
                //         'content-type': 'application/json'
                //     }
                // })
                //     .then(res => res.json())
                //     .then(data => {
                //         console.log(res => data);
                //     })
                //     .catch(err => console.log(err));
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
