<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.users.header')
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
            <div class="row w-100 mx-auto">
                <div class="col-lg-4 mx-auto">
                    <div class="auto-form-wrapper">
                        <form action="#">
                            <div>
                                <img src="">
                            </div>
                            <div class="form-group">



                                <label class="label">About your brand <i style="font-size: 10px;" class="icon-question"
                                                                         data-toggle="tooltip" data-placement="bottom"
                                                                         title=""
                                                                         data-original-title="Provide details on your Brand to help the Influencer create a story."></i>*</label><br>

                                <textarea class="form-control" rows="4"
                                        ></textarea>
                                <label style="margin-top: 5px;float: right" class="label ">0 / 250</label>
                            </div>
                            <div class="form-group">
                                <label class="label">Pricing * </label><br>
                                <label class="label">You are in basic package</label>
                            </div>


                            <div class="form-group">
                                <button class="btn btn-primary submit-btn btn-block">Continues </button>
                            </div>


                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- Main JS Files -->
@include('partials.users.javascript')
</body>
</html>
