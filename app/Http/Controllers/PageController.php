<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{   protected $module ="";

    public function __construct(Request $request)
    {
        $this->module = $request->segment(1);
    }
    public function index()
    {
        $items = DB::table('items')->limit(3)->get();
        $recentPosts = $this->getRecentPost();
        $introBanner = $this->getIntroBanner();
        $bussinessBanners = $this->getBussinessBanner();
        $partnerBanners = $this->getPartnersBanner();
        $managerBanners =$this->getManagerBanner();
        $headBanners =$this->getHeadBanner();
        $serviceBanners =$this->getServiceBanner();
        $enviromentBanners = $this->getEnviromentBanner();
        return view('frontend.page', ['items'=>$items,
            'recentPosts'=>$recentPosts,
            'introBanner'=>$introBanner,
            'bussinessBanners'=>$bussinessBanners,
            'partnerBanners'=>$partnerBanners,
            'managerBanners'=>$managerBanners,
            'headBanners'=> $headBanners,
            'serviceBanners'=> $serviceBanners,
            'enviromentBanners'=>$enviromentBanners,
        ]);
    }
    public function getRecentPost()
    {
        return
            Item::where('position','recent_post-banner')->where('status',1)
                ->orderBy('created_at', 'desc')->get(['id','title','image','created_at','content','description']);
    }

    public function getIntroBanner()
    {
        return
            Item::where('position','intro-banner')->where('status',1)->get(['id','title','image','description']);
    }
    public function getBussinessBanner()
    {
        return
            Item::where('position','business-banner')->where('status',1)->get(['id','title','image','description','content']);
    }
    public function getPartnersBanner()
    {
        return
            Item::where('position','partner-banner')->where('status',1)->limit(4)->get(['id','title','image','description','content']);
    }
    public function getManagerBanner()
    {
        return
            Item::where('position','manager-banner')->where('status',1)->get(['id','title','image','description','content']);
    }
    public function getHeadBanner()
    {
        return
            Item::where('position','head-banner')->where('status',1)->get(['id','title','image','description','content']);
    }
    public function getServiceBanner()
    {
        return
            Item::where('position','service-banner')->where('status',1)->get(['id','title','content']);
    }
    public function getEnviromentBanner()
    {
        return
            Item::where('position','enviroment-banner')->get();
    }


}
