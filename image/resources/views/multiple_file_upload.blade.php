    <!DOCTYPE html>

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https:ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Multiple Upload Image</title>
<style>
textarea { 
    width: 300px;
    height:80px; 
    margin-left:50px;
}

placeholder { /* Mozilla Firefox 19+ */
    line-height:600px;
}
.panel-body{
margin-left:400px;
}

</style>   

 </head>
    <body>
    <div class="container">
    <br/>
    <h3 align='center'> multiple image</h3>
    <br/>
    <div class="panel panel-default">
    <div class="panel-heading">
    <h3>UPLOAD  Multiple image</h3>
    </div>
    <div class="panel-body">
    <br />
    <form method ="post" action="{{route('upload')}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
    <div class="col-md-6" >
    <label >VENUE</label>
    <input type="text" name=venue ><br><br>
    <label >DESCRIPTION</label>
    <textarea rows="4" cols="50" name=description placeholder="Describe here..."> </textarea><br><br>
    <input type="file" name="file[]" id="file" accept="image/*" multiple style='margin-left:60px;'/><br><br>
    <input type="submit" name="upload" value="upload" class="btn-btn-sucess" style='magin-left:60px;'/>
    </div>
    </div>      
    </div>
    </form> 
    <br/>

    </div>
    </div>
    <br/>
    <div id="sucess" class="row "></div>
    <br/>
    </div>
    </div>
    </div>
    </body>
    </html>
    <script>
    $(document).ready(function(){
    $('form').ajaxForm({
        beforeSend:function(){
            $('#sucess').empty();
        },
    
        sucess:function(data)
        {
            if(data.sucess){
                $('#sucess').html('<div class="text-sucess text-center"<b>'+data.sucess+'</b></div><br/></br>');
            }
            }
    });

    });

    </script>

   