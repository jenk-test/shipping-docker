<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        @if(session('submitted'))
            <div class="alert alert-success">
                {{ @session('submitted') }}
            </div>
        @endif
        <div class="col-md-4 col-lg-offset-4">
            <h1>Test Form</h1>
        </div>

        <div class="competition-form">
            <div class="col-md-12">
                <div class="row">
                    {!! Form::open(['route'=> "form.post",'id' => 'create-form', 'class' => 'form-horizontal form', 'files'=> true]) !!}
                    <div class="form-group">
                        {!! Form::label('name','Name',array('class' =>'control-label col-xs-3')) !!}
                        <div class="col-xs-9">
                            {!! Form::text('name', null, ['class' => 'w-input text-field form-control','required'=>'required', 'placeholder' => 'competition name']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('description','Description',array('class' =>'control-label col-xs-3')) !!}
                        <div class="col-xs-9">
                            {!! Form::textarea('description', null, ['class' => 'w-input text-field form-control','required'=>'required', 'placeholder' => 'competition description', 'rows' => 5]) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('seo_title','SEO Title',array('class' =>'control-label col-xs-3')) !!}
                        <div class="col-xs-9">
                            {!! Form::text('seo_title', null, ['class' => 'w-input text-field form-control','required'=>'required', 'placeholder' => 'Maximum of 60 chars for the title.']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('seo_description','SEO Description',array('class' =>'control-label col-xs-3')) !!}
                        <div class="col-xs-9">
                            {!! Form::textarea('seo_description', null, ['class' => 'w-input text-field form-control','required'=>'required', 'placeholder' => 'maximum of 160 chars for the description.', 'rows' => 5]) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('alias','Alias',array('class' =>'control-label col-xs-3')) !!}
                        <div class="col-xs-9">
                            {!! Form::text('alias', null, ['class' => 'w-input text-field form-control','required'=>'required', 'placeholder' => 'Maximum of 60 chars for the alias.']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('alias_description','Alias Description',array('class' =>'control-label col-xs-3')) !!}
                        <div class="col-xs-9">
                            {!! Form::textarea('alias_description', null, ['class' => 'w-input text-field form-control','required'=>'required', 'placeholder' => 'maximum of 160 chars for alias description.', 'rows' => 5]) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('keywords','Keywords',array('class' =>'control-label col-xs-3')) !!}
                        <div class="col-xs-9">
                            {!! Form::text('keywords', null, ['class' => 'w-input text-field form-control','required'=>'required', 'placeholder' => 'Keywords - separate by commas']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('remarks','Remarks',array('class' =>'control-label col-xs-3')) !!}
                        <div class="col-xs-9">
                            {!! Form::textarea('remarks', null, ['class' => 'w-input text-field form-control', 'placeholder' => 'maximum of 160 chars for remarks.', 'rows' => 5]) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('remarks1','Remarks 1',array('class' =>'control-label col-xs-3')) !!}
                        <div class="col-xs-9">
                            {!! Form::textarea('remarks1', null, ['class' => 'w-input text-field form-control', 'placeholder' => 'maximum of 160 chars for remarks.', 'rows' => 5]) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('remarks2','Remarks 2',array('class' =>'control-label col-xs-3')) !!}
                        <div class="col-xs-9">
                            {!! Form::textarea('remarks2', null, ['class' => 'w-input text-field form-control', 'placeholder' => 'maximum of 160 chars for remarks.', 'rows' => 5]) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('remarks3','Remarks 3',array('class' =>'control-label col-xs-3')) !!}
                        <div class="col-xs-9">
                            {!! Form::textarea('remark3 ', null, ['class' => 'w-input text-field form-control', 'placeholder' => 'maximum of 160 chars for remarks.', 'rows' => 5]) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('is_active', 'Activate?', array('class' =>'control-label col-xs-3') ) !!}
                        <div class="col-xs-9">
                            {!! Form::checkbox('is_active') !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('is_form', 'Link Form?', array('class' =>'control-label col-xs-3') ) !!}
                        <div class="col-xs-9">
                            {!! Form::checkbox('is_form') !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('featured', 'Featured?', array('class' =>'control-label col-xs-3') ) !!}
                        <div class="col-xs-9">
                            {!! Form::checkbox('featured') !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-offset-2 col-xs-9">
                            {!! Form::submit('Submit', ['class'=> 'btn btn-primary']) !!}

                        </div>
                    </div>


                    {!! Form::close() !!}
                </div>

            </div>
        </div>
            </div>
    </body>
</html>
