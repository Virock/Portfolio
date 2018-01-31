$(document).ready(function ()
{
    $('form[name=mailToMe]').submit(function (e)
    {
        e.preventDefault();
        //On form submit
        //Make sure all form slots are filled
        if (document.getElementById('name').value == '' || document.getElementById('email').value == '' || document.getElementById('message').value == '')
        {
            //Show error message if there is one that isn't filled
            document.getElementById('showError').innerHTML = "All fields most be filled";
            //This removes a class from an object
            document.getElementById('showError').removeAttribute("alert-success");
            //This adds a class to an object
            document.getElementById('showError').className = "alert-danger";
            document.getElementById('showError').style.display = "block";
            //Do not send request
            return;
        }
        //If all form fields are filled
        //Disable submit button
        $(this).find(':input[type=submit]').prop('disabled', true);

        //Ajax to export.php with extra bit that indicates javascript is enabled
        var formData = new FormData(this);
        formData.append("javascript", "true");
        $.ajax({
            type: "POST",
            url: "mailToMe.php",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (result)
            {
                //Re-enable form submition
                document.getElementById('submitButton').disabled = false;
                //If there is an exception
                if (result == 'exception')
                {
                    //Show error
                    document.getElementById('showError').innerHTML = "Something went wrong. Please try again later";
                    document.getElementById('showError').style.display = "block";
                    return;
                }
                //If a field was empty
                else if (result == 'emptyField')
                {
                    document.getElementById('showError').innerHTML = "All fields most be filled";
                    document.getElementById('showError').style.display = "block";
                    return;
                }
                //If everything goes well
                else if (result == 'success')
                {
                    //Remove values from the form fields
                    document.getElementById('name').value = '';
                    document.getElementById('email').value = '';
                    document.getElementById('message').value = '';
                    //Show success message
                    document.getElementById('showError').innerHTML = "Success. Mail has been sent successfully";
                    //This removes a class from an object
                    document.getElementById('showError').removeAttribute("alert-danger");
                    //This adds a class to an object
                    document.getElementById('showError').className = "alert-success";
                    document.getElementById('showError').style.display = "block";
                    return;
                }
            }
        });
    });
});