<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Shop') }}
        </h2>
    </x-slot>
    <?php
    include(app_path('Helpers/getItemForSell.php'));
    ?>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            Message
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="productCarousel" class="carousel">
                    <!-- Product Wrapper -->

                    <?php
                    $categories = searchCategory(0);
                    if (count($categories) > 0) {

                        foreach ($categories as $category) {


                            echo '<div class = "carousel-inner m-2" >';
                            echo ' <div class = "active" >';
                            echo '<div class = "row" >';
                            echo '<h2 class="fw-bold text-primary text-uppercase border-1 mt-2 mb-1 border-bottom border-primary pb-2 mb-4" style="font-size: 2.5rem;">'.$category.'</h2>';

                            $items = searchItemsByCategoryLimited($category, 4);

                            foreach ($items as $item) {
                                echo '    <div class="col-md-3 position-relative">';
                                echo '    <div class="card position-relative">';
                                echo '       <div class="image position-relative">';
                                if ($item->discount_percent != 0) {
                                    echo '        <span class="badge bg-dark  position-absolute badge-primary discount-badge">% off</span>';
                                }
                                echo '            <img src=" ' . $item->image_url . ' " class="card-img-top" style="max-height:230px;height:100%"alt="' . $item->title . '">';
                                echo '            </div>';
                                echo '             <div class="card-body">';
                                echo '        <h5 class="card-title"><strong>' . $item->title . '</strong></h5>';
                                echo '<p class="card-text">Price: ' . $item->price . '</p>';
                                echo '<a href="#" class="btn btn-primary">Buy Now</a>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                        }
                    }
                    ?>


                            </div>
                        </div>

                        <!-- Add more carousel items as needed -->
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
