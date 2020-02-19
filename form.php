<?php include('connection.php');
?>


<script>  
    function validateemail() {
        var x = document.myform.email.value;
        var atposition = x.indexOf("@");
        var dotposition = x.lastIndexOf(".");
        if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= x.length) {
            alert("Please enter a valid e-mail address ");
            return false;
        }
        else{
            
            alert("Insert Email Successfully");

        }
    }  
</script>



<body>
    <form name="myform" method="post" action="form.php" onsubmit="return validateemail();">
       
        <h1>Contact Us</h1>
        <p> Got a question? We'd love to hear from you. Send us a message and we will respond as soon as possible. </p>
       
        Select Gender:
        <label>
            <input type="radio" name="gender" value="male">Male</label>
        <label>
            <input type="radio" name="gender" value="female">Female</label>
        
        <br/>
        <label for="name"> Your Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>"    required>

        <br/>

        Email:
        <input type="text" name="email" value="<?php echo $email; ?>"   >
        <br/>
        <label for="message"> Message:</label>
        <textarea class="form-control" type="textarea" id="message" name="message" maxlength="6000" rows="7" value="<?php echo $message; ?>"  required></textarea>



        <input type="submit" name="register" value="register">
  




    </form>