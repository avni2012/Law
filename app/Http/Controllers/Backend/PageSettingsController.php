<?php

namespace App\Http\Controllers\Backend;

use App\Helper\Frontpages;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\PageSettingsRequest;
use App\Models\Banner;
use App\Models\CommonSetting;
use App\Models\CostManagementSetting;
use App\Models\HomePageSetting;
use App\Models\Page;
use App\Models\PageSetting;
use DataTables;
use Illuminate\Http\Request;

class PageSettingsController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request) {
		try {
			if ($request->ajax()) {
				$pages = PageSetting::latest()->get();
				return DataTables::of($pages)
					->addIndexColumn()
					->addColumn('created_at', function ($row) {
						$date = '';
						$date = isset($row->created_at) ? \Carbon\Carbon::parse($row->created_at)->format('jS F, Y') : '-';
						return $date;
					})
					->addColumn('banner_image', function ($row) {
						$image = '';
						if ($row->banner_image != null) {
							$image_url = asset('public/backend/images/pages/' . $row->banner_image);
							$image     = '<img src="' . $image_url . '" height="80" width="80">';
						}
						return $image;
					})
					->addColumn('action', function ($row) {
						$btn = '';
						$btn .= '<a href="' . url()->current() . '/' . $row->id . '/edit' . '" class="list-icons-item text-primary" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="icon-pencil7 edt-icn"></i></a>';
						$btn .= '<a href="javascript:void(0)" onclick="return deleteSetting(' . $row->id . ',this)" class="list-icons-item text-danger ml-1" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="icon-bin trsh-icn"></i></a>';
						return $btn;
					})
					->rawColumns(['action', 'created_at', 'banner_image'])
					->make(true);
			}
			return view('backend.page_settings.index');
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
		try {
			$pages = Frontpages::pages();
			return view('backend.page_settings.create', compact('pages'));
		} catch (Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(PageSettingsRequest $request) {
		try {
			$page_settings                    = new PageSetting();
			$page_settings->page              = $request->page;
			$page_settings->title             = $request->title;
			$page_settings->short_description = $request->short_description;
			$imageName                        = '';
			if ($request->file('banner_image')) {
				$imageName = $request->banner_image->getClientOriginalName();
				$request->banner_image->move(public_path('/backend/images/pages/'), $imageName);
				$page_settings->banner_image = $imageName;
			}
			if ($page_settings->save()) {
				return redirect()->route('admin.home-page-settings.index')->with('success', 'Settings added successfully.');
			} else {
				return redirect()->route('admin.home-page-settings.index')->with('error', 'Something went wrong, try again later.');
			}
		} catch (Exception $e) {
			return redirect()->route('admin.home-page-settings.index')->with('error', $e->getMessage());
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
		try {
			$page_setting = PageSetting::findOrFail($id);
			$pages        = Frontpages::pages();
			if (!$page_setting) {
				return redirect()->route('admin.home-page-settings.index')->with('error', 'Data Not Found.');
			}
			return view('backend.page_settings.edit', compact('pages', 'page_setting'));
		} catch (Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(PageSettingsRequest $request, $id) {
		try {
			$page_settings = PageSetting::find($id);
			if ($page_settings) {
				$page_settings->page              = $request->page;
				$page_settings->title             = $request->title;
				$page_settings->short_description = $request->short_description;
				$imageName                        = '';
				if ($request->file('banner_image')) {
					$imageName = $request->banner_image->getClientOriginalName();
					$request->banner_image->move(public_path('/backend/images/pages/'), $imageName);
					$page_settings->banner_image = $imageName;
				}
				if ($page_settings->save()) {
					return redirect()->route('admin.home-page-settings.index')->with('success', 'Settings added successfully.');
				} else {
					return redirect()->route('admin.home-page-settings.index')->with('error', 'Something went wrong, try again later.');
				}
			} else {
				return redirect()->route('admin.home-page-settings.index')->with('error', 'Settings not found.');
			}
		} catch (Exception $e) {
			return redirect()->route('admin.home-page-settings.index')->with('error', $e->getMessage());
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

	public function deletePageSettings($id) {
		try {
			if ($id) {
				$page_settings = PageSetting::find($id);
				$page_settings->delete();
				return response()->json(['success' => 'Page settings deleted successfully.', 'status' => 1], 200);
			} else {
				return response()->json(['error' => 'Setting not found.', 'status' => 0], 400);
			}
		} catch (Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}

	public function deletePageSettingImage(Request $request) {
		try {
			if ($request->key) {
				$page_settings = PageSetting::find($request->key);
				if ($page_settings) {
					PageSetting::where('id', $request->key)->update([
						'banner_image' => null,
					]);
					return response()->json(['success' => 'Image deleted successfully.', 'status' => 1], 200);
				} else {
					return response()->json(['error' => 'Setting not found.', 'status' => 0], 400);
				}
			} else {
				return response()->json(['error' => 'Setting not found.', 'status' => 0], 400);
			}
		} catch (Exception $e) {
			return response()->json(['error' => $e->getMessage(), 'status' => 0], 400);
		}
	}

	public function homePageSettings() {
		try {
			$banner_arr = array();
			$url        = array();
			$pages      = Frontpages::pages();
			$main_page  = Page::where('name', 'home')->first();
			if (!$main_page) {
				return view('backend.pages.home', compact('pages', 'main_page'));
			}
			$home_page_settings = HomePageSetting::first();
			$banners            = Banner::where('page_id', $main_page->id)->get();
			if (count($banners) > 0) {
				foreach ($banners as $banner) {
					$url[]               = "\"" . asset('public/backend/images/pages/' . $banner->banner_image) . "\"";
					$banner_arr[]['key'] = $banner->id;
				}
			}
			$banner_data = implode(',', $url);
			$image_key   = json_encode($banner_arr);
			return view('backend.pages.home', compact('pages', 'main_page', 'home_page_settings', 'banners', 'image_key', 'banner_data'));
		} catch (Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}

	public function storePageSettings(Request $request) {
		try {
			$this->validate($request, [
				'page' => 'required',
			]);
			if ($request->page != null) {
				$page = Page::where('name', $request->page)->first();
				if (!$page) {
					$page = new Page();
				}
				$page->name              = $request->page;
				$page->title             = $request->title;
				$page->short_description = $request->short_description;
				$page->save();

				// Section settings
				$home_page_settings = HomePageSetting::first();
				if (!$home_page_settings) {
					$home_page_settings = new HomePageSetting();
				}
				$home_page_settings->section1_heading                  = $request->section1_heading;
				$home_page_settings->section1_sub_heading              = $request->section1_sub_heading;
				$home_page_settings->section1                          = $request->section_1;
				$home_page_settings->section2_heading                  = $request->section2_heading;
				$home_page_settings->section2_sub_heading              = $request->section2_sub_heading;
				$home_page_settings->section2                          = $request->section_2;
				$home_page_settings->section2_button_name              = $request->section2_button_name;
				$home_page_settings->section2_button_link              = $request->section2_button_link;
				$home_page_settings->section3_heading                  = $request->section3_heading;
				$home_page_settings->section3_sub_heading              = $request->section3_sub_heading;
				$home_page_settings->section3                          = $request->section_3;
				$home_page_settings->text1                             = $request->text1;
				$home_page_settings->text2                             = $request->text2;
				$home_page_settings->text3                             = $request->text3;
				$home_page_settings->text4                             = $request->text4;
				$home_page_settings->advice_link                       = $request->advice_link;
				$home_page_settings->drafting_link                     = $request->drafting_link;
				$home_page_settings->settlement_conference_team_link   = $request->settlement_conference_team_link;
				$home_page_settings->court_appearances_link            = $request->court_appearances_link;
				$home_page_settings->expert_reports_link               = $request->expert_reports_link;
				$home_page_settings->alternative_costs_resolution_link = $request->alternative_costs_resolution_link;
				$home_page_settings->cle_seminars_link                 = $request->cle_seminars_link;
				$home_page_settings->instruction_forms_link            = $request->instruction_forms_link;
				if ($request->file('advice_image')) {
					$imageName = $request->advice_image->getClientOriginalName();
					$request->advice_image->move(public_path('/backend/images/cms_pages/'), $imageName);
					$home_page_settings->advice_image = $imageName;
				}
				if ($request->file('drafting_image')) {
					$imageName = $request->drafting_image->getClientOriginalName();
					$request->drafting_image->move(public_path('/backend/images/cms_pages/'), $imageName);
					$home_page_settings->drafting_image = $imageName;
				}
				if ($request->file('settlement_conference_team_image')) {
					$imageName = $request->settlement_conference_team_image->getClientOriginalName();
					$request->settlement_conference_team_image->move(public_path('/backend/images/cms_pages/'), $imageName);
					$home_page_settings->settlement_conference_team_image = $imageName;
				}
				if ($request->file('court_appearances_image')) {
					$imageName = $request->court_appearances_image->getClientOriginalName();
					$request->court_appearances_image->move(public_path('/backend/images/cms_pages/'), $imageName);
					$home_page_settings->court_appearances_image = $imageName;
				}
				if ($request->file('expert_report_image')) {
					$imageName = $request->expert_report_image->getClientOriginalName();
					$request->expert_report_image->move(public_path('/backend/images/cms_pages/'), $imageName);
					$home_page_settings->expert_report_image = $imageName;
				}
				if ($request->file('alternative_costs_resolution_image')) {
					$imageName = $request->alternative_costs_resolution_image->getClientOriginalName();
					$request->alternative_costs_resolution_image->move(public_path('/backend/images/cms_pages/'), $imageName);
					$home_page_settings->alternative_costs_resolution_image = $imageName;
				}
				if ($request->file('cle_seminars_image')) {
					$imageName = $request->cle_seminars_image->getClientOriginalName();
					$request->cle_seminars_image->move(public_path('/backend/images/cms_pages/'), $imageName);
					$home_page_settings->cle_seminars_image = $imageName;
				}
				if ($request->file('instructions_forms_image')) {
					$imageName = $request->instructions_forms_image->getClientOriginalName();
					$request->instructions_forms_image->move(public_path('/backend/images/cms_pages/'), $imageName);
					$home_page_settings->instructions_forms_image = $imageName;
				}
				if ($request->file('section_3_image')) {
					$imageName = $request->section_3_image->getClientOriginalName();
					$request->section_3_image->move(public_path('/backend/images/cms_pages/'), $imageName);
					$home_page_settings->section3_image = $imageName;
				}
				$home_page_settings->save();

				// Banners
				if ($request->file('banner_image')) {
					$files = $request->file('banner_image');
					foreach ($files as $key => $file) {
						$imageName = $file->getClientOriginalName();
						$file->move(public_path('/backend/images/pages/'), $imageName);
						Banner::upsert(
							[
								['page_id' => $page->id, 'banner_image' => $imageName],
							],
							'page_id'
						);
					}
				}
				return redirect()->route('admin.home')->with('success', 'Home page settings updated successfully.');
			}
		} catch (Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}

	public function deleteBanners(Request $request) {
		if ($request->key != null) {
			$banners = Banner::where('id', $request->key)->delete();
			return $banners;
		} else {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}

	public function commonPageSettings() {
		try {
			$pages     = Frontpages::pages();
			$main_page = Page::where('name', request()->segment(2))->first();
			if (!$main_page) {
				if (request()->segment(2) == "advices") {
					return view('backend.pages.advices', compact('pages', 'main_page'));
				} else if (request()->segment(2) == "court-appearances") {
					return view('backend.pages.court_appearances', compact('pages', 'main_page'));
				} else if (request()->segment(2) == "expert-reports") {
					return view('backend.pages.expert_reports', compact('pages', 'main_page'));
				} else if (request()->segment(2) == "cle-seminars") {
					return view('backend.pages.cle_seminars', compact('pages', 'main_page'));
				} else if (request()->segment(2) == "instruction-forms") {
					return view('backend.pages.instruction_forms', compact('pages', 'main_page'));
				} else if (request()->segment(2) == "qca-legal") {
					return view('backend.pages.qca_legal', compact('pages', 'main_page'));
				}
			}
			$banner = Banner::where('page_id', $main_page->id)->first();
			if (request()->segment(2) == "advices") {
				$advice = CommonSetting::where('page_id', $main_page->id)->first();
				return view('backend.pages.advices', compact('pages', 'advice', 'main_page', 'banner'));
			} else if (request()->segment(2) == "court-appearances") {
				$court_appearances = CommonSetting::where('page_id', $main_page->id)->first();
				return view('backend.pages.court_appearances', compact('pages', 'court_appearances', 'main_page', 'banner'));
			} else if (request()->segment(2) == "expert-reports") {
				$expert_reports = CommonSetting::where('page_id', $main_page->id)->first();
				return view('backend.pages.expert_reports', compact('pages', 'expert_reports', 'main_page', 'banner'));
			} else if (request()->segment(2) == "cle-seminars") {
				$cle_seminars = CommonSetting::where('page_id', $main_page->id)->first();
				return view('backend.pages.cle_seminars', compact('pages', 'cle_seminars', 'main_page', 'banner'));
			} else if (request()->segment(2) == "instruction-forms") {
				$instruction_forms = CommonSetting::where('page_id', $main_page->id)->first();
				return view('backend.pages.instruction_forms', compact('pages', 'instruction_forms', 'main_page', 'banner'));
			} else if (request()->segment(2) == "qca-legal") {
				$qca_legal = CommonSetting::where('page_id', $main_page->id)->first();
				return view('backend.pages.qca_legal', compact('pages', 'qca_legal', 'main_page', 'banner'));
			}
		} catch (Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}

	public function storeCommonPageSettings(Request $request) {
		try {
			$this->validate($request, [
				'page' => 'required',
			]);
			if ($request->page != null) {
				$page = Page::where('name', $request->page)->first();
				if (!$page) {
					$page = new Page();
				}
				$page->name              = $request->page;
				$page->title             = $request->title;
				$page->short_description = $request->short_description;
				$page->save();

				// Section settings
				$common_settings = CommonSetting::where('page_id', $page->id)->first();
				if (!$common_settings) {
					$common_settings = new CommonSetting();
				}
				$common_settings->page_id              = $page->id;
				$common_settings->section1_heading     = $request->section1_heading;
				$common_settings->section1_sub_heading = $request->section1_sub_heading;
				$common_settings->section1             = $request->section_1;
				$common_settings->save();
				// Banners
				if ($request->file('banner_image')) {
					$imageName = $request->banner_image->getClientOriginalName();
					$request->banner_image->move(public_path('/backend/images/pages/'), $imageName);
					Banner::upsert(
						[
							['page_id' => $page->id, 'banner_image' => $imageName],
						],
						'page_id'
					);
				}
				return redirect()->back()->with('success', 'Settings updated successfully.');
			}
		} catch (Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}

	public function costManagementPageSettings() {
		try {
			$pages     = Frontpages::pages();
			$main_page = Page::where('name', 'cost-management')->first();
			if (!$main_page) {
				return view('backend.pages.cost_management', compact('pages', 'main_page'));
			}
			$cost_management = CostManagementSetting::first();
			$banner          = Banner::where('page_id', $main_page->id)->first();
			return view('backend.pages.cost_management', compact('pages', 'main_page', 'cost_management', 'banner'));
		} catch (Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}

	public function storeCostManagementPageSettings(Request $request) {
		try {
			$this->validate($request, [
				'page' => 'required',
			]);
			if ($request->page != null) {
				$page = Page::where('name', $request->page)->first();
				if (!$page) {
					$page = new Page();
				}
				$page->name              = $request->page;
				$page->title             = $request->title;
				$page->short_description = $request->short_description;
				$page->save();

				// Section settings
				$cost_management_settings = CostManagementSetting::first();
				if (!$cost_management_settings) {
					$cost_management_settings = new CostManagementSetting();
				}
				$cost_management_settings->section1_heading     = $request->section1_heading;
				$cost_management_settings->section1_sub_heading = $request->section1_sub_heading;
				$cost_management_settings->section1             = $request->section_1;
				$cost_management_settings->section1_text1       = $request->section1_text1;
				$cost_management_settings->section1_text2       = $request->section1_text2;
				$cost_management_settings->section1_text3       = $request->section1_text3;
				$cost_management_settings->section1_text4       = $request->section1_text4;
				$cost_management_settings->section2_heading     = $request->section2_heading;
				$cost_management_settings->section2_sub_heading = $request->section2_sub_heading;
				$cost_management_settings->section2             = $request->section_2;
				$cost_management_settings->section3_heading     = $request->section3_heading;
				$cost_management_settings->section3_sub_heading = $request->section3_sub_heading;
				$cost_management_settings->section3             = $request->section_3;
				$cost_management_settings->section4_heading     = $request->section4_heading;
				$cost_management_settings->section4_sub_heading = $request->section4_sub_heading;
				$cost_management_settings->section4             = $request->section_4;
				$cost_management_settings->section5_heading     = $request->section5_heading;
				$cost_management_settings->section5_sub_heading = $request->section5_sub_heading;
				$cost_management_settings->section5             = $request->section_5;
				if ($request->file('section_2_image')) {
					$imageName = $request->section_2_image->getClientOriginalName();
					$request->section_2_image->move(public_path('/backend/images/cms_pages/'), $imageName);
					$cost_management_settings->section2_image = $imageName;
				}
				if ($request->file('section_4_image')) {
					$imageName = $request->section_4_image->getClientOriginalName();
					$request->section_4_image->move(public_path('/backend/images/cms_pages/'), $imageName);
					$cost_management_settings->section4_image = $imageName;
				}
				$cost_management_settings->save();

				// Banners
				if ($request->file('banner_image')) {
					$imageName = $request->banner_image->getClientOriginalName();
					$request->banner_image->move(public_path('/backend/images/pages/'), $imageName);
					Banner::upsert(
						[
							['page_id' => $page->id, 'banner_image' => $imageName],
						],
						'page_id'
					);
				}
				return redirect()->back()->with('success', 'Cost management page settings updated successfully.');
			}
		} catch (Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}
}
