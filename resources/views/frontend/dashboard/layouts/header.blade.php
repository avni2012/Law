@php
  use App\Http\Controllers\Frontend\CommonController as Common;
  $notifications = Common::notifications(Auth::id());
@endphp
<!-- ===== Top-Navigation ===== -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <a class="navbar-toggle font-20 hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
            </a>
            <div class="top-left-part">
                <a class="logo" href="index.html">
                        <img src="{{ asset('public/frontend/img/logo-footer.png') }}" alt="home" />
                </a>
            </div>
            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li>
                    <a href="javascript:void(0)" class="sidebartoggler font-20 waves-effect waves-light"><i class="icon-arrow-left-circle"></i></a>
                </li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li class="dropdown">
                    <a class="dropdown-toggle waves-effect waves-light font-20" data-toggle="dropdown" href="javascript:void(0);">
                        <i class="icon-speech"></i>
                        <span class="badge badge-xs badge-danger notify_count">{{ $notifications }}</span>
                    </a>
                    <ul class="dropdown-menu mailbox animated bounceInDown">
                        <li>
                            <div class="drop-title">You have <span class="notify_count">{{ $notifications }}</span> new messages</div>
                        </li>
                        <li>
                            <div class="message-center">
                                <a href="javascript:void(0);">
                                    <div class="mail-contnet">
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:30 AM</span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);">
                                    <div class="user-img">
                                        <img src="{{ asset('public/frontend/img/users/1.jpg') }}" alt="user" class="img-circle">
                                        <span class="profile-status online pull-right"></span>
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:30 AM</span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);">
                                    <div class="user-img">
                                        <img src="{{ asset('public/frontend/img/users/2.jpg') }}" alt="user" class="img-circle">
                                        <span class="profile-status busy pull-right"></span>
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Sonu Nigam</h5>
                                        <span class="mail-desc">I've sung a song! See you at</span>
                                        <span class="time">9:10 AM</span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);">
                                    <div class="user-img">
                                        <img src="{{ asset('public/frontend/img/users/3.jpg') }}" alt="user" class="img-circle"><span class="profile-status away pull-right"></span>
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Arijit Sinh</h5>
                                        <span class="mail-desc">I am a singer!</span>
                                        <span class="time">9:08 AM</span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);">
                                    <div class="user-img">
                                        <img src="{{ asset('public/frontend/img/users/4.jpg') }}" alt="user" class="img-circle">
                                        <span class="profile-status offline pull-right"></span>
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a class="text-center" href="javascript:void(0);">
                                <strong>See all notifications</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
<!-- ===== Top-Navigation-End ===== -->