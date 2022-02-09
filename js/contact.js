function myFunction(event) {
    event.preventDefault()
    alert("Success!!Your details have been successfully submitted!Your concerns will soon be addressed!");
  }
console.log("Successfully connected");
function validateForm() {
    let x = document.forms["myForm"]["fname"].value;
    let y=document.forms["myForm"]["email"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
    if(y==""){
        alert("Email must be filled out")
    }
  }

  function notEmpty(elem, helperMsg){
    if(elem.value.length == 0){
    alert(helperMsg);
    elem.focus();
    return false;
    }
    return true;
    }


