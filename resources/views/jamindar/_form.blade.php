<div class="col-md-12">

    <div id="exTab2" class="">

        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#1" data-toggle="tab">১ম জামিনদারের তথ্য</a>
            </li>

            <li>
                <a href="#2" data-toggle="tab">২য় জামিনদারের তথ্য</a>
            </li>

        </ul>

        <div class="tab-content ">

            <div class="tab-pane active" id="1">

                <div class="col-md-12">

                    <div class="box box-header">
                        <h5 class="col-md-offset-1">নাম</h5>
                    </div>

                    <div class="form-group required col-md-6" id="form-JamindarNameTitle-error">
                        {!! Form::label("JamindarNameTitle","নামের টাইটেল:",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("JamindarNameTitle",['1' => 'Mr', '2' => 'Mrs', '3' => 'Mss'])!!}
                            <span id="JamindarNameTitle-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-JamindarFirstName-error">
                        {!! Form::label("JamindarFirstName","১ম নাম",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("JamindarFirstName",null,["class"=>"form-control required"]) !!}
                            <span id="JamindarFirstName-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-JamindarLastName-error">
                        {!! Form::label("JamindarLastName","২য় নাম",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("JamindarLastName",null,["class"=>"form-control required"]) !!}
                            <span id="JamindarLastName-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-JamindarFamilyName-error">
                        {!! Form::label("JamindarFamilyName","পারিবারিক নাম:",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("JamindarFamilyName",null,["class"=>"form-control required"]) !!}
                            <span id="JamindarFamilyName-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-JamindarAge-error">
                        {!! Form::label("JamindarAge","বয়স(বছর)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("JamindarAge",['18', '19','20','21','22','30','30'])!!}
                            <span id="JamindarAge-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-JamindarEducation-error">
                        {!! Form::label("JamindarEducation","শিক্ষাগত যোগ্যতা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("JamindarEducation",['1' => 'PSC', '2' => 'JSC', '3' => 'SSC', '4' => 'HSC','5' => 'BA', '6' => 'MA', '7' => 'HONOURS', '8' => 'MASTERS', '9' => 'PHD'])!!}
                            <span id="JamindarEducation-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-JamindarPassingYear-error">
                        {!! Form::label("JamindarPassingYear","পাশের বছর",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("JamindarPassingYear",['2007', '2008','2009','2010','2011','2012','2013'])!!}
                            <span id="JamindarPassingYear-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-JamindarProfession-error">
                        {!! Form::label("JamindarProfession","পেশা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("JamindarProfession",null,["class"=>"form-control required"]) !!}
                            <span id="JamindarProfession-error" class="help-block"></span>
                        </div>
                    </div>

                </div>

                <div class="col-md-12">
                    <div class="box box-header">
                        <h5 class="col-md-offset-1">স্থায়ী ঠিকানা</h5>
                    </div>
                    <div class="form-group required col-md-6" id="form-JamindarCountry-error">
                        {!! Form::label("JamindarCountry","দেশ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("JamindarCountry",['1' => 'Bangladesh', '2' => 'India'])!!}
                            <span id="JamindarCountry-error" class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group required col-md-6" id="form-JamindarDistrict-error">
                        {!! Form::label("JamindarDistrict","জেলাঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("JamindarDistrict",['1' => 'Pabna', '2' => 'Dhaka'])!!}
                            <span id="JamindarDistrict-error" class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group required col-md-6" id="form-JamindarThana-error">
                        {!! Form::label("JamindarThana","থানাঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("JamindarThana",['1' => 'Pabna Sador', '2' => 'Savar'])!!}
                            <span id="JamindarThana-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-JamindarMobile-error">
                        {!! Form::label("JamindarMobile","মোবাইল নংঃ ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("JamindarMobile",null,["class"=>"form-control required"]) !!}
                            <span id="JamindarMobile-error" class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group required col-md-6" id="form-JamindarEmail-error">
                        {!! Form::label("JamindarEmail","ইমেইলঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::email("JamindarEmail",null,["class"=>"form-control required"]) !!}
                            <span id="JamindarEmail-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-JamindarRelation-error">
                        {!! Form::label("JamindarRelation","সদস্যের সাথে সম্পর্ক",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("JamindarRelation",null,["class"=>"form-control required"]) !!}
                            <span id="JamindarRelation-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-JamindarAnnualNetIncome-error">
                        {!! Form::label("JamindarAnnualNetIncome","জামিনদারের বার্ষিক নীট আয়",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("JamindarAnnualNetIncome",null,["class"=>"form-control required"]) !!}
                            <span id="JamindarAnnualNetIncome-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-JamindarSocialStatus-error">
                        {!! Form::label("JamindarSocialStatus","জামিনদারের সামাজিক অবস্থা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("JamindarSocialStatus",null,["class"=>"form-control required"]) !!}
                            <span id="JamindarSocialStatus-error" class="help-block"></span>
                        </div>
                    </div>

                </div>

            </div>

            <div class="tab-pane" id="2">

                <div class="col-md-12">

                    <div class="box box-header">
                        <h5 class="col-md-offset-1">নাম</h5>
                    </div>

                    <div class="form-group required col-md-6" id="form-JamindarNameTitle1-error">
                        {!! Form::label("JamindarNameTitle1","নামের টাইটেল:",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("JamindarNameTitle1",['1' => 'Mr', '2' => 'Mrs', '3' => 'Mss'])!!}
                            <span id="JamindarNameTitle1-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-JamindarFirstName1-error">
                        {!! Form::label("JamindarFirstName1","১ম নাম",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("JamindarFirstName1",null,["class"=>"form-control required"]) !!}
                            <span id="JamindarFirstName1-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-JamindarLastName1-error">
                        {!! Form::label("JamindarLastName1","২য় নাম",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("JamindarLastName1",null,["class"=>"form-control required"]) !!}
                            <span id="JamindarLastName1-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-JamindarFamilyName1-error">
                        {!! Form::label("JamindarFamilyName1","পারিবারিক নাম:",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("JamindarFamilyName1",null,["class"=>"form-control required"]) !!}
                            <span id="JamindarFamilyName1-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-JamindarAge1-error">
                        {!! Form::label("JamindarAge1","বয়স(বছর)",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("JamindarAge1",['18', '19','20','21','22','30','30'])!!}
                            <span id="JamindarAge1-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-JamindarEducation1-error">
                        {!! Form::label("JamindarEducation1","শিক্ষাগত যোগ্যতা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("JamindarEducation1",['1' => 'PSC', '2' => 'JSC', '3' => 'SSC', '4' => 'HSC','5' => 'BA', '6' => 'MA', '7' => 'HONOURS', '8' => 'MASTERS', '9' => 'PHD'])!!}
                            <span id="JamindarEducation1-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-JamindarPassingYear1-error">
                        {!! Form::label("JamindarPassingYear1","পাশের বছর",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("JamindarPassingYear1",['2007', '2008','2009','2010','2011','2012','2013'])!!}
                            <span id="JamindarPassingYear1-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-JamindarProfession1-error">
                        {!! Form::label("JamindarProfession1","পেশা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("JamindarProfession1",null,["class"=>"form-control required"]) !!}
                            <span id="JamindarProfession1-error" class="help-block"></span>
                        </div>
                    </div>

                </div>

                <div class="col-md-12">
                    <div class="box box-header">
                        <h5 class="col-md-offset-1">স্থায়ী ঠিকানা</h5>
                    </div>
                    <div class="form-group required col-md-6" id="form-JamindarCountry1-error">
                        {!! Form::label("JamindarCountry1","দেশ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("JamindarCountry1",['1' => 'Bangladesh', '2' => 'India'])!!}
                            <span id="JamindarCountry1-error" class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group required col-md-6" id="form-JamindarDistrict1-error">
                        {!! Form::label("JamindarDistrict1","জেলাঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("JamindarDistrict1",['1' => 'Pabna', '2' => 'Dhaka'])!!}
                            <span id="JamindarDistrict1-error" class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group required col-md-6" id="form-JamindarThana1-error">
                        {!! Form::label("JamindarThana1","থানাঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::select("JamindarThana1",['1' => 'Pabna Sador', '2' => 'Savar'])!!}
                            <span id="JamindarThana1-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-JamindarMobile1-error">
                        {!! Form::label("JamindarMobile1","মোবাইল নংঃ ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("JamindarMobile1",null,["class"=>"form-control required"]) !!}
                            <span id="JamindarMobile1-error" class="help-block"></span>
                        </div>
                    </div>


                    <div class="form-group required col-md-6" id="form-JamindarEmail1-error">
                        {!! Form::label("JamindarEmail1","ইমেইলঃ",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::email("JamindarEmail1",null,["class"=>"form-control required"]) !!}
                            <span id="JamindarEmail1-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-JamindarRelation1-error">
                        {!! Form::label("JamindarRelation1","সদস্যের সাথে সম্পর্ক",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("JamindarRelation1",null,["class"=>"form-control required"]) !!}
                            <span id="JamindarRelation1-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-JamindarAnnualNetIncome1-error">
                        {!! Form::label("JamindarAnnualNetIncome1","জামিনদারের বার্ষিক নীট আয়",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::number("JamindarAnnualNetIncome1",null,["class"=>"form-control required"]) !!}
                            <span id="JamindarAnnualNetIncome1-error" class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group required col-md-6" id="form-JamindarSocialStatus1-error">
                        {!! Form::label("JamindarSocialStatus1","জামিনদারের সামাজিক অবস্থা",["class"=>"control-label col-md-3"]) !!}
                        <div class="col-md-6">
                            {!! Form::text("JamindarSocialStatus1",null,["class"=>"form-control required"]) !!}
                            <span id="JamindarSocialStatus1-error" class="help-block"></span>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-push-3">
            <a href="javascript:ajaxLoad('jamindar/list')" class="btn btn-danger"><i
                        class="glyphicon glyphicon-backward"></i>
                Back</a>
            {!! Form::button("<i class='glyphicon glyphicon-floppy-disk'></i> Save",["type" => "submit","class"=>"btn
        btn-primary"])!!}
        </div>
    </div>

</div>
<script>
    $("#frm").submit(function (event) {
        event.preventDefault();
        $('.loading').show();
        var form = $(this);
        var data = new FormData($(this)[0]);
        var url = form.attr("action");
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.fail) {
                    $('#frm input.required, #frm textarea.required').each(function () {
                        index = $(this).attr('name');
                        if (index in data.errors) {
                            $("#form-" + index + "-error").addClass("has-error");
                            $("#" + index + "-error").html(data.errors[index]);
                        }
                        else {
                            $("#form-" + index + "-error").removeClass("has-error");
                            $("#" + index + "-error").empty();
                        }
                    });
                    $('#focus').focus().select();
                } else {
                    $(".has-error").removeClass("has-error");
                    $(".help-block").empty();
                    $('.loading').hide();
                    ajaxLoad(data.url, data.content);
                }
            },
            error: function (xhr, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
        return false;
    });
</script>