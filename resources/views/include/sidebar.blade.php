<div class="col-md-4">
    <div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Search</h3>
        </div>
        <div class="panel-body">
        {!! Form::open(['url' => 'foo/bar', 'method'=>'GET']) !!}
        {!! Form::text('search','Search',['class'=>'form-control']) !!}
        {!! Form::close() !!}
        </div>
    </div>

    <div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Recent Post</h3>
        </div>
        <div class="panel-body">
        <ul class="list-group">
            <li class="list-group-item">{!! HTML::link('/cara-partials-view-blader-laravel','Cara partials view header, content, footer blade laravel') !!}</li>
            <li class="list-group-item">{!! HTML::link('/cara-partials-view-blader-laravel','Cara partials view header, content, footer blade laravel') !!}</li>
            <li class="list-group-item">{!! HTML::link('/cara-partials-view-blader-laravel','Cara partials view header, content, footer blade laravel') !!}</li>
            <li class="list-group-item">{!! HTML::link('/cara-partials-view-blader-laravel','Cara partials view header, content, footer blade laravel') !!}</li>
            <li class="list-group-item">{!! HTML::link('/cara-partials-view-blader-laravel','Cara partials view header, content, footer blade laravel') !!}</li>
          </ul>    
        </div>
    </div>
</div>