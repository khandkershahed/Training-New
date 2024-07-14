<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseCurriculum;
use App\Models\CourseOutline;
use App\Models\CourseProject;
use App\Models\CourseQuery;
use App\Models\CourseSchedule;
use App\Models\Faq;
use App\Models\HomePage;
use App\Models\NewsTrend;
use App\Models\PrivacyPolicy;
use App\Models\Service;
use App\Models\Setting;
use App\Models\TermsCondition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{

    //Homepage
    public function index()
    {
        $homePage = HomePage::with('courseOneHomePage', 'courseTwoHomePage', 'courseThreeHomePage')->first();

        $courses = Course::latest()->get();
        $courseCategorys = CourseCategory::latest()->get();

        return view('frontend.pages.home', compact('homePage', 'courseCategorys', 'courses'));

        return view('frontend.pages.home', compact('homePage', 'courseCategorys', 'courses'));
    }

    //Learn More
    public function allCourses()
    {
        $courses = Course::latest()->get();
        return view('frontend.pages.course.allCourses', compact('courses'));
    }

    public function courseDetails($id, $slug)
    {
        $coursedetail = Course::find($id);

        $relatedcourses = Course::latest()->get();

        $courseCurriculams = CourseCurriculum::where('course_id', $coursedetail->id)->get();

        $courseSchedules = CourseSchedule::where('course_id', $coursedetail->id)->get();

        $courseOutlines = CourseOutline::where('course_id', $coursedetail->id)->get();

        $courseProjects = CourseProject::where('course_id', $coursedetail->id)->get();

        return view('frontend.pages.course.allCoursesDetails', compact('relatedcourses', 'coursedetail', 'courseCurriculams', 'courseSchedules', 'courseOutlines', 'courseProjects'));
    }

    public function courseRegistration()
    {
        $data = [
            'courses' => Course::latest('id')->get(),
        ];
        return view('frontend.pages.course.courseRegistration', $data);
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
        $about = AboutUs::find(1);
        return view('frontend.pages.about', compact('about'));
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

            return view('frontend.pages.course.allCoursesDetails', $data);
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
        $data['faqs'] = Faq::orderBy('order', 'ASC')->get();
        return view('frontend.pages.faq', $data);
    }

    //Service
    // public function service()
    // {
    //     $service = Service::first();
    //     return view('frontend.pages.service.service', compact('service'));
    // }

    public function serviceDetails($id, $slug)
    {
        $service = Service::with('courses')->find($id);
        $courses = $service->courses;
        $courseSections = CourseCategory::latest('id')->get();
        return view('frontend.pages.service.service', compact('service', 'courses', 'courseSections'));
    }

    public function GetCategory($course_section_id)
    {

        $subCat = CourseCategory::where('course_section_id', $course_section_id)->orderBy('name', 'ASC')->get();

        return json_encode($subCat);
    }

    public function getCourseName(Request $request)
    {
        $course_category_id = $request->course_category_id;
        $courses = Course::whereNotNull('course_category_id')->where('course_category_id', $course_category_id)
            ->orderBy('name', 'ASC')
            ->get();

        // Check if courses are found
        if ($courses->isEmpty()) {
            return response()->json(['error' => 'No courses found for the selected category.']);
        }

        // Render the view with the found courses
        $table_view = View::make('frontend.pages.service.partials.course_table', compact('courses'))->render();

        return response()->json(['table_view' => $table_view]);
    }

    public function GetCourse($course_section_id)
    {
        $course = Course::where('course_section_id', $course_section_id)->get();
        return json_encode($course);
    }

    public function termsCondition()
    {
        $terms = TermsCondition::where('status','active')->first();

        return view('frontend.pages.termsCondition', compact('terms'));
    }
    public function privacyPolicy()
    {
        $privacy = PrivacyPolicy::where('status','active')->first();
        return view('frontend.pages.privacyPolicy', compact('privacy'));
    }
}
