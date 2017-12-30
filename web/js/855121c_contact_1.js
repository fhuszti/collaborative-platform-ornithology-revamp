$(function() {
    function colorBorders(field, valid) {
        if(valid) {
            field.parent().removeClass('has-error').addClass('has-success');
        }
        else{
            field.parent().removeClass('has-success').addClass('has-error');
        }
    }

    function validateName(name) {
        var re = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,}$/;

        return re.test(name);
    }

    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        
        return re.test(email);
    }

    function validatePassword(pass) {
        var re = /^[A-Za-z\dàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð\W_]{2,}$/i;

        return re.test(pass);
    }

    function validateMessage(message) {
        //Yeah, this one is mine. How did you guess ?
        var re = /^(.|\s)+$/i;

        return re.test(message);
    }

    function liveCheckInputs(inputObjects) {
        inputObjects.name.on('keyup', function() {
            if (validateName(inputObjects.name.val())) {
                colorBorders(inputObjects.name, true);
            }
            else {
                colorBorders(inputObjects.name, false);
            }
        });

        inputObjects.message.on('keyup', function() {
            if (validateMessage(inputObjects.message.val())) {
                colorBorders(inputObjects.message, true);
            }
            else {
                colorBorders(inputObjects.message, false);
            }
        });

        inputObjects.subject.on('keyup', function() {
            if (validateName(inputObjects.subject.val())) {
                colorBorders(inputObjects.subject, true);
            }
            else {
                colorBorders(inputObjects.subject, false);
            }
        });

        inputObjects.email.on('keyup', function() {

            if (validateEmail(inputObjects.email.val())) {
                colorBorders(inputObjects.email, true);
            }
            else {
                colorBorders(inputObjects.email, false);
            }
        });
    }

    function formManagement() {
        var inputObjects = {
            'name': $('#appbundle_email_name'),
            'email': $('#appbundle_email_email'),
            'subject': $('#appbundle_email_title'),
            'message': $('#appbundle_email_content')
        };

        liveCheckInputs(inputObjects);
    }

    formManagement();
});
