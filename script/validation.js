function validateForm() {
    var x = document.forms["login_form"]["Username"].value;
    if (x == null || x == "") {
        alert("username must be filled out");
        return false;
    }
}