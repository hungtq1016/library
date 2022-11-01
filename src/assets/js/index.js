function showPassword(){
    const pass = document.getElementById('password');
    if ( pass.type == "text") {
        pass.type = "password"
    }else{
        pass.type = "text"
    }
}