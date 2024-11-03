<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultant;
use App\Models\Book;


class ConsultantsController extends Controller
{
    public function index()
    {
        $advisors = Consultant::with('books')->get();
        return view('consultants', compact('advisors'));
    }

    public function bookConsultation(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'user_id' => 'required|integer', // New user_id field
            'advisor_id' => 'required|integer', // New advisor_id field
            'advisor_id' => 'required|integer',
            'user_name' => 'required|string|max:255', // Updated to user_name
            'user_email' => 'required|email|max:255', // Updated to user_email
            'user_phone' => 'required|string|max:15', // Updated to user_phone
            'consultation_time' => 'required|string',
            'consultation_date' => 'required|date', // New consultation_date field
        ], [
            'user_id.required' => 'يجب تحديد معرف المستخدم',
            'user_id.integer' => 'يجب أن يكون معرف المستخدم رقماً صحيحاً',
            'advisor_id.required' => 'يجب تحديد معرف المستشار',
            'advisor_id.integer' => 'يجب أن يكون معرف المستشار رقماً صحيحاً',
            'advisor_id.required' => 'يجب تحديد المعالج',
            'advisor_id.integer' => 'يجب أن يكون المعالج رقماً صحيحاً',
            'user_name.required' => 'يجب إدخال اسم المستخدم',
            'user_name.string' => 'يجب أن يكون اسم المستخدم نصاً',
            'user_name.max' => 'يجب ألا يتجاوز اسم المستخدم 255 حرفاً',
            'user_email.required' => 'يجب إدخال البريد الإلكتروني',
            'user_email.email' => 'يجب إدخال بريد إلكتروني صالح',
            'user_email.max' => 'يجب ألا يتجاوز البريد الإلكتروني 255 حرفاً',
            'user_phone.required' => 'يجب إدخال رقم الهاتف',
            'user_phone.string' => 'يجب أن يكون رقم الهاتف نصاً',
            'user_phone.max' => 'يجب ألا يتجاوز رقم الهاتف 15 حرفاً',
            'consultation_time.required' => 'يجب تحديد وقت الاستشارة',
            'consultation_time.string' => 'يجب أن يكون وقت الاستشارة نصاً',
            'consultation_date.required' => 'يجب إدخال تاريخ الحجز',
            'consultation_date.date' => 'يجب أن يكون تاريخ الحجز تاريخاً صحيحاً',
        ]);
    
        // Create a new consultation record
        $consultation = Book::create([
            'user_id' => $validated['user_id'],
            'consultant_id' => $validated['advisor_id'],
            'advisor_id' => $validated['advisor_id'],
            'user_name' => $validated['user_name'],
            'user_email' => $validated['user_email'],
            'user_phone_number' => $validated['user_phone'],
            'consultation_time' => $validated['consultation_time'],
            'booking_date' => $validated['consultation_date'],
            'status' => 'pending', 
        ]);
    
    
        // Redirect or return a response
        return redirect()->back()->with('success', 'تم حجز موعد الاستشارة بنجاح');
    }

}

