<h1 class="page-header">Brn List
    <div class="pull-right">
        <a href="javascript:ajaxLoad('brn/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> New</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('brn_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('brn/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('brn/list')}}?ok=1&search='+$('#search').val())"><i
                        class="glyphicon glyphicon-search"></i>
            </button>
        </div>
    </div>
</div>
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th width="50px" style="text-align: center">No</th>
        <th>
            <a href="javascript:ajaxLoad('brn/list?field=name&sort={{Session::get("brn_sort")=="asc"?"desc":"asc"}}')">
                Name
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('brn_field')=='name'?(Session::get('brn_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('brn/list?field=BrnCode&sort={{Session::get("brn_sort")=="asc"?"desc":"asc"}}')">
                Brn Code
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('brn_field')=='BrnCode'?(Session::get('brn_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('brn/list?field=testfield&sort={{Session::get("brn_sort")=="asc"?"desc":"asc"}}')">
                Brn Code
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('brn_field')=='testfield'?(Session::get('brn_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('brn/list?field=unitprice&sort={{Session::get("brn_sort")=="asc"?"desc":"asc"}}')">
                Unitprice
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('brn_field')=='unitprice'?(Session::get('brn_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th width="140px">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($brns as $key=>$brn)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$brn->name}}</td>
            <td>{{$brn->BrnCode}}</td>
            <td>{{$brn->testfield}}</td>
            <td align="right">$ {{$brn->unitprice}}</td>
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('brn/update/{{$brn->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('brn/delete/{{$brn->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$brns->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$brns->total()}} records
    </i>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>