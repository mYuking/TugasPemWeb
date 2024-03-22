function auth(){
    const username = "KING"
    const password = "20052605"

    //tangkap input user
    let userInput = document.getElementById("username").value
    let passwordInput = document.getElementById("password").value

    if(username == userInput && password == passwordInput){
        alert("Login Berhasil")
        document.location = "home.html"
    }else{
        alert("Login Gagal!")
    }     
}