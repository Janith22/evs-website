<script>

     jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
    });
    $("#book_a_consultation" ).validate({
        rules: {
            customer_name: {
                required: true,
            },
            customer_email: {
                required: true,
                email:true
            },
            customer_contact: {
                required: true,
                number: true,
            },
            visa_type: {
                required: true,
            },
            date_of_preference: {
                required: true,
            },
            time_of_preference: {
                required: true,
            },
            consultation_method: {
                required: true,
            },
            payment_method: {
                required: true,
            },
            special_requests: {
                required: true,
            },

        },
        errorPlacement: function(error, element) {

            if (element.attr("type") == 'checkbox') {
                error.appendTo(element.parent().parent().parent().parent().find('#errordiv'));
            }
            else {
                element.after(error); // default error placement
            }
        }
    });

     $("#drop_message" ).validate({
         rules: {
             name: {
                 required: true,
             },
             email: {
                 required: true,
                 email:true
             },
             country: {
                 required: true,
             },
             type_of_visa: {
                 required: true,
             },
             message: {
                 required: true,
             },

         },
         errorPlacement: function(error, element) {

             if (element.attr("type") == 'checkbox') {
                 error.appendTo(element.parent().parent().parent().parent().find('#errordiv'));
             }
             else {
                 element.after(error); // default error placement
             }
         }
     });

     $("#quick_inquiry" ).validate({
         rules: {
             country: {
                 required: true,
             },
             quick_inquiry_page_name: {
                 required: true,
             },

             type_of_visa: {
                 required: true,
             },
             name: {
                 required: true,
             },
             email: {
                 required: true,
                 email:true
             },
             contact_number: {
                 required: true,
                 number: true
             },
             civil_status: {
                 required: true,
             },
             duration: {
                 required: true,
             },
             special_comments: {
                 required: true,
             },
         },
         errorPlacement: function(error, element) {

             if (element.attr("type") == 'checkbox') {
                 error.appendTo(element.parent().parent().parent().parent().find('#errordiv'));
             }
             else {
                 element.after(error); // default error placement
             }
         }
     });

     $("#quick_info_slider_form" ).validate({
         rules: {
             qui_country: {
                 required: true,
             },
             qui_visa: {
                 required: true,
             },


         },
         errorPlacement: function(error, element) {

             if (element.attr("type") == 'checkbox') {
                 error.appendTo(element.parent().parent().parent().parent().find('#errordiv'));
             }
             else {
                 element.after(error); // default error placement
             }
         }
     });


     $("#register_with_us" ).validate({
         rules: {
             reg_w_name: {
                 required: true,
             },
             reg_w_email: {
                 required: true,
                 email: true,

             },

         },
         errorPlacement: function(error, element) {

             if (element.attr("type") == 'checkbox') {
                 error.appendTo(element.parent().parent().parent().parent().find('#errordiv'));
             }
             else {
                 element.after(error); // default error placement
             }
         }
     });

     $("#register_with_us" ).validate({
         rules: {
             reg_w_name: {
                 required: true,
             },
             reg_w_email: {
                 required: true,
                 email: true,

             },

         },
         errorPlacement: function(error, element) {

             if (element.attr("type") == 'checkbox') {
                 error.appendTo(element.parent().parent().parent().parent().find('#errordiv'));
             }
             else {
                 element.after(error); // default error placement
             }
         }
     });

     $("#student_inquiry_form" ).validate({
         rules: {
             name: {
                 required: true,
             },
             email: {
                 required: true,
             },
             contact_no: {
                 required: true,
             },
             country: {
                 required: true,
             },
             type_of_service: {
                 required: true,
             },
             qualification: {
                 required: true,
             },
             special_requests: {
                 required: true,
             },
         },
         errorPlacement: function(error, element) {

             if (element.attr("type") == 'checkbox') {
                 error.appendTo(element.parent().parent().parent().parent().find('#errordiv'));
             }
             else {
                 element.after(error); // default error placement
             }
         }
     });

     $("#rpl_consultation_form" ).validate({
         rules: {
             name: {
                 required: true,
             },
             email: {
                 required: true,
                 email:true
             },
             contact_number: {
                 required: true,
                 number:true
             },
             profession: {
                 required: true,
             },
             most_recent_qualification: {
                 required: true,
             },
             special_comments: {
                 required: true,
             },
             cv_file: {
                 required: true,
             },
         },
         errorPlacement: function(error, element) {

             if (element.attr("type") == 'checkbox') {
                 error.appendTo(element.parent().parent().parent().parent().find('#errordiv'));
             }
             else {
                 element.after(error); // default error placement
             }
         }
     });

     $("#submit_your_story" ).validate({
         rules: {
             name: {
                 required: true,
             },
             email: {
                 required: true,
                 email:true
             },
             contact_number: {
                 required: true,
                 number:true
             },
             type_of_service: {
                 required: true,
             },
             special_comments: {
                 required: true,
             },

         },
         errorPlacement: function(error, element) {

             if (element.attr("type") == 'checkbox') {
                 error.appendTo(element.parent().parent().parent().parent().find('#errordiv'));
             }
             else {
                 element.after(error); // default error placement
             }
         }
     });


     $("#register_with_ielts" ).validate({
         rules: {
             name: {
                 required: true,
             },
             email: {
                 required: true,
                 email:true
             },
             contact_number: {
                 required: true,
                 number:true
             },
             class_preference: {
                 required: true,
             },
         },
         errorPlacement: function(error, element) {

             if (element.attr("type") == 'checkbox') {
                 error.appendTo(element.parent().parent().parent().parent().find('#errordiv'));
             }
             else {
                 element.after(error); // default error placement
             }
         }
     });


     $("#students_contact_form" ).validate({
         rules: {
             full_name: {
                 required: true,
             },
             email: {
                 required: true,
                 email:true
             },
             contact_number: {
                 required: true,
                 number:true
             },
             address: {
                 required: true,
             },
             message: {
                 required: true,
             },

         },
         errorPlacement: function(error, element) {

             if (element.attr("type") == 'checkbox') {
                 error.appendTo(element.parent().parent().parent().parent().find('#errordiv'));
             }
             else {
                 element.after(error); // default error placement
             }
         }
     });

     $("#migration_visa_inquiry" ).validate({
         rules: {
             name: {
                 required: true,
             },
             email: {
                 required: true,
                 email:true
             },
             contact_number: {
                 required: true,
                 number:true
             },
             profession: {
                 required: true,
             },
             most_recent_qualification: {
                 required: true,
             },
             country: {
                 required: true,
             },
             special_comments: {
                 required: true,
             },

         },
         errorPlacement: function(error, element) {

             if (element.attr("type") == 'checkbox') {
                 error.appendTo(element.parent().parent().parent().parent().find('#errordiv'));
             }
             else {
                 element.after(error); // default error placement
             }
         }
     });


     $("#scholarship_form" ).validate({
         rules: {
             name: {
                 required: true,
             },
             email: {
                 required: true,
                 email:true
             },
             contact_no: {
                 required: true,
                 number:true
             },
             most_recent_qualification: {
                 required: true,
             },


         },
         errorPlacement: function(error, element) {

             if (element.attr("type") == 'checkbox') {
                 error.appendTo(element.parent().parent().parent().parent().find('#errordiv'));
             }
             else {
                 element.after(error); // default error placement
             }
         }
     });



     $(document).ready(function () {

         $(document).on('submit', "#migration_visa_inquiry", function () {
             // remove error messages
             $(".text-danger").remove();
             $(".text-danger").remove();
             var formData = new FormData(this);
             var form =$(this);

             if ($(this).valid()) {
                 $.ajax({
                     url: form.attr('action'),
                     type: form.attr('method'),
                     data: formData,
                     cache: false,
                     contentType: false,
                     processData: false,
                     success: function (data) {
                         $('#migration_visa_inquiry')[0].reset();
                         alert("Message sent successfully");
                         $('#migration-visa-inquiry-modal').modal('toggle');
                     } // /success
                 }); // /ajax
             }
             return false;
         });

        $(document).on('submit', "#book_a_consultation", function () {
            // remove error messages
            $(".text-danger").remove();
            var form = $(this);

            if ($(this).valid()) {
                $.ajax({
                    url: form.attr('action'),
                    type: form.attr('method'),
                    data: form.serialize(),
                    dataType: 'json',
                    async: false,
                    success: function (data) {
                        $('#book_a_consultation')[0].reset();
                        alert("Message sent successfully")
                    } // /success
                }); // /ajax
            }
            return false;
        });

         $(document).on('submit', "#rpl_consultation_form", function () {
             // remove error messages
             $(".text-danger").remove();
             var formData = new FormData(this);
             var form =$(this);

             if ($(this).valid()) {
                 $.ajax({
                     url: form.attr('action'),
                     type: form.attr('method'),
                     data: formData,
                     cache: false,
                     contentType: false,
                     processData: false,
                     success: function (data) {
                         $('#rpl_consultation_form')[0].reset();
                         alert("Message sent successfully");
                         $('#rpl-consultation-modal').modal('toggle');
                     } // /success
                 }); // /ajax
             }
             return false;
         });

         $(document).on('submit', "#submit_your_story", function () {
             // remove error messages
             $(".text-danger").remove();
             var form = $(this);

             if ($(this).valid()) {
                 $.ajax({
                     url: form.attr('action'),
                     type: form.attr('method'),
                     data: form.serialize(),
                     dataType: 'json',
                     async: false,
                     success: function (data) {
                         $('#submit_your_story')[0].reset();
                         alert("Message sent successfully");
                         $('#submit-story-modal').modal('toggle');

                     } // /success
                 }); // /ajax
             }
             return false;
         });

         $(document).on('submit', "#register_with_ielts", function () {
             // remove error messages
             $(".text-danger").remove();
             var form = $(this);

             if ($(this).valid()) {
                 $.ajax({
                     url: form.attr('action'),
                     type: form.attr('method'),
                     data: form.serialize(),
                     dataType: 'json',
                     async: false,
                     success: function (data) {
                         $('#register_with_ielts')[0].reset();
                         alert("Message sent successfully");


                     } // /success
                 }); // /ajax
             }
             return false;
         });


        $(document).on('submit', "#drop_message", function () {
            // remove error messages
            $(".text-danger").remove();
            var form = $(this);

            if ($(this).valid()) {
                $.ajax({
                    url: form.attr('action'),
                    type: form.attr('method'),
                    data: form.serialize(),
                    dataType: 'json',
                    async: false,
                    success: function (data) {
                        $('#drop_message')[0].reset();
                        alert("Message sent successfully")
                    } // /success
                }); // /ajax
            }
            return false;
        });

         $(document).on('submit', "#students_contact_form", function () {
             // remove error messages
             $(".text-danger").remove();
             var form = $(this);

             if ($(this).valid()) {
                 $.ajax({
                     url: form.attr('action'),
                     type: form.attr('method'),
                     data: form.serialize(),
                     dataType: 'json',
                     async: false,
                     success: function (data) {
                         $('#students_contact_form')[0].reset();
                         alert("Message sent successfully")
                     } // /success
                 }); // /ajax
             }
             return false;
         });



        $(document).on('submit', "#quick_info_slider_form", function () {
            // remove error messages
            $(".text-danger").remove();
            var form = $(this);

            if ($(this).valid()) {
                let quick_inc_country=$('#qui_country').val();
                let qui_inf_visa=$('#qui_visa').val();


                $('#quick_inc_country').val(quick_inc_country);
                $('#qui_inf_visa').val(qui_inf_visa);
                $('#quick_info_slider_form')[0].reset();
                $('#quick-inquiry-modal').modal('show');
            }
            return false;
        });

         $(document).on('submit', "#register_with_us", function () {
             // remove error messages
             $(".text-danger").remove();
             var form = $(this);

             if ($(this).valid()) {
                 let reg_w_name=$('#reg_w_name').val();
                 let reg_w_email=$('#reg_w_email').val();


                 $('#reg_w_us_name').val(reg_w_name);
                 $('#reg_w_us_email').val(reg_w_email);

                 $('#register_with_us')[0].reset();
                 $('#student-inquiry-modal').modal('show');
             }
             return false;
         });
        $(document).on('submit', "#quick_inquiry", function () {
            // remove error messages
            $(".text-danger").remove();
            var form = $(this);

            if ($(this).valid()) {
                $.ajax({
                    url: form.attr('action'),
                    type: form.attr('method'),
                    data: form.serialize(),
                    dataType: 'json',
                    async: false,
                    success: function (data) {
                        $('#quick_inquiry')[0].reset();
                        $('#quick-inquiry-modal').modal('toggle');
                        alert("Message sent successfully");

                    } // /success
                }); // /ajax
            }
            return false;
        });

         $(document).on('submit', "#student_inquiry_form", function () {
             // remove error messages
             $(".text-danger").remove();
             var form = $(this);

             if ($(this).valid()) {
                 $.ajax({
                     url: form.attr('action'),
                     type: form.attr('method'),
                     data: form.serialize(),
                     dataType: 'json',
                     async: false,
                     success: function (data) {
                         $('#student_inquiry_form')[0].reset();
                         $('#student-inquiry-modal').modal('toggle');
                         alert("Message sent successfully");

                     } // /success
                 }); // /ajax
             }
             return false;
         });

         $(document).on('submit', "#scholarship_form", function () {
             // remove error messages
             $(".text-danger").remove();
             var form = $(this);

             if ($(this).valid()) {
                 $.ajax({
                     url: form.attr('action'),
                     type: form.attr('method'),
                     data: form.serialize(),
                     dataType: 'json',
                     async: false,
                     success: function (data) {
                         $('#scholarship_form')[0].reset();
                         alert("Message sent successfully");

                     } // /success
                 }); // /ajax
             }
             return false;
         });
         $(document).on('change','#consultation_method',function () {
             let values=$(this).val();

             $('#payment_method').empty();
             if(values=="Online"){
                 $('#payment_method').append($('<option>', {
                     value: "Bank Transfer",
                     text : "Bank Transfer"
                 }));
             }else{
                 $('#payment_method').append($('<option>', {
                     value: "On-Premise",
                     text : "On-Premise"
                 }));

                 $('#payment_method').append($('<option>', {
                     value: "Bank Transfer",
                     text : "Bank Transfer"
                 }));
             }
         });
    });
</script>