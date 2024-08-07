<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseEnrollController extends Controller
{
    public function AddToCartCourse(Request $request)
    {
        if (Auth::check()) {
            $id = $request->course_id;

            $course = Course::findOrFail($id);

            $cartItem = Cart::search(function ($cartItem, $rowId) use ($id) {
                return $cartItem->id === $id;
            });

            if ($cartItem->isNotEmpty()) {

                return response()->json(['error' => 'This Course Has Already Added']);
            }

            Cart::add([

                'id' => $id,

                'name' => $course->name,
                'qty' => 1,
                'price' => $course->price,
                'weight' => 1,

                'options' => [
                    'image' => $course->thumbnail_image,
                    // 'color' => $request->color,
                ],

            ]);

            return response()->json(['success' => 'Successfully Added on Your Course']);
        } else {
            return response()->json(['error' => 'At First Login Your Account']);
        }
    }

}
