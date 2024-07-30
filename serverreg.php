<?php // define variables and set to empty values
    $reg_date = $name = $email = $psw = "";


    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = test_input($_POST["name"]);
      $email = test_input($_POST["email"]);
      $psw = test_input($_POST["psw"]);
      $reg_date = date("Y/m/d") ." ". date("h:i:sa");  
      $psw2 = md5($psw);
    }
    
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "olamify";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "INSERT INTO users (name, password, email, reg_date)
    VALUES ('$name', '$psw2', '$email', '$reg_date')";
    
    if (mysqli_query($conn, $sql)) {
        echo '<html>
        <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        
        /* The Modal (background) */
        .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          padding-top: 100px; /* Location of the box */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
        
        /* Modal Content */
        .modal-content {
          background-color: #fefefe;
          margin: auto;
          padding: 20px;
          border: 1px solid #888;
          width: 80%;
        }
        
        /* The Close Button */
        .close {
          color: #aaaaaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
          color: #000;
          text-decoration: none;
          cursor: pointer;
        }
        </style>
        </head>
        <body>
        

        
        <!-- The Modal -->
        <div id="myModal" class="modal">
        
          <!-- Modal content -->
          <div class="modal-content">
            <h3>Success, <a href="../index.php"><b>Please Sign In with your info to Continue</b></a></h3>
          </div>
        
        </div>
        
        <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        
        // Get the button that opens the modal
        
 
          modal.style.display = "block";
        
        </script>
        
        </body>
  
        </html>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    
    ?>


