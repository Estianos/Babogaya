<?php
 
 namespace App\Http\Controllers;

 class PagesController extends Controller
 {
 	public function getRooms()
 	{
 		return view('pages.rooms');
 	}
 	public function getMalls()
 	{
 		return view('pages.mall');
 	}
 	public function getCarrental()
 	{
 		return view('pages.carrental');
 	}
 	public function getCinema()
 	{
 		return view('pages.cinema');
 	}

    public function getVacancy()
 	{
 		return view('pages.vacancy');
 	}
 	public function getMember()
 	{
 		return view('pages.member');
 	}
 	public function getAbout()
 	{
       return view('pages.about');
 	}
   public function getContact()
 	{
       return view('pages.contact');
 	}
 	public function getGallery()
 	{
      return view('pages.gallery');
 	}
 	public function getIndex()
 	{
      return view('pages.index');
 	}
 	public function getMenu()
 	{
      return view('pages.menu');
 	}
   public function getReservation()
 	{
      return view('pages.reservation');
 	}

 }





 ?>
