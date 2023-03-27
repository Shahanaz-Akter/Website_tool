<!-- Image Editor Start-->

<span class="bg-secondary" style="position:absolute;left:80px; top: 180px; z-index:1001; width:400px; height: 550px; overflow:scroll;" id="image-editor-id">
    <div class="d-flex justify-content-between flex-wrap">

        <div>
            <button class="btn btn-outline-success text-white" onclick="document.execCommand('bold', false, null)">
                Content
            </button>
            <button class="btn btn-outline-success text-white" onclick="document.execCommand('italic', false, null)">
                Design
            </button>
        </div>

        <div>
            <!-- <button class="btn text-white" onclick="document.execCommand('justifyCenter', false, null)">
                <i class="fa-solid fa-align-center"></i>
            </button> -->
            <div class="btn text-success">
                <i class="fa-solid fa-check fa-beat font-success" style="font-size: 20px;" onclick="disable_editor(this)"></i>
            </div>

            <div class="btn text-success">
                <button> <i class="fa-solid fa-xmark" style="font-size: 20px;" onclick="disable_editor(this)"></i></button>
            </div>
        </div>
    </div>
    <hr>

    <!-- <div class="btn text-success">
        <i class="fa-solid fa-check fa-beat font-success" style="font-size: 20px;" onclick="disable_editor(this)"></i>
    </div> -->

    <div class="d-flex justify-content-center align-items-center text-uppercase text-white mb-3 mt-2 ">Image Design</div>

    <div class="bg-white d-flex justify-content-around p-3">
        <div onclick="click_color1(this)">Layout</div>
        <div onclick="click_color2(this)">Style</div>
        <div onclick="click_color3(this)">Animation</div>
        <div onclick="click_color4(this)">Spacing</div>
    </div>

    <!-- <div class="btn text-success">
        <i class="fa-solid fa-check fa-beat" style="font-size: 20px;" onclick="disable_editor(this)"></i>
    </div> -->


    <!-- <div class="btn-group">
        <button type="button" class="btn text-white" onclick="showlineheightsub(this)">
            Line Height

        </button>
        <ul class="" style="display:none; list-style-type:none;position:absolute;background:white;top:100%;padding:10px 20px;width:200px;box-shadow: 0px 2px 5px rgba(0,0,0,0.3);">

            <li style="padding:5px;">
                <button class="dropdown-item" onclick="setLineHeight(1)">Single</button> -->
    <!-- <button onmouseover="this.style.backgroundColor='green'; this.style.color='white';" class="dropdown-item"
              onclick="setLineHeight(1)">Single</button> -->
    <!-- </li>
            <li style="padding:5px;">
                <button class="dropdown-item" onclick="setLineHeight(2)">1.5</button>
            </li>
            <li style="padding:5px;">
                <button class="dropdown-item" onclick="setLineHeight(2)">Double</button>
            </li>
            <li style="padding:5px;">
                <button class="dropdown-item" onclick="setLineHeight(3)"> 3 </button>
            </li>

            <li>
                <hr class="dropdown-divider" />
            </li>
            <li><a class="dropdown-item" href="#" style="text-align:center; background:#313131;color:white;padding:5px 0px;border-radius:5px;" onclick="setLineHeight(null)">Custom</a>
            </li>
        </ul>
    </div> -->
    <!-- Example single danger button -->

</span>
<!-- Image Editor End-->


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