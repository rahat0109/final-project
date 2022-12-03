function validateForm() {
    let firstname = document.getElementById('firstname').value;
    let lastname = document.getElementById('lastname').value;
    let gender = document.getElementById('gender').value;
    let religion = document.getElementById('religion').value;
    let ssc = document.getElementById('ssc').value;
    let hsc = document.getElementById('hsc').value;
    let mbbs = document.getElementById('mbbs').value;
    let PresentAddress = document.getElementById('PresentAddress').value;
    let PermanentAddress = document.getElementById('PermanentAddress').value;
    let phone = document.getElementById('phone').value;
    let email = document.getElementById('email').value;
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
  
    if (firstname == '') {
      document.getElementById('firstnameER').innerHTML =
        'Username must be filled out';
      return false;
    } 
    else if (lastname == '') {
      document.getElementById('lastnameER').innerHTML =
        'Password must be filled out';
    }
    else if (gender == '') {
        document.getElementById('genderER').innerHTML =
          'Password must be filled out';
      }
      else if (religion == '') {
        document.getElementById('religionER').innerHTML =
          'Password must be filled out';
      }
      else if (ssc == '') {
        document.getElementById('sscER').innerHTML =
          'Password must be filled out';
      }
      else if (hsc == '') {
        document.getElementById('hscER').innerHTML =
          'Password must be filled out';
      }
      else if (mbbs == '') {
        document.getElementById('mbbsER').innerHTML =
          'Password must be filled out';
      }
      else if (PresentAddress == '') {
        document.getElementById('PresentAddressER').innerHTML =
          'Password must be filled out';
      }
      else if (PermanentAddress == '') {
        document.getElementById('PermanentAddressER').innerHTML =
          'Password must be filled out';
      }
      else if (phone == '') {
        document.getElementById('phoneER').innerHTML =
          'Password must be filled out';
      }
      else if (email == '') {
        document.getElementById('emailER').innerHTML =
          'Password must be filled out';
      }
      else if (username == '') {
        document.getElementById('usernameER').innerHTML =
          'Password must be filled out';
      }
      else if (password == '') {
        document.getElementById('passwordER').innerHTML =
          'Password must be filled out';
      

      return false;
    }
  }



