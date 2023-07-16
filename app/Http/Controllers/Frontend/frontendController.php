<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\About;
use App\Models\Backend\Album;
use App\Models\Backend\Banner;
use App\Models\Backend\Gallery;
use App\Models\Backend\Knowledge;
use App\Models\Backend\Link;
use App\Models\Backend\News;
use App\Models\Backend\Partner;
use App\Models\Backend\Phone;
use App\Models\Backend\WorkingArea;
use App\Models\Menu;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    //Show data to  the front end
    public function views(){
        $socialMedia = Link::get()->all();
        $leafMenus = Menu::whereNull('parent_id')
            ->whereDoesntHave('children')
            ->get();
        $phoneData = Phone::first();
        $albumData = Album::take(3)->get();
        $partner = Partner::get()->all();
        $newsData = News::where('category', 1)->get()->first();
        $eventsData = News::where('category', 2)->get()->first();
        $workingAreas = WorkingArea::get()->all();
        $aboutFirstData = About::get()->first();
        $knowledgeDatas = Knowledge::get()->all();
        $bannerData['records'] = Banner::get()->all();
        return view('index', compact('bannerData', 'aboutFirstData', 'workingAreas', 'knowledgeDatas', 'newsData', 'eventsData', 'partner', 'albumData', 'phoneData', 'leafMenus', 'socialMedia'));
    }
    public function innerviews(){
        $socialMedia = Link::get()->all();
        $leafMenus = Menu::whereNull('parent_id')
            ->whereDoesntHave('children')
            ->get();
        $phoneData = Phone::first();
        return view('layouts.innerpage', compact('socialMedia', 'leafMenus', 'phoneData'));
    }

    public function about(){
        $aboutData['records'] = About::get()->all();
        return view('inner-pages.aboutus',compact('aboutData'));
    }
    public function workingArea(WorkingArea $working_area){
        return view('inner-pages.workingarea',compact('working_area'));
    }

    public function allWorkingArea(){
        $working_areas = WorkingArea::get()->all();
        return view('inner-pages.allWorkingAreas', compact('working_areas'));
    }
    public function allKnowledge(){
        $knowledgeDatas = Knowledge::get()->all();
        return view('inner-pages.knowledge', compact('knowledgeDatas'));
    }
    public function allNews($id){
        $newsData = News::where('category', $id)->get()->all();
        return view('inner-pages.newsList', compact('newsData'));
    }
    public function singleNews($id){
        $newsSingle = News::find($id);
        return view('inner-pages.news_event', compact('newsSingle'));
    }
    public function allGallery(){
        $albumData = Album::get()->all();
        return view('inner-pages.gallery', compact('albumData'));
    }
    public function allNewsEvents(){
        $newsData = News::get()->all();
        return view('inner-pages.allNewsEvents', compact('newsData'));
    }
    public function search(Request $request){

        $searchTerm = $request->input('name');

        // Search for news
        $newsData = News::where('title', 'like', '%' . $searchTerm . '%')
            ->first();
        return view('inner-pages.searchNews', compact('newsData'));
    }


}
