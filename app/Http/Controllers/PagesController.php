<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index(){
  $title ="Welcome to Our Online Learning Community: From Early Childhood to the Adult Leaner";
  return view('pages.index') ->with('title', $title);
      }
      public function tutors(){
      return view('pages.tutors');
          }


}
