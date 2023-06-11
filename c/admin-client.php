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
        <img src="client/denr-logo.png" class="logo" alt="">
        <div class="dropdown">
            <img src="client/UserProfile.png" class="usericon" alt="User Icon" id="user-icon">
            <div class="dropdown-contents" id="dropdown-content">
                <a href="#">Profile</a>
                <a href="#">Reports</a>
                <a href="#">Archive</a>
                <a href="#">Logout</a>
            </div>
        </div>
        <h2 class="text-header">Department of Environment and Natural Resources</h2>
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
    <div class="draft-box">
        <div class="line">
            <h3 class="color-black">Client</h3>
            
        </div>
        
        <div>
            <button class="btn-addclient" onclick="createTable()">Add Client</button>
        </div>
        
        <div id="tableContainer" class="add-client-form">

            
        </div>
    </div>
    <main id="main-doc">
        <section class="main-section"></section>
    </main>
</div>

<script>
    
document.addEventListener('DOMContentLoaded', function () {
        var userIcon = document.getElementById('user-icon');
        var userDropdown = document.getElementById('dropdown-content');

        userIcon.addEventListener('click', function () {
            userDropdown.style.display = (userDropdown.style.display === 'block') ? 'none' : 'block';
        });
    });
    var tableCount = 0;

    function createTable() {
        tableCount++;

        var tableContainer = document.getElementById("tableContainer");
        var table = document.createElement("table");
        var tableId = "clientTable" + tableCount;

        table.id = tableId;
        table.innerHTML = `
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Business Name</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" id="nameInput${tableCount}" placeholder="Enter name"></td>
                    <td><input type="text" id="businessNameInput${tableCount}" placeholder="Enter business name"></td>
                    <td><input type="text" id="addressInput${tableCount}" placeholder="Enter address"></td>
                    <td>
                        <button class="viewButton">View</button>
                        <button class="editButton">Edit</button>
                        <button class="deleteButton">Delete</button>
                    </td>
                </tr>
            </tbody>
        `;

        tableContainer.appendChild(table);
    }
    

</script>

</body>
</html>
