
    function myfunction() {
        var elements     = document.getElementById("form") ,
            id           = elements.ID.value ,
            firstname    = elements.firstname.value ,
            lastname     = elements.lastname.value ,
            email        = elements.email.value ;
        var gender = document.querySelector('input[name = "gender"]:checked').value;

        document.getElementById('stid').innerHTML = id;
        document.getElementById('fname').innerHTML = firstname;
        document.getElementById('lname').innerHTML = lastname;
        document.getElementById('mail').innerHTML = email;
        document.getElementById('gender').innerHTML = gender;

    }
