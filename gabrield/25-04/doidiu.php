

<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}
textarea{
    background-color: #db2222;
    color: azure;
}

/* Style the header */
.header {
  background-color: #db2222;
  padding-top: 1px;
  text-align: center;
  font-size: 30px;
  height: 100px;
}

/* Container for flexboxes */
.row {
  display: -webkit-flex;
  display: flex;
}

/* Create three equal columns that sits next to each other */
.column {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  padding: 10px;
  height: 400px; /* Should be removed. Only for demonstration */
}
.mid {
  background-color: #ff9494;
  height: 300px;
 
  padding:10px ;

}

/* Style the footer */
.footer {
  background-color: #ba4040;
  padding: 10px;
  text-align: center;
  
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px ) {
  .row {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
}
</style>
</head>
<body>



<div class="header">
  <h2>Header</h2>
</div>

<div class="row">
  <div class="column" style="background-color:#ff0000;">Column</div>
  <div class="column" style="background-color:#690704;">Column</div>
  <div class="column" style="background-color:#ff0000;">Column</div>
  <div class="column" style="background-color:#690704;">Column</div>
</div>

<div class="mid"> Area de texto: 
    <textarea name="texto" id="" cols="177" rows="15"></textarea>
</div>

<div class="footer">
  <p>Footer</p>
</div>

</body>
</html> 

