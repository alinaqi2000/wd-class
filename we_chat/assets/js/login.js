import Chat from './chat.js'
Chat.checkIfUser().then(
    user => {
        if (user)
            location.href = "http://localhost/we_chat/"
    }
)

toastr.options = {
    "progressBar": true,
}
$("#submitLogin").click(function () {
    var email = document.getElementById("email").value
    var password = document.getElementById("password").value

    if (!email) return toastr.error("Please enter email.")
    if (!password) return toastr.error("Please enter password.")

    $.ajax({
        url: "http://localhost/we_chat/api/login.php",
        method: "POST",
        dataType: "JSON",
        data: { email, password },
        success: function (resp) {
            if (resp['status']) {
                toastr.success(resp['msg'])
                localStorage.setItem("user", JSON.stringify(resp['user']))
                setTimeout(() => {
                    location.href = "http://localhost/we_chat/"
                }, 2000)
            }
            else
                toastr.error(resp['msg'])
        }
    })
})