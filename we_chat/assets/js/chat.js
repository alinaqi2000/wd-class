class Chat {
    constructor() {
        this.user = null
    }
    async checkIfUser() {
        var user = await JSON.parse(localStorage.getItem("user"))
        this.user = user
        return user
    }
    logout() {
        localStorage.removeItem("user")
        location.href = "http://localhost/we_chat/login.php"
    }
}
export default new Chat()