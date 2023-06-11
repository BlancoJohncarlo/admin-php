<!DOCTYPE html>
<html>
    <head>
        <title>Butterfly-Admin</title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
    <div class="container-client">

        <div class="header bg-green">
            <img src="client/denr-logo.png" class="logo " alt="">
            <div class="dropdown">
              <img src="client/UserProfile.png" class="usericon"alt="User Icon" id="user-icon">
              <div class="dropdown-contents" id="dropdown-content">
                <a href="#">Profile</a>
                <a href="#">Reports</a>
                <a href="#">Archive</a>
                <a href="#">Logout</a>
              </div>
            </div>
            <h2 class="text-header ">Department of Environment and Natural Resources</h2>
        </div>
          <div class="navbar-space">
            <nav id="navbar">

              <a class="nav-link" href="adminhome.php">Home</a>
              <a class="nav-link" href="admin-client.php">Client</a>
              <a class="nav-link" href="admin-application.php">Application</a>
              <a class="nav-link" href="admin-butterfly.php">Butterfly</a>
              <a class="nav-link" href="admin-reports.php">Reports</a>
                
            </nav>
          </div> 
          <div>

        </div>
          <div class="draft-box ">
            <div class="line">
              <h3 class="admin-report ">Reports</h3>
                <div class="admin-year">
                  <label class="admin-label" for="yearInput">Year:</label>
                <input type="text" id="yearInputadmin" placeholder="Enter year" required>

                </div>
                </div>
             



      

    </div>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
      var userIcon = document.getElementById('user-icon');
      var userDropdown = document.getElementById('user-dropdown');
  
      userIcon.addEventListener('click', function () {
          userDropdown.style.display = (userDropdown.style.display === 'block') ? 'none' : 'block';
      });
  });
  document.getElementById('permitsButton').addEventListener('click', function() {
    var year = document.getElementById('yearInputadmin').value;
    // Perform the desired action with the "Permits" button
    console.log('Permits button clicked for year: ' + year);
  });

  document.getElementById('logsButton').addEventListener('click', function() {
    var year = document.getElementById('yearInputadmin').value;
    // Perform the desired action with the "Logs" button
    console.log('Logs button clicked for year: ' + year);
  });
  
  
  </script>
          

    </body>

</html>