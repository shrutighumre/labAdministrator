<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Profile</title>
  <link rel="stylesheet" href="../assests/css/style.css">
  <!-- <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script> -->
</head>

<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
    font-family: 'Times New Roman', Times, serif;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size:20px;
  min-height: 100vh;
  /* background: linear-gradient(#03a9f4, #03a9f4 45%, #fff 45%, #fff 100%); */
}

.card {
  position: relative;
  width: 400px;
  height: 530px;
  background: #fff;
  border-radius: 10px;
  background: rgba(255, 255, 255, 0.1);
  border-top: 1px solid rgba(255, 255, 255, 0.5);
  backdrop-filter: blur(15px);
  box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
}

.img-bx {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 10px;
  overflow: hidden;
  transform: translateY(30px) scale(0.5);
  transform-origin: top;
}

.img-bx img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.content {
  position: absolute;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: flex-end;
  padding-bottom: 30px;
}

.content .detail {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
}

.content .detail h2 {
  color: #444;
  font-size: 1.6em;
  font-weight: bolder;
}

.content .detail h2 span {
  font-size: 0.7em;
  color: #03a9f4;
  font-weight: bold;
}

.sci {
  position: relative;
  display: flex;
  margin-top: 5px;
}

.sci li {
  list-style: none;
  margin: 4px;
}

.sci li a {
  width: 45px;
  height: 45px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  background: transparent;
  font-size: 1.5em;
  color: #444;
  text-decoration: none;
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  transition: 0.5s;
}

.sci li a:hover {
  background: #03a9f4;
  color: #fff;
}
</style>
<body>
  <div class="card">
    <!-- <div class="img-x"> -->
        <center>
            <br><br>
      <img src="https://cdn1.iconfinder.com/data/icons/school-education-25/614/4064_-_Studying_on_Laptop-512.png" width="80" height="80" alt="img" />
    <!-- </div> -->
</center>
<div style="margin: 20px;">
    
    <p style="padding: 10px;">ID : </p>

    <hr>
    <p style="padding: 10px;">Name : </p>
    
    <hr>
    <p style="padding: 10px;">Std : </p>
    <hr>
    <p style="padding: 10px;">Roll No : </p>
    <hr>
    <p style="padding: 10px;">EmailID : </p>
    <hr>
    <p style="padding: 10px;">MobileNO : </p>
    <hr>
    
    <center style="margin-top: 10px;"><button  onclick="back()"  class="btn" style="transform: scale(0.8); margin: 0;">Back</button></center>

</div>
   
  </div>
</body>
<script>
    function back(){ window.history.back();}
</script>
</html>