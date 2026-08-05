function validateForm()
{
    var name = document.getElementById("name").value.trim();
    var age = document.getElementById("age").value;
    var email = document.getElementById("email").value.trim();
    var mobile = document.getElementById("mobile").value.trim();
    var address = document.getElementById("address").value.trim();
    var course = document.getElementById("course").value;
    var batch = document.getElementById("batch").value;
    var experience = document.getElementById("experience").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    var agree = document.getElementById("agree").checked;

    var gender = document.getElementsByName("gender");
    var genderSelected = false;

    for(var i = 0; i < gender.length; i++)
    {
        if(gender[i].checked)
        {
            genderSelected = true;
            break;
        }
    }

    /* ============================
       REQUIRED FIELD VALIDATION
       ============================ */

    if(name == "")
    {
        alert("Name is required.");
        document.getElementById("name").focus();
        return false;
    }

    if(age == "")
    {
        alert("Age is required.");
        document.getElementById("age").focus();
        return false;
    }

    if(email == "")
    {
        alert("Email is required.");
        document.getElementById("email").focus();
        return false;
    }

    if(mobile == "")
    {
        alert("Mobile Number is required.");
        document.getElementById("mobile").focus();
        return false;
    }

    if(address == "")
    {
        alert("Address is required.");
        document.getElementById("address").focus();
        return false;
    }

    if(!genderSelected)
    {
        alert("Please select your gender.");
        return false;
    }

    if(course == "")
    {
        alert("Please select a course.");
        return false;
    }

    if(batch == "")
    {
        alert("Please select a batch.");
        return false;
    }

    if(experience == "")
    {
        alert("Please select your experience level.");
        return false;
    }

    if(password == "")
    {
        alert("Password is required.");
        document.getElementById("password").focus();
        return false;
    }

    if(confirmPassword == "")
    {
        alert("Confirm Password is required.");
        document.getElementById("confirmPassword").focus();
        return false;
    }

    /* ============================
       RANGE VALIDATION
       ============================ */

    if(age < 5 || age > 60)
    {
        alert("Age must be between 5 and 60.");
        document.getElementById("age").focus();
        return false;
    }

    /* ============================
       REGULAR EXPRESSION VALIDATION
       ============================ */

    var namePattern = /^[A-Za-z ]+$/;

    if(!namePattern.test(name))
    {
        alert("Name should contain only alphabets.");
        document.getElementById("name").focus();
        return false;
    }

    var emailPattern = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;

    if(!emailPattern.test(email))
    {
        alert("Please enter a valid Email Address.");
        document.getElementById("email").focus();
        return false;
    }

    var mobilePattern = /^[0-9]{10}$/;

    if(!mobilePattern.test(mobile))
    {
        alert("Mobile Number must contain exactly 10 digits.");
        document.getElementById("mobile").focus();
        return false;
    }

    var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).{8,}$/;

    if(!passwordPattern.test(password))
    {
        alert("Password must contain at least 8 characters, one uppercase letter, one lowercase letter, one number and one special character.");
        document.getElementById("password").focus();
        return false;
    }

    /* ============================
       COMPARE VALIDATION
       ============================ */

    if(password != confirmPassword)
    {
        alert("Password and Confirm Password do not match.");
        document.getElementById("confirmPassword").focus();
        return false;
    }

    if(!agree)
    {
        alert("Please accept the Terms and Conditions.");
        return false;
    }

    return true;
}