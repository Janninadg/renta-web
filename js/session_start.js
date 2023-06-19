document.querySelector('button').addEventListener('onclick', function(e){

    const user = document.getElementById('user');
    const password = document.getElementById('password');
    const form = document.getElementById('form-login');
    e.preventDefault(); 
    sessionStorage.setItem('user',user);
    sessionStorage.setItem('password',password);
    console.log(user);

});

console.log(sessionStorage.getItem('user'));