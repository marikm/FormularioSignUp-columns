<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp | Email</title>
    <link rel="stylesheet" href="./signup-style.css">
</head>
<body>
    <header>
        <h1>Email Sign Up Form</h1>
        <p>We would love to be in touch with you!! Please signup to receive emails from us!</p>
    </header>
    <main>
    <label class="linha" for="civil-st">Name</label>
        <div class="linha">
            <div class="col">
                <input type="text" id="civil-st" name="civil-st"/><br>
                <label class="sublinha" for="civil-st">Mr/Mrs/Ms</label>
            </div>
            <div class="col">
                <input type="text" id="name" name="name"/><br>
                <label class="sublinha" for="name">First Name</label>
            </div>
            <div class="col">
                <input type="text" id="lname" name="lname"/><br>
                <label class="sublinha" for="lname">Last Name</label>
            </div>
        </div>
        <div class="col">
            <label for="email">Email</label>
            <input type="email" id="email" name="email"/>
        </div>
        <div class="col">
            <label for="phone">Phone</label>
            <input type="tel" name="phone" id="phone">
        </div>

    <label class="linha" for="adress">Adress</label>
        <div class="col">
            <input type="text" name="adress" id="adress"/><br>
            <label class="sublinha" for="adress">Street Adress</label>
        </div>
        <div class="col">
            <input type="text" name="adress2" id="adress2"/><br>
            <label class="sublinha" for="adress2">Street Adress Line 2</label>
        </div>
        <div class="linha">
            <div class="col">
                <input type="text" name="city" id="city"/><br>
                <label class="sublinha" for="city">City</label>    
            </div>
            <div class="col">
                <input type="text" name="state" id="state"/><br>
                <label class="sublinha" for="state">State/province</label>    
            </div>
        </div>
        <div class="col">
            <input type="text" name="zipcode" id="zipcode"/><br>
            <label class="sublinha" for="adress2">Postal/Zipcode</label>
        </div>
        <label class="linha" for="textbox">Comments, Questions, or Sugestions</label>
        <div class="col">
            <textarea name="textbox" id="textbox" cols="30" rows="10"></textarea>
        </div>
    
    </main>

</body>
</html>