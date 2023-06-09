@extends('layouts.layout')

@section('section__content')

   <!-- BEGIN: Content-->
   <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Shell</h2>
                        
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Wishlist Starts -->
            <section id="wishlist" class="grid-view wishlist-items">

                <form action="{{route('posts.python')}}" method="POST">
                    @csrf
                    <textarea name="code" id="" cols="30" rows="10">

                        {{-- a=int(input())
                        b=int(input())
                        c=a+b
                        print(c) --}}

                        @if($pl == 'code')
                            a=int(input())
                            b=int(input())
                            c=a+b
                            print(c)
                        @else
#include <iostream>
                        using namespace std;

                        int main() {
                        cout << "Hello World!";
                        return 0;
                            }
                        @endif
                    </textarea>
                    <select name="pl">
                        <option value="py3">Python 3</option>
                        <option value="cpp">CPP</option>
                    </select>
                    <input type="submit" value="Jo'natish">
                </form>
            </section>
            <!-- Wishlist Ends -->

        </div>
    </div>
</div> 
<!-- END: Content-->

@endsection