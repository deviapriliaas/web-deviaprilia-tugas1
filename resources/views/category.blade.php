
<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
body{
    background-color:#ff4;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
h2{
    color:#f79;
    text-align:center;
}
footer {
  position: fixed;
  left: 0;
  bottom: 0;
  height:10%;
  width: 100%;
  background-color: red;
  color: white;
  text-align: center;list-style-type: none;
  background-color: #333;

}
table, th, td {
  border: 1px solid white;
  text-align:center;
  width:auto;
  background-color:#f34;
  padding:10px;
  margin:20px;
  color:white;
}

</style>
</head>
<body>

<ul>
  <li><a  href="#home">Home</a></li>
  <li><a class="active"  href="#news">Category</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
<div>
<h2> DEVI APRILIA AYU SANTOSO</h2>
<h2> 4 SI B - 173140914111058 </h2>
</div>
<div>
<h3>Data kategori</h3>
    <table>
    <tr style="border:3px black">
        <td>No</td>
        <td>Nama Category</td>
        <td>Id Category</td>
    </tr>
 @foreach($categories as $user)

   <tr>
       <td>{{ $user->id }}</td>
       <td>{{ $user->name_category }}</td>
       <td>{{ $user->id_category }}</td>
   </tr>
   @endforeach 
    </table>
</div>
<footer> tugas 1- website-Pak Fatoni-2019</footer>
</body>
</html>

