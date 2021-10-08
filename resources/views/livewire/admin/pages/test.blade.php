<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Model Import
use App\Models\Flashnew;
use App\Models\Reporter;
use App\Models\Webnew;
use App\Models\Videonew;
use App\Models\Banner;
//use App\Models\Upload;

//Cloudinary class import
use JD\Cloudder\Facades\Cloudder;

class NewsController extends Controller
{
//------------Admin----------------- 
    public function baseadmin1()
    {
        return view('livewire.admin.admin-dashboard-component');
    }
//---------Flash News Section------------
    //loading page
    public function addflash1()
    {
        return view('livewire.admin.pages.addflashnews1');
    }
    //post flash news
    function add(Request $req)
    {
        $flash=new Flashnew;
        $flash->name=$req->input('name');
        $flash->f_description=$req->input('description');
        $flash->save();
        return "<script> alert('News Added Successfully') ,location.href='/addflash1'</script>";
    }
    //view Flash News
    public function viewflashnews(){
        $datas=flashnew::all();
        return view('livewire.admin.pages.viewflashnews')->with('data',$datas);
    }
    //Edit Flash News
    public function editflash($id){
        $flashdata= Flashnew::find($id);
        return view('livewire.admin.pages.editflash')->with('flashdata',$flashdata);
    }
    //Update Flash News
    public function editflashnews(Request $req)
    {
        $flash=Flashnew::find($req->input('id'));
        $flash->name=$req->input('name');
        $flash->f_description=$req->input('description');
        $flash->save();
        return "<script> alert('Flash News Update Successfully') ,location.href='/admin/viewflash'</script>";
    }
    //Delete Flash News
    public function deleteflashnews($id){
        $flashdata= Flashnew::find($id);
        $flashdata->delete();
        return "<script> alert('Flashnews Deleted Successfully') ,location.href='/admin/viewflash'</script>";
        
    }
//-------------End Flash News-----------------

//----------Web News Section-------------//
    //Loading Page
    public function addwebnews1(){
        return view('livewire.admin.pages.addwebnews1');
    }
    //Post Web News
    function postwebnews(Request $req)
    {
        $web = new Webnew;
        $web->wn_name=$req->input('name');
        $web->wn_type=$req->input('news_type');
        $web->wn_description=$req->input('description');
        $web->wn_image=$req->file('image')->store('webs');
        $web->save();
        return "<script> alert('Web News Added Successfully') ,location.href='/admin/addwebnews1'</script>";
    }
    //View Web News
    public function viewwebnews(){
        $datas=webnew::all();
        return view('livewire.admin.pages.viewwebnews')->with('data',$datas);
    }
    //Edit Web News
    public function editwebnews($id){
        $webdata=Webnew::find($id);
        return view('livewire.admin.pages.editwebnews')->with('webdata',$webdata);
    }
    //Update Web News
    public function updatewebnews(Request $req)
    {
        $web=Webnew::find($req->input('id'));
        $web->wn_name=$req->input('name');
        $web->wn_type=$req->input('news_type');
        $web->wn_description=$req->input('description');
        $web->wn_image=$req->file('image')->store('webs');
        $web->save();
        return "<script> alert('web News Update Successfully') ,location.href='/admin/viewweb'</script>";
    }
    //Delete Web News
    public function deletewebnews($id){
        $webnews= Webnew::find($id);
        $webnews->delete();
        return "<script> alert('web News Deleted Successfully') ,location.href='/admin/viewweb'</script>";
    }
//--------------End Web News---------------------


//----------Video News Section------------
    //Loading page
    public function addvideonews1()
    {
        return view('livewire.admin.pages.addvideonews1');
    }
    //Post Video News
    function postvideonews(Request $req)
    {
        $videonews=new Videonew;
        $videonews->vn_name=$req->input('name');
        $videonews->news_type=$req->input('news_type');
        //$videonews->vn_description=$req->input('description');
        $videonews->vn_videolink=$req->input('videolink');
        $videonews->save();
        //$req->Session()->flash('status','News entered Successfully');
        return "<script> alert('News Added Successfully') ,location.href='/admin/addvideonews1'</script>";
        //return redirect('admin.addflash1');
    }
    //View Video News
    public function viewvideonews(){
        $datas=videonew::all();
        return view('livewire.admin.pages.viewvideonews')->with('data',$datas);
    }
     //Edit video News
     public function editvideonews($id){
        $videodata= Videonew::find($id);
        return view('livewire.admin.pages.editvideonews')->with('videodata',$videodata);
    }
    //Update Video News
    public function updatevideonews(Request $req)
    {
        $video=videonew::find($req->input('id'));
        $video->vn_name=$req->input('name');
        $video->news_type=$req->input('news_type');
        $video->vn_videolink=$req->input('videolink');
        $video->save();
        return "<script> alert('Video News Update Successfully') ,location.href='/admin/viewvideo'</script>";
    }
    //Delete Video News
    public function deletevideonews($id){
        $video= Videonew::find($id);
        $video->delete();
        return "<script> alert('video News Deleted Successfully') ,location.href='/admin/viewvideo'</script>";
        
    }
//-------------End Video News------------------------

//-------------Reporter Section-------------
    //Loading Page
    public function addreporter1(){
        return view('livewire.admin.pages.addreporter1');
    }
    //Add Reporter
    function add4(Request $req)
    {
        $reporters = new Reporter;
        $reporters->name=$req->input('name');
        $reporters->age=$req->input('age');
        $reporters->email=$req->input('email');
        $reporters->contact_no=$req->input('contact_no');
        $reporters->job_profile=$req->input('jobprofile');
        $reporters->address=$req->input('address');
        $reporters->district=$req->input('district');
        $reporters->r_image=$req->file('image')->store('reporters');
        $reporters->save();
        return "<script> alert('Reporter Added Successfully') ,location.href='/admin/addreporter1'</script>";
    }
    //View Reporter
    public function viewreporter(){
        $datas=reporter::all();
        return view('livewire.admin.pages.viewreporter')->with('data',$datas);
    }
    //Edit Reporter
    public function editreporter($id){
        $reporter=Reporter::find($id);
        return view('livewire.admin.pages.editreporter')->with('reporter',$reporter);
    }
    //Delete Reporter
    public function deletereporter($id){
        $reporter= Reporter::find($id);
        $reporter->delete();
        return "<script> alert('Reporter Deleted Successfully') ,location.href='/admin/viewreporter'</script>";
    }
    //Update Reporter
    function updatereporter(Request $req)
    {
        $reporters=Reporter::find($req->input('id'));
        $reporters->name=$req->input('name');
        $reporters->age=$req->input('age');
        $reporters->email=$req->input('email');
        $reporters->contact_no=$req->input('contact_no');
        $reporters->job_profile=$req->input('jobprofile');
        $reporters->address=$req->input('address');
        $reporters->district=$req->input('district');
        $reporters->r_image=$req->file('image')->store('reporters');
        $reporters->save();
        return "<script> alert('Reporter updated Successfully') ,location.href='/admin/viewreporter'</script>";
    }
//--------------End Reporter Part--------------------

//--------------Banner part-----------------
    //Loading Page
   public function addbanner(){
       return view('livewire.admin.pages.addbanner');
   }
   //Post Banner
   function postbanner(Request $req){
       $banner = new Banner;
       $banner->b_name=$req->input('b_name');
       $banner->b_image=$req->file('b_image')->store('banners');
       $banner->b_description=$req->input('b_description');
       $banner->save();
       return "<script> alert('Banner Added Successfully') ,location.href='/admin/addbanner'</script>";
   }
   //View Banner
   public function viewbanner(){
       $datas=Banner::all();
       return view('livewire.admin.pages.viewbanner')->with('data',$datas);
   }
   //Edit Banner
   public function editbanner($id){
       $banner= Banner::find($id);
       return view('livewire.admin.pages.editbanner')->with('banner',$banner);
   }
   //Update Banner
   public function updatebanner(Request $req){
       $banner=Banner::find($req->input('id'));
       $banner->b_name=$req->input('b_name');
       $banner->b_image=$req->file('b_image')->store('banners');
       $banner->b_description=$req->input('b_description');
       $banner->save();
       return "<script> alert('Banner updated Successfully') ,location.href='/admin/viewbanner'</script>";
   }
   //Delete banner
   public function deletebanner($id){
       $banner= Banner::find($id);
       $banner->delete();
       return "<script> alert('Banner Deleted Successfully') ,location.href='/admin/viewbanner'</script>";
   }

    

    //post webnews
    //Modified made from here!!!!-----------------------
    // function postwebnews(Request $req)
    // {        
    //     $web = new Webnew;
    //     $web->wn_name=$req->input('name');
    //     $web->wn_type=$req->input('news_type');
    //     $web->wn_description=$req->input('description');   

    //     $image_name = $req->file('image')->getRealPath();
    //     Cloudder::upload($image_name, null, array(
    //     "folder" => "laravel_tutorial",  "overwrite" => FALSE,
    //     "resource_type" => "image", "responsive" => TRUE, "transformation" => array("quality" => "70", "width" => "250", "height" => "250", "crop" => "scale")
    //      ));
    //      $public_id = Cloudder::getPublicId();

    //      $width = 250;
    //      $height = 250;
    //      $image_url = Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height" => $height, "crop" => "scale", "quality" => 70, "secure" => "true"]);
    //      // if ($public_id != null) {
    //      //     $image_public_id_exist = Webnew::select('public_id')->where('id', Auth::user()->id)->get();
    //      //     Cloudder::delete($image_public_id_exist);
    //      // }
    //      $web->wn_image=$image_url;
    //      $web->public_id = $public_id;
    //      // <!-- $user->update();
    //      // return back()->with('success_msg', 'Media successfully updated!'); -->
    //      $web->save();
    //      return "<script> alert('Web News Added Successfully') ,location.href='/admin/addwebnews1'</script>";
    // }

 }
