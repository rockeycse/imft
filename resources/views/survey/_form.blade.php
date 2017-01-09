<div class="col-md-12 ">
    <div id="exTab2" class="">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#1" data-toggle="tab">শাখার তথ্য</a>
            </li>

            <li>
                <a href="#2" data-toggle="tab">ব্যক্তিগত তথ্য</a>
            </li>

            <li>
                <a href="#3" data-toggle="tab">পারিবারিক তথ্য</a>
            </li>

            <li>
                <a href="#4" data-toggle="tab">বিনিয়োগ সংক্রান্ত</a>
            </li>
        </ul>
        <div class="tab-content ">
            <div class="tab-pane active" id="1">
                <div class="form-group required col-md-6" id="form-ZoneId-error">
                    {!! Form::label("ZoneId","জোন",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("ZoneId",[ '1' => 'Dhaka', '2' => 'Bogra', '3' => 'Rajshahi'])!!}
                        <span id="ZoneId-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-AreaId-error">
                    {!! Form::label("AreaId","এলাকা",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("AreaId",['1' => 'Savar', '2' => 'Thengamara', '3' => 'Rajshahi'])!!}
                        <span id="AreaId-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-BranchId-error">
                    {!! Form::label("BranchId","শাখা",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("BranchId",['1' => 'HemayetPur', '2' => 'Gokul', '3' => 'Baghmara'])!!}
                        <span id="BranchId-error" class="help-block"></span>
                    </div>
                </div>

            </div>

            <div class="tab-pane" id="2">

                <div class="form-group required col-md-6" id="form-NameTitle-error">
                    {!! Form::label("NameTitle","নামের টাইটেল:",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("NameTitle",['1' => 'Mr', '2' => 'Mrs', '3' => 'Mss'])!!}
                        <span id="NameTitle-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-FirstName-error">
                    {!! Form::label("FirstName","১ম নাম",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::text("FirstName",null,["class"=>"form-control required"]) !!}
                        <span id="FirstName-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-LastName-error">
                    {!! Form::label("LastName","২য় নাম",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::text("LastName",null,["class"=>"form-control required"]) !!}
                        <span id="LastName-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-FamilyName-error">
                    {!! Form::label("FamilyName","পারিবারিক নাম:",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::text("FamilyName",null,["class"=>"form-control required"]) !!}
                        <span id="FamilyName-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-FullNameBangla-error">
                    {!! Form::label("FullNameBangla","পূর্ণ নাম(বাংলায়)",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::text("FullNameBangla",null,["class"=>"form-control required"]) !!}
                        <span id="FullNameBangla-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-Gender-error">
                    {!! Form::label("Gender","লিঙ্গ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("Gender",['1' => 'Male', '2' => 'Female', '3' => 'Others'])!!}
                        <span id="Gender-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-Age-error">
                    {!! Form::label("Age","বয়স",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("Age",['18', '19','20','21','22','30','30'])!!}
                        <span id="Age-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-Education-error">
                    {!! Form::label("Education","শিক্ষাগত যোগ্যতা",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("Education",['1' => 'PSC', '2' => 'JSC', '3' => 'SSC', '4' => 'HSC','5' => 'BA', '6' => 'MA', '7' => 'HONOURS', '8' => 'MASTERS', '9' => 'PHD'])!!}
                        <span id="Education-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-PassingYear-error">
                    {!! Form::label("PassingYear","পাশের বছর",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("PassingYear",['2007', '2008','2009','2010','2011','2012','2013'])!!}
                        <span id="PassingYear-error" class="help-block"></span>
                    </div>
                </div>


                <div class="box-header col-md-11 col-md-offset-1">
                    <h5 class="text-aqua"><u>পিতা/ স্বামীর নাম</u></h5>
                </div>
                <div class="form-group required col-md-6" id="form-FatherOrHasbandNAmeTitle-error">
                    {!! Form::label("FatherOrHasbandNAmeTitle","নামের টাইটেল",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("FatherOrHasbandNAmeTitle",['1' => 'Mr'])!!}
                        <span id="FatherOrHasbandNAmeTitle-error" class="help-block"></span>
                    </div>
                </div>


                <div class="form-group required col-md-6" id="form-FatherOrHasbandFirstName-error">
                    {!! Form::label("FatherOrHasbandFirstName","১ম নামঃ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::text("FatherOrHasbandFirstName",null,["class"=>"form-control required"]) !!}
                        <span id="FatherOrHasbandFirstName-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-FatherOrHasbandLastName-error">
                    {!! Form::label("FatherOrHasbandLastName","২য় নামঃ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::text("FatherOrHasbandLastName",null,["class"=>"form-control required"]) !!}
                        <span id="FatherOrHasbandLastName-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-FatherOrHasbandAge-error">
                    {!! Form::label("FatherOrHasbandAge","বয়সঃ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("FatherOrHasbandAge",['18', '19','20','21','22','30','30'])!!}
                        <span id="FatherOrHasbandAge-error" class="help-block"></span>
                    </div>
                </div>

                <div class="box-header col-md-11 col-md-offset-1">
                    <h5 class="text-aqua"><u>মায়ের নাম</u></h5>
                </div>
                <div class="form-group required col-md-6" id="form-MatherNameTitle-error">
                    {!! Form::label("MatherNameTitle","নামের টাইটেল",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("MatherNameTitle",['2' => 'Mrs', '3' => 'Mss'])!!}
                        <span id="MatherNameTitle-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-MotherFirstName-error">
                    {!! Form::label("MotherFirstName","১ম নামঃ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::text("MotherFirstName",null,["class"=>"form-control required"]) !!}
                        <span id="MotherFirstName-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-MotherLastName-error">
                    {!! Form::label("MotherLastName","২য় নামঃ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::text("MotherLastName",null,["class"=>"form-control required"]) !!}
                        <span id="MotherLastName-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-MotherAge-error">
                    {!! Form::label("MotherAge","বয়সঃ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("MotherAge",['18', '19','20','21','22','30','30'])!!}
                        <span id="MotherAge-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-SpouseProfession-error">
                    {!! Form::label("SpouseProfession","অভিভাবকের পেশা",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("SpouseProfession",['1' => 'Agriculture', '2' => 'Service', '3' => 'Business', '4' => 'Others'])!!}
                        <span id="SpouseProfession-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-MaritalStatus-error">
                    {!! Form::label("MaritalStatus","বৈবাহিক অবস্থাঃ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("MaritalStatus",['1' => 'Married Single','2' => 'Married Multiple', '3' => 'Non-Married','4' => 'Widower','5'=>'Widow'])!!}
                        <span id="MaritalStatus-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-PoliticalStatus-error">
                    {!! Form::label("PoliticalStatus","রাজনীতির সাথে জরিত কি না?",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("PoliticalStatus",['1' => 'Yes', '2' => 'No'])!!}
                        <span id="PoliticalStatus-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-Nid-error">
                    {!! Form::label("Nid","জাতীয় পরিচয় পত্রের নংঃ ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::text("Nid",null,["class"=>"form-control required"]) !!}
                        <span id="Nid-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-PresentCountry-error">
                    {!! Form::label("PresentCountry","দেশ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("PresentCountry",['1' => 'Bangladesh', '2' => 'India'])!!}
                        <span id="PresentCountry-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-PresentDistrict-error">
                    {!! Form::label("PresentDistrict","জেলাঃ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("PresentDistrict",['1' => 'Pabna', '2' => 'Dhaka'])!!}
                        <span id="PresentDistrict-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-PresentThana-error">
                    {!! Form::label("PresentThana","থানাঃ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("PresentThana",['1' => 'Pabna Sador', '2' => 'Savar'])!!}
                        <span id="PresentThana-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-PresentUnion-error">
                    {!! Form::label("PresentUnion","ইউনিয়নঃ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("PresentUnion",['1' => 'Shadullapur', '2' => 'Savar'])!!}
                        <span id="PresentUnion-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-PresentPostOffice-error">
                    {!! Form::label("PresentPostOffice","পোষ্ট অফিসঃ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("PresentPostOffice",['1' => 'Dublia', '2' => 'Savar'])!!}
                        <span id="PresentPostOffice-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-PresentWord-error">
                    {!! Form::label("PresentWord","ওয়ার্ড",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("PresentWord",['1', '2'])!!}
                        <span id="PresentWord-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-PresentVillage-error">
                    {!! Form::label("PresentVillage","গ্রাম বা মহল্লাঃ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::text("PresentVillage",null,["class"=>"form-control required"]) !!}
                        <span id="PresentVillage-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-PresentRoadNo-error">
                    {!! Form::label("PresentRoadNo","রাস্তা নং",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::text("PresentRoadNo",null,["class"=>"form-control required"]) !!}
                        <span id="PresentRoadNo-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-PermanentCountry-error">
                    {!! Form::label("PermanentCountry","দেশ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("PermanentCountry",['1' => 'Bangladesh', '2' => 'India'])!!}
                        <span id="PermanentCountry-error" class="help-block"></span>
                    </div>
                </div>


                <div class="form-group required col-md-6" id="form-PermanentDistrict-error">
                    {!! Form::label("PermanentDistrict","জেলাঃ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("PermanentDistrict",['1' => 'Pabna', '2' => 'Dhaka'])!!}
                        <span id="PermanentDistrict-error" class="help-block"></span>
                    </div>
                </div>


                <div class="form-group required col-md-6" id="form-PermanentThana-error">
                    {!! Form::label("PermanentThana","থানাঃ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("PermanentThana",['1' => 'Pabna Sador', '2' => 'Savar'])!!}
                        <span id="PermanentThana-error" class="help-block"></span>
                    </div>
                </div>


                <div class="form-group required col-md-6" id="form-PermanentUnion-error">
                    {!! Form::label("PermanentUnion","ইউনিয়নঃ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("PermanentUnion",['1' => 'Shadullapur', '2' => 'Savar'])!!}
                        <span id="PermanentUnion-error" class="help-block"></span>
                    </div>
                </div>


                <div class="form-group required col-md-6" id="form-PermanentPostOffice-error">
                    {!! Form::label("PermanentPostOffice","পোষ্ট অফিসঃ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("PermanentPostOffice",['1' => 'Dublia', '2' => 'Savar'])!!}
                        <span id="PermanentPostOffice-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-PermanentWord-error">
                    {!! Form::label("PermanentWord","ওয়ার্ড",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("PermanentWord",['1', '2'])!!}
                        <span id="PermanentWord-error" class="help-block"></span>
                    </div>
                </div>


                <div class="form-group required col-md-6" id="form-PermanentVillage-error">
                    {!! Form::label("PermanentVillage","গ্রাম বা মহল্লাঃ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::text("PermanentVillage",null,["class"=>"form-control required"]) !!}
                        <span id="PermanentVillage-error" class="help-block"></span>
                    </div>
                </div>


                <div class="form-group required col-md-6" id="form-PermanentRoadNo-error">
                    {!! Form::label("PermanentRoadNo","রাস্তা নং",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::text("PermanentRoadNo",null,["class"=>"form-control required"]) !!}
                        <span id="PermanentRoadNo-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-Mobile-error">
                    {!! Form::label("Mobile","মোবাইল নংঃ ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::number("Mobile",null,["class"=>"form-control required"]) !!}
                        <span id="Mobile-error" class="help-block"></span>
                    </div>
                </div>


                <div class="form-group required col-md-6" id="form-Email-error">
                    {!! Form::label("Email","ইমেইলঃ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::email("Email",null,["class"=>"form-control required"]) !!}
                        <span id="Email-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-SpouseMobileNo-error">
                    {!! Form::label("SpouseMobileNo","অভিভাবকের মোবাইল নংঃ ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::number("SpouseMobileNo",null,["class"=>"form-control required"]) !!}
                        <span id="SpouseMobileNo-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-Distance-error">
                    {!! Form::label("Distance","শাখা অফিসের দুরুত্ব (কিঃ মিঃ)",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("Distance",['1', '2', '3','4', '5', '6'])!!}
                        <span id="Distance-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-CurrentProfession-error">
                    {!! Form::label("CurrentProfession","বর্তমান পেশা",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("CurrentProfession",['1' => 'Agriculture', '2' => 'Non-Agriculture', '3'=>'Others'])!!}
                        <span id="CurrentProfession-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-PreviousProfessiion-error">
                    {!! Form::label("PreviousProfessiion","বর্তমান পেশার পূর্বে তিনি কি করতেন",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("PreviousProfessiion",['1' => 'Agriculture', '2' => 'Non-Agriculture', '3'=>'Others'])!!}
                        <span id="PreviousProfessiion-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-DorationOfPreviousProfession-error">
                    {!! Form::label("DorationOfPreviousProfession","সেই পেশায় কতদিন নিয়োজিত ছিলেন(মাস)",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("DorationOfPreviousProfession",['1', '2', '3','4', '5', '6'])!!}
                        <span id="DorationOfPreviousProfession-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-EarningAssetsByBusinessOrJob-error">
                    {!! Form::label("EarningAssetsByBusinessOrJob","ব্যবসা/চাকুরী করে অর্জিত সম্পদের বিবরণঃ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::text("EarningAssetsByBusinessOrJob",null,["class"=>"form-control required"]) !!}
                        <span id="EarningAssetsByBusinessOrJob-error" class="help-block"></span>
                    </div>
                </div>


                <div class="form-group required col-md-6" id="form-EarningSourceWithoutBusiness-error">
                    {!! Form::label("EarningSourceWithoutBusiness","ব্যবসা ছাড়া আয়ের উৎস থাকলে তার বিবরণঃ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::textarea("EarningSourceWithoutBusiness",null,["class"=>"form-control required"]) !!}
                        <span id="EarningSourceWithoutBusiness-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-BusinessType-error">
                    {!! Form::label("BusinessType","ব্যবসার ধরনঃ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("BusinessType",['1' => 'Single', '2' => 'Partnership'])!!}
                        <span id="BusinessType-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-BusinessFrturePlan-error">
                    {!! Form::label("BusinessFrturePlan","ব্যবসার ভবিষ্যৎ পরিকল্পনাঃ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::textarea("BusinessFrturePlan",null,["class"=>"form-control required"]) !!}
                        <span id="BusinessFrturePlan-error" class="help-block"></span>
                    </div>
                </div>

            </div>

            <div class="tab-pane" id="3">

                <div class="form-group required col-md-6" id="form-FamilyMebmer-error">
                    {!! Form::label("FamilyMebmer","পরিবারের সদস্য সংখ্যাঃ ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("FamilyMebmer",['1', '2', '3','4', '5', '6'])!!}
                        <span id="FamilyMebmer-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-EarningMale-error">
                    {!! Form::label("EarningMale","উপার্জনক্ষম পুরুষের সংখ্যা",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("EarningMale",['1', '2', '3','4', '5', '6'])!!}
                        <span id="EarningMale-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-EarningFemale-error">
                    {!! Form::label("EarningFemale","উপার্জনক্ষম মহিলার সংখ্যা",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("EarningFemale",['1', '2', '3','4', '5', '6'])!!}
                        <span id="EarningFemale-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-EarningPerson-error">
                    {!! Form::label("EarningPerson","উপার্জনক্ষম সদস্য সংখ্যা",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("EarningPerson",['1', '2', '3','4', '5', '6'])!!}
                        <span id="EarningPerson-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-MaleMember-error">
                    {!! Form::label("MaleMember","ছেলে সদস্য সংখ্যাঃ ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("MaleMember",['1', '2', '3','4', '5', '6'])!!}
                        <span id="MaleMember-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-FemaleMenber-error">
                    {!! Form::label("FemaleMenber","মেয়ে সদস্য সংখ্যা",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("FemaleMenber",['1', '2', '3','4', '5', '6'])!!}
                        <span id="FemaleMenber-error" class="help-block"></span>
                    </div>
                </div>


                <div class="form-group required col-md-6" id="form-FamilyType-error">
                    {!! Form::label("FamilyType","পরিবারের প্রকৃতি",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("FamilyType",['1' => 'Single', '2' => 'Combined'])!!}
                        <span id="FamilyType-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-SickDescripotionOfFamilyMember-error">
                    {!! Form::label("SickDescripotionOfFamilyMember","পরিবারে কেহ গুরুত্বর অসুস্থ থাকলে তার বিবরণ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::textarea("SickDescripotionOfFamilyMember",null,["class"=>"form-control required"]) !!}
                        <span id="SickDescripotionOfFamilyMember-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-CaseDescriptionOfFamilyMember-error">
                    {!! Form::label("CaseDescriptionOfFamilyMember","পরিবারে কেহ কথনও মামলাগ্রুস্থ থাকলে তার বিবরণ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::textarea("CaseDescriptionOfFamilyMember",null,["class"=>"form-control required"]) !!}
                        <span id="CaseDescriptionOfFamilyMember-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-IfAnyMemberInAbroad-error">
                    {!! Form::label("IfAnyMemberInAbroad","পরিবারে কেহ বিদেশে থাকলে - কোন দেশে তার বিবরণ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::textarea("IfAnyMemberInAbroad",null,["class"=>"form-control required"]) !!}
                        <span id="IfAnyMemberInAbroad-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-CultiviableLand-error">
                    {!! Form::label("CultiviableLand","আবাদি জমি (শতক)",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::number("CultiviableLand",null,["class"=>"form-control required"]) !!}
                        <span id="CultiviableLand-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-NonCultivableLand-error">
                    {!! Form::label("NonCultivableLand","অনাবাদি জমি (শতক)",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::number("NonCultivableLand",null,["class"=>"form-control required"]) !!}
                        <span id="NonCultivableLand-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-Pond-error">
                    {!! Form::label("Pond","পুকুর (শতক)",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::number("Pond",null,["class"=>"form-control required"]) !!}
                        <span id="Pond-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-House-error">
                    {!! Form::label("House","বসত বাড়ী(শতক)",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::number("House",null,["class"=>"form-control required"]) !!}
                        <span id="House-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-TotalLand-error">
                    {!! Form::label("TotalLand","মোট জমি (শতক)",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::number("TotalLand",null,["class"=>"form-control required"]) !!}
                        <span id="TotalLand-error" class="help-block"></span>
                    </div>
                </div>


                <div class="box-header col-md-11 col-md-offset-1">
                    <h5 class="text-aqua">বাৎসরিক মোট আয় ও ব্যয়</h5>
                </div>
                <div class="form-group required col-md-6" id="form-AgriculturalEarning-error">
                    {!! Form::label("AgriculturalEarning","কৃষিজ আয় (টাকা)",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::number("AgriculturalEarning",null,["class"=>"form-control required"]) !!}
                        <span id="AgriculturalEarning-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-NonAgriculturalEarning-error">
                    {!! Form::label("NonAgriculturalEarning","অকৃষিজ আয় (টাকা)",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::number("NonAgriculturalEarning",null,["class"=>"form-control required"]) !!}
                        <span id="NonAgriculturalEarning-error" class="help-block"></span>
                    </div>
                </div>


                <div class="form-group required col-md-6" id="form-TotalEarning-error">
                    {!! Form::label("TotalEarning","মোট আয় (টাকা",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::number("TotalEarning",null,["class"=>"form-control required"]) !!}
                        <span id="TotalEarning-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-TotalExpenditure-error">
                    {!! Form::label("TotalExpenditure","মোট ব্যয় (টাকা)",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::number("TotalExpenditure",null,["class"=>"form-control required"]) !!}
                        <span id="TotalExpenditure-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-NetBalance-error">
                    {!! Form::label("NetBalance","উদ্বৃত্ত/ঘাটতি (টাকা)",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::number("NetBalance",null,["class"=>"form-control required"]) !!}
                        <span id="NetBalance-error" class="help-block"></span>
                    </div>
                </div>


                <div class="form-group required col-md-6" id="form-TinMadeHouse-error">
                    {!! Form::label("TinMadeHouse","টিনের ঘর (কত টি?)",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::number("TinMadeHouse",null,["class"=>"form-control required"]) !!}
                        <span id="TinMadeHouse-error" class="help-block"></span>
                    </div>
                </div>
                <div class="form-group required col-md-6" id="form-StrawMadeHouse-error">
                    {!! Form::label("StrawMadeHouse","খড়ের ঘর (কত টি?)",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::number("StrawMadeHouse",null,["class"=>"form-control required"]) !!}
                        <span id="StrawMadeHouse-error" class="help-block"></span>
                    </div>
                </div>
                <div class="form-group required col-md-6" id="form-BrickMadeHouse-error">
                    {!! Form::label("BrickMadeHouse","ইটের ঘর (কত টি?)",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::number("BrickMadeHouse",null,["class"=>"form-control required"]) !!}
                        <span id="BrickMadeHouse-error" class="help-block"></span>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="4">

                <div class="form-group required col-md-6" id="form-ReceivedAmount-error">
                    {!! Form::label("ReceivedAmount","গৃহীত টাকার পরিমাণ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::number("ReceivedAmount",null,["class"=>"form-control required"]) !!}
                        <span id="ReceivedAmount-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-PaidAmount-error">
                    {!! Form::label("PaidAmount","পরিশোধিত টাকার পরিমাণ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::number("PaidAmount",null,["class"=>"form-control required"]) !!}
                        <span id="PaidAmount-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-RemainingAmountToPay-error">
                    {!! Form::label("RemainingAmountToPay","অবশিষ্ট টাকার পরিমাণ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::number("RemainingAmountToPay",null,["class"=>"form-control required"]) !!}
                        <span id="RemainingAmountToPay-error" class="help-block"></span>
                    </div>
                </div>


                <div class="form-group required col-md-6" id="form-RepaymentType-error">
                    {!! Form::label("RepaymentType","পরিশোধের ধরণঃ ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("RepaymentType",['1'=>'Regular', '2'=>'Irregular'])!!}
                        <span id="RepaymentType-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-FinancierCompany-error">
                    {!! Form::label("FinancierCompany","লগ্নীকারী প্রতিষ্ঠানের নামঃ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::text("FinancierCompany",null,["class"=>"form-control required"]) !!}
                        <span id="FinancierCompany-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-LoaningYear-error">
                    {!! Form::label("LoaningYear","কতদিন যাবৎ গ্রহন করছেন (মাস)",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::number("LoaningYear",null,["class"=>"form-control required"]) !!}
                        <span id="LoaningYear-error" class="help-block"></span>
                    </div>
                </div>


                <div class="form-group required col-md-6" id="form-LastReceivedDate-error">
                    {!! Form::label("LastReceivedDate","সর্বশেষ কবে গ্রহণ করেছেন",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::date("LastReceivedDate",null,["class"=>"form-control required"]) !!}
                        <span id="LastReceivedDate-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-IsHeSheWillingToTakeLoan-error">
                    {!! Form::label("IsHeSheWillingToTakeLoan","বিনিয়োগ/ঋণ গ্রহন করতে আগ্রহী কি না-",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::select("IsHeSheWillingToTakeLoan",['1'=>'Yes', '2'=>'No'])!!}
                        <span id="IsHeSheWillingToTakeLoan-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-InvestmentSector-error">
                    {!! Form::label("InvestmentSector","বিনিয়োগের খাতঃ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::text("InvestmentSector",null,["class"=>"form-control required"]) !!}
                        <span id="InvestmentSector-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-Amount-error">
                    {!! Form::label("Amount","টাকার পরিমানঃ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::number("Amount",null,["class"=>"form-control required"]) !!}
                        <span id="Amount-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-Comment1-error">
                    {!! Form::label("Comment1","প্রথম ব্যক্তির মন্তব্যঃ ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::textarea("Comment1",null,["class"=>"form-control required"]) !!}
                        <span id="Comment1-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group required col-md-6" id="form-Comment2-error">
                    {!! Form::label("Comment2","দ্বিতীয় ব্যক্তির মন্তব্যঃ ",["class"=>"control-label col-md-3"]) !!}
                    <div class="col-md-6">
                        {!! Form::textarea("Comment2",null,["class"=>"form-control required"]) !!}
                        <span id="Comment2-error" class="help-block"></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-push-4">
                        <a href="javascript:ajaxLoad('organization/list')" class="btn btn-danger"><i
                                    class="glyphicon glyphicon-backward"></i>
                            Back</a>
                        {!! Form::button("<i class='glyphicon glyphicon-floppy-disk'></i> Save",["type" => "submit","class"=>"btn
                    btn-primary"])!!}
                    </div>
                </div>

            </div>
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