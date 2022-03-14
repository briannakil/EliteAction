<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM Inventory");
?>



<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="main.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Roboto&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d91bbc78a6.js" crossorigin="anonymous"></script>
    <title>Elite Action</title>
</head>
<body>
    <a href="#" id="navbar-toggleBtn">
        <i class="fas fa-bars"></i>
    </a>
    <div id="banner">
        <img src="1.png" width="100%" height="8%">
    </div>
    <nav class="navbar">
        <div class="navbar-menu">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT US</a>
                    <ul class="dropdown">
                        <li><a href="teamMember.html">Meet Our Team</a></li>
                        <li><a href="schedule.html">Schedule</a></li>
                    </ul>
                </li>
                <li><a href="programs.html">PROGRAMS</a>
                    <ul class="dropdown">
                        <li><a href="TaeKwonDo.html">TKD/Fencing</a></li>
                        <li><a href="afterSchool.html">B4/AfterSchool</a></li>
                        <li><a href="camp.html">Seasonal Camps</a></li>
                        <li><a href="demoTeam.html">Elite Demo Team</a></li>
                        <li><a href="birthdayParty.html">Birthday Parties</a></li>
                    </ul>
                </li>
                <li><a href="gallery.html">GALLERY</a></li>
                <li><a href="inventory.html">INVENTORY</a></li>
                <li><a href="contact.html">CONTACT US</a></li>
            </ul>
        </div>
    </nav>
    <div class="content">
        <?php
        if (mysqli_num_rows($result) > 0) {
        ?>
        <table>
        
        <tr>
            <td>Item ID</td>
            <td>Name</td>
            <td>Description</td>
            <td>Quantity</td>
        </tr>
        <?php
        $i=0;
        while($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row["ID"]; ?></td>
            <td><?php echo $row["Item_Name"]; ?></td>
            <td><?php echo $row["Item_Description"]; ?></td>
            <td><?php echo $row["Quantity"]; ?></td>
        </tr>
        <?php
        $i++;
        }
        ?>
        </table>
        <?php
        }
        else{
            echo "No result found";
        }
        ?>
       
        
    </div>
    <div class="footer">
        <p><span>&copy;</span>All Rights Reserved.</p>
        <a href="https://www.facebook.com/EliteActionLorton/" target="_blank"><img src="https://img.icons8.com/material-outlined/24/000000/facebook-new.png"/></a>

    </div>
</body>
</html>