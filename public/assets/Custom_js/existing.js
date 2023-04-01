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

// for hiding image_editor div 

const disable1 = () => {
    let image_editor = document.querySelector('#image_editor');
    // console.log(image_editor);

    let image_editor_style = window.getComputedStyle(image_editor);
    // console.log(image_editor_style);

    let image_editor_property_value = image_editor_style.getPropertyValue('display');
    // console.log(image_editor_property_value);

    if (image_editor_property_value == 'block') {
        image_editor.style.display = "none";
    } else {
        image_editor.style.display = "block";
    }
}


// for hiding modal div 

const disable_myModal = () => {
    let myModal = document.querySelector('#myModal');
    // console.log(myModal);

    let myModal_style = window.getComputedStyle(myModal);
    // console.log(myModal_style);

    let myModal_property_value = myModal_style.getPropertyValue('display');
    // console.log(myModal_value);

    if (myModal_property_value == 'none') {
        myModal.style.display = "";
    } else {
        myModal.style.display = "none";
    }
}

const disable2 = () => {
    let linkImage = document.querySelector('#linkImage');
    // console.log(linkImage);

    let linkImage_style = window.getComputedStyle(linkImage);
    // console.log(linkImage_style);

    let linkImage_property_value = linkImage_style.getPropertyValue('display');
    // console.log(linkImage_property_value);

    if (linkImage_property_value == 'block') {
        linkImage.style.display = "none";
    } else {
        linkImage.style.display = "block";
    }
}

const img_edit = () => {

    let banner_img = document.querySelector('#banner_img');
    console.log(banner_img);

    let banner_img_style = window.getComputedStyle(banner_img);
    let banner_img_value = banner_img_style.getPropertyValue('display');

    if (banner_img_value == "none") {
        banner_img.style.display = "";
    } else {
        banner_img.style.display = "none";
    }
}

const linkImage = () => {

    let linkImage = document.querySelector('#linkImage');
    // console.log(linkImage);

    let linkImage_style = window.getComputedStyle(linkImage);
    // console.log(linkImage_style);


    let linkImage_property_value = linkImage_style.getPropertyValue('display');
    // console.log(linkImage_property_value);

    if (linkImage_property_value == 'none') {
        linkImage.style.display = "";
    } else {
        linkImage.style.display = "none";
    }
}

const existing_page = () => {
    let hidden_sec1 = document.querySelector('#hidden_sec1');
    console.log(hidden_sec1);
    let hidden_sec1_style = window.getComputedStyle(hidden_sec1);
    let hidden_sec1_value = hidden_sec1_style.getPropertyValue('display');
    if (hidden_sec1_value == "none") {
        hidden_sec1.style.display = "";
    } else {
        hidden_sec1.style.display = "none";
    }
}


const website_url = () => {
    let hidden_sec2 = document.querySelector('#hidden_sec2');
    console.log(hidden_sec2);
    let hidden_sec2_style = window.getComputedStyle(hidden_sec2);
    let hidden_sec2_value = hidden_sec2_style.getPropertyValue('display');
    if (hidden_sec2_value == "none") {
        hidden_sec2.style.display = "";
    } else {
        hidden_sec2.style.display = "none";
    }
}

const pop_up = () => {
    let hidden_sec3 = document.querySelector('#hidden_sec3');
    console.log(hidden_sec3);
    let hidden_sec3_style = window.getComputedStyle(hidden_sec3);
    let hidden_sec3_value = hidden_sec3_style.getPropertyValue('display');
    if (hidden_sec3_value == "none") {
        hidden_sec3.style.display = "";
    } else {
        hidden_sec3.style.display = "none";
    }
}

const anchor = () => {
    let hidden_sec4 = document.querySelector('#hidden_sec4');
    console.log(hidden_sec4);
    let hidden_sec4_style = window.getComputedStyle(hidden_sec4);
    let hidden_sec4_value = hidden_sec4_style.getPropertyValue('display');
    if (hidden_sec4_value == "none") {
        hidden_sec4.style.display = "";
    } else {
        hidden_sec4.style.display = "none";
    }
}

const email_address = () => {
    let hidden_sec5 = document.querySelector('#hidden_sec5');
    console.log(hidden_sec5);
    let hidden_sec5_style = window.getComputedStyle(hidden_sec5);
    let hidden_sec5_value = hidden_sec5_style.getPropertyValue('display');
    if (hidden_sec5_value == "none") {
        hidden_sec5.style.display = "";
    } else {
        hidden_sec5.style.display = "none";
    }
}

const click_all = () => {
    let hidden_sec6 = document.querySelector('#hidden_sec6');
    console.log(hidden_sec6);
    let hidden_sec6_style = window.getComputedStyle(hidden_sec6);
    let hidden_sec6_value = hidden_sec6_style.getPropertyValue('display');
    if (hidden_sec6_value == "none") {
        hidden_sec6.style.display = "";
    } else {
        hidden_sec6.style.display = "none";
    }
}

const file_upload = () => {
    let hidden_sec7 = document.querySelector('#hidden_sec7');
    console.log(hidden_sec7);
    let hidden_sec7_style = window.getComputedStyle(hidden_sec7);
    let hidden_sec7_value = hidden_sec7_style.getPropertyValue('display');
    if (hidden_sec7_value == "none") {
        hidden_sec7.style.display = "";
    } else {
        hidden_sec7.style.display = "none";
    }
}



const content = () => {
    let content = document.querySelector('#content');
    let design = document.querySelector('#design');

    console.log(content);
    let content_style = window.getComputedStyle(content);
    let content_style_value = content_style.getPropertyValue('display');
    if (content_style_value == "none") {
        content.style.display = "";
        design.style.display = "none";

    }
}

const design = () => {
    let design = document.querySelector('#design');
    let content = document.querySelector('#content');
    console.log(design);
    let design_style = window.getComputedStyle(design);
    let design_style_value = design_style.getPropertyValue('display');
    if (design_style_value == "none") {
        design.style.display = "";
        content.style.display = "none";
    }
}


