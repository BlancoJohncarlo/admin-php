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
          <div class="bg-box-admin">
            <h3><span>Welcome  Admin </span></h3>
            <h4>As of today, you have the following total number:</h4>

      </div> 
          
        
        <main id="main-doc">

            <section class="main-section">
                          <div class="box-admin-client">
                            <h3 class="draft">CLIENT</h3>
                            <p class="draft-text"># Record (s)</p>
                            <img src="admin/admin-client.png" class="draft-icon"alt="">

                          </div>
                          <div class="box-admin-application">
                            <h3 class="draft">Application</h3>
                            <p class="draft-text"># Record (s)</p>
                            <img src="admin/admin-application.png" class="vector-icon"alt="">

                          </div>
                          <div class="box-admin-butterfly">
                            <h3 class="draft">Butterfly</h3>
                            <p class="draft-text"># Record (s)</p>
                            <img src="admin/admin-butterfly.png" class="return-icon"alt="">

                          </div>
                          
                          
            </section>
           

        </main>

    </div>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
  var userIcon = document.getElementById('user-icon');
  var dropdownContent = document.getElementById('dropdown-content');
  
  userIcon.addEventListener('click', function() {
    dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
  });
});

    </script>

    </body>

</html>