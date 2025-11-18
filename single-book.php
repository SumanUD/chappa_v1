<?php
/**
 * Template for displaying a single book detail page
 *
 * @package Chhapakhana
 */

get_header(); ?>

                    </div><!-- /#inner-content (close from header.php) -->
                </div><!-- /#site-content (close from header.php) -->
            </div><!-- /#content-wrap (close from header.php) -->

<div class="page-content">
    <!-- BOOK DETAIL SECTION -->
    <div class="row-book-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="book-cover-image">
                        <img src="https://www.shutterstock.com/image-photo/book-open-pages-close-up-600nw-2467818435.jpg" alt="Book Cover" style="width: 100%; height: auto; border-radius: 5px;">
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="20" data-mobile="20" data-smobile="20"></div>
                </div><!-- /.col-md-4 -->

                <div class="col-md-8">
                    <div class="book-detail-content">
                        <h1 class="book-title" style="font-size: 36px; margin-bottom: 15px; line-height: 1.3;">
                            <?php 
                            // Get book name from URL
                            $book_slug = isset( $_GET['book'] ) ? sanitize_text_field( $_GET['book'] ) : '';
                            
                            // Array of books for reference
                            $books = array(
                                'ashrafinama-1' => 'আশরফিনামা-১',
                                'ashrafinama-2' => 'আশরফিনামা-২',
                                'ashrafinama-3' => 'আশরফিনামা-৩',
                                'ashrafinama-4' => 'আশরফিনামা-৪',
                                'tejswini' => 'তেজস্বীনী',
                                'adda-theke-antarjal' => 'আড্ডা থেকে অন্তর্জাল',
                                'bharte-banglay-medicine' => 'ভারতে/বাংলায় মেডিসিনে নারীর প্রবেশ',
                                'mahakasher-baithokhanay' => 'মহাকাশের বৈঠকখানায়',
                                'ek-dozen' => 'এক ডজন নির্বাচিত নিবন্ধ',
                                'aitihasher-magn-swaralipi' => 'ঐতিহ্যের মগ্ন স্বরলিপি',
                                'opar-sahitya' => 'অপর সাহিত্য',
                                'betontt-brekht' => 'বেটোন্ট ব্রেখট',
                                'bangla-kabitar-byapti' => 'বাংলা কবিতার ব্যাপ্তি',
                                'chhabir-janala' => 'ছবির জানালা',
                            );
                            
                            // Display book title
                            $book_title = isset( $books[ $book_slug ] ) ? $books[ $book_slug ] : 'বই বিবরণ';
                            echo esc_html( $book_title );
                            ?>
                        </h1>

                        <div class="book-meta" style="margin-bottom: 30px; color: #666; font-size: 16px;">
                            <p><strong>লেখক:</strong> তথ্য শীঘ্রই আপডেট হবে</p>
                            <p><strong>প্রকাশক:</strong> ছাপাখানা</p>
                            <p><strong>মূল্য:</strong> ৳ TBA</p>
                        </div>

                        <div class="book-description" style="margin-bottom: 30px; line-height: 1.8; color: #555; font-size: 16px;">
                            <h3 style="margin-bottom: 15px; color: #333;">বই সম্পর্কে</h3>
                            <p>এই বইটি ছাপাখানা প্রকাশনা থেকে প্রকাশিত একটি অনন্য সংগ্রহ। বাংলা সাহিত্যের এই কাজটি পাঠকদের মধ্যে একটি বিশেষ স্থান তৈরি করেছে।</p>
                            <p>বিস্তারিত তথ্য এবং বিষয়বস্তু শীঘ্রই যুক্ত করা হবে।</p>
                        </div>

                        <div class="book-actions" style="display: flex; gap: 15px; margin-bottom: 40px;">
                            <button class="themesflat-button bg-accent" onclick="alert('শীঘ্রই যোগ করা হবে')">কার্টে যোগ করুন</button>
                            <button class="themesflat-button bg-white" style="border: 2px solid #333; color: #333;">উইশলিস্টে যোগ করুন</button>
                        </div>

                        <div class="book-related-links">
                            <a href="<?php echo esc_url( home_url( '/books' ) ); ?>" class="themesflat-button bg-accent" style="display: inline-block;">সব বই দেখুন</a>
                        </div>
                    </div>
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
                </div>
            </div>
        </div><!-- /.container -->
    </div>
    <!-- END BOOK DETAIL SECTION -->

    <?php
    // Display page content if any
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>

</div><!-- /.page-content -->

        </div><!-- /#main-content (reopen for footer.php to close) -->

<?php get_footer(); ?>
