<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Faq;
use App\Models\User;
use App\Models\Course;
use App\Models\AboutUs;
use App\Models\Service;
use App\Models\Setting;
use App\Models\HomePage;
use App\Models\NewsTrend;
use Illuminate\Http\Request;
use App\Models\CourseOutline;
use App\Models\CourseProject;
use App\Models\CourseSection;
use App\Models\PrivacyPolicy;
use App\Models\CourseCategory;
use App\Models\CourseSchedule;
use App\Models\TermsCondition;
use App\Models\CourseCurriculum;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use App\Models\UserCourseRegistration;

class HomeController extends Controller
{

    //Homepage
    public function index()
    {
        $homePage = HomePage::with('courseOneHomePage', 'courseTwoHomePage', 'courseThreeHomePage')->first();

        $courses = Course::latest()->get();
        $courseCategorys = CourseCategory::latest()->get();

        $courseSections = CourseSection::latest()->get();

        // return view('frontend.pages.home', compact('homePage', 'courseCategorys', 'courses'));

        return view('frontend.pages.home', compact('homePage', 'courseCategorys', 'courseSections', 'courses'));
    }

    //All Course
    public function allCourses()
    {
        $courses = Course::latest()->get();
        return view('frontend.pages.course.allCourses', compact('courses'));
    }

    //courseDetails
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

    public function courseServiceDetails($id, $slug)
    {
        $courseServicedetail = CourseSection::find($id);

        $courses = Course::where('course_section_id', $courseServicedetail->id)->get();
        return view('frontend.pages.service.allCoursesService', compact('courses'));
    }

    public function courseRegistration()
    {
        // Fetch all CourseSections, latest first
        $courseSections = CourseSection::latest()->get();
        return view('frontend.pages.course.courseRegistration', compact('courseSections'));
    }

    public function GetRegisterCategory($course_section_id)
    {

        $cat = CourseCategory::where('course_section_id', $course_section_id)->orderBy('name', 'ASC')->get();
        return json_encode($cat);

    }

    public function GetRegisterCourse($course_category_id)
    {
        $course = Course::where('course_category_id', $course_category_id)->orderBy('name', 'ASC')->get();
        return json_encode($course);
    }

    //Course Registration Store
    public function courseRegistrationStore(Request $request)
    {
        $courseRegister = UserCourseRegistration::insert([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,

            'call_me' => $request->call_me,

            'course_section_id' => $request->course_section_id,
            'course_category_id' => $request->course_category_id,
            'course_id' => $request->course_id,

            'course_type' => $request->course_type,
            'location' => $request->location,
            'course_register_date' => $request->course_register_date,

            // 'ip_address' => $request->ip(),

            'created_at' => now(),

        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make($request->name),
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
        $terms = TermsCondition::where('status', 'active')->first();

        return view('frontend.pages.termsCondition', compact('terms'));
    }

    public function privacyPolicy()
    {
        $privacy = PrivacyPolicy::where('status', 'active')->first();
        return view('frontend.pages.privacyPolicy', compact('privacy'));
    }

    public function searchCourse(Request $request)
    {
        // Validate the request
        $request->validate([
            'course_type' => 'required',
            'course_section_id' => 'required',
            'course_category_id' => 'required',
            'month' => 'required',
            'year' => 'required',
        ], [
            'course_type.required' => 'Please select a Course Type.',
            'course_section_id.required' => 'Please select a Course Section.',
            'course_category_id.required' => 'Please select a Category.',
            'month.required' => 'Please select a Month.',
            'year.required' => 'Please select a Year.',
        ]);

        // Retrieve input values
        $courseType = $request->input('course_type');
        $sectionId = $request->input('course_section_id');
        $categoryId = $request->input('course_category_id');
        $month = $request->input('month');
        $year = $request->input('year');

        // Query courses based on the input criteria
        $courses = Course::where('course_type', $courseType)
            ->where('course_section_id', $sectionId)
            ->where('course_category_id', $categoryId)
            ->whereMonth('created_at', date('m', strtotime($month)))
            ->whereYear('created_at', $year)
            ->get();

        // Return view with filtered courses or redirect back with errors
        if ($courses->isEmpty()) {
            return redirect()->back()->with('error', 'No courses found matching the criteria.');
        }

        return view('frontend.pages.course.search_course', compact('courses'));
    }

}
