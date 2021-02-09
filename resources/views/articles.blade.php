<!DOCTYPE html>
<head>
	    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SG</title>
         
         <link href="{{ asset('assets/css/Bootstrap.min.css') }}" rel="stylesheet" media="all">  
         
         <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>


</head>
<body>
        <BR></BR>  

     <div class="container" >     
         <div class="card-deck">   
            @foreach($Datas as $data)
                    <div class="card">
                      
                       <img class="card-img-top" src="<!-- {{ url('Assets/img/'.$data->id.'.jpg')}} -->" alt="Card image cap">
                       
                        <div class="card-body">
                            <a href="#" class="stretched-link"></a>                    
                        </div>
                        <div class="card-footer">                          
                          {{$data->nom_article}}
                        </div>
                   </div> 
             @endforeach
         </div> 
		 </div> 
</body>
</html>
