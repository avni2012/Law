<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Exception;
use Illuminate\Http\Request;

class ContactUsController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		try {
			$contact_us = ContactUs::first();
			return view('backend.contact_us.index', compact('contact_us'));
		} catch (Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$this->validate($request, [
			'address' => 'required|min:2',
			'contact' => 'required',
			'email'   => 'required',
		]);
		$contact_us                                               = new ContactUs();
		$contact_us->enquiries_email                              = $request->enquiries_email;
		$contact_us->general_information_and_administration_email = $request->general_information_and_administration_email;
		$contact_us->privacy_email                                = $request->privacy_email;
		$contact_us->it_email                                     = $request->it_email;
		$contact_us->legal_email                                  = $request->legal_email;
		$contact_us->address                                      = $request->address;
		$contact_us->contact                                      = $request->contact;
		$contact_us->email                                        = $request->email;
		$contact_us->website                                      = $request->website;
		$contact_us->other_details                                = $request->other_details;
		$contact_us->map                                          = $request->map;
		$contact_us->phone                                        = $request->phone;
		$contact_us->registered_company                           = $request->registered_company;
		$contact_us->acn                                          = $request->acn;
		$contact_us->abn                                          = $request->abn;
		if ($contact_us->save()) {
			return redirect()->back()->with('success', 'Contact us settings saved successfully.');
		} else {
			return redirect()->back()->with('error', 'Something went wrong, try again later.');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$this->validate($request, [
			'address' => 'required|min:2',
			'contact' => 'required',
			'email'   => 'required',
		]);
		$contact_us = ContactUs::findOrFail($id);
		if ($id) {
			$contact_us->enquiries_email                              = $request->enquiries_email;
			$contact_us->general_information_and_administration_email = $request->general_information_and_administration_email;
			$contact_us->privacy_email                                = $request->privacy_email;
			$contact_us->it_email                                     = $request->it_email;
			$contact_us->legal_email                                  = $request->legal_email;
			$contact_us->address                                      = $request->address;
			$contact_us->contact                                      = $request->contact;
			$contact_us->email                                        = $request->email;
			$contact_us->website                                      = $request->website;
			$contact_us->other_details                                = $request->other_details;
			$contact_us->map                                          = $request->map;
			$contact_us->phone                                        = $request->phone;
			$contact_us->registered_company                           = $request->registered_company;
			$contact_us->acn                                          = $request->acn;
			$contact_us->abn                                          = $request->abn;
			if ($contact_us->save()) {
				return redirect()->back()->with('success', 'Contact us settings saved successfully.');
			} else {
				return redirect()->back()->with('error', 'Something went wrong, try again later.');
			}
		} else {
			return redirect()->back()->with('error', 'Contact us details not found.');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}
