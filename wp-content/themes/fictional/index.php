<?php
get_header();

// Include the necessary files
require_once 'connect.php';

// Instantiate the APIClientService object


$api_client = new APIClientService('https://symfony-skeleton.q-tests.com/api/v2/token');
?>


<div class="login-container">
    <h2 class="title">Insert credentials</h2>
    <form action="" method="post">
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <input type="submit" value="Login" name="submit">
    </form>
  </div>




  <?php

$email = $_POST["email"];
$password = $_POST["password"];


// Test the post_data_to_api() method
$post_data = array('email' => $email, 'password' => $password);
$response = $api_client->post_data_to_api($post_data);


if(isset($_POST["submit"])){
  if(!array_key_exists('token_key', $response)){
  echo '<h4>Wrong credentials. Try again.</h4>';
  }else{
   echo "<h2>Response from API: </h2>";
    foreach ($response as $key => $value) {
     if($key == 'token_key'){
      $_SESSION['api_data'] = $value;
     } 
     
    }
    echo "<h4>TOKEN: ".$_SESSION['api_data']."</h4>";

  }
}

get_footer();
?>