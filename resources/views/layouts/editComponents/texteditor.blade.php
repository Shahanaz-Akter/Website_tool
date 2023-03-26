<span style="display: none!important;position:absolute;left:0px;z-index:1000; width:1050px;" id="text-editor-id">
    <div class="editor d-flex flex-wrap ">

        <button class="btn text-white" onclick="document.execCommand('bold', false, null)">
            <i class="fa-solid fa-bold"></i>
        </button>
        <button class="btn text-white" onclick="document.execCommand('italic', false, null)">
            <i class="fa-solid fa-italic"></i>
        </button>

        <button class="btn text-white" onclick="document.execCommand('underline', false, null)"
            style="border: 1px solid gray">
            <i class="fa-solid fa-underline"></i>
        </button>
        <button class="btn text-white" onclick="document.execCommand('justifyLeft', false, null)">
            <i class="fa-solid fa-align-left"></i>
        </button>
        <button class="btn text-white" onclick="document.execCommand('justifyCenter', false, null)">
            <i class="fa-solid fa-align-center"></i>
        </button>
        <button class="btn text-white" onclick="document.execCommand('justifyRight', false, null)">
            <i class="fa-solid fa-align-right"></i>
        </button>
        <button class="btn text-white" onclick="document.execCommand('justifyFull', false, null)">
            <i class="fa-solid fa-align-justify"></i>
        </button>
        <button class="btn text-white" onclick="document.execCommand('indent', false, null)">
            <i class="fa-solid fa-indent"></i>
        </button>
        <button class="btn text-white" onclick="document.execCommand('outdent', false, null)">
            <i class="fa-solid fa-outdent"></i>
        </button>
        <button class="btn text-white" onclick="document.execCommand('insertUnorderedList', false, null)">
            <i class="fa-solid fa-list-ul"></i>
        </button>
        <button class="btn text-white" onclick="document.execCommand('insertOrderedList', false, null)">
            <i class="fa-solid fa-list-ol"></i>
        </button>
        <button class="btn text-white" onclick="createLink()">
            <i class="fa-solid fa-link"></i>
        </button>

        <div class="btn-group">
            <button type="button" class="btn text-white" onclick="showlineheightsub(this)">
                Line Height

            </button>
            <ul class=""
                style="display:none; list-style-type:none;position:absolute;background:white;top:100%;padding:10px 20px;width:200px;box-shadow: 0px 2px 5px rgba(0,0,0,0.3);">

                <li style="padding:5px;">
                    <button class="dropdown-item" onclick="setLineHeight(1)">Single</button>
                    <!-- <button onmouseover="this.style.backgroundColor='green'; this.style.color='white';" class="dropdown-item"
              onclick="setLineHeight(1)">Single</button> -->
                </li>
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
                <li><a class="dropdown-item" href="#"
                        style="text-align:center; background:#313131;color:white;padding:5px 0px;border-radius:5px;"
                        onclick="setLineHeight(null)">Custom</a>
                </li>
            </ul>
        </div>
        <!-- Example single danger button -->
        <div class="btn-group">
            <button type="button" class="btn text-white">
                Font Size
            </button>
            <ul
                style="list-style-type:none;position:absolute;background:white;top:100%;padding:10px 20px;width:100px;box-shadow: 0px 2px 5px rgba(0,0,0,0.3);height:300px;overflow:scroll;">
                @for ($i = 0; $i <= 90; $i++)
                    <li>
                        <button class="dropdown-item" onclick="setFontSize({{ $i }})"> {{ $i }}
                        </button>
                    </li>
                @endfor

                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="#">Custom</a></li>
            </ul>
        </div>
        <!-- Example single danger button -->
        <!-- Example single danger button -->
        <div class="btn-group">
            <button type="button" class="btn text-white dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                Font Family
            </button>
            <ul class="dropdown-menu">
                <li>
                    <button class="dropdown-item" onclick="setFont('Arial, sans-serif')">
                        Arial
                    </button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="setFont('Times New Roman, serif')">
                        Times New Roman
                    </button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="setFont('Tahoma, sans-serif')">
                        Tahoma
                    </button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="setFont('Verdana, sans-serif')">
                        Verdana
                    </button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="setFont('Georgia, serif')">
                        Georgia
                    </button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="setFont('Times New Roman, serif')">
                        Times New Roman
                    </button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="setFont('Lucida Console, Monaco, monospace')">
                        Monospace
                    </button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="setFont('Courier New, monospace')">
                        Courier New
                    </button>
                </li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </div>
        <!-- Example single danger button -->
        <div class="btn-group">
            <button type="button" class="btn text-white dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                Heading
            </button>
            <ul class="dropdown-menu">
                <li>
                    <button class="dropdown-item" onclick="changeHeadingLevel(1)">
                        Heading 1
                    </button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="changeHeadingLevel(2)">
                        Heading 2
                    </button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="changeHeadingLevel(3)">
                        Heading 3
                    </button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="changeHeadingLevel(4)">
                        Heading 4
                    </button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="changeHeadingLevel(5)">
                        Heading 5
                    </button>
                </li>
                <li>
                    <button class="dropdown-item" onclick="changeHeadingLevel(6)">
                        Heading 6
                    </button>
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </div>
        <span class="d-flex justify-content-center position-relative"
            style="width:40px;border:1px solid transparent;flex-direction: column;align-items: center;cursor: pointer;"
            onmouseenter="showColorBox()" onmouseleave="hideColorBox()">
            <i class="fa-solid fa-a" style="font-size: 15px;color:white;"></i>
            <span class="mt-1">
                <div style="height:5px;width:20px;background-color: white;"></div>
            </span>
            <span class="d-none position-absolute p-2" id="color_box"
                style="top:100%;left:0px;height:200px;width:250px; background-color: #313131;">
                <div class="d-flex justify-content-center flex-wrap">
                    <!-- <input type="color" value="#FFFF00"> -->
                    <span
                        style="border:2px solid transparent;border-radius:50px;height: 30px;width:30px;background-color: yellow;display: inline-block;"
                        onclick="changeColor('yellow')"></span>
                    <span
                        style="border:2px solid transparent;border-radius:50px;height: 30px;width:30px;background-color: red;display: inline-block;"
                        onclick="changeColor('red')"></span>
                    <span
                        style="border:2px solid transparent;border-radius:50px;height: 30px;width:30px;background-color: blue;display: inline-block;"
                        onclick="changeColor('blue')"></span>
                    <span
                        style="border:2px solid transparent;border-radius:50px;height: 30px;width:30px;background-color: green;display: inline-block;"
                        onclick="changeColor('green')"></span>
                    <span
                        style="border:2px solid transparent;border-radius:50px;height: 30px;width:30px;background-color: tomato;display: inline-block;"
                        onclick="changeColor('tomato')"></span>
                    <span
                        style="border:2px solid transparent;border-radius:50px;height: 30px;width:30px;background-color: pink;display: inline-block;"
                        onclick="changeColor('pink')"></span>
                </div>
                <br>
                <span>Custom</span>
                <br>
                <input type="color" value="#ff0000" style="width:100%;" onchange="changeColor(this.value)">

            </span>
        </span>

        <div class="btn text-success">
            <i class="fa-solid fa-check fa-beat" style="font-size: 20px;;" onclick="disable_editor(this)"></i>
        </div>
    </div>
</span>
{{-- <div contenteditable="true" class="content" id="content"
        style="border: 1px solid transparent; outline: 1px solid transparent">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae voluptate
        cum impedit officia, veritatis quibusdam temporibus nulla saepe magni,
        tempora voluptatibus error molestias similique aliquid quod unde libero
        facilis! Alias.
    </div> --}}
