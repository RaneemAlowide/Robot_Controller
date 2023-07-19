
// JavaScript code: for not changing pages

//   document.getElementById("myForm").addEventListener("submit", function(event) {
//    event.preventDefault(); // Prevent form submission
//     var formData = new FormData(this); // Get form data
//     console.log(JSON.stringify(formData.get('move'))); // Log value of form field
//     var xhr = new XMLHttpRequest(); // Create new AJAX request
//     xhr.open("POST", "connector.php", true);
//     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//     xhr.onreadystatechange = function() {
//       if (xhr.readyState === 4 && xhr.status === 200) {
//         console.log(xhr.responseText); 
//       }
//     };
//     xhr.send(formData.get('move')); // Send form data to server
//   });


//another code: 

// $('#myForm').submit(function(e) {
//     e.preventDefault(); 
//   });
//   $('.movement').click(function() {

//     var move = $(this).val();
  
//     $.ajax({
//       url: 'connector.php',
//       type: 'POST',
//       data: {move: move},
//       success: function(response) {
//         console.log(response);
//       }
//     });
  
//   });