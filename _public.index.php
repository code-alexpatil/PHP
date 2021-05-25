<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rest Api Call</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <style>
        
        form{
            margin: 100px;
        }
        .inputs input, textarea{
            margin-top: 15px;
            padding: 5px;
        }

    </style>
</head>
<body>
    
    <form action="" method="post" class="form">
        <h2>Send Data Backend Server Using Ajax</h2>
        <div class="inputs">
            
            <input type="text" name="oid" id="oid" placeholder="enter your oid" />
            <br>
            
            <input type="text" name="name" id="name" placeholder="enter your name" />
            <br>
            
            <textarea name="comment" id="comment" placeholder="enter your comment"></textarea> 
            <br>
            
            <input type="submit" name="submit" value="post data" id="postdata" />
            
        </div>

        
    </form>
    
    <script>
        $(document).ready(function(){
            
            $("#postdata").click(function(ex) {
            
                ex.preventDefault();
                
                var oid = $("#oid").val();
                var name = $("#name").val();
                var comment = $("#comment").val();
        
                //create object
                var obj = { "oid": oid, "name": name, "comment": comment };
                
                //show json type data
                console.log(obj);
                
                //create strinfy data
                var myJSON = JSON.stringify(obj);
                
                
                //make ajax request
                $.ajax({
                    url: '_public.api.php',
                    method: 'POST',
                    data: myJSON,
                    success: function(xhr){
                        if(xhr.status == true){
                            console.log(xhr.message);
                        } else {
                            console.log(xhr.message);
                        }
        
                    },
                
                });                
                
                
            
            });
            
        })
    </script>
    
</body>
</html>