<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Traits\FileUpload;

class StudentDashboardController extends Controller
{
    use FileUpload;
    public function index(): View
    {
        return view('frontend.student-dashboard.index');
    }

    public function becomeInstructor(): View
    {
        if(auth()->user()->role == 'instructor') abort(403);
        return view('frontend.student-dashboard.become-instructor.index');
    }


    function becomeInstructorUpdate(Request $request, User $user): RedirectResponse
    {
        $request->validate(['document' => ['required', 'mimes:pdf,doc,docx,jpg,png', 'max:12000']]);

        $filePath = $this->uploadFile($request->file('document'));
        $user->update([
            'approve_status' => 'pending',
            'document' => $filePath
        ]);

        return redirect()->route('student.dashboard');
    }
}
