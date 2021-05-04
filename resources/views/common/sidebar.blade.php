<nav id="sidebar">
    <div class="sidebar-header">
        <img src="{{ url('/')}}/images/logo-axiom.png" alt="" style="width: 70%;">
    </div>
    <div id="accordion" class="accordion accordion-custom">
        <div class="mb-0">
            <ul class="list-unstyled sidelist components">
                <li class="{{ request()->is('product')?'active':''}}
                {{ request()->is('product/*')?'active':''}}">
                    <a href="{{route('products.index')}}" aria-expanded="false">
                        <i class="mr-2">
                            <img src="{{ url('/')}}/images/dashboard.png" alt="">
                        </i>
                        Home
                    </a>
                </li>
                <li class="{{ request()->is('products/trash')?'active':''}}">
                    <a href="{{route('products.trash')}}" aria-expanded="false">
                        <i class="mr-2 fa fa-trash"></i>
                        Trash
                    </a>
                </li>
                <!-- <li>
                    <a class="tooglenav collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        <i class="mr-2"><img src="./images/report.png" alt=""></i>
                        Trash
                    </a>
                    <ul class="collapse list-unstyled collapse listblock" id="collapseOne" data-parent="#accordion">
                        <li>
                            <a href="#">Custom Reports</a>
                        </li>
                    </ul>
                </li> -->

                <!-- <li class="active">
                    <a data-toggle="collapse" class="tooglenav" data-parent="#accordion" href="#collapseThree">
                        <i class="mr-2"><img src="./images/user.png" alt=""></i>Users
                    </a>
                    <ul class="collapse show list-unstyled listblock" data-parent="#accordion" id="collapseThree">
                        <li>
                            <a href="#">All Users</a>
                        </li>
                        <li>
                            <a href="#" class="active">Add User</a>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </div>
    </div>
    <div class="footer">
        <div class="footerlogo">
            <img src="{{ url('/')}}/images/footerlogo.png" alt="" style="width: 20%;">
            <span>Powered by: ashutec</span>
        </div>
        <div class="contactbg">
            <div class="mob-icon">
                <img src="./images/mob-icon.png" alt="">
            </div>
            <div class="smalltext">
                <div class="question">Questions?</div>
                <div class="contact">Contact Us</div>
            </div>
        </div>
    </div>
</nav>