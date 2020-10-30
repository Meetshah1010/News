<!DOCTYPE html>    
<html>    
<head>    
<meta name="viewport" content="width=device-width, initial-scale=1">    
<style>    
* {    
  box-sizing: border-box;    
}    
    
input[type=text], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
input[type=email], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
    
label {    
  padding: 12px 12px 12px 0;    
  display: inline-block;    
}    
    
input[type=submit] {    
  background-color: rgb(37, 116, 161);    
  color: white;    
  padding: 12px 20px;    
  border: none;    
  border-radius: 4px;    
  cursor: pointer;    
  float: right;    
}      
.container {    
  border-radius: 5px;    
  background-color: #f2f2f2;    
  padding: 20px;    
}        
</style>    
</head>    
<body>    
<h2>FEED BACK FORM</h2>    
<div class="container">    
  <form>        
    <label for="fname">First Name</label>   
    <input type="text" id="fname" name="firstname" placeholder="Your name.."required>     
    <label for="lname">Last Name</label>      
    <input type="text" id="lname" name="lastname" placeholder="Your last name.."required>    
    <label for="email">Mail Id</label>        
    <input type="email" id="email" name="mailid" placeholder="Your mail id.."required>        
    <label for="country">Country</label>      
    <select id="country" name="country">    
      <option value="none">Select Country</option>    
      <option value="australia">Australia</option>    
      <option value="canada">Canada</option>    
      <option value="usa">USA</option>    
      <option value="russia">Russia</option>    
      <option value="japan">Japan</option>    
      <option value="india">India</option>    
      <option value="china">China</option>    
    </select>    
    <label for="feed_back">Feed Back</label>    
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"required></textarea>    
      <input type="submit" value="Submit">    
  </form>    
</div>    
</body>
</html>