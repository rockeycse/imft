<h2 class="page-header">Edit Loan</h2>
{!! Form::model($loan,["id"=>"frm","class"=>"form-horizontal"]) !!}
@include("loan._form")
{!! Form::close() !!}