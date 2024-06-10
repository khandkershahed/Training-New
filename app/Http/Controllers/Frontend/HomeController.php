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

    //Homepage

    public function index()
    {
        return view('frontend.pages.home');
    }


    //Learn More


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

        return view('frontend.pages.about');
    }



    public function contact()
    {
        return view('frontend.pages.contact');
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