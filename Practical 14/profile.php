<?php
include('connection.php'); 
include('navbar1.php');
        $sql = "SELECT title,data FROM news";
        $result = $conn->query($sql);
        if($result->num_rows > 0)
        {
          while($row = $result->fetch_assoc())
          {
              echo '<h5 style=font-size:70px;border-style:solid;border-radius:5px;border-color:red;>'.$row['title'];
              echo '</h5>';
              echo '<p style=font-size:20px;> '.$row['data'];
              echo '</p>'; 
          }
        }
      ?>
<html>
    <head>
      <title>Practical 14</title>
    
  <style> 
            div 
            {
              width: 100%;
              height: 35px;
              padding: 20px;
              font-size: 25px;
              background-color: darkcyan;
              color: white;
              border-radius: 3px;
              border: 1px solid cyan;
            }
            div:hover
            {
              animation-name: example;
              animation-duration: 2s;
            }
            a
            {
                text-decoration: none;
            }
            @keyframes example 
            {
              from {background-color: darkcyan; color: white;}
              to {background-color: cyan; color: navy;}
            }
        </style>
    </head>
<body>
<a href="about.php"><div>About us</div></a>
<a href="contact.php"><div>Contact us</div></a>
<a href="feedback.php"><div>Feedback</div></a>
</body>
</html>
