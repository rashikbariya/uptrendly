@extends('layouts.influencer')
@section('influencer-content')
    <style>
        .img-small {
            width: 150px;
        }
    </style>

    <div class="content-wrapper px-3">
        <div class="email-wrapper wrapper">
            <div class="row align-items-stretch">
                <div class="mail-sidebar d-none d-lg-block col-md-3 pt-3 bg-white">
                    <div class="menu-bar">
                        <ul class="menu-items">Inbox
                            <li class="active"><a href="#">All</a> </li>
                            <li><a href="#">From Uptrendly</a> </li>
                            <li><a href="#">Pending Campaign</a> </li>
                            <li><a href="#">Completed Campaign</a> </li>

                        </ul>
                        <a href="#">Sent</a>

                    </div>
                </div>
                <div class="mail-list-container col-md-9 pt-4 pb-4 border-right bg-white">
                    <div class="border-bottom pb-4 mb-3 px-3">
                        <div class="form-group">
                            <input class="form-control form-control-sm w-100" type="search" placeholder="Search mail"
                                   id="Mail-rearch">
                        </div>
                    </div>
                    <div ng-show="!vm.loading &amp;&amp; vm.getMessages().length == 0" class=""
                         ng-include="'components/messages/messages/emptyMail.html'" aria-hidden="false" style="">
                        <div class="empty wrapper-lg">
                            <div class="text-center">
                                <div class="h3 font-bold m-b-xs m-t">No Messages</div>
                                <div class="h4 font-thin"><p>All the messages from your workrooms can be viewed
                                        here.</p></div>
                                <img class="thumb-empty m-b m-t-sm img-small"
                                     src="https://famebit.com/assets/img/icon_empty_message.png?6ef66f682c9615b3" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@stop()
