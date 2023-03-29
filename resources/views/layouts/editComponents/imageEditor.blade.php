<!-- Image Editor Start-->


<div class="" style="position:absolute;left:80px; top: 180px; z-index:20001; width:400px; height: 550px; overflow:scroll; padding:15px;background: #f2f2f2;" id="image-editor-id">
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
                        <i class="fa-sharp fa-solid fa-xmark text-black" style="font-size: 25px;" onclick="disable_editor(this)"></i>
                        <!-- <button> <i class="fa-solid fa-xmark" style="font-size: 20px;" onclick="disable_editor(this)"></i></button> -->
                    </div>
                </div>

            </div>
        </div>

        <!-- content part -->
        <div class="d-flex justify-content-center align-items-center text-uppercase text-white mb-3 mt-2 p-2">Image Design</div>
    </div>

    <hr>

    <!-- <div class="btn text-success">
        <i class="fa-solid fa-check fa-beat font-success" style="font-size: 20px;" onclick="disable_editor(this)"></i>
    </div> -->



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

    <section style="display: flex; justify-content:space-between; background: white!important; margin-bottom:20px; padding:20px 10px;">
        <span>Link Image</span>
        <span><i class=" fa-solid fa-chevron-right me-1" onclick="linkImage()"></i></span>
    </section>


    <section class="" style="background:white;padding:15px;">

        <!-- <div class="row col-sm-12 col-md-12 col-lg-12 col-xxl-12  mb-4 mt-5">
            <label class="col-sm-6 col-md-6 col-xxl-6 col-lg-6 form-label" for="select2Basic">Campaign Name <span class="text-warning">*</span></label>
            <div class="col-sm-6 col-md-6 col-xxl-6 col-lg-6">
                <input type="text" class="form-control" id="basic-default-company" name="campaign_name" placeholder="Enter Campaign Name" />
            </div>
        </div> -->

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


<div class="" style="display:none; position:absolute;left:500px; top: 180px; z-index:20005; width:400px; height: 550px; overflow:hidden; padding:15px;background: #f2f2f2;" id="linkImage">
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
                        <i class="fa-sharp fa-solid fa-xmark text-black" style="font-size: 25px;" onclick="disable_editor(this)"></i>
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

    <section style="display: flex; justify-content:space-between; background: white!important; margin-bottom:20px; padding:20px 10px;">
        <span>Link Image</span>
        <span><i class=" fa-solid fa-chevron-right me-1"></i></span>
    </section>


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

</div>












<script>
    const click_color1 = (layout_div) => {
        console.log(layout_div);
        layout_div.style.color = "red";
        layout_div.style.transition = "all 0.5s ease-in";
        layout_div.style.transition = "all 0.5s ease-out";
    }
    const click_color2 = (style_div) => {
        console.log(style_div);
        style_div.style.color = "red";
        style_div.style.transition = ".5s";

    }
    const click_color3 = (animation_div) => {
        console.log(animation_div);
        animation_div.style.color = "red";
        animation_div.style.transition = ".5s";

    }
    const click_color4 = (spacing_div) => {
        console.log(spacing_div);
        spacing_div.style.color = "red";
        spacing_div.style.transition = ".5s";

    }
</script>


<script>
    const linkImage = () => {

        let linkImage = document.querySelector('#linkImage');
        console.log(linkImage);

        let linkImage_style = window.getComputedStyle(linkImage);
        console.log(linkImage_style);


        let linkImage_property_value = linkImage_style.getPropertyValue('display');
        console.log(linkImage_property_value);

        if (linkImage_property_value == 'none') {
            linkImage.style.display = "";
        }
        else{
            linkImage.style.display = "none";
        }

    }
</script>