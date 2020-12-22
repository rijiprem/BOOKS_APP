<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books App</title>
</head>
<body>
   <h1>Details Of Books</h1> 
   <table class="table table-borderless">
       <tr>
           <td>BOOK NAME</td>
           <td><input id="bname" type="text" class="form-control"></td>
       </tr>
       <tr>
           <td>AUTHOR</td>
           <td><input id="author" class="form-control"></input></td>
       </tr>
       <tr>
           <td>PUBLISHER</td>
           <td><input id="publisher" type="text" class="form-control"></td>
       </tr>
       <tr>
           <td>DISTRIBUTER</td>
           <td><input id="distributer" type="text" class="form-control"></td>
       </tr>
       <tr>
           <td>PRICE</td>
           <td><input id="price" type="text" class="form-control"></td>
       </tr>
       <tr>
           <td></td>
           <td><button onclick="mybuttonclick()" class="btn btn-danger">SUBMIT</button></td>
       </tr>
   </table>
   <script>
        function mybuttonclick()
        {

            var getBookName=document.getElementById("bname").value
            var getAuthorName=document.getElementById("author").value
            var getPublisherName=document.getElementById("distributer").value
            var getPrice=document.getElementById("price").value
            console.log(getBookName)
            console.log(getAuthorName)
            console.log(getPublisherName)
            console.log(getPrice)
        }
   </script>
</body>
</html>