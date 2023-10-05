function validate_form()
{
    if(document.forms["form"]["name"].value == "")
    {
        alert("Name cannot be blank");
        return false;
    }

    if(document.forms["form"]["email"].value == "")
    {
        alert("Email cannot be blank");
        return false;
    }

    if(document.forms["form"]["major"].selectedIndex < 1)
    {
        alert("Please choose your current major");
        return false;
    }
}