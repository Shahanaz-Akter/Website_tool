<div>
    <!-- Image Editor Start-->
    <div class="" style="position:absolute;left:80px; top: 180px; z-index:20001; width:400px; height: 550px; overflow:scroll; padding:15px;background: #f2f2f2; cursor: move;" id="image_editor">
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
            <div class="d-flex justify-content-center align-items-center text-uppercase mb-3 mt-2 p-2">Content Design</div>
            <hr>
            <section style="background-color: white;margin-bottom:20px;">
                <div class="">
                    <div class="" style="background-color: white; margin: 0px 20px; padding: 15px 0px;">
                        <img class="" src=" {{asset('/assets/Felax/images/banner/banner-1-2.jpg')}}" style="background-position: center;padding: 20px 20px;" alt="Card image cap" />
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
        <div id="design" style="display:none; padding:20px 10px;">

            <div class="d-flex justify-content-center align-items-center text-uppercase mb-3 mt-2 p-2">Image Design</div>
            <hr>
            <div style="background: white; display: flex; justify-content:space-around; padding: 12px;">
                <div onclick="click_color1(this)">Layout</div>
                <div onclick="click_color2(this)">Style</div>
                <div onclick="click_color3(this)">Animation</div>
                <div onclick="click_color4(this)">Spacing</div>
            </div>

            <div style="text-align:center; padding:10px">Layout</div>
            <section style="background-color: white; display:flex; justify-content: space-between; box-sizing:border-box; margin-bottom: 20px;">
                <div style="background-color: white;">
                    <img class="" src=" {{asset('/assets/Felax/images/banner/banner-1-2.jpg')}}" style="background-position: center; padding: 40px;" alt="Card image" />
                </div>
                <span style="margin-top:40%;"><i class=" fa-solid fa-chevron-right"></i></span>
            </section>

            <section style="background:white; margin-bottom: 20px;">
                <div style="padding: 12px 12px;">
                    <i class="fa-solid fa-desktop" style="padding-right: 10px;"></i>
                    Change affects desktop and tablet
                </div>
                <div style="display: flex; justify-content: space-between; padding: 30px 12px;">
                    <label for="full_width">Full Width</label>
                    <div class="switch" style="height: 20%; width: 20%;">
                        <input type="checkbox" id="full_width" checked>
                        <span class="slider round"></span>
                    </div>
                </div>


                <div style="display: flex; justify-content:space-between; padding: 30px 12px;">
                    <label>Width</label>
                    <input type="range" min="0" max="1000" value="50" id="range-input">
                    <span id="range-value">50px</span>
                </div>


            </section>

        </div>

        <!-- Image Editor End-->
    </div>

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
                    <div id="myButton" style="font-style:italic;width: var(--mywidth); border: 1px dotted black; padding: 8px; position: relative;">
                        <span><i class="fa-solid fa-plus" style="font-size:10px;"></i></span>
                        <span>File</span>
                    </div>
                </section>
            </div>
        </section>
        <a href="" style="color: black;">Remove Link </a>
    </div>
    <!--Another part end-->

    <!-- Modal part-->
    <div id="myModal" style="position:absolute;">
        <div class="modal-content">
            <div style="display: flex; justify-content: space-between;margin-bottom: 50px;">
                <div style="color:blue;">Uploaded Files</div>
                <div style="display: flex;">
                    <div class="search-box">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                        <input type="search" placeholder="Search for title...">
                    </div>
                    <span><i class="fa-sharp fa-solid fa-xmark text-black" style="font-size: 20px; padding-top: 8px; padding-left: 30px;" onclick="disable_myModal()"></i></span>
                </div>
            </div>


            <!-- <div style="padding-bottom: 50px; padding-top: 50px;">No Files have been selected yet. Click on upload new files to begin adding your files.</div> -->

            <hr>
            <div style="display: flex; justify-content: space-between;">
                <div style="background: grey;  border-radius: 15px;  padding: 5px; width: 40%; text-align:center;">Uploaded New File</div>
                <div style="background: orange;  border-radius: 15px;  padding: 5px; width: 20%; text-align:center;">
                    Done
                </div>
            </div>

        </div>
    </div>


    <!-- for existing div -->
    <script src="{{asset('/assets/Custom_js/existing.js')}}"></script>



    <!-- necessary files for popup js -->
    <script>
        // Get the modal
        const modal = document.getElementById("myModal");

        // Get the button that opens the modal
        const btn = document.getElementById("myButton");

        // Get the <span> element that closes the modal
        const span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>


    <!-- movable child element -->
    <script>
        // Get the child element
        const child = document.getElementById("myModal");

        // Set the initial position of the child element
        let pos1 = 0,
            pos2 = 0,
            pos3 = 0,
            pos4 = 0;
        child.addEventListener("mousedown", dragMouseDown);

        function dragMouseDown(ev) {
            ev = ev || window.event;
            ev.preventDefault();
            // Get the mouse cursor position at startup
            pos3 = ev.clientX;
            pos4 = ev.clientY;
            document.addEventListener("mouseup", closeDragElement);
            // Call a function whenever the cursor moves
            document.addEventListener("mousemove", elementDrag);
        }

        function elementDrag(eve) {
            eve = eve || window.event;
            eve.preventDefault();
            // Calculate the new cursor position
            pos1 = pos3 - eve.clientX;
            pos2 = pos4 - eve.clientY;
            pos3 = eve.clientX;
            pos4 = eve.clientY;
            // Set the child element's new position
            child.style.top = (child.offsetTop - pos2) + "px";
            child.style.left = (child.offsetLeft - pos1) + "px";
        }

        function closeDragElement() {
            // Stop moving when mouse button is released
            document.removeEventListener("mouseup", closeDragElement);
            document.removeEventListener("mousemove", elementDrag);
        }
    </script>



    <!-- movable child for image_editor element -->
    <script>
        // Get the child element
        const child1 = document.getElementById("image_editor");

        // Set the initial position of the child element
        let p1 = 0,
            p2 = 0,
            p3 = 0,
            p4 = 0;
        child1.addEventListener("mousedown", dragMouseDown);

        function dragMouseDown(e1) {
            e1 = e1 || window.event;
            e1.preventDefault();
            // Get the mouse cursor position at startup
            p3 = e1.clientX;
            p4 = e1.clientY;
            document.addEventListener("mouseup", closeDragElement);
            // Call a function whenever the cursor moves
            document.addEventListener("mousemove", elementDrag);
        }

        function elementDrag(e2) {
            e2 = e2 || window.event;
            e2.preventDefault();
            // Calculate the new cursor position
            p1 = p3 - e2.clientX;
            p2 = p4 - e2.clientY;
            p3 = e2.clientX;
            p4 = e2.clientY;
            // Set the child element's new position
            child1.style.top = (child1.offsetTop - p2) + "px";
            child1.style.left = (child1.offsetLeft - p1) + "px";
        }

        function closeDragElement() {
            // Stop moving when mouse button is released
            document.removeEventListener("mouseup", closeDragElement);
            document.removeEventListener("mousemove", elementDrag);
        }
    </script>


    <script>
        const rangeInput = document.querySelector('#range-input');
        const rangeValue = document.querySelector('#range-value');

        function updateRangeValue() {
            let valu = rangeInput.value;
            let va = valu + "px";

            rangeValue.textContent = va;

            console.log(va);
            console.log(rangeValue.textContent);
        }

        rangeInput.addEventListener('input', updateRangeValue);
        updateRangeValue();
    </script>