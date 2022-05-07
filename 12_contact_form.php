<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="text" name="Name" placeholder="Name" id="username"><br>
        <input type="text" name="Email" placeholder="Email"> <br>
        <input type="text" name="Message" placeholder="Message">
        <input type="submit" value="SAVE" name="save" id="save">
    </form>
    
</body>
<script src="https://smtpjs.com/v3/smtp.js">
</script>
<script>
var saveBtn=document.querySelector("#save");
// var username=document.querySelector("#username");
saveBtn.addEventListener("click",(e)=>{
    e.preventDefault()

    Email.send({
    Host : "smtp.gmail.com",
    To : 'mugerwaobadiah96@gmial.com',
    From : "TestContactForm.com",
    Subject : "This is the subject",
    Body : "And this is the body"
}).then(
  message => alert("sent")
);
})
</script>
</html>
