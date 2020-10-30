<!DOCTYPE html>
<html>
<style>

body {font-family: Arial, Helvetica, sans-serif;}

nav{
  height: 10vh;
  
}
.navl{
  display: flex;
  list-style: none;
  width: 100%;
  background: none;
  height: 1%;
  transform-origin: top-right;
  justify-content: space-around;
  align-items: center;
  margin-left: auto;
}
.navl li a{
  color: #000;
  text-decoration: none;
  font-size: 22px;

}
.hello ul{
    padding-top: 20px;
    float: center;
    text-align: center;
}
.hello ul li{
    display: inline-block;
    padding: * 1px 2px;
}
.hello ul li a{
    text-decoration: none;
    color: #fff;
    padding: 3px 30px;
    border-bottom: 1px solid #fff;
}
.hello ul li a:hover{
   border-bottom: 4px solid #fff;
   font-size: 28px;

}
</style>
<body>

  <nav class="hello">
      <ul class="navl">
        <form method="GET" action="http://news.google.com/search">
        <li><a href="#">Home</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="about.php">About us</a></li>
        <input placeholder="search the news from here" TYPE=text name=q maxlength=255 value="" >
    <input TYPE=hidden name=hl value="en"  >
    <input style="width: 100px;" type=submit name=btnG VALUE="Search" ></form>
      </ul>
    </nav>

</div>
</body>
</html>