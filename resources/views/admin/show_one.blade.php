@extends('template2')
@section('style')

    <style>

@import url('https://fonts.googleapis.com/css?family=Merriweather|Open+Sans');

.container{
  display: flex;
  justify-content: center;
  padding: 80px;
}

.square:hover {
    -webkit-transform: translate(20px, -10px);
    -ms-transform: translate(10px, -10px);
    transform: translate(10px, -10px);
    -webkit-box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
     }


.square{
  width: auto;
	height: auto;
	background: white;
  border-radius: 4px;
  box-shadow: 0px 20px 50px #D9DBDF;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease; 
}

.mask{
  clip: rect(0px, 460px, 220px, 0px);
  border-radius: 4px;
  position: absolute;
}

img{
  width: 460px;
  }

.h1{
  margin: auto;
  text-align: left;
  margin-top: 240px;
  padding-left: 30px;
  
  font-family: 'Merriweather', serif;
  font-size: 24px;
}
p{
 text-align: justify; 
 padding-left: 30px;
 padding-right: 30px;
 font-family: 'Open Sans', sans-serif;
 font-size: 12px;
 color: #C8C8C8;
 line-height: 18px;
}

.button {
    background-color: #3EDD84;
    color: white;
    width: 90px;
    padding: 10px 18px;
    border-radius: 3px;
    text-align: center;
    text-decoration: none;
    display: block;
    margin-top: 20px;
    margin-left: 30px;
    margin-right: 70px;
    font-size: 12px;
    cursor: pointer;

    font-family: 'merriweather';
}
    </style>

@endsection
@section('body')

<div class="page-wrapper">
    <div class="page-content " >
       
        <div class="row">
            <div class="starter-template">
                @if(session()->has('success'))
                    <p class="alert alert-success">{{ session()->get('success') }}</p>
                @endif
                @if(session()->has('warning'))
                    <p class="alert alert-warning">{{ session()->get('warning') }}</p>
                @endif
                
        </div>
      
            <div class="container" >
                <div class="square">
                <img src="https://images.unsplash.com/photo-1504610926078-a1611febcad3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e1c8fe0c9197d66232511525bfd1cc82&auto=format&fit=crop&w=1100&q=80" class="mask">
            <div class="h1">{{ $article->article_theme }}</div>
          <br>
                        @foreach ($article->get_tag() as $item)
                      
                       <button type="button" class="btn btn-secondary btn-lg" disabled>{{  $item->name}}</button>
                        @endforeach
                            <br>
                <p>{{ $article->article_body }}</p>
                
       
                </div>

                </div>

            </div>
   
        
        
       
        <div class="card radius-10">
                 <div class="card-body">

                    <div class="">
                 
                        <form class="row g-3" method="post" action="{{ route('store_comment') }}">
                            @csrf
                
                            <div class="col-md-7">
                                <label for="message_body" class="form-label">Comment Theme</label>
                                <input type="text" name="comment_theme" class="form-control" id="message_body">
                            </div>
                            <br>

                                <div class="col-md-7">
                                    <label for="article_body" class="form-label">Comment body</label>
                                    <textarea class="form-control"  id="description" name="comment_body" rows="8"></textarea>
                                </div>
                                
                           
                            <br>
  
                            <br>
                            <div class="col-7">
                                <button type="submit" class="btn btn-primary px-5">Comment</button>
                            </div>
                        </form>
                    </div>
                 </div>
            </div>
        </div>
   </div>
</div>

@endsection