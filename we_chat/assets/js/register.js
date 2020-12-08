toastr.options = {
    "progressBar": true,
}
function submitRegister() {
    var name = document.getElementById("name").value
    var email = document.getElementById("email").value
    var image_url = document.getElementById("image_url").value
    var password = document.getElementById("password").value
    var c_password = document.getElementById("c_password").value

    if (!name) return toastr.error("Please enter name.")
    if (!email) return toastr.error("Please enter email.")
    if (!image_url) return toastr.error("Please enter image url.")
    if (!password) return toastr.error("Please enter password.")
    if (!c_password) return toastr.error("Please enter confiirm password.")
    if (password !== c_password) return toastr.error("Password and it's confirmation does not match.")

    $.ajax({
        url: "http://localhost/we_chat/api/register.php",
        method: "POST",
        dataType: "JSON",
        data: { name, email, image_url, password },
        success: function (resp) {
            if (resp['status']) {
                toastr.success(resp['msg'])
                setTimeout(() => {
                    location.href = "http://localhost/we_chat/login.php"
                }, 2000)
            }
            else
                toastr.error(resp['msg'])
        }
    })
}