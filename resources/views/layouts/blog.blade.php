@extends('index')
@section('content')
<div class="page-header">
    <h1>Blog</h1>
</div>
<div class="col-md-12">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
              <h3 >Cara partials view header, content, footer blade laravel</h3>
              <p><small>At : 10-10-2015</small>,<small>On : Laravel</small>,<small>Tag : Laravel</small></p>
            </div>
            <div class="panel-body">
              <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit..    
              </p>    
            </div>
            <div class="panel-footer">
                {!! HTML::link('/cara-partials-view-blader-laravel','Readmore',['class'=>'btn btn-info']) !!}
            </div>
        </div>
        <hr>
        <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 >Cara partials view header, content, footer blade laravel</h3>
                  <p><small>At : 10-10-2015</small>,<small>On : Laravel</small>,<small>Tag : Laravel</small></p>
                </div>
                <div class="panel-body">
                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit..    
                  </p>    
                </div>
                <div class="panel-footer">
                    {!! HTML::link('/cara-partials-view-blader-laravel','Readmore',['class'=>'btn btn-info']) !!}
                </div>
            </div>
        </div>
        
    @include('include.sidebar')

</div>

@endsection