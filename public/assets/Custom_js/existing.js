

const stylee = () => {

    let styl = document.querySelector('#styl');
    let layout = document.querySelector('#layout');
    let animation = document.querySelector('#animation');
    let spacing = document.querySelector('#spacing');


    let styl_style = window.getComputedStyle(styl);
    let styl_value = styl_style.getPropertyValue('display');


    let layout_style = window.getComputedStyle(layout);
    let layout_value = layout_style.getPropertyValue('display');



    let animation_style = window.getComputedStyle(animation);
    let animation_value = animation_style.getPropertyValue('display');



    let spacing_style = window.getComputedStyle(spacing);
    let spacing_value = spacing_style.getPropertyValue('display');


    if (styl_value == 'none') {
        styl.style.display = "";
        layout.style.display = "none";
        animation.style.display = "none";
        spacing.style.display = "none";
    }
}


const layouts = () => {

    let styl = document.querySelector('#styl');
    let layout = document.querySelector('#layout');
    let animation = document.querySelector('#animation');
    let spacing = document.querySelector('#spacing');

    console.log(styl);
    console.log(layout);
    console.log(animation);
    console.log(spacing);


    let styl_style = window.getComputedStyle(styl);
    let styl_value = styl_style.getPropertyValue('display');
    console.log(styl_value);


    let layout_style = window.getComputedStyle(layout);
    let layout_value = layout_style.getPropertyValue('display');
    console.log(layout_value);


    let animation_style = window.getComputedStyle(animation);
    let animation_value = animation_style.getPropertyValue('display');
    console.log(animation_value);


    let spacing_style = window.getComputedStyle(spacing);
    let spacing_value = spacing_style.getPropertyValue('display');
    console.log(spacing_value);
    console.log(styl_value == "none");

    if (layout_value == 'none') {
        layout.style.display = "";
        styl.style.display = "none";
        animation.style.display = "none";
        spacing.style.display = "none";
    }
}

const animations = () => {

    let styl = document.querySelector('#styl');
    let layout = document.querySelector('#layout');
    let animation = document.querySelector('#animation');
    let spacing = document.querySelector('#spacing');

    console.log(styl);
    console.log(layout);
    console.log(animation);
    console.log(spacing);


    let styl_style = window.getComputedStyle(styl);
    let styl_value = styl_style.getPropertyValue('display');
    console.log(styl_value);


    let layout_style = window.getComputedStyle(layout);
    let layout_value = layout_style.getPropertyValue('display');
    console.log(layout_value);


    let animation_style = window.getComputedStyle(animation);
    let animation_value = animation_style.getPropertyValue('display');
    console.log(animation_value);


    let spacing_style = window.getComputedStyle(spacing);
    let spacing_value = spacing_style.getPropertyValue('display');
    console.log(spacing_value);
    console.log(styl_value == "none");

    if (animation_value == 'none') {
        animation.style.display = "";
        styl.style.display = "none";
        layout.style.display = "none";
        spacing.style.display = "none";
    }
}


const spacings = () => {

    let styl = document.querySelector('#styl');
    let layout = document.querySelector('#layout');
    let animation = document.querySelector('#animation');
    let spacing = document.querySelector('#spacing');

    console.log(styl);
    console.log(layout);
    console.log(animation);
    console.log(spacing);


    let styl_style = window.getComputedStyle(styl);
    let styl_value = styl_style.getPropertyValue('display');
    console.log(styl_value);


    let layout_style = window.getComputedStyle(layout);
    let layout_value = layout_style.getPropertyValue('display');
    console.log(layout_value);


    let animation_style = window.getComputedStyle(animation);
    let animation_value = animation_style.getPropertyValue('display');
    console.log(animation_value);


    let spacing_style = window.getComputedStyle(spacing);
    let spacing_value = spacing_style.getPropertyValue('display');
    console.log(spacing_value);
    console.log(styl_value == "none");

    if (spacing_value == 'none') {
        spacing.style.display = "";
        animation.style.display = "none";
        styl.style.display = "none";
        layout.style.display = "none";

    }
}


// for hiding image_editor div 
const disable1 = () => {
    let img_editor_part = document.querySelector('#img_editor_part');
    let img_editor_part_style = window.getComputedStyle(img_editor_part);
    let img_editor_part_value = img_editor_part_style.getPropertyValue('display');
    console.log(img_editor_part);

    if (img_editor_part_value == "none") {
        img_editor_part.style.display = "";
    }
    else {
        img_editor_part.style.display = "none";
    }
}



const disable2 = () => {
    let linkImage = document.querySelector('#linkImage');
    // console.log(image_editor);

    let linkImage_style = window.getComputedStyle(linkImage);
    // console.log(image_editor_style);

    let linkImage_property_value = linkImage_style.getPropertyValue('display');
    // console.log(image_editor_property_value);

    if (linkImage_property_value == 'block') {
        linkImage.style.display = "none";
    } else {
        linkImage.style.display = "block";
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
    let cont1 = document.querySelector('#cont');
    let desig1 = document.querySelector('#desig');
    let cont_style1 = window.getComputedStyle(cont1);
    let cont_color1 = cont_style1.getPropertyValue('color');


    if (cont_color1 == 'rgb(255, 255, 255)') {
        cont1.style.color = "orange";
        cont1.style.border = "1px solid orange";
        desig1.style.color = 'rgb(255, 255, 255)';
        desig1.style.border = "1px solid rgb(255, 255, 255)";
    }

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
    let cont = document.querySelector('#cont');
    let desig = document.querySelector('#desig');
    let desig_style = window.getComputedStyle(desig);
    let desig_color = desig_style.getPropertyValue('color');


    if (desig_color == 'rgb(255, 255, 255)') {
        desig.style.color = "orange";
        desig.style.border = "1px solid orange";
        cont.style.color = 'rgb(255, 255, 255)';
        cont.style.border = "1px solid rgb(255, 255, 255)";

    }


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


function editImage(image_src) {

    let uploading_img1 = document.querySelector('#uploading_img1');
    let uploading_img2 = document.querySelector('#uploading_img2');

    let img_editor_part = document.querySelector('#img_editor_part');
    let img_editor_part_style = window.getComputedStyle(img_editor_part);
    let img_editor_part_value = img_editor_part_style.getPropertyValue('display');
    console.log(img_editor_part);

    if (img_editor_part_value == "none") {
        img_editor_part.style.display = "";
        uploading_img1.src = image_src;
        uploading_img2.src = image_src;
        // uploading_img.setAttribute('src', uploading_img.src);
    } else {
        img_editor_part.style.display = "none";
    }



}