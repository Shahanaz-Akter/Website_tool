<!-- banner area start -->
<div class="main-banner">
    <div class="banner-social-icon">
        <ul>
            <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
        </ul>
    </div>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner-text-area">

                    <h6 onclick="contenteditable(this)">Luxury Hotel & Best Resort</h6>


                    <h1 onclick="contenteditable(this)">The Boutique Design & Standard Room</h1>


                    <p onclick="contenteditable(this)"> Lorem ipsum dolor sit amet, sed do eiusmod tempor ulabore et dolore
                        magna aliqua. Quis ipsum
                        suspendisse ultrices gravida. Risus commodo viverra.</p>

                    <!-- <div class="contenteditable_container">
                        <h6 class="contenteditable contenteditable1">Luxury Hotel & Best Resort</h6>
                    </div>
                    <div class="contenteditable_container">
                        <h1 class="contenteditable">The Boutique Design & Standard Room</h1>
                    </div>
                    <div class="contenteditable_container">
                        <p class="contenteditable"> Lorem ipsum dolor sit amet, sed do eiusmod tempor ulabore et dolore
                            magna aliqua. Quis ipsum
                            suspendisse ultrices gravida. Risus commodo viverra.</p>
                    </div> -->
                    <a class="default-button" href="about.html">Learn More</a>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 col-xxl-6">
                <div class="main-banner-img owl-carousel">
                    <div class="main-banner-img-content" data-dot="1">
                        <img src="{{asset('assets/Felax/images/banner/banner-1.jpg') }}" alt="image" onclick="img_edit()">
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- banner area end -->









<!--image editor start -->
<div style="display: none;" id="banner_img">
    <!-- Image Editor Start-->
    <div class="" style="position:absolute;left:80px; top: 180px; z-index:20001; width:400px; height: 550px; overflow:scroll; padding:15px;background: #f2f2f2;" id="image_editor">
        <div class="bg-secondary" style="border: 2px solid gray!important; ">
            <div style="margin: 15px 20px;">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="" style=" position: sticky; top:0px; z-index:100990; text-transform: uppercase;">
                        <div class="btn btn-outline-success text-white" onclick="content()">
                            Content
                        </div>
                        <div class="btn btn-outline-success text-white" onclick="design()">
                            Design
                        </div>
                    </div>

                    <div class="">
                        <div class="btn text-success">
                            <i class="fa-solid fa-check fa-beat font-success text-white" style="font-size: 25px;" onclick="disable_editor(this)"></i>
                        </div>

                        <div class="btn text-success">
                            <i class="fa-sharp fa-solid fa-xmark text-black" style="font-size: 25px;" onclick="disable1()"></i>
                            <!-- <button> <i class="fa-solid fa-xmark" style="font-size: 20px;" onclick="disable_editor(this)"></i></button> -->
                        </div>
                    </div>

                </div>
            </div>

            <!-- content part -->
            <div class="d-flex justify-content-center align-items-center text-uppercase text-white mb-3 mt-2 p-2">Image Design</div>
        </div>
        <hr>

        <section style="background-color: white;margin-bottom:20px;">
            <div class="">
                <div class="" style="background-color: white; margin: 0px 20px; padding: 15px 0px;">
                    <img class="" src=" {{asset('/assets/Felax/images/banner/banner-1-2.jpg')}}" style="background-position: center" alt="Card image cap" />
                </div>
                <small class="" style="padding:20px 10px;">Name: delete_me.jpg
                </small><br>
                <small style="padding:20px 10px;">Size: 1688x1152</small>
            </div>
            <div style="display:flex; gap: 10px; padding: 20px 15px;">
                <button type="button" class="btn btn-success rounded-pill" style="padding-left: 30px!important; padding-right: 30px!important">Replace</button>

                <button type="button" class="btn btn-success rounded-pill" style="padding-left: 40px!important; padding-right: 40px!important">Edit</button>
            </div>
        </section>

        <div style="background: white!important; margin-bottom:20px; padding:20px 10px;" onclick="linkImage()">
            <section style="display: flex; justify-content:space-between;">
                <span>Linked to page: Home</span>
                <span><i class=" fa-solid fa-chevron-right me-1"></i></span>
            </section>
            <small><a href="" style="color:black;">Remove link</a></small>
        </div>


        <section class="" style="background:white;padding:15px;">

            <div style="margin-bottom: 10px;">
                <label for="" style="width:100%;">Alt Text</label>

                <input type="text" name="" id="" value="Alt text" style="width:100%; padding:3px;">
            </div>
            <div style="margin-bottom: 10px;">
                <label for="" style="width:100%;">Tooltip</label>
                <input type="text" name="" id="" value="Tooltip text" style="width:100%;">
            </div>
            <div style="margin-bottom: 10px;">
                <label for="" style="width:100%;">Caption</label>
                <input type="text" name="" id="" value="Caption" style="width:100%;">
            </div>

        </section>


        <!-- design part -->

        <div class="bg-white d-flex justify-content-around p-3 d-none">
            <div onclick="click_color1(this)">Layout</div>
            <div onclick="click_color2(this)">Style</div>
            <div onclick="click_color3(this)">Animation</div>
            <div onclick="click_color4(this)">Spacing</div>
        </div>

    </div>
    <!-- Image Editor End-->

    <!--Another part start-->
    <div class="" style="display:none; position:absolute;left:500px; top: 180px; z-index:20005; width:400px; height: 550px; overflow:scroll; padding:15px;background: #f2f2f2;" id="linkImage">
        <div style="margin: 10px 0px;">
            <div>
                <div class="d-flex justify-content-end flex-wrap">
                    <div class="" style=" position: sticky; top:0px; z-index:100990; text-transform: uppercase;">
                        <div class="btn text-success">
                            <div class="btn text-success">
                                <span onclick="disable1()"> <i class="fa-sharp fa-solid fa-xmark text-black" style="font-size: 20px;"></i></span>

                                <!-- <button> <i class="fa-solid fa-xmark" style="font-size: 20px;" onclick="disable_editor(this)"></i></button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>

            <!-- link part -->
            <div style="text-align:center;">Link Image</div>
        </div>

        <section style="background-color: white;margin-bottom:20px; padding: 20px 10px;">

            <input type="radio" id="existing_page" name="all" onclick="existing_page()">
            <label for="existing_page">Existing Page</label>

            <div style="display:none;" id="hidden_sec1">
                <select name="cars" id="cars" style="width: 100%; padding: 8px; box-sizing:border-box;">
                    <option value="home">Home</option>
                    <option value="saab">Beginners Lessons</option>
                    <option value="mercedes">Advance Lessons</option>
                    <option value="audi">Reformer Lessons</option>
                </select>

                <div style="display: flex; justify-content:space-between;">
                    <small style="padding-top: 10px;"><a href="" style="color: black;">Create New page</a></small>
                    <small style="padding-top: 10px;"><a href="" style="color: black;">Go to page</a></small>
                </div>
            </div>

        </section>

        <section style="background-color: white;margin-bottom:20px; padding: 20px 10px;">
            <input type="radio" id="website_url" name="all" onclick="wesite_url()">
            <label for="website_url">Website URL</label>
        </section>


        <section style="background-color: white;margin-bottom:20px;  padding: 20px 10px;">
            <input type="radio" id="popup" name="all">
            <label for="popup">Popup</label>
        </section>

        <section style="background-color: white;margin-bottom:20px; padding: 20px 10px;">
            <input type="radio" id="anchor" name="all">
            <label for="anchor">Anchor</label>
        </section>

        <section style="background-color: white;margin-bottom:20px; padding: 20px 10px;">
            <input type="radio" id="email_address" name="all">
            <label for="email_address">Email Address</label>
        </section>

        <section style="background-color: white;margin-bottom:20px; padding: 20px 10px;">
            <input type="radio" id="click_cll" name="all">
            <label for="click_cll">Click to call</label>
        </section>

    </div>
    <!--Another 
part end-->
</div>
<!--image editor end -->

<!--for image editor necessary JS file-->

<!-- for existing div -->
<script src="{{asset('/assets/Custom_js/existing.js')}}"></script>