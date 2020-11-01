
?><?php
session_start();
if (!isset($_SESSION["pseudonyme"])) {
    echo"helloo";
    header("Location: login.php");
    exit();
}
?>
body{
margin: auto;
padding: 0;
position: page;
background-image: url("http://www.vivrealamorlaye.fr/blog/wp-content/uploads/2018/03/maintenance_web.jpg");
height: 500px;
background-position: center;
background-repeat: no-repeat;
background-size: 1500px 500px;
background-attachment: fixed;




}
body.bag{
position: relative;
background-image: url("http://www.vivrealamorlaye.fr/blog/wp-content/uploads/2018/03/maintenance_web.jpg");
height: 200px;
background-position: center;
background-size: cover;
}
.container{
width: 100%;
height: 300px;

background-image: url("https://media.istockphoto.com/photos/two-empty-wine-glasses-sitting-in-a-restaurant-on-a-warm-sunny-picture-id1018141890?k=6&m=1018141890&s=612x612&w=0&h=_OmlYECOxfO-VHY3eIzuJSPRXUXiFbeHHp3RUZGQoSQ=");
background-position: center;
/* background-size: auto;*/
background-repeat: no-repeat;


}
.navbar img{

border-radius: 50%;
}
/* position: fixed;
top: 10px;
left: 50px;
border-radius: 50%;*/

