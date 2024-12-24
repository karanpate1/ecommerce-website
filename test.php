


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="test.css">
</head>
<body>
<div class="container">
<form action="#" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">Product name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="name" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Product price</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="price" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        
      </div>
      <div class="col-75">
        <!-- <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select> -->
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Product discription</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="discription" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Product image</label>
      </div>
      <div class="col-75">
      <input type="file" name="uploadfile">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit" name="submit">
    </div>
  </form>
</div>


</body>
</html>