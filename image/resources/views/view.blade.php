@foreach($posts as $post)
<form action="{{route('reserve')}}">
<div class='container'>
    <div class="card-group">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <div class="card">
            <div class="card-body">
                <?php
                $img2=$post['file'];
                 echo "<img src='/images/".$img2."' class='img-fluid'>";
                ?>
                
            </div>
        </div>
        <div class="card">
            <div class="card-body text-center">
                <h4 class="card-text">{{ $post['description'] }}</h4>
                <i>
                    <h5 class="card-text">{{ $post['venue'] }}</h5>
            </div>
        </div>
        
        <div class="card">
            <div class="card-body text-center" style='height:300px;'>
                <h3 class="display-1">{{ $post['id'] }}</h3>
                <button class="btn btn-primary">reserve</button>

             
            </div>
        </div>
    </div>
</div>
</div>
</form>
<br>
@endforeach