function validateForm() {
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
  
    if (username == '') {
      document.getElementById('usernameER').innerHTML =
        'Username must be filled out';
      return false;
    } else if (password == '') {
      document.getElementById('passwordER').innerHTML =
        'Password must be filled out';
      return false;
    }
  }