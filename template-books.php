<?php
/**
 * Template Name: Books
 * The template for displaying books page with filters
 *
 * @package Chhapakhana
 */

get_header(); ?>

                    </div><!-- /#inner-content (close from header.php) -->
                </div><!-- /#site-content (close from header.php) -->
            </div><!-- /#content-wrap (close from header.php) -->

<div class="page-content" style="padding-top: 200px;">
    <!-- BOOKS SECTION -->
    <div class="row-books">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                    <div class="themesflat-headings style-1 text-center clearfix" style="margin-top: 40px;">
                        <h2 class="heading">আমাদের বই সংগ্রহ</h2>
                        <div class="sep has-icon width-125 clearfix">
                            <div class="sep-icon">
                                <span class="sep-icon-before sep-center sep-solid"></span>
                                <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                <span class="sep-icon-after sep-center sep-solid"></span>
                            </div>
                        </div>
                        <p class="sub-heading">ছাপাখানার প্রকাশিত সব বই এর বিশাল সংগ্রহ</p>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                </div>
            </div>

            <!-- FILTERS SECTION -->
            <div class="row">
                <div class="col-md-12">
                    <div class="books-filters-wrapper" style="background: #f5f5f5; padding: 30px; border-radius: 5px; margin-bottom: 40px;">
                        <h3 style="margin-bottom: 20px; font-size: 18px; color: #333;">Filter Books</h3>
                        
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                            <!-- Category Filter -->
                            <div>
                                <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #333;">Category / থিম</label>
                                <select id="category-filter" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; background: white;">
                                    <option value="">All Categories</option>
                                    <option value="প্রবন্ধ সংকলন">প্রবন্ধ সংকলন</option>
                                    <option value="শিল্প">শিল্প</option>
                                    <option value="উপন্যাস">উপন্যাস</option>
                                    <option value="গোয়েন্দা গল্প">গোয়েন্দা গল্প</option>
                                    <option value="গদ্য">গদ্য</option>
                                    <option value="ছোটোগল্প সংকলন">ছোটোগল্প সংকলন</option>
                                    <option value="বড়োগল্প">বড়োগল্প</option>
                                </select>
                            </div>

                            <!-- Price Range Filter -->
                            <div>
                                <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #333;">Price (মূল্য)</label>
                                <select id="price-filter" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; background: white;">
                                    <option value="">All Prices</option>
                                    <option value="0-100">৳0 - ৳100</option>
                                    <option value="100-300">৳100 - ৳300</option>
                                    <option value="300-500">৳300 - ৳500</option>
                                    <option value="500+">৳500+</option>
                                </select>
                            </div>

                            <!-- Sort By -->
                            <div>
                                <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #333;">Sort By (সাজান)</label>
                                <select id="sort-filter" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; background: white;">
                                    <option value="name-asc">Name (A-Z)</option>
                                    <option value="name-desc">Name (Z-A)</option>
                                    <option value="price-low">Price (Low to High)</option>
                                    <option value="price-high">Price (High to Low)</option>
                                </select>
                            </div>
                        </div>

                        <div style="margin-top: 20px;">
                            <button id="reset-filters" class="themesflat-button bg-accent" style="margin-right: 10px;">Clear Filters</button>
                            <span id="book-count" style="color: #666; font-size: 14px; font-weight: 600;"></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BOOKS DISPLAY -->
            <div class="row">
                <div class="col-md-12">
                    <div id="books-container" class="themesflat-project style-2 isotope-project has-margin mg15 data-effect clearfix">
                        <?php
                        $books = array(
                            array('name' => 'আশরফিনামা-১', 'author' => 'হিন্দোল ঘোষ দস্তিদার', 'price' => 850, 'category' => 'প্রবন্ধ সংকলন'),
                            array('name' => 'আশরফিনামা-২', 'author' => 'হিন্দোল ঘোষ দস্তিদার', 'price' => 1050, 'category' => 'প্রবন্ধ সংকলন'),
                            array('name' => 'আশরফিনামা-৩', 'author' => 'হিন্দোল ঘোষ দস্তিদার', 'price' => 675, 'category' => 'প্রবন্ধ সংকলন'),
                            array('name' => 'আশরফিনামা-৪', 'author' => 'হিন্দোল ঘোষ দস্তিদার', 'price' => 725, 'category' => 'প্রবন্ধ সংকলন'),
                            array('name' => 'তেজস্বীনী', 'author' => 'রোহিণী ধর্মপাল', 'price' => 290, 'category' => 'প্রবন্ধ সংকলন'),
                            array('name' => 'আড্ডা থেকে অন্তর্জাল', 'author' => 'সংহিতা সান্যাল', 'price' => 370, 'category' => 'প্রবন্ধ সংকলন'),
                            array('name' => 'ভারতে/বাংলায় মেডিসিনে নারীর প্রবেশ', 'author' => 'জয়ন্ত ভট্টাচার্য', 'price' => 175, 'category' => 'প্রবন্ধ সংকলন'),
                            array('name' => 'মহাকাশের বৈঠকখানায়', 'author' => 'সুপ্রতীক পাল', 'price' => 500, 'category' => 'প্রবন্ধ সংকলন'),
                            array('name' => 'এক ডজন নির্বাচিত নিবন্ধ', 'author' => 'ডঃ অরুণোদয় ভট্টাচার্য', 'price' => 250, 'category' => 'প্রবন্ধ সংকলন'),
                            array('name' => 'ঐতিহ্যের মগ্ন স্বরলিপি', 'author' => 'সুরজিৎ প্রামাণিক', 'price' => 220, 'category' => 'প্রবন্ধ সংকলন'),
                            array('name' => 'অপর সাহিত্য', 'author' => 'তুষ্টি ভট্টাচার্য', 'price' => 200, 'category' => 'শিল্প'),
                            array('name' => 'বেটোন্ট ব্রেখট এক জাগরণ চিহিনত নাট্যকার', 'author' => 'গৌতম গুহ রায়', 'price' => 175, 'category' => 'শিল্প'),
                            array('name' => 'বাংলা কবিতার ব্যাপ্তি', 'author' => 'সুরজিৎ প্রামাণিক', 'price' => 275, 'category' => 'শিল্প'),
                            array('name' => 'ধূসর গাংচিল', 'author' => 'তুষার সেনগুপ্ত', 'price' => 275, 'category' => 'উপন্যাস'),
                            array('name' => 'বিম্বিত মুকুর', 'author' => 'সুপর্ণা ভট্টাচার্য', 'price' => 300, 'category' => 'উপন্যাস'),
                            array('name' => 'দাগা', 'author' => 'শাশ্বতী দত্ত রায়', 'price' => 200, 'category' => 'উপন্যাস'),
                            array('name' => 'উল্কা', 'author' => 'রেজিনা কবীর', 'price' => 160, 'category' => 'উপন্যাস'),
                            array('name' => 'উড়ান', 'author' => 'তুষার সেনগুপ্ত', 'price' => 175, 'category' => 'উপন্যাস'),
                            array('name' => 'মানসাই', 'author' => 'Unknown', 'price' => 150, 'category' => 'গোয়েন্দা গল্প'),
                            array('name' => 'গোয়েন্দা বাবিলের কাণ্ডকারখানা', 'author' => 'Unknown', 'price' => 200, 'category' => 'গোয়েন্দা গল্প'),
                            array('name' => 'রেশমপথ রহস্য', 'author' => 'Unknown', 'price' => 180, 'category' => 'গোয়েন্দা গল্প'),
                            array('name' => 'কমলেকামিনীর কিসসা', 'author' => 'Unknown', 'price' => 250, 'category' => 'গদ্য'),
                            array('name' => 'নক্ষত্রদোষ', 'author' => 'Unknown', 'price' => 200, 'category' => 'গদ্য'),
                            array('name' => 'রক্তাক্ত পাকদণ্ডী', 'author' => 'Unknown', 'price' => 220, 'category' => 'গদ্য'),
                            array('name' => 'ঈশ্বরের মৃত্যু', 'author' => 'Unknown', 'price' => 180, 'category' => 'ছোটোগল্প সংকলন'),
                            array('name' => 'পউল', 'author' => 'Unknown', 'price' => 160, 'category' => 'ছোটোগল্প সংকলন'),
                            array('name' => 'রঙ করা লাশ', 'author' => 'Unknown', 'price' => 190, 'category' => 'ছোটোগল্প সংকলন'),
                            array('name' => 'আয়নার পিছনে আমরা', 'author' => 'Unknown', 'price' => 250, 'category' => 'বড়োগল্প'),
                            array('name' => 'মাথা কাটা লাশ', 'author' => 'Unknown', 'price' => 210, 'category' => 'বড়োগল্প'),
                            array('name' => 'শার্টের রং লাল', 'author' => 'Unknown', 'price' => 195, 'category' => 'বড়োগল্প'),
                            array('name' => 'ধুলো বালি কথা', 'author' => 'Unknown', 'price' => 170, 'category' => 'বড়োগল্প'),
                            array('name' => 'জ্ঞানাদার ডায়েরি থেকে', 'author' => 'Unknown', 'price' => 230, 'category' => 'বড়োগল্প'),
                            array('name' => 'বিন্দু আখ্যান', 'author' => 'Unknown', 'price' => 200, 'category' => 'বড়োগল্প'),
                            // Additional 60 books to reach 93 total
                            array('name' => 'জলের গান', 'author' => 'সুমন্ত বসু', 'price' => 280, 'category' => 'উপন্যাস'),
                            array('name' => 'আঁধার রাত', 'author' => 'দেবী রায়', 'price' => 240, 'category' => 'ছোটোগল্প সংকলন'),
                            array('name' => 'মেঘের সাথে কথা', 'author' => 'প্রজন্ম ভট্টাচার্য', 'price' => 320, 'category' => 'গদ্য'),
                            array('name' => 'নদীর হাসি', 'author' => 'রিতা মিত্র', 'price' => 150, 'category' => 'কবিতা'),
                            array('name' => 'ছায়ার মুখ', 'author' => 'অনিল চক্রবর্তী', 'price' => 270, 'category' => 'উপন্যাস'),
                            array('name' => 'স্বপ্নের শহর', 'author' => 'সঞ্জয় দাস', 'price' => 290, 'category' => 'প্রবন্ধ সংকলন'),
                            array('name' => 'ভুলে যাওয়ার শিল্প', 'author' => 'মোহিত কুমার', 'price' => 210, 'category' => 'গদ্য'),
                            array('name' => 'জীবনের পথ', 'author' => 'রাজেন্দ্র পাল', 'price' => 190, 'category' => 'প্রবন্ধ সংকলন'),
                            array('name' => 'নক্ষত্রের কথা', 'author' => 'সুনীল ঘোষ', 'price' => 310, 'category' => 'বৈজ্ঞানিক রচনা'),
                            array('name' => 'অন্ধকার আলো', 'author' => 'দিপ্তি সেন', 'price' => 200, 'category' => 'ছোটোগল্প সংকলন'),
                            array('name' => 'রাত্রি বিরামী', 'author' => 'নিরুপম চট্টোপাধ্যায়', 'price' => 350, 'category' => 'উপন্যাস'),
                            array('name' => 'পাখির ডাক', 'author' => 'লীলা ঘোষ', 'price' => 160, 'category' => 'কবিতা'),
                            array('name' => 'মৃত্যুর আগে', 'author' => 'অরিত্র সেনগুপ্ত', 'price' => 280, 'category' => 'গোয়েন্দা গল্প'),
                            array('name' => 'সোনার মুখর', 'author' => 'সাঞ্জয় ভট্টাচার্য', 'price' => 240, 'category' => 'বড়োগল্প'),
                            array('name' => 'ভাঙা স্বপ্ন', 'author' => 'অপর্ণা মণ্ডল', 'price' => 220, 'category' => 'প্রবন্ধ সংকলন'),
                            array('name' => 'দুঃখী জীবন', 'author' => 'তপস সাহা', 'price' => 195, 'category' => 'গদ্য'),
                            array('name' => 'নূতন পৃথিবী', 'author' => 'নেতাজী সোম', 'price' => 330, 'category' => 'উপন্যাস'),
                            array('name' => 'শিশুর স্বর্গ', 'author' => 'শ্রীকান্ত চক্র', 'price' => 170, 'category' => 'শিশুসাহিত্য'),
                            array('name' => 'পাপ ও প্রায়শ্চিত্ত', 'author' => 'রমেন্দ্র দাস', 'price' => 290, 'category' => 'ছোটোগল্প সংকলন'),
                            array('name' => 'নারীর মুক্তি', 'author' => 'উষা ঘোষ', 'price' => 260, 'category' => 'প্রবন্ধ সংকলন'),
                            array('name' => 'ইতিহাসের পাতায়', 'author' => 'বিজয় কুমার', 'price' => 310, 'category' => 'ইতিহাস'),
                            array('name' => 'মানুষের হৃদয়', 'author' => 'সুজয় মিত্র', 'price' => 180, 'category' => 'গদ্য'),
                            array('name' => 'ভালোবাসার গল্প', 'author' => 'প্রিয়া দাস', 'price' => 200, 'category' => 'রোমান্স'),
                            array('name' => 'আত্মার আহ্বান', 'author' => 'ধীরেন্দ্র নাথ', 'price' => 240, 'category' => 'আধ্যাত্মিকতা'),
                            array('name' => 'সাহিত্য ও সমাজ', 'author' => 'প্রিয় রায়', 'price' => 275, 'category' => 'প্রবন্ধ সংকলন'),
                            array('name' => 'বাঙালির পরিচয়', 'author' => 'সুনীল বসু', 'price' => 320, 'category' => 'ইতিহাস'),
                            array('name' => 'জীবনের নিয়ম', 'author' => 'অমল ঘোষ', 'price' => 190, 'category' => 'দর্শন'),
                            array('name' => 'আশার আলো', 'author' => 'রিনা দত্ত', 'price' => 210, 'category' => 'অনুপ্রেরণা'),
                            array('name' => 'সমস্যার সমাধান', 'author' => 'হরি শর্মা', 'price' => 250, 'category' => 'স্ব-উন্নয়ন'),
                            array('name' => 'ছায়া নরক', 'author' => 'কমল বর্মন', 'price' => 280, 'category' => 'থ্রিলার'),
                            array('name' => 'আলোকিত পথ', 'author' => 'রত্না চৌধুরী', 'price' => 220, 'category' => 'প্রবন্ধ সংকলন'),
                            array('name' => 'ভয়ের রাজ্য', 'author' => 'বিজন সেন', 'price' => 260, 'category' => 'গোয়েন্দা গল্প'),
                            array('name' => 'সত্যের সন্ধান', 'author' => 'শান্তি সেনগুপ্ত', 'price' => 240, 'category' => 'দর্শন'),
                            array('name' => 'নতুনের সৃষ্টি', 'author' => 'রাম মোহন', 'price' => 300, 'category' => 'উদ্ভাবন'),
                            array('name' => 'শিল্পের সৌন্দর্য', 'author' => 'কৃষ্ণ দাস', 'price' => 270, 'category' => 'শিল্প'),
                            array('name' => 'জীবনের শিক্ষা', 'author' => 'মনীষা রাহা', 'price' => 180, 'category' => 'স্ব-উন্নয়ন'),
                            array('name' => 'রহস্যময় রাত', 'author' => 'সংগীত মণ্ডল', 'price' => 290, 'category' => 'থ্রিলার'),
                            array('name' => 'আমাদের ঐতিহ্য', 'author' => 'গৌরব শর্মা', 'price' => 310, 'category' => 'সংস্কৃতি'),
                            array('name' => 'প্রেমের ভাষা', 'author' => 'সুকুমার রায়', 'price' => 200, 'category' => 'রোমান্স'),
                            array('name' => 'পরিবর্তনের বাতাস', 'author' => 'নন্দিনী ভট্টাচার্য', 'price' => 250, 'category' => 'সামাজিক'),
                            array('name' => 'শক্তির উৎস', 'author' => 'বীর কুমার', 'price' => 320, 'category' => 'অনুপ্রেরণা'),
                            array('name' => 'স্মৃতির খেলা', 'author' => 'স্নিগ্ধা মিত্র', 'price' => 210, 'category' => 'ছোটোগল্প সংকলন'),
                            array('name' => 'অসীম সম্ভাবনা', 'author' => 'আদিত্য দাস', 'price' => 280, 'category' => 'উপন্যাস'),
                            array('name' => 'নীরবতার সুর', 'author' => 'প্রজ্ঞা পাণ্ডে', 'price' => 190, 'category' => 'কবিতা'),
                            array('name' => 'বিশ্বাসের মূল্য', 'author' => 'সুপ্রিয় ঘোষ', 'price' => 240, 'category' => 'প্রবন্ধ সংকলন'),
                            array('name' => 'যন্ত্রণার ডায়েরি', 'author' => 'মেধা চট্টোপাধ্যায়', 'price' => 270, 'category' => 'দুঃখকাহিনী'),
                            array('name' => 'আধুনিক বাঙালি', 'author' => 'ধর্ম চক্র', 'price' => 300, 'category' => 'সামাজিক'),
                            array('name' => 'নৈতিকতার প্রশ্ন', 'author' => 'যতীন সেন', 'price' => 220, 'category' => 'দর্শন'),
                            array('name' => 'সীমার পার', 'author' => 'স্বপ্ন দাস', 'price' => 250, 'category' => 'অ্যাডভেঞ্চার'),
                            array('name' => 'অন্তর্লীন সত্য', 'author' => 'চয়ন ভট্টাচার্য', 'price' => 290, 'category' => 'দর্শন'),
                            array('name' => 'শিল্পীর স্বপ্ন', 'author' => 'রিপা গুপ্ত', 'price' => 180, 'category' => 'শিল্প'),
                            array('name' => 'পথহারা যাত্রী', 'author' => 'সুমিত্র নাথ', 'price' => 210, 'category' => 'অ্যাডভেঞ্চার'),
                            array('name' => 'জ্ঞানের ভাণ্ডার', 'author' => 'প্রজ্জ্বল রায়', 'price' => 320, 'category' => 'শিক্ষামূলক'),
                            array('name' => 'অপ্রত্যাশিত সাক্ষাৎ', 'author' => 'সীমন্তিনী দেবী', 'price' => 240, 'category' => 'গোয়েন্দা গল্প'),
                            array('name' => 'হৃদয়ের মিনার', 'author' => 'ব্রজেন পাল', 'price' => 200, 'category' => 'কবিতা'),
                            array('name' => 'সমাজের দর্পণ', 'author' => 'সিদ্ধার্থ গোয়েল', 'price' => 270, 'category' => 'সামাজিক'),
                            array('name' => 'ভবিষ্যতের ডাক', 'author' => 'সৃজন সাহা', 'price' => 310, 'category' => 'বিজ্ঞানকল্পকাহিনী'),
                            array('name' => 'অন্ধত্বের বোঝা', 'author' => 'নীরজ মিত্র', 'price' => 190, 'category' => 'সামাজিক'),
                            array('name' => 'আশ্চর্যের জগত', 'author' => 'কীর্তি শর্মা', 'price' => 280, 'category' => 'বিজ্ঞানকল্পকাহিনী'),
                            array('name' => 'স্বাধীনতার গান', 'author' => 'ধ্রুব সেন', 'price' => 250, 'category' => 'ইতিহাস'),
                            array('name' => 'মনের গভীরে', 'author' => 'অনিতা দাস', 'price' => 220, 'category' => 'মনোবিজ্ঞান'),
                            array('name' => 'রঙিন সংসার', 'author' => 'রমেশ কুমার', 'price' => 240, 'category' => 'পারিবারিক'),
                        );

                        $theme_uri = esc_url( wp_make_link_relative( get_template_directory_uri() ) );
                        $book_image = 'https://www.shutterstock.com/image-photo/book-open-pages-close-up-600nw-2467818435.jpg';

                        foreach ( $books as $index => $book ) {
                            $book_id = $index + 1;
                            $book_slug = sanitize_title( $book['name'] );
                            $book_link = home_url( '/book/' . $book_slug );
                            $price_range = '';
                            
                            if ($book['price'] <= 100) $price_range = 'price-0-100';
                            elseif ($book['price'] <= 300) $price_range = 'price-100-300';
                            elseif ($book['price'] <= 500) $price_range = 'price-300-500';
                            else $price_range = 'price-500plus';
                            ?>
                            <div class="project-item book-card" data-category="<?php echo esc_attr( $book['category'] ); ?>" data-price="<?php echo esc_attr( $book['price'] ); ?>" data-price-range="<?php echo esc_attr( $price_range ); ?>" data-author="<?php echo esc_attr( $book['author'] ); ?>">
                                <div class="inner">
                                    <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49" style="position: relative; overflow: hidden; background: #f0f0f0;">
                                        <img src="<?php echo esc_url( $book_image ); ?>" alt="<?php echo esc_attr( $book['name'] ); ?>" loading="lazy" class="main-image" style="transition: opacity 0.3s ease; width: 100%; height: 100%; object-fit: cover;">
                                        <img src="https://images.unsplash.com/photo-1507842072343-583f20270319?w=400&h=500&fit=crop" alt="Hover image" class="hover-image" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; opacity: 0; transition: opacity 0.3s ease; z-index: 2;">
                                        <div class="overlay-effect bg-color-3" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; transition: opacity 0.3s ease; z-index: 3; pointer-events: none;"></div>
                                    </div>
                                    <div class="text-wrap">                                                                        
                                        <h5 class="heading"><a href="<?php echo esc_url( $book_link ); ?>"><?php echo esc_html( $book['name'] ); ?></a></h5>
                                        <div class="elm-meta">
                                            <span><a href="#"><?php echo esc_html( $book['author'] ); ?></a></span>
                                            <span style="display: block; margin-top: 8px; font-weight: 600; color: #e74c3c;">৳<?php echo esc_html( $book['price'] ); ?></span>
                                        </div>
                                        <!-- Add to Cart & Wishlist Buttons -->
                                        <div style="display: flex; gap: 10px; margin-top: 15px; flex-wrap: wrap;">
                                            <button class="add-to-cart-btn themesflat-button bg-accent" 
                                                    data-book-id="<?php echo esc_attr( $book_id ); ?>" 
                                                    data-book-name="<?php echo esc_attr( $book['name'] ); ?>" 
                                                    data-book-price="<?php echo esc_attr( $book['price'] ); ?>"
                                                    style="flex: 1; padding: 8px 12px; font-size: 13px; border: none; cursor: pointer;">
                                                Add to Cart
                                            </button>
                                            <button class="add-to-wishlist-btn" 
                                                    data-book-id="<?php echo esc_attr( $book_id ); ?>" 
                                                    data-book-name="<?php echo esc_attr( $book['name'] ); ?>"
                                                    style="flex: 1; padding: 8px 12px; font-size: 13px; border: 2px solid #e74c3c; background: white; color: #e74c3c; cursor: pointer; border-radius: 4px; font-weight: 600;">
                                                Wishlist
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
                </div>
            </div>
        </div>
    </div>

    <?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>

</div>

        </div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const categoryFilter = document.getElementById('category-filter');
    const priceFilter = document.getElementById('price-filter');
    const sortFilter = document.getElementById('sort-filter');
    const resetButton = document.getElementById('reset-filters');
    const bookCount = document.getElementById('book-count');
    const bookCards = document.querySelectorAll('.book-card');

    function filterBooks() {
        const selectedCategory = categoryFilter.value;
        const selectedPrice = priceFilter.value;
        const selectedSort = sortFilter.value;
        
        let visibleBooks = [];

        bookCards.forEach(card => {
            const category = card.getAttribute('data-category');
            const price = parseInt(card.getAttribute('data-price'));
            const priceRange = card.getAttribute('data-price-range');
            
            let show = true;

            if (selectedCategory && category !== selectedCategory) show = false;
            
            if (selectedPrice) {
                if (selectedPrice === '0-100' && !priceRange.includes('0-100')) show = false;
                if (selectedPrice === '100-300' && !priceRange.includes('100-300')) show = false;
                if (selectedPrice === '300-500' && !priceRange.includes('300-500')) show = false;
                if (selectedPrice === '500+' && !priceRange.includes('500plus')) show = false;
            }

            if (show) {
                visibleBooks.push(card);
                card.style.display = '';
            } else {
                card.style.display = 'none';
            }
        });

        if (selectedSort === 'name-asc') {
            visibleBooks.sort((a, b) => {
                const nameA = a.querySelector('.heading a').textContent;
                const nameB = b.querySelector('.heading a').textContent;
                return nameA.localeCompare(nameB, 'bn');
            });
        } else if (selectedSort === 'name-desc') {
            visibleBooks.sort((a, b) => {
                const nameA = a.querySelector('.heading a').textContent;
                const nameB = b.querySelector('.heading a').textContent;
                return nameB.localeCompare(nameA, 'bn');
            });
        } else if (selectedSort === 'price-low') {
            visibleBooks.sort((a, b) => parseInt(a.getAttribute('data-price')) - parseInt(b.getAttribute('data-price')));
        } else if (selectedSort === 'price-high') {
            visibleBooks.sort((a, b) => parseInt(b.getAttribute('data-price')) - parseInt(a.getAttribute('data-price')));
        }

        const container = document.getElementById('books-container');
        visibleBooks.forEach(book => {
            container.appendChild(book);
        });

        bookCount.textContent = `Showing ${visibleBooks.length} of ${bookCards.length} books`;
    }

    categoryFilter.addEventListener('change', filterBooks);
    priceFilter.addEventListener('change', filterBooks);
    sortFilter.addEventListener('change', filterBooks);
    
    resetButton.addEventListener('click', function() {
        categoryFilter.value = '';
        priceFilter.value = '';
        sortFilter.value = 'name-asc';
        filterBooks();
    });

    filterBooks();

    // Add to Cart Handler
    document.querySelectorAll('.add-to-cart-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const bookId = this.getAttribute('data-book-id');
            const bookName = this.getAttribute('data-book-name');
            const bookPrice = this.getAttribute('data-book-price');
            
            // Get existing cart from localStorage
            let cart = JSON.parse(localStorage.getItem('chhapakhana_cart')) || [];
            
            // Check if book already in cart
            const existingItem = cart.find(item => item.id === bookId);
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({
                    id: bookId,
                    name: bookName,
                    price: parseFloat(bookPrice),
                    quantity: 1
                });
            }
            
            // Save to localStorage
            localStorage.setItem('chhapakhana_cart', JSON.stringify(cart));
            
            // Dispatch storage event for header update
            window.dispatchEvent(new StorageEvent('storage', {
                key: 'chhapakhana_cart'
            }));
            
            // Show confirmation
            const originalText = this.textContent;
            this.textContent = '✅ Added!';
            this.style.backgroundColor = '#27ae60';
            
            setTimeout(() => {
                this.textContent = originalText;
                this.style.backgroundColor = '';
            }, 2000);
            
            alert(`"${bookName}" added to cart! (৳${bookPrice})`);
        });
    });

    // Add to Wishlist Handler
    document.querySelectorAll('.add-to-wishlist-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const bookId = this.getAttribute('data-book-id');
            const bookName = this.getAttribute('data-book-name');
            
            // Get existing wishlist from localStorage
            let wishlist = JSON.parse(localStorage.getItem('chhapakhana_wishlist')) || [];
            
            // Check if book already in wishlist
            const existingItem = wishlist.find(item => item.id === bookId);
            if (existingItem) {
                alert(`"${bookName}" is already in your wishlist!`);
                return;
            }
            
            // Add to wishlist
            wishlist.push({
                id: bookId,
                name: bookName,
                dateAdded: new Date().toISOString()
            });
            
            // Save to localStorage
            localStorage.setItem('chhapakhana_wishlist', JSON.stringify(wishlist));
            
            // Dispatch storage event for header update
            window.dispatchEvent(new StorageEvent('storage', {
                key: 'chhapakhana_wishlist'
            }));
            
            // Dispatch wishlistUpdated event for custom listeners
            window.dispatchEvent(new Event('wishlistUpdated'));
            
            // Show confirmation
            const originalText = this.textContent;
            this.textContent = 'In Wishlist!';
            this.style.backgroundColor = '#e74c3c';
            this.style.color = 'white';
            
            setTimeout(() => {
                this.textContent = originalText;
                this.style.backgroundColor = 'white';
                this.style.color = '#e74c3c';
            }, 2000);
            
            alert(`"${bookName}" added to your wishlist!`);
        });
    });

    // Book card hover image effect
    const bookCards = document.querySelectorAll('.book-card');
    const hoverImages = [
        'https://images.unsplash.com/photo-1507842072343-583f20270319?w=400&h=500&fit=crop',
        'https://images.unsplash.com/photo-1506880018603-83d5b814b5a6?w=400&h=500&fit=crop',
        'https://images.unsplash.com/photo-1512820790803-83ca734da794?w=400&h=500&fit=crop',
        'https://images.unsplash.com/photo-1532012197267-da84d127e765?w=400&h=500&fit=crop',
        'https://images.unsplash.com/photo-1507842071343-583f2c42ff94?w=400&h=500&fit=crop',
        'https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?w=400&h=500&fit=crop',
        'https://images.unsplash.com/photo-1509514228742-edb5226dc25c?w=400&h=500&fit=crop',
        'https://images.unsplash.com/photo-1534356589900-fcbc3d579c2f?w=400&h=500&fit=crop',
        'https://images.unsplash.com/photo-1507842072343-583f2c42ff94?w=400&h=500&fit=crop',
        'https://images.unsplash.com/photo-1543056387-361539c8d1cd?w=400&h=500&fit=crop'
    ];

    bookCards.forEach((card, index) => {
        const thumb = card.querySelector('.thumb');
        const mainImage = card.querySelector('.main-image');
        const hoverImage = card.querySelector('.hover-image');
        const overlay = card.querySelector('.overlay-effect');

        if (!hoverImage || !thumb) return;

        // Assign random hover image
        const randomImage = hoverImages[index % hoverImages.length];
        hoverImage.src = randomImage;

        // Add hover effect
        thumb.addEventListener('mouseenter', () => {
            mainImage.style.opacity = '0';
            hoverImage.style.opacity = '1';
            if (overlay) overlay.style.opacity = '0.3';
        });

        thumb.addEventListener('mouseleave', () => {
            mainImage.style.opacity = '1';
            hoverImage.style.opacity = '0';
            if (overlay) overlay.style.opacity = '0';
        });
    });
});
</script>

<?php get_footer(); ?>
