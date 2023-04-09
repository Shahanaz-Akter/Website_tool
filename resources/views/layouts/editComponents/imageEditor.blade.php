<div style="display:none;" id="img_editor_part">
    <!-- Image Editor Start-->
    <div id="drag_parent" style="position:fixed;left:80px; top: 180px; z-index:576347767678; width:370px; height: 560px; overflow:scroll; padding:10px;background: #f2f2f2; border: 4px solid white; border-radius: 10px; display:block;">

        <div style="background:	#2f373a; position:sticky; overflow:auto;cursor:move; padding: 5px;" id="drag_handle">

            <div style="display:flex;justify-content:space-between;flex-wrap:wrap; position: sticky; top:0px; z-index:100990; text-transform: uppercase; padding: 5px;">
                <span>
                    <button id="cont" onclick="content()" style="border:1px solid orange; color: orange; background: #2f373a; padding: 5px 10px; text-transform: uppercase;">Content</button>
                    <button id="desig" onclick="design()" style="border:1px solid white; color: white;background: #2f373a; padding: 5px 10px; text-transform: uppercase;">Design</button>
                </span>

                <span>
                    <i class="fa-sharp fa-solid fa-xmark" style="font-size: 20px;color:red; margin-right:5px;" onclick="disable1()"></i>
                    <!-- <button> <i class="fa-solid fa-xmark" style="font-size: 20px;" onclick="disable_editor(this)"></i></button> -->
                </span>
            </div>

        </div>

        <div style="overflow-Y:auto; height:90%; width:auto;border: 2px solid white;">
            <!-- content part start-->
            <div id="content">
                <div style="text-align:center; text-transform:uppercase; padding: 12px 0px;">Content Design</div>

                <section style="margin-bottom:15px;">


                    <div style="background: white; border: 0.5px solid white; margin: 10px 10px;">
                        <div style="padding: 10px 25px;">
                            <img class="" src=" {{asset('/assets/Felax/images/banner/banner-1-2.jpg')}}" style="background-position: center;padding: 15px 15px;" alt="Card image cap" />
                        </div>
                    </div>

                    <div style="text-align:center; padding-left: 5px; padding-top:10px;">
                        <small style="text-align:center;">Name: delete_me.jpg
                        </small>
                        <br>
                        <small style="text-align:center;">Size: 1688x1152</small>
                    </div>



                    <div style="text-align:center;padding-top: 10px;padding-bottom: 10px;">
                        <button type="button" class="btn btn-success rounded-pill" style="padding-left: 30px!important; padding-right: 30px!important">Replace</button>

                        <button type="button" class="btn btn-success rounded-pill" style="padding-left: 40px!important; padding-right: 40px!important">Edit</button>
                    </div>
                </section>

                <div style="background: white!important; padding:10px 10px;" onclick="linkImage()">
                    <section style="display: flex; justify-content:space-between;">
                        <span> <i class="fa-solid fa-phone" style="padding-right: 10px;"></i>Linked to page: Home</span>
                        <span><i class=" fa-solid fa-chevron-right"></i></span>
                    </section>
                    <small><a href="" style="color:black;">Remove link</a></small>
                </div>


                <section style="background:white;padding:10px 10px;">

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
            <div id="design" style="display:none; padding:10px 10px;">

                <div style="text-align:center; text-transform:uppercase; padding: 10px 0px;">Image Design</div>

                <div style="background: white; display: flex; justify-content:space-around; padding: 10px 0px;">
                    <div onmouseenter="this.style.color='red'" onmouseout="this.style.color='black'" onclick="layouts()">Layout</div>
                    <div onmouseenter="this.style.color='red'" onmouseout="this.style.color='black'" onclick="stylee()">Style</div>
                    <div onmouseenter="this.style.color='red'" onmouseout="this.style.color='black'" onclick="animations()">Animation</div>
                    <div onmouseenter="this.style.color='red'" onmouseout="this.style.color='black'" onclick="spacings()">Spacing</div>
                </div>

                <div id="layout">
                    <div style="text-align:center; padding:10px 0px">Layout</div>
                    <section style="background-color: white; display:flex; justify-content: space-between; box-sizing:border-box; margin-bottom: 10px;">
                        <div style="background-color: white;">
                            <img class="" src=" {{asset('/assets/Felax/images/banner/banner-1-2.jpg')}}" style="background-position: center; padding: 20px 20px;" alt="Card image" />
                        </div>
                        <span style="margin-top:40%;"><i class=" fa-solid fa-chevron-right"></i></span>
                    </section>

                    <section style="background:white; margin-bottom: 10px;">
                        <div style="padding: 10px 10px;">
                            <i class="fa-solid fa-desktop" style="padding-right: 10px;"></i>
                            Change affects desktop and tablet
                        </div>
                        <!-- <div style="display: flex; justify-content: space-between; padding: 30px 12px;">

                    </div> -->


                        <div style="display: flex; justify-content:space-between; padding: 20px 12px;">
                            <label>Width</label>
                            <input type="range" min="0" max="100" value="50" id="range-input1">
                            <span id="range-value1" style="padding: 1px 2px;">50px</span>
                            <input type="text" placeholder="+" style="margin-left:2px; width: 20%; padding: 1px 2px; text-align:center;">
                        </div>


                        <div style="display: flex; justify-content:space-between; padding: 20px 12px;">
                            <label for="">Full Width</label>
                            <label class="toggle">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                        </div>

                    </section>
                </div>

                <div id="styl" style="display:none;">
                    <div style="text-align:center; padding:10px">Style</div>

                    <section style="background:white; margin-bottom: 15px;">
                        <div style="padding: 12px 12px;">
                            <i class="fa-solid fa-desktop" style="padding-right: 10px;"></i>
                            Change affects desktop and tablet
                        </div>

                        <div style="display: flex; justify-content:space-between; padding: 30px 12px;">
                            <label>Border<i class="fa-solid fa-gear" style="padding-left: 10px;"></i></label>
                            <input type="range" min="0" max="100" value="50" id="range-input1">
                            <span id="range-value1">50px</span>
                            <i class="fa fa-ban" style="padding-right:15px;margin-top:5px;"></i>
                        </div>

                        <div style="display: flex; justify-content:space-between; padding: 30px 12px;">
                            <label>Round Corner<i class="fa-solid fa-gear" style="padding-left: 10px;"></i></label>
                            <input type="range" min="0" max="100" value="50" id="range-input2">
                            <span id="range-value2">50%</span>
                        </div>

                        <div style="display: flex; justify-content:space-between; padding: 20px 12px;">
                            <label for="">Shadow</label>
                            <div style="display: flex; gap: 10px;">
                                <label class="toggle">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                                <span><i class=" fa-solid fa-chevron-right"></i></span>
                            </div>
                        </div>

                    </section>

                    <section style="background:white; margin-bottom: 15px;">
                        <div style="padding: 10px 10px;">
                            <i class="fa-solid fa-desktop" style="padding-right: 10px;"></i>
                            Hover effect for desktop
                        </div>

                        <div style="display: flex;flex-wrap:wrap; gap: 15px; padding: 10px 10px;">
                            <div style="padding: 5px; border: 1px solid gray; color: red; filter:blur(0.6px);">None</div>
                            <div style="padding: 5px;  border: 1px solid gray;" onmouseover="this.style.transform=`translateY(-15px)`;" onmouseout="this.style.transform=``">Float</div>
                            <div style="padding: 5px; border: 1px solid gray;" onmouseover="this.style.filter=`blur(7px)`" onmouseout="this.style.filter=`blur()`">Blur</div>
                            <div style="padding: 5px; border: 1px solid gray;" onmouseover="this.style.opacity='0.5'" onmouseout="this.style.opacity='1'">Opacity</div>
                            <div style="padding: 5px;  border: 1px solid gray;" onmouseover="this.style.background=`#D3D3D3`" onmouseout="this.style.background=``">grayscale</div>
                            <div style="padding: 5px; border: 1px solid gray;" onmouseover="this.style.scale=`1.1`" onmouseout="this.style.scale=``">Zoom Out</div>
                            <div style="padding: 5px; border: 1px solid gray;" onmouseover="this.style.transform=`translateX(15px)`;" onmouseout="this.style.transform=``">Forward</div>
                            <div style="padding: 5px; border: 1px solid gray; border: 1px solid gray;" onmouseover="this.style.color='orange';" onmouseout="this.style.color='black';">Reverse grayscale</div>
                            <div style="padding: 5px; border: 1px solid gray;" onmouseover="this.style.filter=`blur(8px)`" onmouseout="this.style.filter=`blur()`">Blur & grayscale</div>
                        </div>
                    </section>
                </div>


                <div id="animation" style="display:none;">
                    <div style="text-align:center; padding:10px">Animation</div>
                    <section style="background-color: white;  margin-bottom: 15px;">
                        <div style="padding: 12px 12px;">
                            <label for="" style="width:  25%;">Trigger: </label>
                            <select name="trigger" style="width: 70%; padding: 8px;">
                                <option value="">Extrance</option>
                                <option value="">Scroll</option>
                            </select>
                        </div>

                        <div style="padding: 15px 12px;">
                            <label for="" style="width:  25%;">Anim: </label>
                            <select name="animation" style="width: 70%; padding: 8px; overflow:scroll;">
                                <option value="">Fade in</option>
                                <option value="">None</option>
                                <option value="">Fade in</option>
                                <option value="">Slide in</option>
                                <option value="">Bounce in</option>
                                <option value="">Roll in</option>
                                <option value="">Zoom in</option>
                                <option value="">Flip in</option>
                                <option value="">Flash</option>
                                <option value="">Pulse</option>
                                <option value="">Rubber band</option>
                                <option value="">Shake</option>
                                <option value="">Swing</option>
                                <option value="">Tada</option>
                                <option value="">Wobble</option>
                            </select>
                        </div>


                        <div style="padding: 15px 12px;">
                            <label for="" style="width:  25%;">Direction: </label>
                            <select name="animation" style="width: 70%; padding: 8px;overflow:scroll;">
                                <option value="">In Place</option>
                                <option value="">From right</option>
                                <option value="">From left</option>
                                <option value="">From bottom</option>
                                <option value="">From top</option>
                            </select>
                        </div>

                        <!-- <div style="display: flex; justify-content:space-between; padding: 15px 12px;">
                        <label>Duration <i class="fa-regular fa-circle-question" style="padding-left: 10px;"></i></label>
                        <input type="range" min="0" max="100" value="50" id="range-input-duration">
                        <span class="range-value-duration range-value">50</span>
                    </div> -->

                        <div style="display: flex; justify-content:space-between;padding: 15px 12px;">
                            <label>Duration <i class="fa-regular fa-circle-question" style="padding-left: 5px;"></i></label>
                            <input type="range" min="0" max="3000" value="50" id="range-input-duration">
                            <span class="range-value-duration range-value">50</span>
                        </div>

                        <div style="display: flex; justify-content:space-between;padding: 15px 12px;">
                            <label>Delay <i class="fa-regular fa-circle-question" style="padding-left: 10px;"></i></label>
                            <input type="range" min="0" max="3000" value="2150" id="range-input-delay">
                            <span class="range-value-delay range-value">50</span>
                        </div>

                        <div style="display:flex; justify-content: space-between; padding: 10px">
                            <small style="padding:5px 0px;"><a href="" style="color:black;">Recent to Deafult</a></small>

                            <small style="border:1px solid black; border-radius:20px; padding:3px 20px; margin-right: 10px;" onmouseover="this.style.border='1px solid red'; this.style.color='red';this.style.padding='3px 20px'; this.style.borderRadius='20px'" onmouseout="this.style.border='1px solid black'; this.style.color='black';this.style.padding='3px 20px'; this.style.borderRadius='20px'">Preview</small>
                        </div>

                    </section>
                </div>


                <div id="spacing" style="display:none;">
                    <div style="text-align:center; padding:10px">Spacing</div>
                    <section style="background-color: white; margin-bottom: 20px;">
                        <div style="padding: 12px 12px;">

                            <label for="margin-left" style="width: 40%;">Margin-Left: </label>
                            <input type="text" id="margin-left" name="" placeholder="20px.." style="width: 50%; margin-bottom: 20px; text-align:center;">



                            <label for="margin-right" style="width: 40%;">Margin-Right:</label>
                            <input type="text" id="margin-right" name="" placeholder="20px.." style="width: 50%;margin-bottom: 10px; text-align:center;">


                            <label for="margin-top" style="width: 40%;">Margin-Top:</label>
                            <input type="text" id="margin-top" name="" placeholder="20px.." style="width: 50%; margin-bottom: 20px; text-align:center;">

                            <label for="margin-bottom" style="width: 40%;">Margin-Bott:</label>
                            <input type="text" id="margin-bottom" name="" placeholder="20px.." style="width: 50%; margin-bottom: 20px;text-align:center;">

                            <label for="padding-left" style="width: 40%;">Padding-Left</label>
                            <input type="text" id="padding-left" name="" placeholder="20px.." style="width: 50%; margin-bottom: 20px; text-align:center;">

                            <label for="padding-right" style="width: 40%;">Padding-Right:</label>
                            <input type="text" id="padding-right" name="" placeholder="20px.." style="width: 50%; margin-bottom: 20px; text-align:center;">

                            <label for="padding-top" style="width: 40%;">Padding-Top:</label>
                            <input type="text" id="padding-top" name="" placeholder="20px.." style="width: 50%; margin-bottom: 20px;text-align:center;">


                            <label for="padding-bottom" style="width: 40%;">Padding-Bott:</label>
                            <input type="text" id="padding-bottom" name="" placeholder="20px.." style="width: 50%; margin-bottom: 20px;text-align:center;">


                            <div style="padding-top: 10px; margin-left: 8px;">
                                <span><button style=" padding: 5px 10px; border-radius: 20px; border: 2px solid #997404;background: #997404; color: white;">Reset Padding</button></span>

                                <span><button style="margin-left: 5px; padding: 5px 10px; border-radius: 20px; border: 2px solid #997404; background: #997404; color: white;">Reset Margin</button></span>
                            </div>

                            <!-- <label for="margin-top">Margin-top</label>
                        <input type="text" id="margin-top" name="" style="width:var(--mywidth);">
                        <label for="margin-bottom">Margin-bottom</label>
                        <input type="text" id="margin-bottom" name="" style="width:var(--mywidth);"> -->
                        </div>
                    </section>
                </div>

            </div>

        </div>

        <!-- Image Editor End-->
    </div>

    <!--Another part start-->
    <div style="display:none; position:fixed;left:500px; top: 190px; z-index:20005566; width:370px; height: 460px; overflow:scroll; padding:15px;background: #f2f2f2;" id="linkImage">

        <div style="text-align:right;">
            <i class="fa-sharp fa-solid fa-xmark text-black" style="font-size: 20px;" onclick="disable2()"></i>
        </div>
        <div style="text-align:center; padding-bottom:15px;">Link Image</div>

        <section style="background-color: white;margin-bottom:20px; padding: 20px 10px;">

            <input type="radio" id="existing_page" style="padding:8px;" name="all" onclick="existing_page()">
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
                <input type="text" value="www.google.com" style="width: var(--mywidth); margin: 15px 0px; padding:8px;" style="font-style:italic;">
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
                    <input type="text" id="email_address" name="" value="email@.email.com" style="font-style:italic;width: var(--mywidth);padding:8px;">
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

<!-- movable child for image_editor element -->
<script>
    // Get the parent and child element
    const drag_parent = document.getElementById("drag_parent");
    const drag_handle = document.getElementById("drag_handle");

    // Set the initial position of the child element
    let p1 = 0,
        p2 = 0,
        p3 = 0,
        p4 = 0;

    drag_handle.addEventListener("mousedown", dragMouseDown);

    function dragMouseDown(e1) {
        console.log(e1);
        e1 = e1 || window.event;
        console.log(e1);
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
        drag_parent.style.top = (drag_parent.offsetTop - p2) + "px";
        drag_parent.style.left = (drag_parent.offsetLeft - p1) + "px";
    }

    function closeDragElement() {
        // Stop moving when mouse button is released
        document.removeEventListener("mouseup", closeDragElement);
        document.removeEventListener("mousemove", elementDrag);
    }
</script>


<script>
    const rangeInput1 = document.querySelector('#range-input1');
    const rangeValue1 = document.querySelector('#range-value1');

    function updateRangeValue() {
        let valu = rangeInput1.value;
        let va = valu + "px";

        rangeValue1.textContent = va;

        console.log(va);
        console.log(rangeValue1.textContent);
    }

    rangeInput1.addEventListener('input', updateRangeValue);
    updateRangeValue();
</script>


<script>
    const rangeInput2 = document.querySelector('#range-input2');
    const rangeValue2 = document.querySelector('#range-value2');

    function updateRangeValue() {
        let valu = rangeInput2.value;
        let va = valu + "%";

        rangeValue2.textContent = va;

        console.log(va);
        console.log(rangeValue2.textContent);
    }

    rangeInput2.addEventListener('input', updateRangeValue);
    updateRangeValue();
</script>

<script>
    const range_input_duration = document.querySelector('#range-input-duration');
    const range_value_duration = document.querySelector('.range-value-duration');

    function updateRangeValue() {
        let valu = range_input_duration.value;
        let va = valu;

        range_value_duration.textContent = va;

        console.log(va);
        console.log(range_value_duration.textContent);
    }

    range_input_duration.addEventListener('input', updateRangeValue);
    updateRangeValue();
</script>

<script>
    const range_input_delay = document.querySelector('#range-input-delay');
    const range_value_delay = document.querySelector('.range-value-delay');

    function updateRangeValue() {
        let valu = range_input_delay.value;
        let va = valu;

        range_value_delay.textContent = va;

        console.log(va);
        console.log(range_value_delay.textContent);
    }

    range_input_delay.addEventListener('input', updateRangeValue);
    updateRangeValue();
</script>