<html>
<title>form</title>
<head><link rel="stylesheet" href="./css/bootstrap.min.css">
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 6px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</head>
<body>
<div class="container">
<legend>Join Us Today!</legend>
<div align=right>
<a href="form.html" class=button>Home</a></div><br>
<p><b>
First Name: <?php echo $_POST["first_name"]; ?><br><br>
Last Name: <?php echo $_POST["last_name"]; ?><br><br>
Gender: <?php echo $_POST["Gender"]; ?><br><br>
Email address: <?php echo $_POST["email"]; ?><br><br>
Phone: <?php echo $_POST["phone"]; ?><br><br>
Address: <?php echo $_POST["address"]; ?><br><br>
City: <?php echo $_POST["city"]; ?><br><br>
State/Union Territory: <?php echo $_POST["state"]; ?><br><br>
Zip Code: <?php echo $_POST["zip"]; ?><br><br>
Website or domain name: <?php echo $_POST["website"]; ?><br><br>
</b>
</p>
<div class="alert alert-success" role="alert" id="success_message"><big>Successfuly uploaded <i class="glyphicon glyphicon-thumbs-up"></i><br>  We will POST back to you shortly.</div>
</div>
</body>
</html>