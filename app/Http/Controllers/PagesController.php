<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

  public function index()
  {
      return view('index');
  }
// About Controller
  public function about()
  {
      return view('pages.about.about');
  }
  public function aboutStory()
  {
      return view('pages.about.story');
  }
  public function aboutFof()
  {
      return view('pages.about.fof');
  }
  public function aboutTeam()
  {
      return view('pages.about.team');
  }
  public function aboutPartner()
  {
      return view('pages.about.partner');
  }

}
