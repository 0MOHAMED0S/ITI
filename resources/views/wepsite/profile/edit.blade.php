@extends('Layouts.wep')
@section('content')
<style>
    /* الصفحة كاملة */
    .profile-page {
        background: #f4f6f9;
        padding: 50px 0;
        font-family: 'Segoe UI', sans-serif;
    }

    /* العنوان الأساسي */
    .profile-header {
        font-size: 26px;
        font-weight: bold;
        color: #333;
        margin-bottom: 30px;
        padding-left: 15px;
        border-left: 5px solid #4f46e5;
    }

    /* الكارت */
    .profile-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0px 4px 12px rgba(0,0,0,0.08);
        padding: 25px;
        margin-bottom: 25px;
        transition: transform 0.2s ease;
    }

    /* حركة عند المرور */
    .profile-card:hover {
        transform: translateY(-3px);
    }

    /* عنوان كل جزء */
    .section-title {
        font-size: 18px;
        font-weight: bold;
        color: #4f46e5;
        margin-bottom: 20px;
    }

    /* الحقول */
    .form-group {
        margin-bottom: 15px;
    }

    input, select, textarea {
        width: 100%;
        padding: 10px;
        border-radius: 6px;
        border: 1px solid #ccc;
        font-size: 14px;
        outline: none;
        transition: border-color 0.2s ease;
    }

    input:focus, select:focus, textarea:focus {
        border-color: #4f46e5;
    }

    /* الزرار */
    button {
        display: inline-block;
        background: #4f46e5;
        color: #fff;
        font-weight: bold;
        border: none;
        padding: 10px 16px;
        border-radius: 6px;
        cursor: pointer;
        transition: background 0.2s ease;
    }

    button:hover {
        background: #3730a3;
    }
</style>

<div class="profile-page">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
        <!-- عنوان الصفحة -->
        <h2 class="profile-header">{{ __('Profile') }}</h2>

        <!-- تعديل البيانات الشخصية -->
        <div class="profile-card">
            <h3 class="section-title">Update Profile Information</h3>
            @include('profile.partials.update-profile-information-form')
        </div>

        <!-- تعديل كلمة المرور -->
        <div class="profile-card">
            <h3 class="section-title">Update Password</h3>
            @include('profile.partials.update-password-form')
        </div>

        <!-- حذف الحساب -->
        <div class="profile-card">
            <h3 class="section-title">Delete Account</h3>
            @include('profile.partials.delete-user-form')
        </div>
    </div>
</div>
@endsection
