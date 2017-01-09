<?php
namespace App\Http\Controllers;

use App\Survey;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SurveyController extends Controller
{
    public function getIndex()
    {
        return view('survey.index');
    }

    public function getList()
    {
        Session::put('survey_search', Input::has('ok') ? Input::get('search') : (Session::has('survey_search') ? Session::get('survey_search') : ''));
        Session::put('survey_field', Input::has('field') ? Input::get('field') : (Session::has('survey_field') ? Session::get('survey_field') : 'name'));
        Session::put('survey_sort', Input::has('sort') ? Input::get('sort') : (Session::has('survey_sort') ? Session::get('survey_sort') : 'asc'));
        $surveys = Survey::where('name', 'like', '%' . Session::get('survey_search') . '%')
            ->orderBy(Session::get('survey_field'), Session::get('survey_sort'))->paginate(8);
        return view('survey.list', ['surveys' => $surveys]);
    }

    public function getUpdate($id)
    {
        return view('survey.update', ['survey' => Survey::find($id)]);
    }

    public function postUpdate($id)
    {
        $survey = Survey::find($id);
        //$rules = ["unitprice" => "required|numeric"];
        if ($survey->ZoneId != Input::get('ZoneId'))
            $rules += ['ZoneId' => 'required|unique:surveys'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $survey->ZoneId = Input::get('ZoneId');
        $survey->AreaId = Input::get('AreaId');
        $survey->BranchId = Input::get('BranchId');
        $survey->NameTitle = Input::get('NameTitle');
        $survey->FirstName = Input::get('FirstName');
        $survey->LastName = Input::get('LastName');
        $survey->FamilyName = Input::get('FamilyName');
        $survey->FullNameBangla = Input::get('FullNameBangla');
        $survey->Gender = Input::get('Gender');
        $survey->Age = Input::get('Age');
        $survey->Education = Input::get('Education');
        $survey->PassingYear = Input::get('PassingYear');
        $survey->FatherOrHasbandNAmeTitle = Input::get('FatherOrHasbandNAmeTitle');
        $survey->FatherOrHasbandFirstName = Input::get('FatherOrHasbandFirstName');
        $survey->FatherOrHasbandLastName = Input::get('FatherOrHasbandLastName');
        $survey->FatherOrHasbandAge = Input::get('FatherOrHasbandAge');
        $survey->MatherNameTitle = Input::get('MatherNameTitle');
        $survey->MotherFirstName = Input::get('MotherFirstName');
        $survey->MotherLastName = Input::get('MotherLastName');
        $survey->MotherAge = Input::get('MotherAge');
        $survey->SpouseProfession = Input::get('SpouseProfession');
        $survey->MaritalStatus = Input::get('MaritalStatus');
        $survey->PoliticalStatus = Input::get('PoliticalStatus');
        $survey->Nid = Input::get('Nid');
        $survey->PresentCountry = Input::get('PresentCountry');
        $survey->PresentDistrict = Input::get('PresentDistrict');
        $survey->PresentThana = Input::get('PresentThana');
        $survey->PresentUnion = Input::get('PresentUnion');
        $survey->PresentPostOffice = Input::get('PresentPostOffice');
        $survey->PresentWord = Input::get('PresentWord');
        $survey->PresentVillage = Input::get('PresentVillage');
        $survey->PresentRoadNo = Input::get('PresentRoadNo');
        $survey->PermanentCountry = Input::get('PermanentCountry');
        $survey->PermanentDistrict = Input::get('PermanentDistrict');
        $survey->PermanentThana = Input::get('PermanentThana');
        $survey->PermanentUnion = Input::get('PermanentUnion');
        $survey->PermanentPostOffice = Input::get('PermanentPostOffice');
        $survey->PermanentWord = Input::get('PermanentWord');
        $survey->PermanentVillage = Input::get('PermanentVillage');
        $survey->PermanentRoadNo = Input::get('PermanentRoadNo');
        $survey->Mobile = Input::get('Mobile');
        $survey->Email = Input::get('Email');
        $survey->SpouseMobileNo = Input::get('SpouseMobileNo');
        $survey->Distance = Input::get('Distance');
        $survey->CurrentProfession = Input::get('CurrentProfession');
        $survey->PreviousProfessiion = Input::get('PreviousProfessiion');
        $survey->DorationOfPreviousProfession = Input::get('DorationOfPreviousProfession');
        $survey->EarningAssetsByBusinessOrJob = Input::get('EarningAssetsByBusinessOrJob');
        $survey->EarningSourceWithoutBusiness = Input::get('EarningSourceWithoutBusiness');
        $survey->BusinessType = Input::get('BusinessType');
        $survey->BusinessFrturePlan = Input::get('BusinessFrturePlan');
        $survey->FamilyMebmer = Input::get('FamilyMebmer');
        $survey->EarningMale = Input::get('EarningMale');
        $survey->EarningFemale = Input::get('EarningFemale');
        $survey->EarningPerson = Input::get('EarningPerson');
        $survey->MaleMember = Input::get('MaleMember');
        $survey->FemaleMenber = Input::get('FemaleMenber');
        $survey->FamilyType = Input::get('FamilyType');
        $survey->SickDescripotionOfFamilyMember = Input::get('SickDescripotionOfFamilyMember');
        $survey->CaseDescriptionOfFamilyMember = Input::get('CaseDescriptionOfFamilyMember');
        $survey->IfAnyMemberInAbroad = Input::get('IfAnyMemberInAbroad');
        $survey->CultiviableLand = Input::get('CultiviableLand');
        $survey->NonCultivableLand = Input::get('NonCultivableLand');
        $survey->Pond = Input::get('Pond');
        $survey->House = Input::get('House');
        $survey->TotalLand = Input::get('TotalLand');
        $survey->AgriculturalEarning = Input::get('AgriculturalEarning');
        $survey->NonAgriculturalEarning = Input::get('NonAgriculturalEarning');
        $survey->TotalEarning = Input::get('TotalEarning');
        $survey->TotalExpenditure = Input::get('TotalExpenditure');
        $survey->NetBalance = Input::get('NetBalance');
        $survey->TinMadeHouse = Input::get('TinMadeHouse');
        $survey->StrawMadeHouse = Input::get('StrawMadeHouse');
        $survey->BrickMadeHouse = Input::get('BrickMadeHouse');
        $survey->ReceivedAmount = Input::get('ReceivedAmount');
        $survey->PaidAmount = Input::get('PaidAmount');
        $survey->RepaymentType = Input::get('RepaymentType');
        $survey->FinancierCompany = Input::get('FinancierCompany');
        $survey->LoaningYear = Input::get('LoaningYear');
        $survey->LastReceivedDate = Input::get('LastReceivedDate');
        $survey->IsHeSheWillingToTakeLoan = Input::get('IsHeSheWillingToTakeLoan');
        $survey->InvestmentSector = Input::get('InvestmentSector');
        $survey->Amount = Input::get('Amount');
        $survey->Comment1 = Input::get('Comment1');
        $survey->Comment2 = Input::get('Comment2');
        $survey->save();
        return ['url' => 'survey/list'];
    }

    public function getCreate()
    {
        return view('survey.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "ZoneId" => "required|unique:surveys"
            //"SurveyCode" => "required|unique:surveys",
            //"unitprice" => "required|numeric"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $survey = new Survey();
        $survey->ZoneId = Input::get('ZoneId');
        $survey->AreaId = Input::get('AreaId');
        $survey->BranchId = Input::get('BranchId');
        $survey->NameTitle = Input::get('NameTitle');
        $survey->FirstName = Input::get('FirstName');
        $survey->LastName = Input::get('LastName');
        $survey->FamilyName = Input::get('FamilyName');
        $survey->FullNameBangla = Input::get('FullNameBangla');
        $survey->Gender = Input::get('Gender');
        $survey->Age = Input::get('Age');
        $survey->Education = Input::get('Education');
        $survey->PassingYear = Input::get('PassingYear');
        $survey->FatherOrHasbandNAmeTitle = Input::get('FatherOrHasbandNAmeTitle');
        $survey->FatherOrHasbandFirstName = Input::get('FatherOrHasbandFirstName');
        $survey->FatherOrHasbandLastName = Input::get('FatherOrHasbandLastName');
        $survey->FatherOrHasbandAge = Input::get('FatherOrHasbandAge');
        $survey->MatherNameTitle = Input::get('MatherNameTitle');
        $survey->MotherFirstName = Input::get('MotherFirstName');
        $survey->MotherLastName = Input::get('MotherLastName');
        $survey->MotherAge = Input::get('MotherAge');
        $survey->SpouseProfession = Input::get('SpouseProfession');
        $survey->MaritalStatus = Input::get('MaritalStatus');
        $survey->PoliticalStatus = Input::get('PoliticalStatus');
        $survey->Nid = Input::get('Nid');
        $survey->PresentCountry = Input::get('PresentCountry');
        $survey->PresentDistrict = Input::get('PresentDistrict');
        $survey->PresentThana = Input::get('PresentThana');
        $survey->PresentUnion = Input::get('PresentUnion');
        $survey->PresentPostOffice = Input::get('PresentPostOffice');
        $survey->PresentWord = Input::get('PresentWord');
        $survey->PresentVillage = Input::get('PresentVillage');
        $survey->PresentRoadNo = Input::get('PresentRoadNo');
        $survey->PermanentCountry = Input::get('PermanentCountry');
        $survey->PermanentDistrict = Input::get('PermanentDistrict');
        $survey->PermanentThana = Input::get('PermanentThana');
        $survey->PermanentUnion = Input::get('PermanentUnion');
        $survey->PermanentPostOffice = Input::get('PermanentPostOffice');
        $survey->PermanentWord = Input::get('PermanentWord');
        $survey->PermanentVillage = Input::get('PermanentVillage');
        $survey->PermanentRoadNo = Input::get('PermanentRoadNo');
        $survey->Mobile = Input::get('Mobile');
        $survey->Email = Input::get('Email');
        $survey->SpouseMobileNo = Input::get('SpouseMobileNo');
        $survey->Distance = Input::get('Distance');
        $survey->CurrentProfession = Input::get('CurrentProfession');
        $survey->PreviousProfessiion = Input::get('PreviousProfessiion');
        $survey->DorationOfPreviousProfession = Input::get('DorationOfPreviousProfession');
        $survey->EarningAssetsByBusinessOrJob = Input::get('EarningAssetsByBusinessOrJob');
        $survey->EarningSourceWithoutBusiness = Input::get('EarningSourceWithoutBusiness');
        $survey->BusinessType = Input::get('BusinessType');
        $survey->BusinessFrturePlan = Input::get('BusinessFrturePlan');
        $survey->FamilyMebmer = Input::get('FamilyMebmer');
        $survey->EarningMale = Input::get('EarningMale');
        $survey->EarningFemale = Input::get('EarningFemale');
        $survey->EarningPerson = Input::get('EarningPerson');
        $survey->MaleMember = Input::get('MaleMember');
        $survey->FemaleMenber = Input::get('FemaleMenber');
        $survey->FamilyType = Input::get('FamilyType');
        $survey->SickDescripotionOfFamilyMember = Input::get('SickDescripotionOfFamilyMember');
        $survey->CaseDescriptionOfFamilyMember = Input::get('CaseDescriptionOfFamilyMember');
        $survey->IfAnyMemberInAbroad = Input::get('IfAnyMemberInAbroad');
        $survey->CultiviableLand = Input::get('CultiviableLand');
        $survey->NonCultivableLand = Input::get('NonCultivableLand');
        $survey->Pond = Input::get('Pond');
        $survey->House = Input::get('House');
        $survey->TotalLand = Input::get('TotalLand');
        $survey->AgriculturalEarning = Input::get('AgriculturalEarning');
        $survey->NonAgriculturalEarning = Input::get('NonAgriculturalEarning');
        $survey->TotalEarning = Input::get('TotalEarning');
        $survey->TotalExpenditure = Input::get('TotalExpenditure');
        $survey->NetBalance = Input::get('NetBalance');
        $survey->TinMadeHouse = Input::get('TinMadeHouse');
        $survey->StrawMadeHouse = Input::get('StrawMadeHouse');
        $survey->BrickMadeHouse = Input::get('BrickMadeHouse');
        $survey->ReceivedAmount = Input::get('ReceivedAmount');
        $survey->PaidAmount = Input::get('PaidAmount');
        $survey->RepaymentType = Input::get('RepaymentType');
        $survey->FinancierCompany = Input::get('FinancierCompany');
        $survey->LoaningYear = Input::get('LoaningYear');
        $survey->LastReceivedDate = Input::get('LastReceivedDate');
        $survey->IsHeSheWillingToTakeLoan = Input::get('IsHeSheWillingToTakeLoan');
        $survey->InvestmentSector = Input::get('InvestmentSector');
        $survey->Amount = Input::get('Amount');
        $survey->Comment1 = Input::get('Comment1');
        $survey->Comment2 = Input::get('Comment2');
        $survey->save();
        return ['url' => 'survey/list'];
    }

    public function getDelete($id)
    {
        Survey::destroy($id);
        return Redirect('survey/list');
    }

}