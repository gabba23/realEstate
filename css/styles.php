
<?php
    header("Content-type: text/css; charset: UTF-8");

    require_once('../includes/db.php'); 
    $query = "SELECT hero_image FROM  hero";
$select_all_hero_query = mysqli_query($connection, $query);

$row = mysqli_fetch_assoc( $select_all_hero_query)

$hero_image = $row['hero_image'];


          
?>


#hero {
    background: url('includes/<?php echo $hero_image; ?>') center center no-repeat;
    background-size: cover;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    height: 100%;
    width: 100%;
}

#hero .fade {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: rgba(52, 58, 64, 0.9);
    z-index: 1;
}

#hero .hero-text {
    position: absolute;
    top: 50%;
    margin: -75px auto 0;
    left: 0;
    right: 0;
    z-index: 2;
    color: #fff;
    width: 500px;
    text-align: center;
}

#hero .hero-text p {
    line-height: 1.5em;
    font-weight: 300;
    font-size: 1rem;
}
/* end: hero section styles */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
body{
    font-family: 'Poppins', sans-serif;
}
.wrapper{
  width:1200px;
  margin:100px auto;
}
.blog{
  display:flex;
  flex-wrap:wrap;
  justify-content:space-between
}
.single-blog{
  flex-basis:390px;
  border:1px solid #eee;
}
.blog-img{
  position:relative;
  overflow:hidden;
}
.blog-img img{
  width:100%;
  transition:.3s;
}
.single-blog:hover .blog-img img{
  transform:scale(1.1)
}
.blog-img a{
  position:absolute;
  left:0;
  top:0;
  color:#fff;
  text-decoration:none;
  text-transform:capitalize;
  font-size:18px;
  background-color:#ff7720;
  padding:10px 30px;
}
.blog-info{
  width:80%;
  margin:0 auto;
  border:1px solid #ccc;
  position:relative;
  z-index:2;
  margin-top:-30px;
  padding:10px 5px;
  background-color:#fff;
  text-align:center;
}
.blog-info a{
  color:#333;
  text-decoration:none;
  margin:0 10px;
  display:inline-block
}
.blog-content{
  padding:20px;
}
.blog-content h4{
  font-size:22px;
  font-weight:600;
  text-transform:capitalize;
  border-bottom:1px dashed #eee;
  margin-bottom:10px;
  padding-bottom:5px;
}
.blog-content a{
  background-color:#ff7720;
  color:#fff;
  text-decoration:none;
  padding:10px 20px;
  font-size:16px;
  text-transform:capitalize;
  display:inline-block;
  margin-top:20px;
  position:relative;
  z-index:2;
  overflow:hidden;
}
.blog-content a:before{
  position:absolute;
  width:100%;
  height:100%;
  left:-100%;
  top:0;
  background-color:#333;
  content:"";
  transition:.3s;
  z-index:-1;
}
.blog-content a:hover:before{
  left:0;
}