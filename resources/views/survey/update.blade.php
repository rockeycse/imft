<h2 class="page-header">Edit Survey</h2>
{!! Form::model($survey,["id"=>"frm","class"=>"form-horizontal"]) !!}
@include("survey._form")
{!! Form::close() !!}