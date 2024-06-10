<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Faq;
use App\Models\Row;
use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\Setting;
use App\Models\Homepage;
use App\Models\LearnMore;
use App\Models\WhatWeDoPage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCurriculum;
use App\Models\NewsTrend;
use App\Models\CourseQuery;

class HomeController extends Controller
{

    //Client Authentication

    public function login()
    {
        return view('frontend.auth.login');
    }

    public function register()
    {
        return view('frontend.auth.register');
    }



    //Homepage

    public function index()
    {




        return view('frontend.pages.home');
    }




    //Learn More


    public function LearnMore()
    {
        $learnmore = LearnMore::with([
            'successStoryOne',
            'successStoryTwo',
            'successStoryThree',
        ])->orderBy('id', 'DESC')->first();

        if ($learnmore) {
            $data['learnmore'] = $learnmore;
            $data['story1'] = $learnmore->successStoryOne;
            $data['story2'] = $learnmore->successStoryTwo;
            $data['story3'] = $learnmore->successStoryThree;
            return view('frontend.pages.learnmore.view', $data);
        }
    return redirect()->back()->with('error','No Page Found');
    // return redirect()->route('admin.course_query.index')->with('success', 'Course Query Inserted Successfully!!');

    }

    public function allCourses()
    {
        $courses = Course::latest()->get();
        return view('frontend.pagese.course.allCourses',compact('courses'));
    }

    public function courseDetails($id,$slug)
    {
        $coursedetail = Course::find($id);

        $relatedcourses = Course::latest()->get();

        $courseCurriculams = CourseCurriculum::where('course_id', $coursedetail->id)->get();

        return view('frontend.pagese.course.allCoursesDetails',compact('relatedcourses','coursedetail','courseCurriculams'));
    }


    public function courseRegistration()
    {
        $data = [
            'courses' => Course::latest('id')->get(),
        ];
        return view('frontend.pagese.course.courseRegistration',$data);
    }

    //Course Registration Store
    public function courseRegistrationStore(Request $request)
    {
        CourseQuery::insert([

            'course_id' => $request->course_id,

            'name' => $request->name,
            'email' => $request->email,

            'phone' => $request->phone,

            'message' => $request->message,
            'address' => $request->address,
            'call' => $request->call,


            'ip_address' => $request->ip(),

            'created_at' => now(),

        ]);

        return redirect()->back()->with('success', 'Course Registerd Successfully!!');
    }

    //About
    public function about()
    {
        // $data['about'] = AboutUs::latest('id', 'desc')->firstOrFail();
        // if ($data['about']) {

        //     $data['row1'] = Row::where('id', $data['about']->row_one_id)->first();
        //     $data['row2'] = Row::where('id', $data['about']->row_two_id)->first();
        //     $data['row3'] = Row::where('id', $data['about']->row_three_id)->first();
        // }
        // $data['pdfs'] = DocumentPdf::where('category', 'company')->latest('id', 'desc')->limit(4)->get(['document', 'button_name', 'button_link']);
        return view('frontend.pages.about.about');
    }

    //What We Do

    public function whatWeDo()
    {
        $data['whatwedo'] = WhatWeDoPage::latest('id', 'desc')->firstOrFail();
        if (!empty($data['whatwedo'])) {
            $data['row_two'] = Row::where('id', $data['whatwedo']->row_two_id)->first();
            $data['row_three'] = Row::where('id', $data['whatwedo']->row_three_id)->first();
        }
        return view('frontend.pages.whatwedo.whatwedo', $data);
    }


    //Feature Details
    public function FeatureDetails($id)
    {
        $data['learnmore'] = LearnMore::orderBy('id', 'DESC')->select('learn_mores.industry_header', 'learn_mores.consult_title', 'learn_mores.consult_short_des', 'learn_mores.background_image')->first();
        $data['feature'] = Feature::with(['rowOne', 'rowTwo'])->findOrFail($id);

        $data['row_one'] = $data['feature']->rowOne;
        $data['row_two'] = $data['feature']->rowTwo;

        $data['features'] = Feature::with('rowOne', 'rowTwo')
            ->where('id', '!=', $id)->select('logo', 'id', 'badge', 'header')->get();
        return view('frontend.pages.feature.feature_details', $data);
    }


    //Contact, Support, Location, RFQ
    // public function location()
    // {
    //     $data['setting'] = Site::latest()->first();
    //     $data['locations'] = OfficeLocation::orderBy('name', 'ASC')->get();
    //     $country_ids = $data['locations']->pluck('country_id')->unique()->toArray();
    //     $data['countries']  = Country::whereIn('id', $country_ids)->get();
    //     $data['tech_datas'] = TechnologyData::where('category', 'location')->orderBy('id', 'desc')->limit(6)->get();
    //     return view('frontend.pages.contact.location', $data);
    // }

    public function contact()
    {
        $data['setting'] = Setting::latest()->first();
        return view('frontend.pages.contact.contact', $data);
    }

    public function Support()
    {
        $data['setting'] = Setting::latest()->first();
        return view('frontend.pages.contact.support', $data);
    }

    // Product Seach
    public function courseSearch(Request $request)
    {

        $request->validate(["search" => "required"]);

        $item = $request->search;
        if (Course::where('name', $item)->first()) {
            $data['coursedetail'] = Course::where('name', $item)->first();

            $data['courses'] = Course::latest()->get();

            $data['courseCurriculams'] = CourseCurriculum::where('course_id', $data['coursedetail']->id)->get();

            return view('frontend.pagese.course.allCoursesDetails', $data);
        } else {

            return redirect()->back();
        }
    } // end method


    /// Advance Search Options
    public function globalSearch(Request $request)
    {
        $query = $request->get('term', '');
        // $data['products'] = Product::join('brands', 'products.brand_id', '=', 'brands.id')
        //     ->where('products.name', 'LIKE', '%' . $query . '%')
        //     ->where('products.product_status', 'product')
        //     ->where('brands.status', 'active')
        //     ->limit(10)
        //     ->get(['products.id', 'products.name', 'products.slug', 'products.thumbnail', 'products.price', 'products.discount', 'products.rfq', 'products.qty', 'products.stock']);

        // $data['solutions'] = SolutionDetail::where('name', 'LIKE', '%' . $query . '%')->limit(5)->get(['id', 'name']);
        // $data['industries'] = Industry::where('title', 'LIKE', '%' . $query . '%')->limit(5)->get(['id', 'title']);
        $data['blogs'] = NewsTrend::where('title', 'LIKE', '%' . $query . '%')->limit(5)->get(['id', 'title']);
        // $data['categorys'] = Category::where('title', 'LIKE', '%' . $query . '%')->limit(2)->get(['id', 'title', 'slug']);
        // $data['subcategorys'] = SubCategory::where('title', 'LIKE', '%' . $query . '%')->limit(2)->get(['id', 'title', 'slug']);
        // $data['subsubcategorys'] = SubSubCategory::where('title', 'LIKE', '%' . $query . '%')->limit(1)->get(['id', 'title', 'slug']);
        $data['brands'] = Course::where('name', 'LIKE', '%' . $query . '%')->get(['id', 'name', 'slug']);
        // $data['storys'] = NewsTrend::where('title', 'LIKE', '%' . $query . '%')->limit(5)->get(['id', 'title']);
        // $data['tech_glossys'] = NewsTrend::where('title', 'LIKE', '%' . $query . '%')->limit(5)->get(['id', 'title']);

        return response()->json(view('frontend.partials.search', $data)->render());
    } // end method

    public function TechGlossyDetails($id)
    {
        $data['techglossy'] = NewsTrend::where('id', $id)->firstOrFail();
        //$data['industry'] = Industry::where('id',$id)->first();
        //$data['industry_page'] = IndustryPage::where('industry_id', $data['industry']->id)->get();
        $data['storys'] = NewsTrend::inRandomOrder()->limit(7)->get();
        return view('frontend.pages.tech.techglossy_details', $data);
    }
    public function StoryDetails($id)
    {

        $data['blog'] = NewsTrend::where('id', $id)->firstOrFail();
        $data['storys'] = NewsTrend::inRandomOrder()->limit(4)->get();
        return view('frontend.pages.story.story_details', $data);
    }
    public function faq()
    {
        $data['faq_categorys'] = Faq::select('category')->distinct()->get();
        return view('frontend.pages.policy.faq', $data);
    }
}
