// var contact = $(input[name='contact'])
// jQuery("input[name='contact']").blur(function(){
//     var contact = jQuery(this).val();
//     var check = new RegExp('/[0-9 -()+]+$/');
//     if(contact.match(check)){
//         alert("number");
//     }else{
//         alert("not  number");
//     }
// });


// REQUIRED FIELD LOGIC
// $(".form input").blur(function() {
//     var temp = $(this).val();
//     if (temp == '') {
//         console.log("empty");
//         $(this).after("<span>*Required Field</span>");
//         $(this).next().addClass("err");
//     } else {}
//     $(this).focus(function() {
//         $(this).next().removeClass("err");
//     })
// });

// input select image
$('.display_img_div').on('click', function() {
    $('.file_input').trigger('click');
});

// show the selected image
function display_img(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('.display_img')
                .attr('src', e.target.result)
        };

        reader.readAsDataURL(input.files[0]);
    }
}