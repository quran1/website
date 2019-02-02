<!DOCTYPE html>
<html dir="rtl">
<head>
	<title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


	<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
<link rel="stylesheet" href="style_css.css" />

<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script>
</head>
<body>
<center>


<img src="logo.png" height="400px" width="300px"><br>

<a href="login.php"><button type="button" class="btn btn-warning">دخول صفحة الإدارة</button></a>
<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
    <h3 class="uk-card-title"><b>الرجاء إدخال بياناتك</b></h3>
    
    <form>



  <div class="uk-margin">
        <div class="uk-inline">
            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user" ></span>
            <input class="uk-input" type="text" placeholder="الاسم الثلاثي مع القبيلة">
           
        </div>
        <br><br>
        <div class="uk-inline">
           
            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: phone" ></span>
            <input class="uk-input" type="text" placeholder="رقم الهاتف"><br>
        </div>
    </div>


  <div class="uk-margin" uk-margin>
      <div uk-form-custom="target: true">
          <input type="file">
          <input class="uk-input uk-form-width-medium" type="text" placeholder="اختر ملف" disabled>
      </div><br>
      <button class="uk-button uk-button-default"><b>إرسال</b></button>
  </div>

    </form>





</div>


<br>


</center>









   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  
</body>
</html>