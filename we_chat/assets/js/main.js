import Chat from './chat.js'
Chat.checkIfUser().then(
    user => {
        if (!user)
            location.href = "http://localhost/we_chat/login.php"
        else
            document.getElementById("main_alert").innerHTML = "Welcome " + user.name + " to dashboard"
    }
)
$("#logout").click(function (e) {
    e.preventDefault()
    Chat.logout()
})
$(".navbar-toggler").click(function (e) {
    e.preventDefault()
    $("aside").toggleClass("show")
    $(".backdrop-overlay").toggleClass("show")
})
$(".backdrop-overlay").click(function (e) {
    e.preventDefault()
    $("aside").removeClass("show")
    $(".backdrop-overlay").toggleClass("show")
})
