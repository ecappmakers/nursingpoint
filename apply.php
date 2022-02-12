<!DOCTYPE html>
<html lang="en">

<head>

<title>About - Nursing Point</title>
  <?php require 'includes/base.php';  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script> 
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>  
  <style>
      label{
          color: #000;
          font-weight: 500;
          font-size: 16px;
      }
      label span{
          color: red;
      }
      input {
          border-width: 2px !important;
      }
      @media(min-width: 992px){
          .form-container{
              margin-top: 130px;
          }
      }
     
  </style>
</head>

<body>

  <?php require 'includes/header.php';  ?>
  <!-- END nav -->
  <section class="form-container container border shadow shadow-md p-3" style="margin-bottom: 120px;">
      <div class="text-center rounded p-4 bg-primary mb-4">
          <h2 class="text-light">Register your profile here !</h2>
      </div>
        <form>
  <div class="form-row">
       <div class="form-group col-md-4">
      <label for="inputEmail4">First name <span>*</span></label>
      <input type="text" class="form-control" id="inputFname4" placeholder="First name" required>
    </div>
     <div class="form-group col-md-4">
      <label for="inputEmail4">Last name <span>*</span></label>
      <input type="text" class="form-control" id="inputLname4" placeholder="Last name" required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Email <span>*</span></label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
    </div>
  </div>
  <div class="form-row">
       <div class="form-group col-md-4">
      <label for="inputEmail4">Mobile number <span>*</span></label>
      <input type="text" class="form-control" id="mob" placeholder="Mobile number" onkeypress="return isNumber(event)" required>
    </div>
     <div class="form-group col-md-4">
      <label for="inputEmail4">Alternate mobile number (Optional)</label>
      <input type="text" class="form-control" id="Altmob" placeholder="Alternate mobile number" onkeypress="return isNumber(event)">
    </div>
    <div class="form-group col-md-4">
      <label for="yoe">Year of experience (Total service year)  <span>*</span></label>
      <select id="yoe" class="form-control" required>
        <option value="0" selected>Fresher</option>
         <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">2</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="above 8 years">above 8 years</option>
      </select>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress">Flat no / floor  <span>*</span></label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Street name <span>*</span></label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" required>
  </div>
  </div>
  <div class="form-row">
      <div class="form-group col-md-3">
      <label for="dob">Date of birth <span>*</span></label>
      <input type="date" class="form-control" id="dob" required>
    </div>
    <div class="form-group col-md-3">
      <label for="inputCity">City <span>*</span></label>
      <input type="text" class="form-control" id="inputCity" required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State <span>*</span></label>
      <select id="inputState" class="form-control" required>
        <option selected>Tamilnadu</option>
        <option>Other state</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip code <span>*</span></label>
      <input type="text" class="form-control" id="inputZip" onkeypress="return isNumber(event)" required>
    </div>
  </div>
   <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress">Degree <span>*</span></label>
    <input type="text" class="form-control" id="degree" placeholder="Ex: Bsc, nursing" required>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">College name <span>*</span></label>
    <input type="text" class="form-control" id="collegename" placeholder="College name" required>
  </div>
  </div>
 
  <div class="text-right mt-4">
       <button type="button" onclick="submitFrom()" class="btn btn-lg w-100 btn-outline-success">Apply</button>
  </div>
 
</form>
  </section>
  <script>
   function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
function submitFrom(){
    let valid = true;
          $('[required]').each(function() {
            if ($(this).is(':invalid') || !$(this).val()) valid = false;
          })
          if (!valid) 
          swal({  
                  title: " Oops!",  
                  text: " Please fill all required fields!",  
                  icon: "error",  
                  button: "ok",  
                });  
          else{
    $.ajax({
    type: "POST",
    url: "/registerProfile.php",
    data: {
        Fname: $('#inputFname4').val(),
        Lname: $('#inputLname4').val(),
        email: $('#inputEmail4').val(),
        mob: $('#mob').val(),
        Amob: $('#Altmob').val(),
        yoe: $('#yoe').val(),
        address1: $('#inputAddress').val(),
        address2: $('#inputAddress2').val(),
        dob: $('#dob').val(),
        city: $('#inputCity').val(),
        state: $('#inputState').val(),
        zip: $('#inputZip').val(),
        degree: $('#degree').val(),
        college: $('#collegename').val()
    },
    success: function(result){
       swal({  
          title: "Registered successfully!",  
          text: "We will get back to you ASAP",  
          icon: "success",  
          button: "oh yes!",  
        });  
        window.location.replace("https://nursingpoint.net/");
    }
});
}
}
 
</script>
</body>

</html>