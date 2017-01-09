<h2 class="page-header">Edit Area</h2>
{!! Form::model($area,["id"=>"frm","class"=>"form-horizontal"]) !!}
@include("area._form")
{!! Form::close() !!}