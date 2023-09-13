@extends('layouts.school')
@section('title')
নোটিশ বোর্ড
@endsection
@section('content')
{{-- <div class="space pt-5"> --}}
    <div class="container py-5">
        <div class="tinv-wishlist woocommerce tinv-wishlist-clear">
            <div class="tinv-header">
                <h4 class="mb-30 text-center">নোটিশ বোর্ড</h4>
            </div>
                <table class="tinvwl-table-manage-list">
                    <thead>
                        <tr>
                            <th class="product-thumbnail" style="width: 10%">ক্রমিক</th>
                            <th class="product-thumbnail" style="width: 10%">প্রকাশের তারিখ</th>
                            <th class="" style="width: 70%">নোটিশ</th>
                            <th class="product-price" style="width: 10%">ডাউনলোড</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i=0;
                        @endphp
                        @foreach ($notices as $notice)
                        @php
                            $i++;
                        @endphp
                        <tr class="wishlist_item">
                            <td class="product-remove">
                                {{ $i }}
                            </td>
                            <td class="">
                                {{ $notice->notice_date }}
                            </td>
                            <td class="">
                                <a target="__blank" href="{{ asset($notice->notice_file) }}">{{ $notice->notice_title }}</a>
                            </td>
                            <td class="product-remove">
                                <a target="__blank" href="{{ asset($notice->notice_file) }}" style="font-size: 24px;"><i class="fa-solid fa-file-pdf"></i></a>
                            </td>
                            
                        </tr>
                        @endforeach
                        
                        
                    </tbody>
                </table>

            <div class="social-buttons">
                {{ $notices->links() }}
            </div>

        </div>
    </div>
{{-- </div> --}}
@endsection