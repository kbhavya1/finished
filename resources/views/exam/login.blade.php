<?php
/*ob_start();
if($_POST)
{
	$host="localhost";
	$user="root";
	$pass="root";
	$db="test";
	function wordFilter($name)
    {
        $name = str_replace('"', '.', $name);
				$name = str_replace("'", ".", $name);
        return $name;
    }
	$username=wordFilter($_POST['username']);
	$password=wordFilter($_POST['password']);
  $opt=wordFilter($_POST['opt']);
	 $conn=mysqli_connect($host, $user, $pass, $db);
   if($opt=='student_selected'){
	    $query="SELECT * FROM student_auth where user='$username' and pass='$password'";
      $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1)
        {
          session_start();
          echo '<script>alert("Student Logged In")</script>';
          $_SESSION['session_token']="Student";
          header('Location: dashboard.php');
        }
        else
        {
          echo '<script>alert("Wrong Username or Password")</script>';
        }
      }
  /*  if($opt=='seeder_selected'){
      $query="SELECT * FROM seeder_auth where user='$username' and pass='$password'";
      $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1)
          {
            session_start();
            echo '<script>alert("Seeder Logged In")</script>';
            $_SESSION['session_token']="Seeder";
            header('Location: dashboard.php');
          }
        else
        {
          echo '<script>alert("Wrong Username or Password")</script>';
        }
     }
     if($opt=='admin_selected'){
       $query="SELECT * FROM admin_auth where user='$username' and pass='$password'";
       $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1)
        {
          session_start();
          echo '<script>alert("Admin Logged In")</script>';
          $_SESSION['session_token']="Admin";
          header('Location: dashboard.php');
        }
        else
        {
          echo '<script>alert("Wrong Username or Password")</script>';
        }
      }
      if($opt=='superadmin_selected'){
        $query="SELECT * FROM superadmin_auth where user='$username' and pass='$password'";
        $result=mysqli_query($conn,$query);
          if(mysqli_num_rows($result)==1)
          {
            session_start();
            echo '<script>alert("Super Admin Logged In")</script>';
            $_SESSION['session_token']="Super Admin";
            header('Location: dashboard.php');
          }
          else
          {
            echo '<script>alert("Wrong Username or Password")</script>';
          }
       }
}*/
 ?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head><title>Login Section</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/preflight.min.css" rel="stylesheet">
  <!-- Any of your own CSS would go here -->
  <link rel="stylesheet" type="text/css" href="home.css"></link>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/utilities.min.css" rel="stylesheet">
</head>
<body class="bg-grey-dark">
  <div class="container mx-4 my-4 py-10 px-10 flex bg-grey rounded justify-center">
    <div class="max-w-sm rounded overflow-hidden shadow-lg bg-blue text-color-white">
      <img src="images/login.png" class="w-24 h-24">
      <h1 class="text-white font-bold text-xl mx-2 my-2">Login Area</h1>
    </div>
  </div>
	<div class="container mx-4 my-4 py-10 px-10 block bg-grey rounded justify-center">
      <form id="formsign" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 mx-2 md:mx-32" method="post">
        <div class="flex flex-col md:flex-row justify-center mb-3">
          <label class="mr-4 mb-1 px-4 py-2 rounded overflow-hidden shadow-lg bg-teal-lighter text-sm md:text-lg cursor-pointer"><input class="mr-2 cursor-pointer" type="radio" name="opt" value="student_selected" checked>Student</label>
          <label class="mr-4 mb-1 px-4 py-2 rounded overflow-hidden shadow-lg bg-teal-lighter text-sm md:text-lg cursor-pointer"><input class="mr-2 cursor-pointer" type="radio" name="opt" value="seeder_selected">Seeder</label>
          <label class="mr-4 mb-1 px-4 py-2 rounded overflow-hidden shadow-lg bg-teal-lighter text-sm md:text-lg cursor-pointer"><input class="mr-2 cursor-pointer" type="radio" name="opt" value="admin_selected">Admin</label>
          <label class="mr-4 mb-1 px-4 py-2 rounded overflow-hidden shadow-lg bg-teal-lighter text-sm md:text-lg cursor-pointer"><input class="mr-2 cursor-pointer" type="radio" name="opt" value="superadmin_selected">Super Admin</label>
        </div>
          <br>
        <div class="mb-4"><br>
          <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
            Username
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight" name="username" type="text" placeholder="Username">
        </div>
        <div class="mb-6">
          <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
            Password
          </label>
          <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-grey-darker mb-3 leading-tight" name="password" type="password" placeholder="******************">
        </div>
        <div class="flex items-center justify-between">
          <button class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded" form="formsign" type="submit">
            Sign In
          </button>
          <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker" href="#">
            Forgot Password?
          </a>
        </div>
	    </form>
	</div>
</body>
</html>
