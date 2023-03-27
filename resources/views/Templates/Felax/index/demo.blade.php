@extends('layouts.EditorMode.webpage_editor')
@section('title')
<title>Felax on Editor Mode</title>
@endsection

@section('header_imports')
<style>
    .padding_button {
        position: relative;
        background-color: blueviolet;
        /* Green */
        border: none;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 15px 32px;
        height: 120px;
        width: 180px;
        text-align: center;
        text-decoration: none;
        color: white;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }

    .top {
        position: absolute;
        display: flex;
        width: 100%;
        top: 0;
        left: 50%;
        border: none;
        transform: translate(-50%, 0%);
    }

    .bottom {
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 100%;
        border: none;

        transform: translate(-50%, 0%);
    }

    .left {
        position: absolute;
        top: 50%;
        left: 0;
        border: none;
        height: 100%;
        transform: translate(0%, -50%);
    }

    .right {
        position: absolute;
        top: 50%;
        right: 0;
        height: 100%;
        border: none;

        transform: translate(0%, -50%);
    }

    .editor {
        background-color: #313131;
        padding: 10px;
    }


    /* image editor css styling */
</style>
<!-- Link of CSS files -->
<link rel="stylesheet" href="{{ asset('/assets/Felax/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/Felax/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/Felax/css/fontawsome.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/Felax/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/Felax/css/meanmenu.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/Felax/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/Felax/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/Felax/css/nice-select.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/Felax/css/magnific-popup.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/Felax/css/jquery-ui.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/Felax/css/odometer.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/Felax/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/Felax/css/responsive.css') }}">
<link rel="icon" type="image/png" href="{{ asset('assets/Felax/images/fav-icon.png') }}">
@endsection


@section('site')
<!-- for creating Text editor nav -->
@include('layouts.editComponents.texteditor')

<!-- for creating Image editor nav -->
@include('layouts.editComponents.imageEditor')

<!--All of the contents is placed in index blade-->
@include('Templates.Felax.index.index')

@endsection


@section('script_imports')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
<!-- Link of JS files -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('assets/Felax/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/Felax/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/Felax/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/Felax/js/meanmenu.js') }}"></script>
<script src="{{ asset('assets/Felax/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/Felax/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/Felax/js/TweenMax.js') }}"></script>
<script src="{{ asset('assets/Felax/js/nice-select.min.js') }}"></script>
<script src="{{ asset('assets/Felax/js/form-validator.min.js') }}"></script>
<script src="{{ asset('assets/Felax/js/contact-form-script.js') }}"></script>
<script src="{{ asset('assets/Felax/js/ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/Felax/js/appear.min.js') }}"></script>
<script src="{{ asset('assets/Felax/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/Felax/js/custom.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<script>
    let savedSelection;
    document.addEventListener("selectionchange", function() {
        savedSelection = window.getSelection();
    });

    const showlineheightsub = (tag) => {
        console.log('hi');
        let p = tag.parentNode.children[1]
        if (p.style.display == 'none') {
            p.style.display = '';
        } else {
            p.style.display = 'none';
        }
    }

    const newDiv = document.getElementById('text-editor-id');

    const contenteditable = (element) => {

        element.setAttribute('contenteditable', true);
        console.log('clicked');

        if (element.parentNode.classList.contains('contentEditableContainer')) {

        } else {
            const contentEditableContainer = document.querySelectorAll('.contentEditableContainer');
            Array.from(contentEditableContainer).forEach((item) => {
                let parent = item.parentNode;
                let child = item.children[0];
                const copyChild = child.cloneNode(true);
                parent.replaceChild(copyChild, item);

            });


            const prev = document.getElementById('editor_text');
            if (prev) {
                prev.remove();
            }

            // console.log(element);

            const div = document.createElement('div');
            div.classList.add('contentEditableContainer');
            div.style.position = "relative";

            // console.log(div);

            const newDiv = document.getElementById('text-editor-id');
            const copyEditor = newDiv.cloneNode(true);
            copyEditor.setAttribute('id', 'editor_text');
            copyEditor.style.display = "";
            copyEditor.style.bottom = '110%';

            // console.log(copyEditor);

            const copy_element = element.cloneNode(true);

            div.appendChild(copy_element);
            div.appendChild(copyEditor);


            element.parentNode.replaceChild(div, element);

            // console.log(div);
            div.style.border = '1px solid blue';
        }


    };
</script>
<script>
    const disable_editor = (tag) => {
        let parent = tag.parentNode.parentNode;
        parent.remove();
    }
</script>
<script>
    const showColorBox = () => {
        console.log('hello');

        document.getElementById('color_box').classList.remove('d-none');

    }
    const hideColorBox = () => {
        console.log('hello');

        document.getElementById('color_box').classList.add('d-none');
    }
    const changeColor = (value) => {
        document.execCommand('foreColor', false, value);
        // $("#content").css("color", value);
    }
    const setLineHeight = (value) => {
        console.log(value);
        let content = document.querySelector('.contentEditableContainer').children[0];
        console.log(content);
        if (value != null) {
            content.style.lineHeight = value;
        } else {
            var lineHeight = prompt("Enter the line height (e.g., 1.5):");
            if (lineHeight !== null) {
                content.style.lineHeight = value;
            }
        }

    }
    $("#line-height-btn").click(function() {
        var lineHeight = prompt("Enter the line height (e.g: 1.5):");
        if (lineHeight !== null) {
            // $("#content").focus();
            // $("#content").css("line-height", lineHeight);
            $("#content").css("line-height", lineHeight);
            if (document.queryCommandSupported("lineHeight")) {
                // document.execCommand("lineHeight", false, lineHeight);
            } else {
                // fallback code for unsupported command
                // alert("not supported");
            }
            // document.execCommand("lineHeight", false, lineHeight);
        }
    });

    const createLink = () => {
        var url = prompt("Enter the URL:");
        if (url !== null) {
            document.execCommand("createLink", false, url);
        }

    }
</script>

<script>
    // JavaScript code
    const setFontSize = (value) => {
        const selection = window.getSelection();
        console.log(selection);
        // if (selection.rangeCount > 0) {
        //     const range = selection.getRangeAt(0);
        //     let span = range.commonAncestorContainer;
        //     while (span && !(span.nodeName === 'SPAN' && span.getAttribute('contenteditable'))) {
        //         span = span.parentNode;
        //     }
        //     if (span) {
        //         span.style.fontSize = value + 'px';
        //     } else {
        //         span = document.createElement('span');
        //         span.style.fontSize = value + 'px';
        //         range.surroundContents(span);
        //     }
        // }
        // document.execCommand('fontSize', false, value);

        if (selection.rangeCount > 0) {
            const range = selection.getRangeAt(0);
            const span = document.createElement('span');
            span.style.fontSize = value + 'px';
            range.surroundContents(span);
        }
    };


    function changeHeadingLevel(level) {
        document.execCommand("formatBlock", false, "h" + level);
    }

    function setFont(fontFamily) {
        console.log("hi");
        document.execCommand("fontName", false, fontFamily);
    }

    function changeHeading() {
        const contentDiv = document.getElementById("content");
        let id = contentDiv.id;
        let c = contentDiv.className;

        const newHeading = document.getElementById("heading-select").value;
        const currentHeading = contentDiv.tagName.toLowerCase();

        if (newHeading !== currentHeading) {
            const newContent = document.createElement(newHeading);
            newContent.innerHTML = contentDiv.innerHTML;
            newContent.setAttribute("id", id);
            newContent.setAttribute("class", c);
            newContent.setAttribute("contenteditable", true);

            contentDiv.parentNode.replaceChild(newContent, contentDiv);
        }
    }
</script>


<!-- Image Editor editor JS-->
<script>

</script>

@endsection