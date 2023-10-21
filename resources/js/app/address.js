


//add campaign's manual donations function
window.createNewUser = function(createUser){
    var newUserField = document.getElementById("newUser");
    var selectedUser = createUser.value;
    if(selectedUser === "Create new"){
      $("#newUser_fname").prop("required", true);
      $("#newUser_lname").prop("required", true);
      $("#email").prop("required", true);
      $("#contact_number").prop("required", true);

      newUserField.style.display = "block";
    }else{
      $("#newUser_fname").prop("required", false);
      $("#newUser_lname").prop("required", false);
      $("#email").prop("required", false);
      $("#contact_number").prop("required", false);

      newUserField.style.display = "none";
      setAddressOptions(selectedUser);
    }
}

window.createNewAddress = function(createAddress){
    var newAddressField = document.getElementById("newAddress");
    var selectedAddress = createAddress.value;

    if(selectedAddress === "Create new"){
      $("#newaddress_stname").prop("required", true);
      $("#newaddress_postcode").prop("required", true);
      $("#selectedCountry").prop("required", true);
      $("#selectedState").prop("required", true);
      $("#selectedCity").prop("required", true);
      newAddressField.style.display = "block";
    }else{
      $("#newaddress_stname").prop("required", false);
      $("#newaddress_postcode").prop("required", false);
      $("#selectedCountry").prop("required", false);
      $("#selectedState").prop("required", false);
      $("#selectedCity").prop("required", false);
      newAddressField.style.display = "none";
    }
}

// the function that will populate the select
window.populateSelect = function(id, value, valueId, foption, editSelection, selectedId) {
    // get the select element
    var $select = $(id);
    // empty it
    $select.empty();
    var $foption;
    if(editSelection){
      value.forEach(function(value, index, arr) {
        if(valueId[index] === selectedId){
          $foption = $("<option value='" + valueId[index] + "' selected>" + arr[index] + "</option>");
        }
      });
    }else{
      $foption = $("<option value='' disabled selected>" + foption + "</option>");
    }
     
    // append first option to select
    $select.append($foption);
    if(value != undefined){
      // for each value in values ...
      value.forEach(function(value, index, arr) {
        if(editSelection){
          if(valueId[index] != selectedId){
            // create an option element
            var $option = $("<option value='" + valueId[index] + "'>" + arr[index] + "</option>");
            // and append it to the select
            $select.append($option);
          }
        }else{
          // create an option element
          var $option = $("<option value='" + valueId[index] + "'>" + arr[index] + "</option>");
          // and append it to the select
          $select.append($option);
        }
      });
    }

    if(id === "#selectedAddress"){
      var $last_option = $("<option value='Create new'>Create New Address</option>");
      // append first option to select
      $select.append($last_option);
    }
}

window.hideAnonymousForm = function(donateFor){
    var donor_type = donateFor.value;
    var notAnonymousForm = document.getElementById("notAnonymous");
    
    document.getElementById("addressContainer").style.display = "block";
    if(donor_type != 'Anonymously'){
      $("#selectedUser").prop('required',true);
      $("#donor_name").prop('disabled', false);
      $("#reg_no").prop('disabled', false);
      notAnonymousForm.style.display = "block";
    }else{
      $('#selectedUser option').prop('selected', function() {
        return this.defaultSelected;
      });
      
      $("#newUser_fname").prop("required", false);
      $("#newUser_lname").prop("required", false);
      $("#email").prop("required", false);
      $("#contact_number").prop("required", false);
      $("#selectedUser").prop('required',false);
      $("#donor_name").prop('disabled', true);
      $("#reg_no").prop('disabled', true);
      notAnonymousForm.style.display = "none";
    }
}