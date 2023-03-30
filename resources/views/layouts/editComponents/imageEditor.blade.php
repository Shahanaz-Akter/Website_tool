<div>
    <!-- Image Editor Start-->
    <div class="" style="position:absolute;left:80px; top: 180px; z-index:20001; width:400px; height: 550px; overflow:scroll; padding:15px;background: #f2f2f2;" id="image_editor">
        <div class="bg-secondary" style="border: 2px solid gray!important; ">
            <div style="margin: 10px 20px;">
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
                            <i class="fa-solid fa-check fa-beat font-success text-white" style="font-size: 20px;" onclick="disable_editor(this)"></i>
                        </div>

                        <div class="btn text-success">
                            <i class="fa-sharp fa-solid fa-xmark text-black" style="font-size: 20px;" onclick="disable1()"></i>
                            <!-- <button> <i class="fa-solid fa-xmark" style="font-size: 20px;" onclick="disable_editor(this)"></i></button> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- content part start-->
        <div style="" id="content">
            <div class="d-flex justify-content-center align-items-center text-uppercase text-white mb-3 mt-2 p-2">Image Design</div>
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
                    <span> <i class="fa-solid fa-phone" style="padding-right: 10px;"></i>Linked to call: 555-555-5555</span>
                    <span><i class=" fa-solid fa-chevron-right me-1"></i></span>
                </section>
                <small><a href="" style="color:black;">Remove link</a></small>
            </div>


            <section class="" style="background:white;padding:15px;">

                <div style="margin-bottom: 10px;">
                    <label for="" style="width:100%;">Alt Text <i class="fa-regular fa-circle-question" style="padding-left: 10px;"></i></label>

                    <input type="text" name="" id="" value="Alt text" style="width:100%; padding:5px;">
                </div>
                <div style="margin-bottom: 10px;">
                    <label for="" style="width:100%;">Tooltip <i class="fa-regular fa-circle-question" style="padding-left: 10px;"></i></label>
                    <input type="text" name="" id="" value="Tooltip text" style="width:100%; padding:5px;">
                </div>
                <div style="margin-bottom: 10px;">
                    <label for="" style="width:100%;">Caption</label>
                    <input type="text" name="" id="" value="Caption" style="width:100%; padding:5px;">
                </div>

            </section>
        </div>

        <!-- Design part -->
        <div id="design" style="display:none;">
            <div class="d-flex justify-content-center align-items-center text-uppercase text-white mb-3 mt-2 p-2">Image Design</div>
            <hr>
            <div style="background: white; display: flex; justify-content:space-around; padding: 12px;">
                <div onclick="click_color1(this)">Layout</div>
                <div onclick="click_color2(this)">Style</div>
                <div onclick="click_color3(this)">Animation</div>
                <div onclick="click_color4(this)">Spacing</div>
            </div>

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

        </div>

        <!-- Image Editor End-->

        <!--Another part start-->
        <div class="" style="display:none; position:absolute;left:500px; top: 180px; z-index:20005; width:400px; height: 550px; overflow:scroll; padding:15px;background: #f2f2f2;" id="linkImage">
            <div style="margin: 10px 0px;">
                <div>
                    <div class="d-flex justify-content-end flex-wrap">
                        <div class="" style=" position: sticky; top:0px; z-index:100990; text-transform: uppercase;">
                            <div class="btn text-success">
                                <i class="fa-sharp fa-solid fa-xmark text-black" style="font-size: 20px;" onclick="disable2()"></i>
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
                <input type="radio" id="website_url" name="all" onclick="website_url()">
                <label for="website_url">Website URL</label>

                <div style="display:none;" id="hidden_sec2">
                    <input type="text" value="www.google.com" style="width: var(--mywidth); margin: 15px 0px;" style="font-style:italic;">
                    <input type="checkbox" id="open_window" name="">
                    <label for="open_window">Open in a new window</label>
                </div>
            </section>

            <section style="background-color: white;margin-bottom:20px;padding: 20px 10px;">
                <input type="radio" id="popup" name="all" onclick="pop_up()">
                <label for="popup">Popup</label>

                <div style="display:none;" id="hidden_sec3">
                    <a href="" style="width: var(--mywidth);">Create New popup</a>
                </div>
            </section>

            <section style="background-color: white;margin-bottom:20px; padding: 20px 10px;">
                <input type="radio" id="anchor" name="all" onclick="anchor()">
                <label for="anchor">Anchor</label>

                <div style="display:none;padding: 10px 0px;" id="hidden_sec4">
                    <label for="">Page: </label>
                    <select name="" id="" style="width: var(--mywidth); padding: 8px; box-sizing:border-box;">
                        <option value="home">Home</option>
                        <option value="saab">Beginners Lessons</option>
                        <option value="mercedes">Advance Lessons</option>
                        <option value="audi">Reformer Lessons</option>
                    </select>

                    <br>
                    <label for="" style="margin-top: 10px;">Anchor: </label>
                    <select name="" id="" style="width: var(--mywidth); padding: 8px; box-sizing:border-box; margin-bottom: 10px;">
                        <option value="home">Select</option>
                        <option value="saab">Class</option>
                        <option value="mercedes">Lessons</option>
                        <option value="audi">Testimonials</option>
                        <option value="audi">About me</option>
                        <option value="audi">Contact me</option>
                        <option value="audi">Top</option>
                    </select>
                </div>
            </section>

            <section style="background-color: white;margin-bottom:20px; padding: 20px 10px;">
                <input type="radio" id="email_address" name="all" onclick="email_address()">
                <label for="email_address">Email Address</label>

                <div style="display:none;padding: 10px 0px;" id="hidden_sec5">
                    <section style="background-color: white;margin-bottom:20px;padding: 20px 10px;">
                        <input type="text" id="email_address" name="" value="email@.email.com" style="font-style:italic;width: var(--mywidth);">
                    </section>
                </div>
            </section>

            <section style="background-color: white;margin-bottom:20px; padding: 20px 10px;">
                <input type="radio" id="click_cll" name="all" onclick="click_all()">
                <label for="click_cll">Click to call</label>

                <div style="display:none; padding: 10px 0px;" id="hidden_sec6">
                    <small>Click to call is only active on devices that support direct calling</small>
                    <select name="" id="" style="width: var(--mywidth); padding: 8px; box-sizing:border-box; margin-bottom: 10px;">
                        <option value="home">555-555-555</option>
                        <option value="saab">Class</option>
                        <option value="mercedes">Lessons</option>
                        <option value="audi">Testimonials</option>
                        <option value="audi">About me</option>
                        <option value="audi">Contact me</option>
                        <option value="audi">Top</option>
                    </select>
                </div>
            </section>


            <section style="background-color: white;margin-bottom:20px; padding: 20px 10px;">
                <input type="radio" id="file_upload" name="all" onclick="file_upload()">
                <label for="file_upload">File Upload</label>

                <div style="display:none;padding: 10px 0px;" id="hidden_sec7">
                    <section style="background-color: white;margin-bottom:20px;padding: 20px 10px;">
                        <div style="font-style:italic;width: var(--mywidth); border: 1px dotted black; padding: 8px;">
                            <span> <i>+ </i> </span>
                            <span>File</span>
                        </div>
                    </section>
                </div>
            </section>
            <a href="" style="color: black;">Remove Link </a>
        </div>

        <!--Another part end-->
    </div>

    <!-- for color transition -->
    <script src="{{asset('/assets/Custom_js/color_transition.js')}}"></script>
    <!-- for linkImage -->
    <script src="{{asset('/assets/Custom_js/linkimage.js')}}"></script>
    <!-- for existing div -->
    <script src="{{asset('/assets/Custom_js/existing.js')}}"></script>
    <!-- for disable1 div -->
    <script src="{{asset('/assets/Custom_js/disable1.js')}}"></script>
    <!-- for hiding disable2 div -->
    <script src="{{asset('/assets/Custom_js/disable2.js')}}"></script>